<?php
        session_start();
        require_once "config.php";
        $system_operacyjny = $_POST['system_operacyjny'];
        $ID = $_POST['id'];
        $sql = "UPDATE komputery SET System_operacyjny='$system_operacyjny' WHERE ID='$ID'";
        if (mysqli_query($link, $sql)) 
            {
                echo "<script type='text/javascript'>alert('Zaaktualizowano');</script>";
                echo "<script>window.location = 'http://localhost/Strona/#loaded'</script>";
            } 
        else 
            {
                echo "<script type='text/javascript'>alert('Błąd w wpisywaniu');</script>";
                //echo "Error: " . $sql . "<br>" . mysqli_error($link);
                echo "<script>window.location = 'http://localhost/Strona/update_k.php'</script>";
            } 
?>