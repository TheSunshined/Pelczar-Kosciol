<?php 
echo '<div style="display:none;">';
include('../../checkuser.php');
include('checkuser.php');
echo '</div>'; ?>
<style>
    #zegarstyl {font-family: FontDarkSemi;font-size: 2.2rem;text-align: center;}
    #datastyl {font-family: FontDark;font-size: 1.1rem;text-align: center;}
</style>
<script>
    
    function zegar ( jQuery ) {
    var data = new Date();
    var godzina = data.getHours();
    var minuta = data.getMinutes();
    var sekunda = data.getSeconds();
    var dzien = data.getDate();
    var dzienN = data.getDay();
    var miesiac = data.getMonth();
    var rok = data.getFullYear();

    if (minuta < 10) minuta = "0" + minuta;
    if (sekunda < 10) sekunda = "0" + sekunda;

    var dni = new Array("niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota");
    var miesiace = new Array("stycznia", "lutego", "marca", "kwietnia", "maja", "czerwca", "lipca", "sierpnia", "września", "października", "listopada", "grudnia");

    var pokazDate = '<div id="zegarstyl">' + godzina + ':' + minuta + ':' + sekunda + '</div><div id="datastyl">Dzisiaj jest ' + dni[dzienN] + ', ' + dzien + ' ' + miesiace[miesiac] + ' ' + rok + ' roku.</div>';
    zegarekshow.innerHTML = pokazDate;

    setInterval(zegar, 1000);         
    }

    $( document ).ready( zegar );
    
</script>
<div id="PrawyCont">
    <div class="BlackButtonContener2">
	<div class="BlackBox2">
		<center><div class="blackclick'.$row['ID'].' BlackButton2"><div class="PrawTit">Zegar</div></div></center>
		<div class="whiteclick'.$row['ID'].' ArticleText" style="'.$row['Warunek'].'">
			<div class="BlackBoxText2">
                <div onload="zegar()" id="zegarekshow"></div>
			</div>
		</div>
	</div>
</div>
<?php
include('db.php');


								$sql = "SELECT Title, Opis, Warunek, Data, ID FROM prawy ORDER BY ID DESC"; 
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  
/*'<script>									
$(document).ready(function(){
    $(".blackclick'.$row['ID'].'").click(function(){
        $(".whiteclick'.$row['ID'].'").toggle();
    });
});
</script>'.	*/
'<div class="BlackButtonContener2">
	<div class="BlackBox2">
		<center><div class="blackclick'.$row['ID'].' BlackButton2"><div class="PrawTit">'.$row['Title'].'/ ID:'.$row['ID'].'</div></div></center>
		<div class="whiteclick'.$row['ID'].' ArticleText" style="'.$row['Warunek'].'">
			<div class="BlackBoxText2">
				'.$row['Opis'].'
			</div>
		</div>
	</div>
</div>'
									
					;}
									}
									$conn->close();
				?>
    </div>