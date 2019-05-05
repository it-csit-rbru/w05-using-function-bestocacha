<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6014421010-w05</title>
</head>
<body>
    <?php
    echo "<B>ฟังก์ชั่นใน PHP 5 ฟังก์ชั่น</B> (คำอธิบายและตัวอย่างอยู่ในโค้ด ในหน้าเว็บจะแสดงผลลัพธ์)" . "<br> <br>";
    ?>
    <?php
    echo "<B>1. ฟังก์ชัน cal_days_in_month</B>" . "<br>";
        /* ฟังก์ชัน cal_days_in_month
            ฟังก์ชั่นนี้สามารถหาค่าจำนวนวันของเดือนไหน ปีไหนก็ได้ โดยเราจะต้องกำหนดค่าพารามิเตอร์ 3 ค่า ดังนี้
                Calendar - กำหนดค่า ประเภทของปฏิทิน
                    0 or CAL_GREGORIAN – ใช้ปฎิทินระบบ Gregorian                                                                         
                    1 or CAL_JULIAN – ใช้ปฎิทินระบบ Julian                                                                                               
                    2 or CAL_JEWISH – ใช้ปฎิทินระบบ Jewish                                                                                               
                    3 or CAL_FRENCH – ใช้ปฎิทินระบบ French Revolutionary
                Month - กำหนดเดือน 
                    1 - มกราคม ..... 12 – ธันวาคม
                Year - กำหนดปีค.ศ.
            รูปแบบ
                cal_days_in_month ( int $calendar , int $month , int $year ) : int
         */
        $d=cal_days_in_month(CAL_GREGORIAN,2,1965);
        echo "There was $d days in February 1965.<br>"; //28

        $d=cal_days_in_month(CAL_GREGORIAN,2,2004);
        echo "There was $d days in February 2004."; //29
        ?>

       
        <br>
        <br>

    <?php
        echo "<B>2. ฟังก์ชัน array_sum</B>" . "<br>";
        /* ฟังก์ชัน array_sum
            ฟังก์ชันนี้เป็นการนำค่าในอาร์เรย์มาบวกกันทั้งหมด
            รูปแบบ 
                array_sum ( array $array ) : number
         ตัวอย่าง */
        $a = array(2, 4, 6, 8);
        echo "sum(a) = " . array_sum($a) . " <br>"; //20
        $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
        echo "sum(b) = " . array_sum($b) . " <br>"; //6.9
    ?>
        
        <br>
        <br>
    <?php
    echo "<B>3. ฟังก์ชัน chop</B>" . "<br>";
        /*  ฟังก์ชัน chop
            ฟังก์ชันนี้เป็นการตัดช่องว่างด้านขวาของข้อความ 
            รูปแบบ 
                chop(string) *string คือ สตริงที่ต้องการตัดช่องว่างด้านขวา*
         ตัวอย่าง */
         $str = "this is the test string ";
         echo $str."*"."<br />"; // ข้อความกับเครื่องหมาย* เว้นช่องว่าง
         echo chop($str)."*"."<br />"; //ข้อความกับเครื่องหมายติดกัน
    ?>
        
        <br>
        <br>
    <?php
    echo "<B>4. ฟังก์ชัน Pow</B>" . "<br>";
        /*  ฟังก์ชัน Pow
            ฟังก์ชันนี้จะใช้ในการหาค่าเลขยกกำลัง
            รูปแบบ 
                 pow (ตัวเลขฐาน,ตัวเลขยกกำลัง)
         ตัวอย่าง */
         echo "result = ". pow (5,2)."<br>"; // 25
         echo "result = ". pow (5,5)."<br>"; // 3125
    ?>

        <br>
        <br>
    <?php
    echo "<B>5. ฟังก์ชัน Round</B>" . "<br>";
        /*  ฟังก์ชัน Round
            ฟังก์ชันนี้เป็นฟังก์ชันที่มีการปัดเศษลงหากหลักสุดท้ายมีค่าน้อยกว่า 5 และปัดเศษขึ้นหากหลักสุดท้ายมีค่าตั้งแต่ 5 ขึ้นไป พารามิเตอร์ มีดังนี้
            val- ค่าตัวเลข
            precision - จำนวนทศนิยม
            mode - เป็นการเลือกประเภทในการปัดเศษ
                PHP_ROUND_HALF_UP : ถึง 5 ปัดขึ้น
                PHP_ROUND_HALF_DOWN : ต่อให้ถึง 5 ก็ปัดลง
                PHP_ROUND_HALF_EVEN : จำนวนเต็มเป็นเลขคี่และถึง 5 ปัดขึ้น
                PHP_ROUND_HALF_ODD : จำนวนเต็มเป็นเลขคู่และถึง 5 ปัดขึ้น
            รูปแบบ 
                 round ( float $val [, int $precision = 0 [, int $mode = PHP_ROUND_HALF_UP ]] ) : float
         ตัวอย่าง */
         echo "3.4 = ". round(3.4). "<br>";         // 3
         echo "3.5 = ". round(3.5). "<br>";         // 4
         echo "9.5 = ". round(9.5, 0, PHP_ROUND_HALF_UP). "<br>";   // 10
         echo "9.5 = ". round(9.5, 0, PHP_ROUND_HALF_DOWN). "<br>"; // 9
         echo "9.5 = ". round(9.5, 0, PHP_ROUND_HALF_EVEN). "<br>"; // 10
         echo "9.5 = ". round(9.5, 0, PHP_ROUND_HALF_ODD). "<br>";  // 9
         echo "1.55 = ". round( 1.55, 1, PHP_ROUND_HALF_UP). "<br>";   //  1.6
         echo "1.55 = ". round( 1.55, 1, PHP_ROUND_HALF_DOWN). "<br>"; //  1.5
         
    ?>


</body>
</html>