<?php

# Bài tập 1: Tính tổng các số chẵn từ 1 đến n (n >= 2)
$n_1 = 9;
$t_1 = 0;
for ($i = 1; $i <= $n_1; $i++) {
    if ($i % 2 == 0) {
        $t_1 += $i;
    }
}
echo $t_1;
echo "<br>";

# Bài tập 2: Tính tổng nghịch đảo các số chia hết cho 3 từ 3 đến n (n >= 3)
$n_2 = 20;
$t_2 = 0;
for ($i = 3; $i <= $n_2; $i++) {
    if ($i % 3 == 0) {
        $t_2 += 1 / $i;
    }
}
echo $t_2;
echo "<br>";

# Bài tập 3: Tính tổng chuỗi
// T3 = 1/2 + 2/3 + 3/4 + ... + n/n+1 (n >= 1)
$n_3 = 10;
$t_3 = 0;
for ($i = 1; $i <= $n_3; $i++) {
    $t_3 += $i / ($i + 1);
}
echo $t_3;
echo "<br>";

# Bài tập 4: Giải phương trình bậc 2
$a = 1;
$b = 2;
$c = 3;

if ($a == 0) {
    if ($b == 0 && $c == 0) {
        echo "Phương trình vô số nghiệm";
    }
    elseif ($b == 0 || $c == 0) {
        echo "Phương trình vô nghiệm";
    }
    else {
        $x = - $c / $b;
        echo "Phương trình có nghiệm x = {$x}";
    }
}
else {
    $delta = pow($b, 2) - 4 * $a * $c;
    if ($delta < 0) {
        
    }
}