<?php

class Controller_Target extends Controller{

    public function action_index(){

        return Presenter::forge('target/input');
    }
}