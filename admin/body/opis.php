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
    $(".UpdateOpis").click(function(){
        $("#UpdateOpis").toggle();
    });
});
</script>
<script>
$(document).ready(function(){
	$(function(){
      $("#AddAktual").load("admin/html/AddOpis.html"); 
    });
});
	

$(document).ready(function(){
	$(function(){
      $("#AddAktualPrawy").load("admin/html/AddPrawy.html"); 
    });
});
	
$(document).ready(function(){
	$(function(){
      $("#ErseAktual").load("admin/html/UsunOpis.html"); 
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
      $("#UpdateOpis").load("admin/html/UpdateOpis.html"); 
    });
});
</script>

<button style="float: left;" class="AddAktual">Dodaj Opis</button>
<button style="float: left;" class="UpdateOpis">Aktualizuj Opis</button>
<button style="float: left;" class="ErseAktual">Usuń Opis</button>
<button style="float: right;" class="AddAktualPrawy">Dodaj Prawy</button>
<button style="float: right;"  class="UpdatePrawy">Aktualizuj Prawy</button>
<button style="float: right;"  class="ErseAktualPrawy">Usuń Prawy</button>
<div style="display: none;" id="AddAktual"></div>
<div style="display: none;" id="UpdateOpis"></div>
<div style="display: none;" id="AddAktualPrawy"></div>
<div style="display: none;" id="ErseAktual"></div>
<div style="display: none;" id="ErseAktualPrawy"></div>
<div style="display: none;" id="UpdatePrawy"></div>

		
		
<style>.aktive {height: auto}
			#opis {color:var(--Wazne);border-bottom: 4px solid var(--Wazne);box-shadow: 0px 5px 5px -5px;}
		#desc {display: none;}
		#opisActive {display: inline-block;}
        .LinkMenu:hover:nth-child(4) {border-radius:20px 20px 0px 0px;background: var(--Wazne3);}
</style>
								<?php
include('../../db.php');

									$sql = "SELECT Title, Opis, Data, ID FROM opis ORDER BY ID DESC"; 
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  
'<div id="OpisCont" class="col-12 ArtContener">
  <div class="CenterArtConter">
	<div class="HeadArt">'
	.$row['Title'].' / ID:'.$row['ID'].' / Dodano:'.$row['Data'].'
	</div>
	<div class="ArticleBoxText">
		<div class="ArticleText ArtTextCenter">'
		.$row['Opis'].
		'</div>
	</div>
  </div>
</div>'
;}}
									$conn->close();
									?>
</div>