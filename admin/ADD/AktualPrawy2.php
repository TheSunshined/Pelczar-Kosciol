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
<title>ADD</title>
</head>
<body>
<?php       
		  $idposta = trim($_POST['idposta']);
		  $title = trim($_POST['title']);
		  $opis = trim($_POST['opis']);
		  if (!$title)
		  {
			echo 'Brak wszystkich danych, wróć do poprzedniej strony i spóbuj ponownie!';
			exit;
		  }
		  if (!get_magic_quotes_gpc())
		  {
		
			$idposta = addslashes($idposta);
			$title = addslashes($title);
			$opis = addslashes($opis);
		  }
    echo 'Post o ID: '.$idposta.', został zaktualizowany o następujące dane<br>'.
 'Nowy tytuł: '.$title.'<br>'.
 'Nowy Opis: '.$opis;
include('../../db.php');
		  $zapytanie = "UPDATE prawy SET Title='$title', Opis='$opis' WHERE id=$idposta";
		  $wynik = $conn->query($zapytanie);
		  if ($wynik) echo '<h1>Aktualność dodana</h1><br><h3>za 5s wrócisz na stronę główną</h3>'
		?>
</body>
</html>