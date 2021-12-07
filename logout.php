<?php

session_start();
unset ($SESSION['email']);
session_destroy();

header('Location:admin.html');

?>