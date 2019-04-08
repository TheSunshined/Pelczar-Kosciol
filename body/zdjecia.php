<div id="NewsConter">
<style>
		#zdjecia {color:#00ffa2;border-bottom: 4px solid #00ffa2}
		#foto {display: none;}
		#fotoActive {display: inline-block;}
	.znikam {display: none;margin-top: 10px;}
		#slides button {background-color: #363636;font-size: 2rem;
color: #f7f7f7;border:0px solid black;position: absolute;}
		#slides button .lewy{left: 0px;}
		#slides button .prawy{right: 0px;}
</style>
<div>
	<?php
include('../db.php');
									$sql = "SELECT DISTINCT Title FROM foto"; 
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
			
											 echo 
												 

'<script>									
$(document).ready(function(){
    $(".clas'.$row['Title'].'").click(function(){
        $("#ajdi'.$row['Title'].'").toggle();
    });
});
</script>'.
'<div class="col-12 BlackButtonContener" style="float: left;">
	<div class="BlackBox">
		<a class="meh" style="text-decoration: none;">
		<div class="BlackButton clas'.$row['Title'].'">'.$row['Title'].'</div>
		</a>
		<div class="ArticleText">
			<div class="BlackBoxText">
			<div class="znikam" id="ajdi'.$row['Title'].'">'; $next = $row['Title'];

											 
											 
				
											 
											 
											 
					echo '<h2 class="">'.$next.'</h2>

<div class="">'
						.
						
'
<div id="slides">

<button class="lewy" onclick="plusDivs'.$next.'(-1)">&#10094;</button>
<button class="prawy" onclick="plusDivs'.$next.'(1)">&#10095;</button>

</div>
';						 
											 
											 
$sql = "SELECT Title, Obrazek FROM foto WHERE Title='$next'";
$huh = $conn->query($sql);
	
if ($huh->num_rows > 0) {
while($rekto = $huh->fetch_assoc()) {
		echo 	

  '

  <img class="mySlides'.$next.'" src="'.$rekto['Obrazek'].'" style="width:100%;max-height: 80%;">
  ';}
	
	echo 
		'</div><script>
var slideIndex = 1;
showDivs'.$next.'(slideIndex);

function plusDivs'.$next.'(n) {
  showDivs'.$next.'(slideIndex += n);
}

function showDivs'.$next.'(n) {
  var i;
  var x = document.getElementsByClassName("mySlides'.$next.'");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>';}
	
	
	
	
	
	
	
	
	
	
										echo
  '
</div>';
									echo '</div>
			</div>
		</div>
	</div>
</div>';
										;};}
	?>				</div>
						</div>