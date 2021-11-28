<?php

$pageTitle = "Metronic \"Asentus\" Frontend Freebie";

require_once("../template/header.php");
require_once("../template/slider.php");
require_once("../template/service.php");
require_once("../template/products.php");
require_once("../template/clients.php");
require_once("../template/testimonials.php");

$openPage = "index.php";
if (isset($_GET['openPage'])) $openPage = $_GET['openPage'];
if (isset($_POST['openPage'])) $openPage = $_POST['openPage'];

require_once($openPage);

require_once("../template/footer.php");