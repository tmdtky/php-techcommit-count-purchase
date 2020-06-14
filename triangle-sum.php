<?php
    print "三角形の1つ目の角度を入力してください。";
    $angle01 = trim(fgets(STDIN));

    print "三角形の2つ目の角度を入力してください。";
    $angle02 = trim(fgets(STDIN));
    $angle03 = 180 - ($angle01 + $angle02);

    print "三角形の残り１つの角度は${angle03}度です。";