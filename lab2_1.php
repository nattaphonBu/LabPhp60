<?php
if(isset($_GET['num'])){
    $muti= $_GET['num'];
    for($i=1;$i<=12;$i++){
        echo $muti,"*",$i ,"=", $muti*$i;
        echo "<br />";
    }
 

}