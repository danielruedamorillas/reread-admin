<?php
include '../Model/user.php';
include '../Model/userDAO.php';
if (isset($_POST['email'])) {
    $user=new User($_POST['email'],md5($_POST['psswd']));
    $UserDAO=new UserDAO();
    if ($UserDAO->login($user)) {
        header("location:../View/zona.admin.php");
    }else{
        header("location:../View/login.php");
    }
    
}else{
    header("location:../View/login.php");
}