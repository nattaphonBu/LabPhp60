
<html>
<body>
    <form action ="lab2_2.php" method="post">
        ชื่อ :<input type ="text" name="name"  /><br>
        <br>
        สกุล :<input type ="text" name="sername"  /><br>
        
    <input type="submit" />
    
    
    
    </form>
             
        <?php  
                if(isset($_POST["name"],$_POST["sername"])){
                    $name=$_POST["name"];
                    $sername=$_POST["sername"];
                    echo "สวัสดีครับคุณ ". $name." ". $sername ; 
                }
                
                ?>
               
</body>
</html>