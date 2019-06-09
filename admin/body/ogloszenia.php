<?php 
echo '<div style="display:none;">';
include('../../checkuser.php'); 
echo '</div>';
?>
<div id="NewsConter">
<script>
									
$(document).ready(function(){
    $(".AddAktual").click(function(){
        $("#AddAktual").toggle();
    });
});

$(document).ready(function(){
    $(".AddAktualPrawy").click(function(){
        $("#AddAktualPrawy").toggle();
    });
});
	
$(document).ready(function(){
    $(".ErseAktual").click(function(){
        $("#ErseAktual").toggle();
    });
});
	
$(document).ready(function(){
    $(".ErseAktualPrawy").click(function(){
        $("#ErseAktualPrawy").toggle();
    });
});

$(document).ready(function(){
    $(".UpdatePrawy").click(function(){
        $("#UpdatePrawy").toggle();
    });
});
    
$(document).ready(function(){
    $(".UpdateOgloszenia").click(function(){
        $("#UpdateOgloszenia").toggle();
    });
});
</script>
<script>
$(document).ready(function(){
	$(function(){
      $("#AddAktual").load("admin/html/AddOgloszenia.html"); 
    });
});
	

$(document).ready(function(){
	$(function(){
      $("#AddAktualPrawy").load("admin/html/AddPrawy.html"); 
    });
});
	
$(document).ready(function(){
	$(function(){
      $("#ErseAktual").load("admin/html/UsunOgloszenia.html"); 
    });
});
	
$(document).ready(function(){
	$(function(){
      $("#ErseAktualPrawy").load("admin/html/UsunPrawy.html"); 
    });
});
    
$(document).ready(function(){
	$(function(){
      $("#UpdatePrawy").load("admin/html/UpdatePrawy.html"); 
    });
});
    
$(document).ready(function(){
	$(function(){
      $("#UpdateOgloszenia").load("admin/html/UpdateOgloszenia.html"); 
    });
});
</script>

<button style="float: left;" class="AddAktual">Dodaj Ogłoszenia</button>
<button style="float: left;" class="UpdateOgloszenia">Aktualizuj Ogłoszenia</button>
<button style="float: left;" class="ErseAktual">Usuń Ogłoszenia</button>
<button style="float: right;" class="AddAktualPrawy">Dodaj Prawy</button>
<button style="float: right;"  class="UpdatePrawy">Aktualizuj Prawy</button>
<button style="float: right;"  class="ErseAktualPrawy">Usuń Prawy</button>
<div style="display: none;" id="AddAktual"></div>
<div style="display: none;" id="UpdateOgloszenia"></div>
<div style="display: none;" id="AddAktualPrawy"></div>
<div style="display: none;" id="ErseAktual"></div>
<div style="display: none;" id="ErseAktualPrawy"></div>
<div style="display: none;" id="UpdatePrawy"></div>

		

<style>
			#ogloszenia {color:var(--Wazne);border-bottom: 4px solid var(--Wazne);box-shadow: 0px 5px 5px -5px;}
			#info {display: none;}
			#infoActive {display: inline-block;}
        .LinkMenu:hover:nth-child(2) {border-radius:20px 20px 0px 0px;background: var(--Wazne3);}
</style>
								<?php
include('../../db.php');

									$sql = "SELECT Title, Opis, Data, ID FROM ogloszenia ORDER BY id DESC"; 
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  
'<div id="OgloszeniaCont" class="col-12 ArtContener">
   <div class="CenterArtConter">
	<div class="HeadArt">'
	.$row['Title'].' / ID:'.$row['ID'].' / Dodano:'.$row['Data'].'
	</div>
	<div class="ArticleBoxText">
		<div class="ArticleText ArtTextCenter">'
		.$row['Opis'].
		'<div class="Date">Dodano: '.$row['Data'].'</div>
		</div>
	</div>
  </div>
</div>'						
					;}}
									$conn->close();
									?>
</div>