<?php


class TimeTravel
{

    private $start;

    private $end;

    /**
     * TimeTravel constructor.
     * @param $start
     * @param $end
     */
    public function __construct(DateTime $start, DateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }


    public function getTravelInfo(){

        $interval = $this->start->diff($this->end);
        return $interval->format ( "Il y a %y années, %m mois, %d jours, %h heures, %i minutes et %s secondes entre les deux dates");
    }


    public function findDate($sec){
        $newTimestamp = $this->start->getTimestamp() - $sec;
        return date('Y-m-d', $newTimestamp);
    }

    public function backToFutureStepByStep(DatePeriod $step) : array {

        $result = [];

        foreach ($step as $date){
            $result[] = $date->format('M−D−Y h:m:s');
        }
return $result;
    }


}
