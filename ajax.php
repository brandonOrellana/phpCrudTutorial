<?php
    //print_r($_FILES);
    //die;


    $action=$_REQUEST['action'];

    if(!empty($action)){
        require_once 'partials/User.php';
        $obj=new User();
    }

    // adding user action
    if($action=='adduser' && !empty($_POST)){
        $pname=$_POST['username'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $photo=$_POST['photo'];
    }

?> 