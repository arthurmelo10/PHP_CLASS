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
}