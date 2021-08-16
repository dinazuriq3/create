<?php
session_start();
if(isset($_SESSION['is_login'])){
 ?>
 <h2>show</h2>
 <h2>add</h2>
 <h2>delete</h2>
<?php
}if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
}
?>
<br><a href="logout.php" target="_blank" rel="noopener noreferrer">logout</a>