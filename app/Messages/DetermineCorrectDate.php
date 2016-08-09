<?php

namespace App\Messages;

use Carbon\Carbon;

class DetermineCorrectDate
{
    private $randomizerDirections = [
        'add',
        'sub',
    ];

    public function fromDate(Carbon $date)
    {
        $this->date = $date;

        return $this;
    }


    public function withInterval($interval)
    {
        $this->interval = explode('_', $interval);

        return $this;
    }


    public function getScheduledDate()
    {
        call_user_func([$this->date, 'add' . $this->interval[0]], $this->interval[1]);

        $this->makeDateLooser();

        return $this->date;
    }


    private function makeDateLooser()
    {
        if ($this->interval[0] == 'Months') {
            $this->randomizeAdditionalWeeks();
        }

        $this->randomizeAdditionalDays();
    }

    private function randomizeAdditionalDays()
    {
        $direction = $this->randomizerDirections[rand(0,1)];

        call_user_func([$this->date, $direction . 'Days'], rand(1,2));
    }

    private function randomizeAdditionalWeeks()
    {
        $direction = $this->randomizerDirections[rand(0,1)];

        $maxLimit = (int) $this->interval[1] > 1 ? 3 : 1;

        $randomCount = rand(1,$maxLimit);

        call_user_func([$this->date, $direction . 'Weeks'], 1);
    }
}