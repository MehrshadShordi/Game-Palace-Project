<?php
var_dump($_POST);
$UserName = $_POST['Username'];
$Password = $_POST['Password'];
echo $_POST['Submit'];
if(!empty($_POST['Username']) && !empty($_POST['Password']) && !empty($_POST['Email']) && $_POST['Password'] == $_POST['RetypePassword'] && $_POST['Submit'] == "ثبت نام"  && filter_var($_POST['Email'] , FILTER_VALIDATE_EMAIL))
{
    echo "truee";
    header("Location: SignUpPage.php?sucsses=1");
}else if($_POST['Submit'] == "ثبت نام"){
    header("Location: SignUpPage.php?Failed=1");
}
if($_POST['LoginUsername'] == "admin" && $_POST['LogInPassword'] == "admin" && $_POST['Submit'] == "ورود"){
    header("Location: LogInPage.php?Success=1");
}else if($_POST['Submit'] == "ورود"){
    header("Location: LogInPage.php?Failed=1");
}

?>