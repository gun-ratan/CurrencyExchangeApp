<?php
if ($_SERVER['REQUEST_URI'] === '/about') {
    include 'about.php';
} elseif ($_SERVER['REQUEST_URI'] === '/contact') {
    include 'contact.php';
} else {
    include 'home.php';
}
?>