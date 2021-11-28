<?php

function buildPricingItem(){

    $class = "col-sm-4 sm-margin-b-2";
    $icon = "pricing-icon icon-chemistry";
    $name = "Starter Kit ";
    $price = " 49";
    $text1 = "Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor";
    $text2 = "Basic Features";
    $text3 = "Up to 5 products";
    $text4 = "50 Users Panels";

    include (__DIR__ . "/../template/widgets/pricingItem.php");

    $class = "col-sm-4 sm-margin-b-2";
    $icon = "pricing-icon icon-badge";
    $name = "Professional ";
    $price = " 149";
    $text1 = "Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor";
    $text2 = "Basic Features";
    $text3 = "Up to 100 products";
    $text4 = "100 Users Panels";

    include (__DIR__ . "/../template/widgets/pricingItem.php");

    $class = "col-sm-4";
    $icon = "pricing-icon icon-shield";
    $name = "Advanced ";
    $price = " 249";
    $text1 = "Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor";
    $text2 = "Extended Features";
    $text3 = "Up to 100 products";
    $text4 = "100 Users Panels";

    include (__DIR__ . "/../template/widgets/pricingItem.php");



}



