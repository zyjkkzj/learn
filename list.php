<?php
    
    // list()函数 将数组中的值赋给变量
    // list() 函数用于在一次操作中给一组变量赋值。
    // 该函数只用于数字索引的数组，且假定数字索引从 0 开始。
    // 下面是简单的实例，交换了变量的值
    $a="abc";
    $b="edf";
    echo $a;
    echo "<br>";
    echo $b;

    echo "<hr>";

    list($a,$b)=array($b,$a);

    echo $a;
    echo "<br>";
    echo $b;