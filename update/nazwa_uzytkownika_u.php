<?php
        session_start();
        require_once "config.php";
        $nazwa_uzytkownika_u = $_POST['nazwa_uzytkownika'];
        $ID = $_POST['id'];
        $sql = "UPDATE uzytkownicy SET username='$nazwa_uzytkownika_u' WHERE ID='$ID'";
        if (mysqli_query($link, $sql)) 
            {
                echo "<script type='text/javascript'>alert('Zaaktualizowano');</script>";
                echo "<script>window.location = 'http://localhost/Gdynska-Siec-Szkolna-main/#loaded'</script>";
            } 
        else 
            {
                echo "<script type='text/javascript'>alert('Błąd w wpisywaniu');</script>";
                //echo "Error: " . $sql . "<br>" . mysqli_error($link);
                echo "<script>window.location = 'http://localhost/Gdynska-Siec-Szkolna-main/uprawnienia.php'</script>";
            } 
?>