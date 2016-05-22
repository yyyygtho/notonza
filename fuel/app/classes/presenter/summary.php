<?php

/**
 * Created by PhpStorm.
 * User: gachakra
 * Date: 4/2/16
 * Time: 21:38
 */
class Presenter_Summary extends Presenter_Base{

    public function view(){

        $this->diff_to_target = $this->figure_diff_to_target();
        $this->months_to_deadline = $this->figure_months_to_deadline();

        $this->average_to_save = ceil($this->diff_to_target / $this->months_to_deadline);
    }

    private function figure_diff_to_target(){

        return $this->target - $this->balance;
    }

    private function figure_months_to_deadline(){

        $date = new DateTime();
        $year_from = $date->format('Y');
        $month_from = $date->format('n');

        return (($this->year_to - $year_from) * 12 + $this->month_to) - $month_from;
    }

}