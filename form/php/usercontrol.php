<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");
    require_once 'config.php';

    $_SESSION['acc'] = "";
    if (isset($_POST) && isset($_POST["username"]) && isset($_POST["password"]))
    {
        $un = $_POST['username'];
        $pad = $_POST['password'];
    } else {
        die( 'Error: Username not found');
    }



    //使用者名稱和密碼不為空
    if($un && $pad){
        //檢測資料庫是否有對應的username和password的sql
        $sql = "SELECT * FROM useracc WHERE acc ='$un' and pws = '$pad'";
        
        //執行sql
        $result = mysqli_query($conn, $sql);
        
        //返回一個數值
        $rows = mysqli_num_rows($result);  

        //0 false 1 true
        if($rows){

            //帳密一樣，登入成功
            $_SESSION['is_login'] = TRUE;
            $_SESSION['acc'] = $un;
            //使用PHP來轉址，前往首頁
            header('Location: ../home.php');
            exit;

        }else{

            //登入失敗
            $_SESSION['is_login'] = FALSE;

            //在session 存一個 msg 變數
            $_SESSION['msg'] = '登入失敗，請確認帳號密碼!!';

            header('Location: ../../index.php');
        }
    }else{
        
        $_SESSION['msg'] = '請輸入帳號或密碼!!';
        //使用 PHP header 來轉址 返回登入頁
        header('Location: ../../index.php');
    }
?>