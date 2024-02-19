<!DOCTYPE html>
<html lang="Per-fa">
<head>
    <meta charset="UTF-8">
    <meta lang="Per-fa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎮 Play Palace 🎮</title>
    <link rel="stylesheet" href="../CSS/StyleSignUp.Css">
</head>
<body>

    <div class="SignUpContainer">
        <div class="SignUpDiv">
            <div class="Buttons">
            <?php

                if (isset($_GET["Failed"])) 
                {
                    echo '<div id="FailedDiv">
                    <p>اطلاعات وارد شده درست نمیباشد</p>
                    </div>';
                }

                if(isset($_GET["Success"]))
                {
                    echo '<div id="SucssesDiv">
                    <p>ورود شما با موفقیت انجام شد</p>
                    </div>';
                }

            ?>
            <h1>فرم ورود کاربر</h1>
                <form action="Regestring.php" method="post">
                    <input class="Input" type="text" name="LoginUsername" id="LoginUsername" placeholder="نام کاربری">
                    <input class="Input" type="password" name="LogInPassword" id="LogInPassword"  placeholder="رمز عبور">
                    <div class="ForgetPassDiv"><a class="ForgetPass" href="">فراموشی رمز عبور</a></div>
                    <input class="SubmitBTN" type="submit" value="ورود" name="Submit" id="Submit">
                </form>

            </div>

            <div class="Title">
                Play Palace
                <a href="MainPage.php"> <img src="../Recources/webicon.png" alt=""> </a>
            </div>
            
        </div>
    </div>
</body>
</html>