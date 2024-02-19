<!DOCTYPE html>
<html lang="Per-fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎮 Play Palace 🎮</title>
    <link rel="stylesheet" href="../CSS/Style.Css">
</head>
<body>

<!-- Header -->
    <div class="Header">
        <a href="MainPage.php"> <img src="../Recources/webicon.png" alt=""> </a>
        <input type="search" name="" id="" placeholder="آقای فردوسی پور شما دنبال چی هستید؟">
        <div>
            <a href="LogInPage.php">
                <button id="Login">ورود</button>
            </a>
            <a href="SignUpPage.php">
                <button id="Signup">ثبت نام</button>
            </a>
        </div>
    </div>

    <!-- Banner -->
    <div class="Banner">
        <div>
            <img id="Banner" src="../Recources/Banner.png" alt="">
            <img id="UnderBanner" src="../Recources/UnderBanner1.png" alt="">
        </div>
    </div>


    <!-- Shop -->

    <div class="ContainerShop">
    <h1>پر فروش ترین بازی های ماه</h1>
    <div class="TopGames">
        
        <div class="ListGames">
            
            <img class="LeftGameIcon" src="../Recources/GamesIcon/Mafia 2.png" alt="">
            <div class="H2ListGames">
            <h2 >خرید بازی Mafia 2</h2>
            </div>
            <div class="Price">
                <del>250000 تومان</del>
                199000 تومان
                <form action="PaymentDetail.php" method="post">
                    <input class="ButtonLeft" type="submit" name="Game" value="صفحه خرید">
                    <input type="hidden" name="Game" value="Mafia 2">
                </form>
            </div>
        </div>

        <div class="ListGames">
            <div class="Price">
                <del>250000 تومان</del>
                199000 تومان
                <form action="PaymentDetail.php" method="post">
                    <input class="ButtonRight" type="submit" name="Game" value="صفحه خرید">
                    <input type="hidden" name="Game" value="Rainbow Six">
                </form>
            </div>
            <div class="H2ListGames">
            <h2 >خرید بازی Rainbow Six</h2>
            </div>
            <img class="RightGameIcon" src="../Recources/GamesIcon/Rainbow Six.png" alt="">
        </div>

        <div class="ListGames">
            <img class="LeftGameIcon" src="../Recources/GamesIcon/NFS - Heat.png" alt="">
            <div class="H2ListGames">
            <h2>خرید بازی NFS : Heat</h2>
            </div>
            <div class="Price">
                <del>250000 تومان</del>
                199000 تومان
                <form action="PaymentDetail.php" method="post">
                    <input class="ButtonLeft" type="submit" name="Game" value="صفحه خرید">
                    <input type="hidden" name="Game" value="NFS - Heat">
                </form>
            </div>
        </div>

        <div class="ListGames">
            <div class="Price">
                <del>250000 تومان</del>
                199000 تومان
                <form action="PaymentDetail.php" method="post">
                    <input class="ButtonRight" type="submit" name="Game" value="صفحه خرید">
                    <input type="hidden" name="Game" value="The Witcher 3">
                </form>
            </div>
            <div class="H2ListGames">
            <h2 >خرید بازی The Witcher 3</h2>
            </div>
            <img src="../Recources/GamesIcon/The Witcher 3.png" alt="">
        </div>

        <div class="ListGames">
            <img class="LeftGameIcon" src="../Recources/GamesIcon/Tekken 8.png" alt="">
            <div class="H2ListGames">
            <h2 >خرید بازی Tekken 8</h2>
            </div>
            <div class="Price">
                <del>250000 تومان</del>
                199000 تومان
                <form action="PaymentDetail.php" method="post">
                    <input class="ButtonLeft" type="submit" name="Game" value="صفحه خرید">
                    <input type="hidden" name="Game" value="Tekken 8">
                </form>
            </div>
        </div>

        <div class="ListGames">
            <div class="Price">
                <del>250000 تومان</del>
                199000 تومان
                <form action="PaymentDetail.php" method="post">
                    <input class="ButtonRight" type="submit" name="Game" value="صفحه خرید">
                    <input type="hidden" name="Game" value="Battlefield 2042">
                </form>
            </div>
            <div class="H2ListGames">
            <h2 >خرید بازی Battlefield 2042</h2>
            </div>
            <img class="RightGameIcon" src="../Recources/GamesIcon/Battlefield 2042.png" alt="">
        </div>
    </div>

    </div>


    
    <!-- Contact Us -->
    <div class="Footer">
            <img id="IconFooter" src="../Recources/webicon.png" alt="">
            <p>تمامی پرداختی ها در سامانه شاپرک ثبت نخواهد شد . این فروشگاه صرفا جهت کلاهبرداری ساخته شده است
            <br>
            برای دسترسی بهتر به سایت فایروال و آنتی ویروس خودتون رو خاموش کنید . در صورت وجود هرگونه اختلال در روند کلاهبرداری به پشتیبانی اطلاع بدهید</p>
            <img id="Enamad" src="../Recources/eNamad.png" alt="">
    </div>

    <div class="Copyright">
        <p>Copyright © 2024 Play Palace</p>
    </div>
    
</body>
</html>