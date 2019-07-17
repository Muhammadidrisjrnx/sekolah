<?php
include '../config.php';
session_start();
if($_SESSION['roll']!=1){
    echo '<script>location.href="../index.php"</script>';
}
echo '<script>location.href="tampil_data.php"</script>';
?>
<a href = "logout.php">Logout</a>