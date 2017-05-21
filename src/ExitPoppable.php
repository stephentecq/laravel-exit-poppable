<?php
/**
 * Created by PhpStorm.
 * User: stephenmunabo
 * Date: 5/19/17
 * Time: 12:29 PM
 */

namespace smunabo\exitPoppable;


class ExitPoppable
{
    public function make($heading, $message, $active){

        return $data = array(
            'header' => $heading,
            'body' => $message,
            'active' => 1,
        );
    }
}