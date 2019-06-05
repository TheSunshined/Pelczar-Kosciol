<div id="NewsConter">
        <div id="OgloszeniaCont" class="col-12 ArtContener">
       <div class="CenterArtConter">
        <div class="HeadArt" style="text-align:center;padding:0px">ZDJĘCIA
        </div>
      </div>
    </div>
<style>
		#zdjecia {color:var(--Wazne);border-bottom: 4px solid var(--Wazne);box-shadow: 0px 5px 5px -5px;}
		#foto {display: none;}
		#fotoActive {display: inline-block;}
        .LinkMenu:hover:nth-child(3) {border-radius:20px 20px 0px 0px;background: var(--Wazne3);}
  
    .BlackButton3:hover {cursor: pointer;background-color: var(--Wazne2);color: var(--font);}
    .BlackButton3 {border: 4px solid var(--Header);color: var(--Header);text-align: center;font-size: 1.65rem;font-family: FontDarkSemi;padding: 2.5px 15px;width: max-content;}
    
</style>
<div>
    
	<?php
include('../db.php');
									$sql = "SELECT DISTINCT Title FROM foto"; 
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
            $string = str_replace(' ', '', ($row['Title']));
											 echo 
												 

'<script>									
$(document).ready(function(){
    $(".clas'.$string.'").click(function(){
        $("#ajdi'.$string.'").toggle();
    });
});

function kolor'.$string.'(){
zmiana'.$string.'.style.background = "var(--Header)";
zmiana'.$string.'.style.color = "var(--Font)";
}
</script>'.
'<div class="BlackButtonContener" style="float: left;width:100%;">
	<div class="BlackBox">
		<a class="meh" style="text-decoration: none;">
		<div onclick="kolor'.$string.'()" id="zmiana'.$string.'"  class="BlackButton3 clas'.$string.'">'.$row['Title'].'</div>
		</a>
		<div class="ArticleText">
			<div class="BlackBoxText">
			<div style="display:none;" class="znikam" id="ajdi'.$string.'">'; $next = $row['Title'];

						 
$sql = "SELECT Title, Opis FROM foto WHERE Title='$next'";
$huh = $conn->query($sql);
	
if ($huh->num_rows > 0) {
while($rekto = $huh->fetch_assoc()) {
		echo '<iframe src="'.$rekto['Opis'].'" width="100%" height="500px"></iframe>';}}
        echo '</div></div></div></div></div>';;};}
    
    ?></div>
<script>/*
function pokaz (){
    $(document).ready(function(){
	$(function(){
      $("#Aktualdoczytaj").load("body/zdjeciadoczytaj.php"); 
    });
});
    pokazz.style.display = 'none';
    znik.style.display = 'block';
    Aktualdoczytaj.style.display = 'block';
}
    
function znikaj (){
    Aktualdoczytaj.style.display = 'none';
    pokazz.style.display = 'block';
    znik.style.display = 'none';
}*/
</script>
<!--
<div class="ButtonConter">
<div class="ButtonPoka">
<input id="pokazz" type="button" value="Pokaż więcej" class="pokawiecej" type="submit" onclick="pokaz()" >
<input id="znik" type="button" value="Ukryj" class="pokawiecej" type="submit" onclick="znikaj()" >
</div>
</div>
<div id="Aktualdoczytaj"></div>
</div>-->