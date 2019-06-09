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
        //https://drive.google.com/file/d/1AU7G9LdIuU9vH8TknKDUBoJ6vP8mnfT9/view?usp=sharing
         // $rest = substr($opis,32);
         // $rest2 = substr($rest, 0, -17);
         // $opis = 'http://drive.google.com/uc?export=download&id='.$rest2;

        $rest = substr($opis, 0, 25);
        $rest2 = substr($opis, 29, 300);
       
        $opis = $rest.'embeddedfolderview'.$rest2.'#grid';
            
include('../../db.php');
		  $zapytanie = "insert into foto values ('".$title."','".$opis."' , '".$data."' , '".$id."')";
		  $wynik = $conn->query($zapytanie);
		  if ($wynik) echo '<h1>Foto dodane</h1><br><h3>za 5s wrócisz na stronę główną</h3>'
		?>
</body>
</html>