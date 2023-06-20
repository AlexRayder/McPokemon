
<?php
//* GET logout
session_start();
if (isset($_SESSION['correo'])) {
    session_destroy();
}
?>