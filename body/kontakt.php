<div id="NewsConter">
    <div id="OgloszeniaCont" class="col-12 ArtContener">
       <div class="CenterArtConter">
        <div class="HeadArt" style="text-align:center;padding:0px">KONTAKT
        </div>
      </div>
    </div>
<style>
	#kontakt {color:var(--Wazne);border-bottom: 4px solid var(--Wazne);box-shadow: 0px 5px 5px -5px;}
	#conct {display: none;}
	#kontaktActive {display: inline-block;}
    .LinkMenu:hover:nth-child(5) {border-radius:20px 20px 0px 0px;background: var(--Wazne3);}
</style>
								<?php
include('../db.php');


									$sql = "SELECT Title, Opis, ID FROM kontakt ORDER BY ID ASC"; 
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  						
'<div id="AktualkaCont" class="col-12 ArtContener">
  <div class="CenterArtConter">
	<div class="HeadArt">'
	.$row['Title'].
	'</div>
	<div class="ArticleBoxText">
		<div class="ArticleText ArtTextCenter">'
		.$row['Opis'].
		'
		</div>
	</div>
  </div>
</div>'
;}}
									$conn->close();
									?>
</div>