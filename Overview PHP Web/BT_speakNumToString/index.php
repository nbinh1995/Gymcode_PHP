<?php 
function readNum($num) {
    $text = null;
    switch($num){
        case ($num<10):
                if($num === 0) $text ='zero';
                if($num === 1) $text = 'one';
                if($num === 2) $text = 'two';
                if($num === 3) $text = 'three';
                if($num === 4) $text = 'four';
                if($num === 5) $text = 'five';
                if($num === 6) $text = 'six';
                if($num === 7) $text = 'seven';
                if($num === 8) $text = 'eight';
                if($num === 9) $text = 'nine';
                break;
            case ($num<20):
                if($num === 10) $text ='ten';
                if($num === 11) $text = 'eleven';
                if($num === 12) $text = 'twelve';
                if($num === 13) $text = 'thirteen';
                if($num === 14) $text = 'fourteen';
                if($num === 15) $text = 'fifteen';
                if($num === 16) $text = 'sixteen';
                if($num === 17) $text = 'seventeen';
                if($num === 18) $text = 'eighteen';
                if($num === 19) $text = 'nineteen';
            break;
            case (19<$num && $num<100):
                if($num === 20) $text ='twenty';
                if($num === 30) $text = 'thirty';
                if($num === 40) $text = 'forty';
                if($num === 50) $text = 'fifty';
                if($num === 60) $text = 'sixty';
                if($num === 70) $text = 'seventy';
                if($num === 80) $text = 'eighty';
                if($num === 90) $text = 'ninety';
            break;
            case (99<$num && $num<1000):
                if($num === 100) $text ='one-hundredth';
                if($num === 200) $text = 'two-hundredth';
                if($num === 300) $text = 'three-hundredth';
                if($num === 400) $text = 'four-hundredth';
                if($num === 500) $text = 'five-hundredth';
                if($num === 600) $text = 'six-hundredth';
                if($num === 700) $text = 'seven-hundredth';
                if($num === 800) $text = 'eight-hundredth';
                if($num === 900) $text = 'nine-hundredth';
            break;
            // default: $text +='';
    }  
    return $text;
   }
$display = null;
$temp =null;
if ($_SERVER["REQUEST_METHOD"] === "GET") {$temp = $_GET["num"];}
    $nus = (int)$temp; 
    switch(strlen($temp)){
    case 1:
        
    $display = readNum($nus);
    break;
    case 2:
        if($nus < 20 || $nus%10 === 0) {$display=readNum($nus);} else { 
            $ones = (int)round($nus%10,0);
            $tens = (int)($nus - $ones);
           $display= readNum($tens).'-'.readNum($ones);}
           
    break;
    case 3:
        if($nus%100 === 0) {$display=readNum($nus);}else{
        $twos = (int)round($nus%100,0);
        $threes = (int)($nus - $twos);
        if($twos < 20 || $twos%10 === 0) {$display=readNum($threes).'-'.readNum($twos);} else { 
            $ones = (int)round($twos%10,0);
            $tens = (int)($twos - $ones);
           $display= readNum($threes).' '.readNum($tens).'-'.readNum($ones);} 
           }}
    echo 'Số '.$temp.' dich ra chuoi la: '.$display;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="">NUMBER</label>
        <input type="text" name="num" placeholder="Nhap so can doc">
        <input type="submit" value="Submit">
       
    </form>
</body>
</html>