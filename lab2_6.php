<html>
<?php
    $array =array(
        "1" => array("date"=>"1"    ,"monthSEn"=>"Jan"  ,"monthSTh"=>"ม.ค." ,"fullMonthEn"=>"January"   ,"fullMonthTh"=>"มกราคม"),
        "2" => array("date"=>"2"    ,"monthSEn"=>"Feb"  ,"monthSTh"=>"ก.พ." ,"fullMonthEn"=>"February"   ,"fullMonthTh"=>"กุมภาพันธ์"),
        "3" => array("date"=>"3"    ,"monthSEn"=>"Mar"  ,"monthSTh"=>"มี.ค." ,"fullMonthEn"=>"March"   ,"fullMonthTh"=>"มีนาคม"),
        "4" => array("date"=>"4"    ,"monthSEn"=>"Apr"  ,"monthSTh"=>"เม.ษ." ,"fullMonthEn"=>"April"   ,"fullMonthTh"=>"เมษายน"),
        "5" => array("date"=>"5"    ,"monthSEn"=>"May"  ,"monthSTh"=>"พ.ค." ,"fullMonthEn"=>"May"   ,"fullMonthTh"=>"พฤษภาคม"),
        "6" => array("date"=>"6"    ,"monthSEn"=>"Jun"  ,"monthSTh"=>"มิ.ย." ,"fullMonthEn"=>"June"   ,"fullMonthTh"=>"มิถุนายน"),
        "7" => array("date"=>"7"    ,"monthSEn"=>"Jul"  ,"monthSTh"=>"ก.ค." ,"fullMonthEn"=>"July"   ,"fullMonthTh"=>"กรกฏาคม"),
        "8" => array("date"=>"8"    ,"monthSEn"=>"Aug"  ,"monthSTh"=>"ส.ค." ,"fullMonthEn"=>"August"   ,"fullMonthTh"=>"สิงหาคม"),
        "9" => array("date"=>"9"    ,"monthSEn"=>"Sep"  ,"monthSTh"=>"ก.ย." ,"fullMonthEn"=>"September"   ,"fullMonthTh"=>"กันยายน"),
        "10" => array("date"=>"10"    ,"monthSEn"=>"Oct"  ,"monthSTh"=>"ต.ค." ,"fullMonthEn"=>"October"   ,"fullMonthTh"=>"ตุลาคม"),
        "11" => array("date"=>"11"    ,"monthSEn"=>"Nov"  ,"monthSTh"=>"พ.ย" ,"fullMonthEn"=>"November"   ,"fullMonthTh"=>"พฤศจิกายน"),
        "12" => array("date"=>"12"    ,"monthSEn"=>"Dec"  ,"monthSTh"=>"ธ.ค." ,"fullMonthEn"=>"December"   ,"fullMonthTh"=>"ธันวาคม")

    );
   

    
?>
<table width="500" border="2" >
     <tr>
     <center>
        <th>ที่</th>
        <th>เดือนย่อ EN</th> 
        <th>เดือนย่อ TH</th>
        <th>เดือนเต็ม EN</th>
        <th>เดือนเต็ม TH</th>
        </center>
        <tr>
        <th><?php echo  $array["1"]["date"]; ?></th>
        <th><?php echo  $array["1"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["1"]["monthSTh"]; ?></th>
        <th><?php echo  $array["1"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["1"]["fullMonthTh"]; ?></th>
        </tr>
        <tr>
        <th><?php echo  $array["2"]["date"]; ?></th>
        <th><?php echo  $array["2"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["2"]["monthSTh"]; ?></th>
        <th><?php echo  $array["2"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["2"]["fullMonthTh"]; ?></th>
        </tr>
        <tr>
        <th><?php echo  $array["3"]["date"]; ?></th>
        <th><?php echo  $array["3"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["3"]["monthSTh"]; ?></th>
        <th><?php echo  $array["3"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["3"]["fullMonthTh"]; ?></th>
        </tr>
        <tr>
        <th><?php echo  $array["4"]["date"]; ?></th>
        <th><?php echo  $array["4"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["4"]["monthSTh"]; ?></th>
        <th><?php echo  $array["4"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["4"]["fullMonthTh"]; ?></th>
        </tr>
        <tr>
        <th><?php echo  $array["5"]["date"]; ?></th>
        <th><?php echo  $array["5"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["5"]["monthSTh"]; ?></th>
        <th><?php echo  $array["5"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["5"]["fullMonthTh"]; ?></th>
        </tr>
        <tr>
        <th><?php echo  $array["6"]["date"]; ?></th>
        <th><?php echo  $array["6"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["6"]["monthSTh"]; ?></th>
        <th><?php echo  $array["6"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["6"]["fullMonthTh"]; ?></th>
        </tr>
        <tr>
        <th><?php echo  $array["7"]["date"]; ?></th>
        <th><?php echo  $array["7"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["7"]["monthSTh"]; ?></th>
        <th><?php echo  $array["7"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["7"]["fullMonthTh"]; ?></th>
        </tr>
        <tr>
        <th><?php echo  $array["8"]["date"]; ?></th>
        <th><?php echo  $array["8"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["8"]["monthSTh"]; ?></th>
        <th><?php echo  $array["8"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["8"]["fullMonthTh"]; ?></th>
        </tr>
        <tr>
        <th><?php echo  $array["9"]["date"]; ?></th>
        <th><?php echo  $array["9"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["9"]["monthSTh"]; ?></th>
        <th><?php echo  $array["9"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["9"]["fullMonthTh"]; ?></th>
        </tr>
        <tr>
        <th><?php echo  $array["10"]["date"]; ?></th>
        <th><?php echo  $array["10"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["10"]["monthSTh"]; ?></th>
        <th><?php echo  $array["10"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["10"]["fullMonthTh"]; ?></th>
        </tr>
        <tr>
        <th><?php echo  $array["11"]["date"]; ?></th>
        <th><?php echo  $array["11"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["11"]["monthSTh"]; ?></th>
        <th><?php echo  $array["11"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["11"]["fullMonthTh"]; ?></th>
        </tr>
        <tr>
        <th><?php echo  $array["12"]["date"]; ?></th>
        <th><?php echo  $array["12"]["monthSEn"]; ?></th> 
        <th><?php echo  $array["12"]["monthSTh"]; ?></th>
        <th><?php echo  $array["12"]["fullMonthEn"]; ?></th>
        <th><?php echo  $array["12"]["fullMonthTh"]; ?></th>
        </tr>
</html>