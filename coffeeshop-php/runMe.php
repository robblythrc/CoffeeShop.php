<?php
/**
 * Created by IntelliJ IDEA.
 * User: blythr
 * Date: 16/05/2017
 * Time: 09:03
 */

require_once dirname(__FILE__).DIRECTORY_SEPARATOR."CoffeeShop.php";

$coffeeShop = new \CoffeeShop();

$coffeeShop->serve_customer();