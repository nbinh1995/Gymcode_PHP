<?php
$options = array('options' => ["min_range" => 1, "max_range" => 100]);
if (filter_input(INPUT_POST, 'bingo', FILTER_VALIDATE_INT, $options) != false) {
    $bingo = $_POST['bingo'];
    $low = 1;
    $high = 100;
    while (1) {
        $guess = rand($low, $high);
        echo '<br>So doan: ' . $guess;
        if ($guess == $bingo) {
            echo '<br>BINGO <br> <a href="/">Back</a>';
            break;
        } elseif ($guess > $bingo) {
            echo '<br>Sai rui be hon di.';
            $high = $guess - 1;
        } elseif ($guess < $bingo) {
            echo '<br>Sai rui lon hon di.';
            $low = $guess + 1;
        };
    }
} else {

    echo '<br>Nhap so nguyen tu 1-100 <br> <a href="/">Back</a>';
}
