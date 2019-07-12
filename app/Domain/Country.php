<?php

namespace App\Domain;

class Country
{

    public $Name;
    public $Description;
    public $Flag;
    public $Alpha3Code;

    public function __construct($Name, $Description, $Flag, $Alpha3Code)
    {
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Flag = $Flag;
        $this->Alpha3Code = $Alpha3Code;

    }
    public static function returnCountry($item)
    {
        return new Country($item['Name'], $item['NativeName'], $item['FlagPng'], $item['Alpha3Code']);
    }
}
