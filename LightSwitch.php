<?php
/**
 * Created by PhpStorm.
 * User: Saleem
 * Date: 19/10/2018
 * Time: 22:43
 */

class LightSwitch


{
    public function on()
    {

    }

    public function off()
    {

    }

    private function connect()
    {

    }

    private function activate()
    {

    }



}

$switch = new LightSwitch();
$switch->connect();
// Encapsulation
// connect and activate methods cannot be accessed by the public, since these methods are private.
// restrict and hide information since the people using this class do not need to know about these methods.


