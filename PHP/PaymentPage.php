<!DOCTYPE html>
<html lang="Per-fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎮 Play Palace 🎮</title>
    <link rel="stylesheet" href="../CSS/Payment.css">
</head>
<body>
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

    <div class="Container">

            <div class="Payment">

                <div class="Item">
                    <?php
                        if(!empty($_GET['Game'])){
                            $GaneName = $_GET['Game'];
                        }
                        echo "<div class='GameIcon'><img src='../Recources/GamesIcon/" . $GaneName . ".png' alt=''></div>";
                    ?>
                    
                    <div class="Detail">
                        <?php
                        if(!empty($_GET['Game'])){
                            $Game = $_GET['Game'];
                        }
                            echo "<h2>بازی $Game </h2>";
                        ?>
                    </div>
                    
                    <div class="Des">
                        <p>سازنده</p>
                        <p>تاریخ عرضه</p>
                        <p>قیمت</p>
                        <p>تخفیف</p>
                    </div>

                    <div class="Description">
                        <p>استودیو بازی سازی</p>
                        <p>30/بهمن/1402</p>
                        <p>250000 تومان</p>
                        <p>51000 تومان</p>
                    </div>
                    <div class="PayDiv">
                        <p>قیمت نهایی : 199000 تومان</p>
                        <!-- <form action="" method="post">
                            <input class="SubmitBTN" type="submit" value="ثبت خرید">
                        </form> -->

                    </div>
                </div>

                <div class="PaymentInformation">
                    <?php
                        if(!empty($_GET['Sucsses']))
                        {
                            echo '<div class="Success">پرداخت با موفقیت انجام شد</div>';
                        }
                        if(!empty($_GET['Failed']))
                        {
                            echo '<div class="Failed">اطلاعات وارد شده اشتباه میباشد.</div>';
                        }
                        
                    ?>

                    <Div class="Info">
                        <img src="../Recources/Timer.png" alt="">
                        <p>درگاه پرداخت قاصدک</p>
                        <img src="../Recources/Shaparak-Logo.png" alt="">
                        
                    </Div>

                    <div class="PaymentCard">

                        <form action="PaymentDetail.php" method="post">
                            <div class="InputDiv"><p>شماره کارت</p> <input class="InputForm" type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="16" name="CardNum" id=""></div>
                            <div class="InputDiv"><p>CVV2</p> <input class="InputForm" type="text" name="Cvv2" id="" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="4"></div>
                            <div class="InputDiv"><p>تاریخ انقضا</p> <input class="InputForm" type="date" name="ExpiryDate" id=""></div>
                            <div class="InputDiv"><button id="BtnPassPoya">درخواست رمز پویا</button> <input class="InputForm" type="text" name="PassPoya" id="" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="8"></div>
                            <div class="InputDiv"><input class="SubmitBTN" type="submit" value="ثبت خرید" name="Submit"></div>
                            <?php
                                $GameN = $_GET['Game'];
                                echo '<input type="hidden" name="Game" value="' . $GameN . '">';
                            ?>
                            
                        </form>


                    </div>
                </div>
                
            </div>

        </div>
</body>
</html>