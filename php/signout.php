<?php
session_start();
session_unset();
session_destroy();
header("Location: ../index.html"); // Adjust the path to your index.html file if necessary
exit();
?>
