<div id="NewsConter">
        <div id="OgloszeniaCont" class="col-12 ArtContener">
       <div class="CenterArtConter">
        <div class="HeadArt" style="text-align:center;padding:0px">OPIS
        </div>
      </div>
    </div>
<style>
			#opis {color:var(--Wazne);border-bottom: 4px solid var(--Wazne);box-shadow: 0px 5px 5px -5px;}
		#desc {display: none;}
		#opisActive {display: inline-block;}
        .LinkMenu:hover:nth-child(4) {border-radius:20px 20px 0px 0px;background: var(--Wazne3);}
</style>
								<?php
include('../db.php');


									$sql = "SELECT Title, Opis FROM opis ORDER BY ID DESC"; 
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  
									
'<div id="OpisCont" class="col-12 ArtContener">
  <div class="CenterArtConter">
	<div class="HeadArt">'
	.$row['Title'].'
	</div>
	<div class="ArticleBoxText">
		<div class="ArticleText ArtTextCenter">'
		.$row['Opis'].
		'</div>
	</div>
  </div>
</div>'
									
					;
									
										 }
									}
									$conn->close();
									?>
</div>