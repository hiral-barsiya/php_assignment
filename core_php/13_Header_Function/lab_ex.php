<?php
//Redirect users to another page using the header () function.

if (isset($_POST['submit']) {
    
    header('Location: success.php'); 
    exit();
}

?>