<div id="PrawyCont">
<?php
include('../db.php');


								$sql = "SELECT Title, Opis, Warunek, Data, ID FROM prawy ORDER BY ID DESC"; 
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
'<div class="BlackButtonContener2">
	<div class="BlackBox2">
		<div class="blackclick'.$row['ID'].' BlackButton2">'.$row['Title'].'</div>
		<div class="whiteclick'.$row['ID'].' ArticleText" style="'.$row['Warunek'].'">
			<div class="BlackBoxText2">
				'.$row['Opis'].'
			</div>
		</div>
	</div>
</div>'
									
					;				
									
										 }
									}
									$conn->close();
									?>
    </div>