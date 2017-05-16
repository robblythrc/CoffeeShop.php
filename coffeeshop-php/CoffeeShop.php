<?php

class CoffeeShop
{

    private $keyboard;

    function __construct()
    {
        $this->keyboard = fopen("php://stdin","r");
    }

    function serve_customer()
    {
        print("Welcome to the coffee shop. Let me take your order. ");
        $with_milk = $this->ask_if_with_milk();
        $number_of_sugars = $this->ask_how_many_sugars();

        print("");
        print("Thanks, I'll make that for you now. ");
        $this->make_coffee($with_milk, $number_of_sugars);

        print("");
        $this->take_payment(2.20, $number_of_sugars);

        print("");
        print("Here you go. ");
        $this->describe_coffee($with_milk, $number_of_sugars);
    }

    function ask_if_with_milk()
    {
        print("Do you want milk? ");
        $with_milk = fgets($this->keyboard,80);

        if (strcasecmp($with_milk, "yes") == 0) {
            return true;
        } else {
            return false;
        }
    }

    function ask_how_many_sugars()
    {
        print ("How many sugars? ");
        $sugars = fgets($this->keyboard,80);

        return $sugars;
    }

    function make_coffee($with_milk, $number_of_sugars)
    {
        print("  click click ");
        print("  chug chug chug ");
        print("  grrrrrrrk ");
        print("  gurgle ");
        print("  blop blop ");

    }

    function take_payment($price_of_coffee, $number_of_sugars)
    {
        $sugar_tax = $number_of_sugars * 0.1;
        $total_price = $price_of_coffee + $sugar_tax;
        $formatted_price = number_format((float)$total_price, 2, '.', '');

        print("That will cost £" . $formatted_price . " please. ");
        print("Please beep your card. ");

        $beep = fgets($this->keyboard,80);

        print("Thanks. ");
        print("  chrrrt chrrrt ");
        print("  rrrip ");
        print("Here is your receipt for " . $formatted_price . ". ");

    }

    function describe_coffee($with_milk, $number_of_sugars)
    {
        if ($with_milk) {
            $milk_text = " with milk ";
        } else {
            $milk_text = " without milk ";
        }


        print("A delicious coffee" . $milk_text . " and with " . $number_of_sugars . " sugars. ");
    }
}