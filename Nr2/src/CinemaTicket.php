<?php

namespace App\Nr2;
use DateTime;
class CinemaTicket
{
    protected string $movieName;
    protected string $place;
    protected DateTime $airingTime;
    private float $price;

    public function __construct(string $movieName, string $place, Datetime $airingTime, float $price)
    {
        $this->movieName = $movieName;
        $this->place = $place;
        $this->airingTime = $airingTime;
        $this->price = $price;
    }

    public function getPrice() 
    {
        return $this->price;
    }
}