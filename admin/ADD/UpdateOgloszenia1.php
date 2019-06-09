<?php 
echo '<div style="display:none;">';
include('../../checkuser.php'); 
echo '</div>';
?>
<script src="../../ckeditor/ckeditor.js"></script> 
<html>
<head>
<meta charset="utf-8">
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
		
			$id = addslashes($title);
			$opis = addslashes($opis);
		  }
include('../../db.php');

									$sql = "SELECT Title, Opis, Data, ID FROM ogloszenia WHERE id='$id'"; 
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  			
                                    
'<script src="http://strzyzowpelczara.pl/admin/ckeditor/ckeditor.js"></script> 
<div id="Aktual" style="position: static;">
	<div class="backfrom">
		<form action="UpdateOgloszenia2.php" method="post">
		<center>
		<div class="TXT-HED">Dodawanie Aktualności (Lewy Panel)</div>
		</center>
			<label>Tytuł</label>
        <textarea  type="text" name="title" placeholder="...">
'.$row['Title'].'
            </textarea>
			<label>Opis</label>
			
 			<textarea id="editor1" tabindex="1" class="ckeditor" type="text" name="opis" placeholder="Opis">
'.$row['Opis'].'
            </textarea>
            <script>
                CKEDITOR.replace( "editor1" );
            </script>
            <textarea type="text" name="idposta" placeholder="id">
'.$id.'
            </textarea>
		<input class="box dodaj" type="reset" value="Reset">
		<input class="box dodaj" type="submit" name="dodaj" value="Dodaj" />
		</form>
	
	</div>
</div>'						
					;				
									
										 }
									}
									$conn->close();
									?>
</body>
</html>