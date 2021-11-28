<?php


function buildProductItem(){

    $img = "../design/img/970x647/01.jpg";
    $url = "#";
    $name = "Triangle Roof";
    $category = "Management";
    $text = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor";

    include (__DIR__ . "/../template/widgets/productItem.php");

    $img = "../design/img/970x647/02.jpg";
    $url = "#";
    $name = "Curved Corners";
    $category = "Developmeny";
    $text = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor";

    include (__DIR__ . "/../template/widgets/productItem.php");

    $img = "../design/img/970x647/03.jpg";
    $url = "#";
    $name = "Bird On Green";
    $category = "Design";
    $text = "Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor";

    include (__DIR__ . "/../template/widgets/productItem.php");


}


