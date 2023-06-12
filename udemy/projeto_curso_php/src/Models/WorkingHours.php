<?php

class WorkingHours extends Model
{
    protected static string $tableName = 'working_hours';
    
    protected static array $columns = [
        'user_id',
        'work_date',
        'time1',
        'time2',
        'time3',
        'time4',
        'worked_time',
    ];

    public static function loadFromUserAndDate($userId, $workDate)
    {
        $registry = self::getOne(['user_id' => $userId, 'work_date' => $workDate]);

        if (!$registry) {
            $registry = new WorkingHours([
                'user_id' => $userId,
                'work_date' => $workDate,
                'worked_time' => 0,
            ]);
        }

        return $registry;
    }

    public function makeAppointment(string $time) 
    {        
        $timeColumn = $this->getNextAppointment();
        
        if (!$timeColumn) {
            throw new AppException("Você já fez todas as marcações");
        }
        
        $this->$timeColumn = $time;

        $this->worked_time = getSecondsFromDateInterval($this->getWorkedInterval());

        $this->id ? $this->update() : $this->insert();
    }

    public function getWorkedInterval(): DateInterval
    {
        [$t1, $t2, $t3, $t4] = $this->getTimes();

        $morning = new DateInterval('PT0S'); // parte da manhã
        $afternoon = new DateInterval('PT0S'); // parte da tarde

        if ($t1) $morning = $t1->diff(new DateTime()); // pegar a diferença entre o primeiro batimento e o horário atual
        if ($t2) $morning = $t1->diff($t2);// pegar a diferença entre o primeiro e o segundo batimento
        if ($t3) $afternoon = $t3->diff(new DateTime()); // pegar a diferença entre o primeiro batimento e o horário atual
        if ($t4) $afternoon = $t3->diff($t4);// pegar a diferença entre o primeiro e o segundo batimento

        return sumIntervals($morning, $afternoon);// somar os dois intervalos 

    }

    public function getLunchTime(): DateInterval
    {
        [, $t2, $t3,] = $this->getTimes();

        $lunchTime = new DateInterval('PT0S');

        if ($t2) $lunchTime = $t2->diff(new DateTime()); // pegar a diferença entre o a saída para o almoço e o horário atual
        if ($t3) $lunchTime = $t2->diff($t3); // retorno do tempo de almoço de forma precisa

        return $lunchTime;
    }

    public function getExitTime(): mixed
    {
        [$t1,,, $t4] = $this->getTimes();

        /**
         * Periodo de trabalho de um colaborador
         */
        $workDay = DateInterval::createFromDateString('8 hours');
        /**
         * Periodo de almoço de um colaborador
         */
        $defaultLunchTime = DateInterval::createFromDateString('1 hour');

        if (!$t1) {

            return (new DateTime())->add($workDay)->add($defaultLunchTime);

        } elseif ($t4) {
            return $t4;

        } else {
            $lunchTime = $this->getLunchTime();
            $total = sumIntervals($workDay,($lunchTime->format('%H:%I:%S') === "00:00:00" ? $defaultLunchTime : $lunchTime));
            return $t1->add($total);
        }
    }

    public function getActiveClock(): ?string
    {
        $nextTime = $this->getNextAppointment();

        if ($nextTime === 'time1' || $nextTime === 'time3') {
            return 'exitTime';
        }

        if ($nextTime === 'time2' || $nextTime === 'time4') {
            return 'workedInterval';
        }

        return null;
    }

    public static function getMonthlyReport($userId, $date): array
    {
        $registries = [];

        $startDate = getFirstDayOfMonth($date)->format('Y-m-d');
        $endDate = getLastDayOfMonth($date)->format('Y-m-d');

        $result = static::getResultSetFromSelect(
            [
                'user_id' => $userId,
                'raw' => "work_date between '$startDate' AND '$endDate'",
            ]
        );


        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $registries[$row['work_date']] = new WorkingHours($row);
            }
        }

        return $registries;


    }

    private function getNextAppointment()
    {
        if(!$this->time1) return 'time1';
        if(!$this->time2) return 'time2';
        if(!$this->time3) return 'time3';
        if(!$this->time4) return 'time4';

        return null;
    }

    private function getTimes()
    {
        $times = [];

        $this->time1
        ? array_push($times, getDateFromString($this->time1))
        : array_push($times, null);
        $this->time2
        ? array_push($times, getDateFromString($this->time2)) 
        : array_push($times, null);
        $this->time3
        ? array_push($times, getDateFromString($this->time3))
        : array_push($times, null);
        $this->time4
        ? array_push($times, getDateFromString($this->time4))
        : array_push($times, null);

        return $times;
    }
}