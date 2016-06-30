<?php

class Competition
{
    private $startDate;
    private $endDate;
    private $teamName;

    public function __construct($teamName, $startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->teamName = $teamName;
    }
}

class Season
{
    private $startDate;
    private $endDate;
    private $sportName;

    public function __construct($sportName, $startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->sportName = $sportName;
    }
}
//
class DateRange
{
    private $startDate;
    private $endDate;

    public function __construct($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
}

class RefactoredCompetition
{
    private $range;
    private $teamName;

    public function __construct($teamName, DateRange $range)
    {
        $this->teamName = $teamName;
        $this->range = $range;
    }
}

class RefactoredSeason
{
    private $range;
    private $sportName;

    public function __construct($sportName, DateRange $range)
    {
        $this->sportName = $sportName;
        $this->range = $range;
    }
}
