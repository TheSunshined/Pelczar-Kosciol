<?php 
echo '<div style="display:none;">';
include('../../checkuser.php'); 
echo '</div>';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="5;URL='http://strzyzowpelczara.pl/admin.php'">
<title>Untitled Document</title>
</head>
<body>
<?php
    
    if ( ($_COOKIE["pass"]) == "ciastko")
    {
		  $title = trim($_POST['title']);
		  $opis = trim($_POST['opis']);
		  if (!$title)
		  {
			echo 'Brak wszystkich danych, wróć do poprzedniej strony i spóbuj ponownie!';
			exit;
		  }
		  if (!get_magic_quotes_gpc())
		  {
		
			$title = addslashes($title);
			$opis = addslashes($opis);
			 $data = date("Y-m-d");
		  }
include('../../db.php');
    
		  $zapytanie = "insert into aktualnosci values ('".$title."','".$opis."' , '".$data."' , '".$id."')";
		  $wynik = $conn->query($zapytanie);
		  if ($wynik) echo '<h1>Aktualność dodana</h1><br><h3>za 5s wrócisz na stronę główną</h3>';
    }
    else
    echo 'Sesia wygasła, zaloguj się ponownie';
		?>
</body>
</html>