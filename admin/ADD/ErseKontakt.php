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
	$ID = trim($_POST['ID']);
	
	if (!get_magic_quotes_gpc())
		  {
		
			$ID = addslashes($ID);
		  }
include('../../db.php');
	
		  $sql = "DELETE FROM kontakt WHERE ID='$ID'";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Kontakt usunięty</h1><br><h3>za 5s wrócisz na stronę główną</h3>";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
</body>
</html>