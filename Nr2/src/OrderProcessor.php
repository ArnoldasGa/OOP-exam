<?php

namespace App\Nr2;

class OrderProcessor
{
    protected array $tickets;
    private TotalCalculatorInterface $calculator;

    public function __construct(TotalCalculatorInterface $calculator)
    {
        $this->calculator = $calculator;
    }

    public function addItem(CinemaTicket $ticket) : void
    {
        $this->tickets[] = $ticket;
    }

    public function getList() : array
    {
        return $this->tickets;
    }

    public function calculatePrice() : float
    {
        return $this->calculator->calculatePrice(self::getList());
    }
}