<?php

$pageTitle = "Metronic \"Asentus\" Frontend Freebie";

require_once("../template/headerAbout.php");

$openPage = "about.php";
if (isset($_GET['openPage'])) $openPage = $_GET['openPage'];
if (isset($_POST['openPage'])) $openPage = $_POST['openPage'];

require_once($openPage);

require_once("../template/features.php");
require_once("../template/abouts.php");
require_once("../template/service.php");
require_once("../template/testimonialsAb.php");
require_once("../template/team.php");


require_once("../template/footer.php");