<?php
    echo $_GET['age'];
    if( $_GET['age']>55){
        echo "<br />";
        echo "Old age";
    }
    else if( $_GET['age']>35){
        echo "<br />";
        echo "(Middle age";
    }
    else if( $_GET['age']>20){
        echo "<br />";
        echo "Adult";
    }
    else if( $_GET['age']>10){
        echo "<br />";
        echo "Teenage";
    }
    else 
        echo "<br />";  
        echo "Children"
?>