<?php

class Presenter_Target_Input extends Presenter_Base{

    const YEARS_LATER = 10;
    
    public function view(){
        
        $date = new DateTime();
        $y = $date->format('Y');
        $m = $date->format('n');

        $this->set_safe('years', $this->generate_option_tags($y, $y + self::YEARS_LATER));
        $this->set_safe('months', $this->generate_option_tags(1, 12, $m + 1));
    }
}

