<?php
    print "サイコロの目を入力してください。（数字は1-6にして下さい。）";
    $dice_number = trim(fgets(STDIN));
    $dice_back_number = 7 - $dice_number;

    print "サイコロの裏の目は${dice_back_number}です。";