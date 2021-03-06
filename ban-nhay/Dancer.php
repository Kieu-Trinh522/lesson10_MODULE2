<?php


class Dancer
{
    public $name;
    public $gender;

    /**
     * Dancer constructor.
     * @param $name
     * @param $gender
     */
    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}