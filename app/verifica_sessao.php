
<?php

if(($_SESSION['logado']) == "SIM"){
    //echo("Logado ");
    var_dump($_SESSION);
    //header("Location: ../app/views/pages/home.php");
    //echo "<script> window.location.href = '?i=dashboard'; </script>";
    //exit();
}
else{
    header("Location: ../app/views/pages/login.php");
}
