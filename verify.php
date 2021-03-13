<?php
session_start();

include_once "Ir_Gateway_RayanPAY.php";
		// Display the alert box  
echo '<script>alert("Welcome to Geeks for Geeks")</script>';
$Ir_Gateway_RayanPAY = new Ir_Gateway_RayanPAY();
$res = $Ir_Gateway_RayanPAY->verify(null);

//failedre ( [status] => failed [transaction_id] => 1693661642485752 [error] => پرداخت ناموفق )
print_r($res);
?>