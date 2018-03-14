<?php
$_GET['month'];
$Month=['Jan','Fab','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
for($i=0;$i<=12;$i++){
    if($_GET['month']==$i)
    {
        echo $Month[$i-1];    }
}
?>