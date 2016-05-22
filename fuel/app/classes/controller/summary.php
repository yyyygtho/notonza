<?php

class Controller_Summary extends Controller{

    protected $items = [
        'balance',
        'target',
        'year_to',
        'month_to'
    ];

    public function action_index(){

        $input_items = Input::post();
        if(!$input_items) Response::redirect('target');

        $presenter = Presenter::forge('summary');

        foreach ($this->items as $item){

            $$item = Arr::get($input_items, $item);
            $presenter->set($item, $$item);
        }

        return $presenter;
    }

}