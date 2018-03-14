<html>
<body>

<form method="post">
ความกว้าง: <input type="text" name="width"><br>
ความยาว: <input type="text" name="height"><br>
<input type="submit">
</form>

<?php

if(isset($_POST['width']) && isset($_POST['height'])){
    ?>
    <table border=1>
    <tr>
    <th>รูป</th>
    <th>พื้นที่</th>
    <th>หมายเหตุ</th>
    </tr>
    <tr>
    <td>สามเหลี่ยม</td>
    <td><?php echo 0.5*$_POST['width']*$_POST['height'] ?></td>
    <td></td>
    </tr>
    <tr>
    <td>สี่เหลี่ยม</td>
    <td><?php echo $_POST['width']*$_POST['height'] ?></td>
    <td><?php if($_POST['width']==$_POST['height'])
                echo "สี่เหลี่ยมจตุรัส"; 
              else
                echo "สี่เหลี่ยมผืนผ้า"; 
        ?></td>
    </tr>
    </table>
    <?php
}

?>





</body>
</html>