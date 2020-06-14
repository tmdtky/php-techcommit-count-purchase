<?php
    const TAX = 1.1;

    while (true) {
        try {
            print "商品の金額を入力してください";
            $product_price = trim(fgets(STDIN));
            if ($product_price < 0) {
                throw new Exception();
            }
            if (is_numeric($product_price) === false) {
                throw new Exception();
            }

            print "商品の個数を入力してください";
            $product_quantity = trim(fgets(STDIN));
            if ($product_quantity < 0) {
                throw new Exception();
            }
            if (is_numeric($product_quantity) === false) {
                throw new Exception();
            }

            $total_price = $product_price * $product_quantity * TAX;

            print "合計金額は${total_price}円です。";
            return;
        } catch (Exception $ex) {
            print "入力の値が不正です。0以上の数を入力してください。";
        }
    }