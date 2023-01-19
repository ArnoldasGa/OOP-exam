<?php
namespace App\Nr2;

class NewCustomerPriceCalculator implements TotalCalculatorInterface
{
    private int $totalPrice = 0;
    public function calculatePrice(array $tickets) : float
    {
        $i = 0;
        foreach ($tickets as $ticket) 
        {
            if($i == 0)
            {
                $this->totalPrice = $this->totalPrice + $ticket->getPrice() * 0.8;
            }else {
                $this->totalPrice += $ticket->getPrice();
            }
            $i++;
        }
        return $this->totalPrice;
    }
}