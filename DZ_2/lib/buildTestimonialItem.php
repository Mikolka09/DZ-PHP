<?php


function buildTestimonialItem(){

    $text1 = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad minim enum esqudiat dolore.";
    $text2 = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua.";
    $name = "Joh Milner";

    include (__DIR__ . "/../template/widgets/testimonialItem.php");

    $text1 = "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $text2 = "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
    $name = "Alex Clarson";

    include (__DIR__ . "/../template/widgets/testimonialItem.php");


}


