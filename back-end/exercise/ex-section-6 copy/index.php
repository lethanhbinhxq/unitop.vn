<?php

# Bài tập 1: Tính tổng các số chẵn từ 1 đến n (n >= 2)
$n_1 = 6;
$t_1 = 0;
for ($i = 2; $i <= $n_1; $i += 2) {
    $t_1 += $i;
}
echo "Bài tập 1 <br>";
echo $t_1;
echo "<br>-----------<br>";

# Bài tập 2: Tính tổng nghịch đảo các số chia hết cho 3 từ 3 đến n (n >= 3)
$n_2 = 10;
$t_2 = 0;
for ($i = 3; $i <= $n_2; $i += 3) {
    $t_2 += (1 / $i);
}
echo "Bài tập 2 <br>";
echo $t_2;
echo "<br>-----------<br>";

# Bài tập 3: Tính tổng chuỗi
// T3 = 1/2 + 2/3 + 3/4 + ... + n/n+1 (n >= 1)
$n_3 = 10;
$t_3 = 0;
for ($i = 1; $i <= $n_3; $i++) {
    $t_3 += ($i / ($i + 1));
}
echo "Bài tập 3 <br>";
echo $t_3;
echo "<br>-----------<br>";

# Bài tập 4: Giải phương trình bậc 2
$a = 1;
$b = -1;
$c = -6;
echo "Bài tập 4 <br>";
echo "Giải phương trình bậc 2: {$a}x^2 + {$b}x + {$c} = 0 <br>";

if ($a == 0) {
    if ($b == 0 && $c == 0) {
        echo "Phương trình vô số nghiệm";
    } elseif ($b == 0 || $c == 0) {
        echo "Phương trình vô nghiệm";
    } else {
        $x = -$c / $b;
        echo "Phương trình có nghiệm x = {$x}";
    }
} else {
    $delta = pow($b, 2) - 4 * $a * $c;
    if ($delta < 0) {
        $x_r = -$b / (2 * $a);
        $x_i = sqrt(-$delta) / (2 * $a);
        echo "Phương trình có nghiệm phức:<br>";
        echo "x1 = {$x_r} - {$x_i}i <br>";
        echo "x2 = {$x_r} + {$x_i}i <br>";
    }
    elseif ($delta == 0) {
        $x = -$b / (2* $a);
        echo "Phương trình có nghiệm kép x = {$x}";
    }
    else {
        $x1 = (-$b - sqrt($delta)) / (2 * $a);
        $x2 = (-$b + sqrt($delta)) / (2 * $a);
        echo "Phương trình có hai nghiệm thực phân biệt:<br>";
        echo "x1 = {$x1} <br>";
        echo "x2 = {$x2}";
    }
}