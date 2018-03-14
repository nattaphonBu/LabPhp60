<html>
<body>
<form action ="" method="get">
    แม่เลข :<input type ="text" name="muti" value=<?php if(isset( $_GET['muti'])) echo $_GET['muti']; ?>  >
    </datalist>
    <br>
    <br>
    จำนวนแถว :
    <select name= "row">
    <?php
            for($i=1;$i<=12;$i++){ 
    ?>
               <option  
                    <?php if(isset( $_GET['row'])){
                                if($i ==  $_GET['row']){
                                    echo  "selected=selected";
                                }
                            }else{
                                if( $i == 12){
                                    echo  "selected=selected";
                                }
                            } ?>
                    value= <?php echo $i ?> > <?php echo $i ?>
                </option> 
    <?php
            }
    ?>
    
        <!-- <option <?php ?>selected=""select value="1">1 </option> 
        <option value="2">2</option> 
        <option value="3">3 </option> 
        <option value="4">4 </option> 
        <option value="5">5 </option> 
        <option value="6">6 </option> 
        <option value="7"> 7</option> 
        <option value="8">8 </option> 
        <option value="9">9 </option> 
        <option value="10">10</option> 
        <option value="11">11</option>
        <option value="12"> 12 </option>  -->
        
    
    </select>
    <br>
    <input type="submit" />
    </form>
    <?php
     if(isset($_GET['muti'],$_GET['row'])){
        $muti=$_GET['muti'];
        $row=$_GET['row'];
            for($i=1;$i<=$row;$i++){
            echo $muti,"*",$i ,"=", $muti*$i;
            echo "<br />";
        }
     }
    ?>
</body>
</html>