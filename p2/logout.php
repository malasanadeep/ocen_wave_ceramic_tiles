<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('logged out...');window.location.href='http://localhost/p2/index.php';</script>";
?>