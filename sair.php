<?php
/**
 * Created by PhpStorm.
 * User: kawany.fernandes
 * Date: 30/11/2018
 * Time: 16:07
 */
session_start();
unset($_SESSION);
session_destroy();

header("Location:loginUser.php");