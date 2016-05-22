<?php

/**
 * Created by PhpStorm.
 * User: gachakra
 * Date: 5/14/16
 * Time: 22:30
 */
class Presenter_Base extends Presenter{

    protected function generate_option_tags($from, $to, $default = null){

        $tags = '';

        for($i = $from; $i <= $to; $i++){

            $selected = $i === (int)$default ? 'selected' : null;
            $tags .= $this->generate_tag($i, 'option', 'value', $selected);
        }

        return $tags;
    }

    protected function generate_tag($var, $tag, $attr = null, $selected = null){

        $attr = $attr ? ' ' . $attr . '=' . $var : '';
        $selected = $selected ? ' ' . $selected : '';

        return '<' . $tag . $attr . $selected . '>' . $var .  '</' . $tag . '>';
    }
}