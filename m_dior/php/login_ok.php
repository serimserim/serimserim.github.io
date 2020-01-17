<?php
    session_start();
    include_once "conn.php";   
    $id = $_POST['id'];
    $pwd = $_POST['pwd'];

    function miss(){
        echo "<script> setTimeout(function() { history.go(-1); }, 1000); </script>";
    }

    if($id=="" || $pwd==""){
        echo '아이디나 비밀번호가 입력되지 않았습니다.';  
        miss();
        exit;
    } 

    $pwd = md5($pwd);
    $sql = "SELECT * FROM member WHERE id='{$id}' AND pwd='{$pwd}'"; 
    $res = $con->query($sql);
    $row = $res->fetch_array(MYSQLI_ASSOC);
    if($row != null) {
            echo "회원님<br>";
            $_SESSION["uid"] = $row["ID"];
            $_SESSION["upwd"] = $row["PWD"];
            $_SESSION["uname"] = $row["NAME"];
            $_SESSION["uphone"] = $row["PHONE"];
            $_SESSION["uemail"] = $row["EMAIL"];
            $_SESSION["upoint"] = $row["POINT"];
            echo $_SESSION["uname"]."님 안녕하세요<br>";
            login_ok();
    } else {    
        echo '로그인 실패 아이디와 비밀번호가 일치하지 않습니다.';
        miss();
    }
    function login_ok(){
        echo "<script> setTimeout(function() { history.go(-2); }, 1000); </script>";
    }
    include_once "close.php";
?>

