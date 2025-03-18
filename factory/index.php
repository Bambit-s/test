<?php

include("phoneinterface.php");
include("CellPhone.php");
include("SmartPhone.php");
include("PhoneFactory.php");

$factory = new PnoneFactory();
$cell_phone = $factory->createCellPhone();
$smart_phone = $factory->createSmartPhone();

$cell_phone->call();
$smart_phone->call();