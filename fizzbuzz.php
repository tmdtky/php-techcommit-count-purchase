<?php
    for($i = 1; $i <= 150; $i++) {
        if($i % 3 == 0 || mb_substr($i, -1) == 3) {
            echo $i."!\n";
        } else {
            echo $i."\n";
        }
    }