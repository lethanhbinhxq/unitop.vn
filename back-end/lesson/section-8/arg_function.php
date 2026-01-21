<?php

#Hàm có 1 tham số
function check_even ($n) {
    if ($n %2== 0) {
        echo "{$n} là số chẵn";
    }
}
// check_even(6);

#Hàm có 2 tham số
function sum($a, $b) {
    $t = $a + $b;
    echo $t;
}

// # Hàm có tham số tùy biến
// function sum_multi_number() {
//     $list_num = func_get_args();
//     $t = 0;
//     foreach($list_num as $num) {
//         $t += $num;
//     }
//     echo "<br>{$t}</br>";
// }

// sum_multi_number(1, 2, 3, 4);

function sum_multi_number($list_number = array()) {
    if(is_array($list_number)) {
        $t = 0; 
        foreach ($list_number as $value) {
            $t += $value;
        }
        echo $t;
    }
}

function myFunction($arg1, $arg2, $option=array()) {

}

// <input type='text' name='' value='' id='' class='' />
function create_input_text($name, $value, $option=array()) {
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);
    if (!empty($option)) {
        $id = $option['id'];
        $class = $option['class'];
    }
    $input_html = "<input type='text' name='{$name}' value='{$value}' id='{$id}' class='{$class}'/>";
    echo $input_html;
}

create_input_text("username","",$option = array('id' => 'username', 'class' => 'form_input'));