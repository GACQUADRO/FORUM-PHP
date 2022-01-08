<?php
if(!isset($_SESSION['auth'])){
    header(('Location: login.php'));
}