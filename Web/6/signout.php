<?php
session_start();

if (isset($_SESSION['uname'])){
    session_destroy(); 
    echo "<script>location.href='lab test 6.php'</script>";

}
else{
        echo "<script>location.href='lab test 6.php'</script>";
    }
    
?>