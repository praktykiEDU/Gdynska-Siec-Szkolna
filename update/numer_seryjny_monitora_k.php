<?php
        session_start();
        require_once "config.php";
        $numer_seryjny_monitora = $_POST['numer_seryjny_monitora'];
        $ID = $_POST['id'];
        $sql = "UPDATE komputery SET Numer_seryjny_monitora='$numer_seryjny_monitora' WHERE ID='$ID'";
        if (mysqli_query($link, $sql)) 
            {
                echo "<script type='text/javascript'>alert('Zaaktualizowano');</script>";
                echo "<script>window.location = 'http://localhost/Gdynska-Siec-Szkolna-main/#loaded'</script>";
            } 
        else 
            {
                echo "<script type='text/javascript'>alert('Błąd w wpisywaniu');</script>";
                //echo "Error: " . $sql . "<br>" . mysqli_error($link);
                echo "<script>window.location = 'http://localhost/Gdynska-Siec-Szkolna-main/update_k.php'</script>";
            } 
?>