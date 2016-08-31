<?php

namespace shop;

$settings = new Settings();
$yaMoneyCommonHttpProtocol = new YaMoneyCommonHttpProtocol("paymentAviso", $settings);
$yaMoneyCommonHttpProtocol->processRequest($_REQUEST);
exit;
?>
