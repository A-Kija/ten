<?php

class Passenger
{
    const TYPES = [
        'Goblin' => 5,
        'Gnom' => 1,
        'Elf' => 3,
        'Katunskyte' => 21
    ];

    private $type;

    public function __construct()
    {
        
        $this->type = array_rand(self::TYPES);

    }

    public function getAss()
    {
        return self::TYPES[$this->type];
    }




}