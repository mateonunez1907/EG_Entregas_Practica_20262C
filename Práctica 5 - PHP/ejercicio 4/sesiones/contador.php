<?php

session_start();

if (!isset($_SESSION["paginas"])) {
    $_SESSION["paginas"] = 0;
}

$_SESSION["paginas"]++;