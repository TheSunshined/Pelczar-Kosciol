<?php 
echo '<div style="display:none;">';
include('../../checkuser.php'); 
echo '</div>';
?>
<div id="NewsConter">
<script>								
$(document).ready(function(){
    $(".AddAktual").click(function(){
    $("#AddAktual").toggle();});
    $(".AddAktualPrawy").click(function(){
    $("#AddAktualPrawy").toggle();});
    $(".ErseAktual").click(function(){
    $("#ErseAktual").toggle();});
    $(".ErseAktualPrawy").click(function(){
    $("#ErseAktualPrawy").toggle();});
    $(".UpdatePrawy").click(function(){
    $("#UpdatePrawy").toggle();});
    $(".UpdateKontakt").click(function(){
    $("#UpdateKontakt").toggle();});
});
</script>
<script>
$(document).ready(function(){
	$(function(){
        $("#AddAktual").load("admin/html/AddKontakt.html"); 
        $("#AddAktualPrawy").load("admin/html/AddPrawy.html"); 
        $("#ErseAktual").load("admin/html/UsunKontakt.html");
        $("#ErseAktualPrawy").load("admin/html/UsunPrawy.html"); 
        $("#UpdatePrawy").load("admin/html/UpdatePrawy.html");
        $("#UpdateKontakt").load("admin/html/UpdateKontakt.html"); 
    });
});
</script>
    
<button style="float: left;" class="AddAktual">Dodaj Kontakty</button>
<button style="float: left;" class="UpdateKontakt">Aktualizuj Kontakty</button>
<button style="float: left;" class="ErseAktual">Usuń Kontakty</button>
<button style="float: right;" class="AddAktualPrawy">Dodaj Prawy</button>
<button style="float: right;"  class="UpdatePrawy">Aktualizuj Prawy</button>
<button style="float: right;"  class="ErseAktualPrawy">Usuń Prawy</button>
<div style="display: none;" id="AddAktual"></div>
<div style="display: none;" id="UpdateKontakt"></div>
<div style="display: none;" id="AddAktualPrawy"></div>
<div style="display: none;" id="ErseAktual"></div>
<div style="display: none;" id="ErseAktualPrawy"></div>
<div style="display: none;" id="UpdatePrawy"></div>




<style>
	#kontakt {color:var(--Wazne);border-bottom: 4px solid var(--Wazne);box-shadow: 0px 5px 5px -5px;}
	#conct {display: none;}
	#kontaktActive {display: inline-block;}
    .LinkMenu:hover:nth-child(5) {border-radius:20px 20px 0px 0px;background: var(--Wazne3);}
</style>
								<?php
include('../../db.php');

									$sql = "SELECT Title, Opis, ID FROM kontakt ORDER BY id ASC"; 
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  
'<div id="AktualkaCont" class="col-12 ArtContener">
  <div class="CenterArtConter">
	<div class="HeadArt">'
	.$row['Title'].' / ID:'.$row['ID'].'
	</div>
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