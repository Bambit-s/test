<?php

include("FlyInterface.php");
include("QuakInterface.php");
include("HighQuack.php");
include("LowQuack.php");
include("FlyWithoutWings.php");
include("FlyWithWings.php");
include("Duck.php");
include("RedHeadDuck.php");

$read_head_duck = new RedHeadDuck();
$read_head_duck->fly();

$read_head_duck->quack();
