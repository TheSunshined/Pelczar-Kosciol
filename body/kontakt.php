<div id="NewsConter">
<style>
	#kontakt {color:#00ffa2;border-bottom: 4px solid #00ffa2}
	#conct {display: none;}
	#kontaktActive {display: inline-block;}
</style>
								<?php
include('../db.php');


									$sql = "SELECT Title, Opis, ID FROM kontakt ORDER BY ID ASC"; 
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  
								
									
'<script>									
$(document).ready(function(){
    $(".blackclick'.$row['ID'].'").click(function(){
        $(".whiteclick'.$row['ID'].'").toggle();
    });
});
</script>'.									
'<div class="col-12 BlackButtonContener" style="float: left;">
	<div class="BlackBox">
		<div class="blackclick'.$row['ID'].' BlackButton">'.$row['Title'].'</div>
		<div id="ArticleTextKontakt" class="BlackBoxText">
			<div class="whiteclick'.$row['ID'].' ArticleText">'.$row['Opis'].'</div>
		</div>
	</div>
	</div>
	'

									
									;}
									;}
									$conn->close();
									?>
</div>