<?php
if(!isset($_POST['Submit']))
{
    $GameName = $_POST["Game"];
    header("Location: PaymentPage.php?Game=$GameName");
}else{
    $GameName = $_POST['Game'];
}

    if(!empty($_POST['CardNum']) && !empty($_POST['Cvv2']) && !empty( $_POST['ExpiryDate']) && !empty($_POST['PassPoya']) && isset($_POST['Submit']) && strlen($_POST['CardNum']) == 16 && strlen($_POST['Cvv2']) > 2 && strlen($_POST['PassPoya'] > 5 )){
        header("Location: PaymentPage.php?Sucsses=1&Game=$GameName");
    }else if(isset($_POST['Submit'])){
        header("Location: PaymentPage.php?Game=".$GameName ."&Failed=1");
    }
?>