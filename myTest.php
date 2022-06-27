<?php
$X=5;
$Y=10;

function myTest(){
$GLOBALS['Y']=$GLOBALS['X']+$GLOBALS['Y'];
}
myTest();
echo $Y;
?>