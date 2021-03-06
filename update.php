<?php
    session_start();
    require_once "config.php";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Gdyńska Sieć Szkolna</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<script src="jquery.js"></script>
</head>
<body>
    <div id="logo">
        <img src="logo.png" alt="logo" height="100px" width="400px">
    </div>
    <div id="menu">
        <div id="przegladaj">
            <button type="button" onclick="window.location.href='select.php'" class="menu" >Przegladaj</button>
        </div>
        <div id="dodaj">
            <button type="button" onclick="window.location.href='insert.php'" class="menu" >Dodaj</Button>
        </div>
        <div id="aktualizuj">
            <button type="button" onclick="window.location.href='update.php'" class="menu" >Aktualizuj</button>
        </div>
        <div id="lan">
            <button type="button" onclick="window.location.href='lan.php'" class="menu" >LAN</button>
        </div>
        <div id="logowanie">
            <button type='button' onclick='window.location.href=`panel_sterowania.php`' class='menu'>Panel sterowania</button>
        </div>
    </div>
    <div id="content" class="custom-select"> 
        <p id="tytul"> Co chcesz zmienić? </p> 
        <button type="button" onclick="window.location.href='update_k.php'" class="select">Komputery</Button>
        <button type="button" onclick="window.location.href='update_p.php'" class="select">Peryferia</Button>
        <button type="button" onclick="window.location.href='update_l.php'" class="select">Sieci LAN</Button>
        <button type="button" onclick="window.location.href='update_s.php'" class="select">Szkoły</Button>
    </div>
    <footer>
        <div id="uzytkownik">
            <p>
            <?php
                    if (isset($_SESSION["username"])) {
                        $logout = '"logout.php"';
                        echo "Jesteś zalogowany jako: ". $_SESSION["username"]. "<br><a href=". $logout. ">Wyloguj się</a>";
                    } else {
                        echo "Nie jesteś zalogowany";
                    }
                ?>
            </p>
        </div>
        <div id="kontakt">
            <h2>Kontakt</h2>
            <p style="color:#8287b5;">Wydział Edukacji<br>ul. Śląska 35-37<br>81-314 Gdynia</p>
            <ul class="social small" >
                <li><a href="mailto:wydz.edukacji@gdynia.pl" title="Wyślij e-mail na adres wydz.edukacji@gdynia.pl"><span>wydz.edukacji@gdynia.pl</span></a></li>
                <li><a href="tel:+587617700" title="Zadzwoń na numer +58 7617700"><span>+58 761 77 00</span></a></li>
            </ul>
        </div>
    </footer>
    <script>
        
        function przegladaj() {
            document.getElementById("content").innerHTML = " "
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("content").innerHTML = this.responseText;
            }
            xhttp.open("GET", "select.php");
            xhttp.send();
        }
    </script>
</body>
</html>