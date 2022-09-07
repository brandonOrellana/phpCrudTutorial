<?php

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
        $photo=$_FILES['photo'];
        $playerid=(!empty($_POST['userId']))? $_POST['userId']: "";
        $imagename="";
        if(!empty($photo['name'])){
            $imagename = $obj->uploadPhoto($photo);
            $playerData=[
                'name'=>$pname,
                'email'=>$email,
                'mobile'=>$mobile,
                'photo'=>$imagename
            ];
        }else{
            $playerData=[
                'name'=>$pname,
                'email'=>$email,
                'mobile'=>$mobile
            ];
        }
        $playerid = $obj->add($playerData);

        if(!empty($playerid)){
            $player = $obj->getRow('id',$playerid);
            echo json_encode($player);//tira error si ingreasa warning
            exit();
        }
    }

    // getcount function and getallusers action
    if($action=='getallusers'){
        $page=(!empty($_GET['page']))?$_GET['page']:1;
        $limit = 4;
        //paginas = 1*4=4,2*4=8
        $start=($page-1)*$limit;
        $users = $obj->getRows($start,$limit);
        if(!empty($users)){
            $userlist = $users;
        }else{
            $userlist=[];
        }
        echo json_encode($userlist);
        exit();
    }

?> 