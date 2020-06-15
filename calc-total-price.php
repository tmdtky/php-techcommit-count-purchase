<?php
    /*
       大森公式より「P波の速さ」×「初期微動継続時間」=「震源からの距離」
       大森公式に関する参考情報
       http://www2.kobe-c.ed.jp/shizen/strata/equake/trans/index2.html
    */

    // P波の速さ(7km/秒)
    const P_WAVE = 7;

    // 初期微動継続時間
    print "初期微動継続時間（秒）を入力してください。";
    $duration_of_preliminary_tremors = trim(fgets(STDIN));

    //震源からの距離
    $distance_to_epicenter = P_WAVE * $duration_of_preliminary_tremors;
    print "震源地から現在地までの距離（km）は${distance_to_epicenter}kmです。";
