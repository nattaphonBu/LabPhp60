<htmL>
<body>
<form action="lab_2_4.php" method="get">
    ความกว้าง : <input type ="text" name ="lenght">
    <br>
    ความยาว : <input type ="text" name ="width">
    <br>
    <input type="submit" />
    <?php
    //create_function(){
        
    
    ?>
</form>
<?php
     if(isset($_GET['lenght'],$_GET['width'])){
         $result=$_GET['width']*$_GET['lenght'];
         
        }
    if(isset($_GET['lenght'],$_GET['width'])){
        if($_GET['lenght']==$_GET['width']){
            echo $shape="";
        }
    }
    ?>
     
     <table width="500" border="2" >
     <tr>
     <center>
        <th>รูป</th>
        <th>พื้นที่</th> 
        <th>หมายเหตุ</th>
    <center>
    </tr>
  <th></th>
    <th><?php echo $result; ?></th> 
    <th><?php echo $shape ;?></th>
  </tr>
      </table>
</body>
</html>