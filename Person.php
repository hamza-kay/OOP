<?php
/**
 * Created by PhpStorm.
 * User: Saleem
 * Date: 19/10/2018
 * Time: 22:06
 */

class Person

{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {

        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }


}

$john = new Person('John Doe');
$john->setAge(30);



var_dump($john->getAge());
