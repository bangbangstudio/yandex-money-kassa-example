<?php

namespace shop;

$settings = new Settings();
$yaMoneyCommonHttpProtocol = new YaMoneyCommonHttpProtocol("checkOrder", $settings);
$yaMoneyCommonHttpProtocol->processRequest($_REQUEST);
exit;
?>
