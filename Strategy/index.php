<?php

include("FlyInterface.php");
include("FlyWithoutWings.php");
include("FlyWithWings.php");
include("Duck.php");
include("RedHeadDuck.php");

$read_head_duck = new RedHeadDuck();
$read_head_duck->fly();
