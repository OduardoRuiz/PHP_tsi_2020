<?php

session_start();

if (!isset($_SESSION['login'])) {

    header('Location: /PHP_TSI_2020/logindb/');
}
