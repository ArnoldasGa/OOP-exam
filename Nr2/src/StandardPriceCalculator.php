<?php

namespace App\Nr2;

class StandardPriceCalculator implements TotalCalculatorInterface
{
    private float $totalPrice = 0;
    public function calculatePrice(array $tickets)
    {
        foreach ($tickets as $ticket)
        {
            $this->totalPrice += $ticket->getPrice();
        }
        return $this->totalPrice;
    }
}