<?php

class Controller_Balance extends Controller{

    public function action_index(){
        
        $items = Input::post();
        if (!$items) Response::redirect('target');

        $target = Arr::get($items, 'target');
        $year_to = Arr::get($items, 'year_to');
        $month_to = Arr::get($items, 'month_to');

        $presenter = Presenter::forge('balance/input');
        $presenter->set('target', $target);
        $presenter->set('year_to', $year_to);
        $presenter->set('month_to', $month_to);

        return $presenter;
    }
}