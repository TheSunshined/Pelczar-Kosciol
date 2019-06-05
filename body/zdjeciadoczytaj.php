<?php
include('../db.php');

$sql = "SELECT ID FROM foto ORDER BY ID DESC LIMIT 5"; 
									
									$result = $conn->query($sql);

									if ($result->num_rows > 0) { 
                                        
										 while($row = $result->fetch_assoc()) {
                                             //Zmienna pomocnicza...
                                             $kek = $keks;
                                        $keks = $kek+1;
                                             $kek = $keks;
								$maks[$keks] = $row['ID'];}
                                }
                               
									$sql = "SELECT Title, Opis, Data FROM foto 
                                    WHERE NOT ID='$maks[1]' 
                                    AND ID NOT LIKE '$maks[2]' 
                                    AND ID NOT LIKE'$maks[3]' 
                                    AND ID NOT LIKE'$maks[4]' 
                                    AND ID NOT LIKE'$maks[5]' ORDER BY ID DESC"; 
									
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  
									
'<div class="col-12 ArtContener">
	<div class="HeadArt">'
	.$row['Title'].
	'</div>
	<div class="ArticleBoxText">
		<div class="ArticleText ArtTextCenter">'
		.$row['Opis'].
		'<div class="Date">Dodano: '.$row['Data'].'</div>
		</div>
	</div>
</div>'
									
					;				
									
										 }
									}
									$conn->close();
									?>