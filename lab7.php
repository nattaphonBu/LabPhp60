<?php
$count = ['สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน'];
$count1=strlen($_GET['number']);
$count2=($_GET['number']);
//strlen($_GET['number']);
for($i=0;$i<$count1;$i++){
    switch($count2[$i]){
       
        case 1: echo "หนึ่ง";break;
        case 2: echo "สอง";break;
        case 3: echo "สาม";break;
        case 4: echo "สี่";break;
        case 5: echo "ห้า";break;
        case 6: echo "หก";break;
        case 7: echo "เจ็ด";break;
        case 8: echo "แปด";break;
        case 9: echo "เก้า";break;
    }
    for($j=6;$j>=$count1;$j--){
        if($j==$count1){
            echo $count[$j-2];
        }
        
    }
    
}

?>