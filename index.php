<?php
session_start();

include_once "Ir_Gateway_RayanPAY.php";
if (isset($_POST["mobile"])) {
    $Ir_Gateway_RayanPAY = new Ir_Gateway_RayanPAY();
    //شماره موبایل حتما اولش 98 داشته باشد
    //شماره موبایل یا نباید ارسال شود یا با فرمت درست باید ارسال شود :
    //98xxxxxxxxxx
    $res = $Ir_Gateway_RayanPAY->request($_POST["amount"], $_POST["mobile"], "https://rayanpay.com/ipgtest/verify.php");
	// Display the alert box  
	
// Display the alert box  
echo '<script>alert("'.$res.'")</script>';
	
    //return;
}
?>

<!DOCTYPE html>
<html lang="fa"
      dir="rtl">

<!-- molla/index-22.html  22 Nov 2019 10:01:54 GMT -->

<head>
</head>
<body>
<form method="post"
      action="index.php">
    <table>
        <tr>
            <td>موبایل</td>
            <td><input type="tel" name="mobile"></td>
        </tr>
        <tr>
            <td>مبلغ</td>
            <td><input type="tel" name="amount"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="ارسال">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
