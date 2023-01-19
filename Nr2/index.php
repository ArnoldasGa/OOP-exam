<?php

use App\Nr2\CinemaTicket;
use App\Nr2\OrderProcessor;
use App\Nr2\NewCustomerPriceCalculator;
use App\Nr2\StandardPriceCalculator;
use App\Nr2\SubscriberPriceCalculator;

include_once "vendor/autoload.php";

$cinemaTicket1 = new CinemaTicket("Panda", '13D', new \DateTime('2023-01-25 15:30'), 10);
$cinemaTicket2 = new CinemaTicket("Dog", '18A', new \DateTime('2023-01-26 15:00'), 14);
$cinemaTicket3 = new CinemaTicket("Hot Dogs", '1B', new \DateTime('2023-01-25 20:30'), 8);

$newCustomer = new NewCustomerPriceCalculator();
$standardCustomer = new StandardPriceCalculator();
$subscriberCustomer = new SubscriberPriceCalculator();

$order1 = new OrderProcessor($newCustomer);
$order2 = new OrderProcessor($standardCustomer);
$order3 = new OrderProcessor($subscriberCustomer);

$order1->addItem($cinemaTicket1);
$order1->addItem($cinemaTicket2);
$order1->addItem($cinemaTicket3);

$order2->addItem($cinemaTicket1);
$order2->addItem($cinemaTicket2);
$order2->addItem($cinemaTicket3);

$order3->addItem($cinemaTicket1);
$order3->addItem($cinemaTicket2);
$order3->addItem($cinemaTicket3);

echo $order1->calculatePrice() . PHP_EOL;
echo $order2->calculatePrice() . PHP_EOL;
echo $order3->calculatePrice() . PHP_EOL;



