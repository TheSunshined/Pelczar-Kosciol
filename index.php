<!doctype html>
<html lang="pl"><head>
<script src="jquery.min.js"></script>
<meta charset="utf-8">
	
<title>Parafia pw. św. Józefa Sebastiana Pelczara w Strzyżowie</title>
<meta name="author" content="Łukasz Kiebała / TheSunshine">
<meta name="description" content="Parafia pw. św. Józefa Sebastiana Pelczara w Strzyżowie. Zawale Jana Pawła 2">
<meta name="keywords" content="strzyżów, parafia Strzyżów, Strzyżów pelczara, parafia pelczara, parafia Strzyżów pelczara, mały kościół, mała parafia, mały kościół Strzyżów, mała parafia Strzyżów, kościół pelczara,  kościół pelczara Strzyżów, kościół Strzyżów pelczara, Julian Jarząb, Julian Jarząb Strzyżów pelczara, Julian Jarząb pelczara, strzyzow, Strzyżów, zawale, ulica Jana Pawła II, Jana Pawła 2">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">



<meta name="viewport" content="width=device-width, initial-scale=1">

<!--  Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118306762-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118306762-1');
</script>

<!-- KONIEC -->
<link rel="stylesheet" href="css/sunshinestyle.css">
    <style>html, body {height: 100%;} #fixedfoot {min-height: 100%;}</style>
<script>
//Ładowanie menu + footer
	
$(document).ready(function(){
	$(function(){
      $("#Navbar").load("html/Navbar.html"); 
    });
});
$(document).ready(function(){
	$(function(){
      $("#Footer").load("html/Footer.html"); 
    });
});
$(document).ready(function(){
	$(function(){
      $("#prawypanel").load("body/aktualnosciprawy.php"); 
    });
});
$(document).ready(function(){
	$(function(){
      $("#content").load("body/aktualnosci.php"); 
    });
});
</script>
<script>
    function nocny () {
        root.style.setProperty('--Wazne2', '#9a9a9a');
    }
    </script>
</head>
<body style="margin: auto;">
<div id="Navbar"></div> <!-- Navbar -->
<div id="fixedfoot">
    <div class="col-8" id="content" style="display: block;float:left;"></div> <!-- Tresc -->
    <div class="col-4" id="prawypanel" style="display: block;float: right"></div> <!-- Prawy Panel (kafelki)-->
</div>
</body>
<div id="Footer"></div> <!-- Footer -->
</html>
