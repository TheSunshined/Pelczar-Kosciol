<?php 
session_start();

$login = NULL;
$haslo = NULL;

if (isset($_POST["login"]) && isset($_POST["haslo"]))
{
$login = addslashes($_POST["login"]);
$haslo = addslashes($_POST["haslo"]);
    
$szukaj = array(';',"'",'"','=','+','-','<','>','[',']','{','}','?','$');
$odsiew = array('/','/','/','/','/','/','/','/','/','/','/','/','/','/');
    
$login = str_replace($szukaj, $odsiew, $login);
$haslo = str_replace($szukaj, $odsiew, $haslo);
  
include("db.php");

        $sql = "SELECT Nazwa, Haslo FROM uzytkownicy WHERE Nazwa='$login' and Haslo='$haslo';";
        $data = $conn->query($sql);
        if ($data->num_rows > 0) {
            echo '<h3>Witaj: ';
            $dat = mysqli_fetch_assoc($data);
            $_SESSION["PASS"] = "TAK";
            $_SESSION["Login"] = $dat["Nazwa"];
            echo $_SESSION["Login"];
            mysqli_close($conn);
            {header("Location: admin.php");}
            echo '</h3>';
        }
        
        else if(empty($login) || empty($haslo))
        {echo '<script>alert("Podaj login i hasło.")</script>';}
        else
        {
            echo '<script>alert("Złe dane, spróbuj jeszcze raz.")</script>';
        }
}
else
{echo "brak danych";}


 if (empty($_SESSION["PASS"]))
        {
            echo
                '
                <link href="css/adminek.css" type="text/css" rel="stylesheet">
                <link href="css/sunshinestyle.css" type="text/css" rel="stylesheet">
                <div class="backfrom">
                <form action="" method="post">
                <center>
                <div class="TXT-HED">Logowanie do panelu admina (https://www.strzyzowpelczara.pl).</div>
                </center>
                <label>Tytuł</label>
                <input type="text" name="login" placeholder="...">
                <label>Opis</label>
                <input type="text" name="haslo" placeholder="...">
                <input class="box dodaj" type="reset" value="Reset">
                <input class="box dodaj" type="submit" name="dodaj" value="Zaloguj" />
                </form>

                </div>
                '
        ;}
else
{header("Location: admin.php");}
?>
