<div id="NewsConter">
<style>
			#opis {color:#00ffa2;border-bottom: 4px solid #00ffa2}
		#desc {display: none;}
		#opisActive {display: inline-block;}
</style>
								<?php
include('../db.php');


									$sql = "SELECT Title, Opis FROM opis ORDER BY ID DESC"; 
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  
									
'<div class="col-12 ArtContener">
	<div class="HeadArt">'
	.$row['Title'].'
	</div>
	<div class="ArticleBoxText">
		<div class="ArticleText ArtTextCenter">'
		.$row['Opis'].
		'</div>
	</div>
</div>'
									
					;
									
										 }
									}
									$conn->close();
									?>
</div>