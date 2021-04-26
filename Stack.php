<?php
$stack = array();

function push($data, &$stack) {
    $stack[] = $data;
}

function pop(&$stack)
{
    $len = count($stack);
    $top = $stack[$len-1];

    unset($stack[$len-1]);

    return $top;
}

// array()
print_r($stack);

push(1, $stack);
push(2, $stack);
push('some test', $stack);
push(array(25,12,1999), $stack);

// [1, 2, 'some test', [25, 12, 1999]]
print_r($stack);

// [25, 12, 1999]
echo pop($stack);
// 'some test'
echo pop($stack);

// [1, 2]
print_r($stack);
//peek(): lấy phần tử dữ liệu ở trên cùng của ngăn xếp, mà không xóa phần tử này.