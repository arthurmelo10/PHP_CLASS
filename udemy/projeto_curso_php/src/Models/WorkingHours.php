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

        $this->id ? $this->update() : $this->insert();
    }

    private function getNextAppointment()
    {
        if(!$this->time1) return 'time1';
        if(!$this->time2) return 'time2';
        if(!$this->time3) return 'time3';
        if(!$this->time4) return 'time4';

        return null;
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