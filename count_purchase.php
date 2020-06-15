<?php

    print "買い物スタート\n";

    // 所持金
    $possession = 1000;
    print "所持金は1000円です。\n";

    // 食パンの値段は100円から300円までの間でランダムに決まる
    $bread_price = mt_rand(100, 300);
    print "本日の食パンの値段は${bread_price}円です。\n";

    // 所持金がなくなり、食パンの購入ができなくなるまで買い物を続ける
    $count = 0;
    while ($possession >= $bread_price) {
        $possession -= $bread_price;
        $count++;
    }

    print "食パンが${count}個買えました。\n";
    print "残金は${possession}円です\n";
