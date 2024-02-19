<!DOCTYPE html>
<html lang="Per-fa">
<head>
    <meta charset="UTF-8">
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
                    if(isset($_GET["sucsses"]))
                    {
                        echo '<div id="SucssesDiv">
                        <p>ثبت نام با موفقیت انجام شد</p>
                        </div>';
                    }

                ?>
                
            <h1>فرم ثبت نام</h1>
                <form action="Regestring.php" method="post">
                    <input class="Input" type="text" name="Username" id="Username" placeholder="نام کاربری">
                    <input class="Input" type="email" name="Email" id="Email" placeholder="ایمیل">
                    <input type="password" name="Password" id="Password" class="Input" placeholder="رمز عبور">
                    <input type="password" name="RetypePassword" id="RetypePassword" class="Input" placeholder="تکرار رمز عبور">
                    <input class="SubmitBTN" name="Submit" type="submit" value="ثبت نام" id="Submit">
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