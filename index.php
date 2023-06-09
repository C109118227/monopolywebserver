<!DOCTYPE html>
<html lang="utf-8">
<head>
    <meta charset="utf-8">
    <title>登入平台</title>
    <link rel="stylesheet" type="text/css" href="form/css/indexstyle.css"> 
    <script>
        function show_hide() {
            var login = document.getElementById("container1");
            var signup = document.getElementById("container2");
            var copyright = document.getElementById("copyright");

            if (login.style.display === "none") {
                login.style.display = "block";  //lonin出現
                document.getElementById("username").value = "";
                document.getElementById("password").value = "";
                signup.style.display = "none";  //signup消失
                copyright.style.margin = "200px 0px 0px 0px";
            } else {
                login.style.display = "none";   //login消失
                signup.style.display = "block"; //signup出現
                signup.style.visibility = "visible";
                copyright.style.margin = "200px 0px 0px 0px";

                document.getElementById("fullname").value = "";
                document.getElementById("username2").value = "";
                document.getElementById("password2").value = "";
                document.getElementById("comfirm_password").value = "";
            }
        }
    </script>

</head>

<body>
<div class="system_name">
    <h2>MonopolyWeb</h2>
</div>

<div class="login_page">
    <div id="container1">

        <div class="login">

            <h3>學生登入</h3>

            <form method="post" action="form/php/usercontrol.php">
                <input id="username" name="username" placeholder="帳號" required type="text">
                <div class="tab"></div>
                <input id="password" name="password" placeholder="密碼" required type="password">
                <div class="tab"></div>
                <input class="submit"  type="submit" value="登入">

            </form>

            <h5 onclick="show_hide()" style="float:left" >註冊帳號</h5>

        </div><!-- login end-->
    </div><!-- container1 end-->
</div><!-- login_page end-->

<div class="signup_page">
<div id="container2">

    <div class="signup">

        <h3>註冊 Sign Up</h3>

        <form method="post" action="form/php/useradd.php">
            <input id="fullname" name="fullname" placeholder="使用者全名" required type="text">
            <div class="tab"></div>
            <input id="username2" name="username" placeholder="帳號" required type="text">
            <div class="tab"></div>
            <input id="password2" name="password" placeholder="密碼" required type="password">
            <div class="tab"></div>
            <input id="comfirm_password" name="comfirm_password" placeholder="確認密碼" required type="password">
            <div class="tab"></div>
            <input class="submit" type="submit" value="註冊">
        </form>

        <h5 onclick="show_hide()">返回</h5>

    </div><!-- signup end-->
</div><!-- container2 end-->
</div><!-- signup_page end-->

<div id="copyright">
    <h4>© 2023 Kaohsiung University of Science and Technology Topics</h4>
</div>


</body>


</html>

