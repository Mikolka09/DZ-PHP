<?php


function buildFeatureItem(){

    $class = "col-sm-4 sm-margin-b-50";
    $speed = "data-wow-duration=\".3\" data-wow-delay=\".3s\"";
    $name = "Art Of Coding";
    $text = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor";

    include (__DIR__ . "/../template/widgets/featureItem.php");

    $class = "col-sm-4 sm-margin-b-50";
    $speed = "data-wow-duration=\".3\" data-wow-delay=\".2s\"";
    $name = "Clean Design";
    $text = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor";

    include (__DIR__ . "/../template/widgets/featureItem.php");

    $class = "col-sm-4";
    $speed = "data-wow-duration=\".3\" data-wow-delay=\".1s\"";
    $name = "Amazing Support";
    $text = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna ut consequat siad esqudiat dolor";

    include (__DIR__ . "/../template/widgets/featureItem.php");

}


