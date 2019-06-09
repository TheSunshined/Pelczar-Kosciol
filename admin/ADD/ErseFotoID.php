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
	$id = trim($_POST['id']);
	
	if (!get_magic_quotes_gpc())
		  {
		
			$id = addslashes($id);
		  }
include('../../db.php');
	
		  $sql = "DELETE FROM foto WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<h1>FOTO usunięte po ID</h1><br><h3>za 5s wrócisz na stronę główną</h3>";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
</body>
</html>