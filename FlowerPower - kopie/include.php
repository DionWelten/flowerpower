<?php
    session_start();
    include('./nav.php');
    include('./db_config.php');
?>

<link rel="stylesheet" type="text/css" href='./style/style.css'>
<link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">

<?php if(isset($_SESSION['id'])){
        $Sid      = $_SESSION['id'];
        $Sname    = $_SESSION['name'];
        $Semail   = $_SESSION['email'];
        $Rrights  = $_SESSION['rights'];
    }?>