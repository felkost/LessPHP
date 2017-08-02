<?php
namespace MyProject;


class User
{
    public $name, $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function getInfo()
    {
        echo "Имя: $this->name ; Возраст: $this->age <br>";
    }

    function getAge()
    {
       return $this->age;
    }
}
?>