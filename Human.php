<?php


class Human

{
    private $name;
    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }



    public function setAge($age) {
        try {
            if ($age < 18) {
                throw new Exception("Not old enough.");
            }
            $this->age = $age;
        }
        catch (Exception $e) {

            echo $e->getMessage();
        }
    }

    public function getAge()
    {
        return $this->age;
    }


}

$john = new Human('John Doe');
$john->setAge(30);

$john->age = 8; // age cannot be set manually, the user has to use the setAge method to set age.
                // setAge method defines the behaviour for the age method.
                // This is Encapsulation.



var_dump($john->getAge());
