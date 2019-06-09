<!doctype html>
<html>
<head>
<script src="jquery.min.js"></script>
<meta charset="utf-8">
<title>Strzyżów / Parafia Pelczara</title>
<meta name="author" content="SunshineDude">
<meta name="description" content="Oficjalna strona Parafi św. Pelczara w strzyżowie">
<meta property="og:site_name" content="StrzyzowPelczar.pl">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, target-densityDpi=device-dpi"/>

<meta name="Robots" content="none" >
<link rel="stylesheet" href="css/sunshinestyle.css">
<link rel="stylesheet" href="css/adminek.css">

</head>

<style>
	
header {background-color: white;}
	.NavButton {color: darkorange;}
</style>
<body style="margin: auto;background-color: whitesmoke;">
<?php include("checkuser.php"); ?>
<div id="Navbar"><?php include("admin/html/Navbar.html"); ?></div> <!-- Navbar -->
<div id="fixedfoot">
<div class="col-8" id="content" style="display: inline-block;"><?php include("admin/body/aktualnosci.php"); ?></div> <!-- Tresc -->
<div class="col-4" id="prawypanel" style="display: inline-block;float: right"><?php include("admin/body/aktualnosciprawy.php"); ?></div> <!-- Prawy Panel (kafelki)-->
</div>

<div id="Footer"><?php include("admin/html/Footer.html"); ?></div> <!-- Footer -->

</body>
</html>
