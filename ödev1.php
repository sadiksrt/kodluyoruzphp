<?php

function ucgenCiz($satirSayisi) {
    if ($satirSayisi <= 0) {
        echo "Satır sayısı pozitif olmalıdır.";
        return;
    }

    $satir = 1;
    while ($satir <= $satirSayisi) {
        for ($bosluk = 1; $bosluk <= ($satirSayisi - $satir); $bosluk++) {
            echo " ";
        }

        for ($yildiz = 1; $yildiz <= (2 * $satir - 1); $yildiz++) {
            echo "*";
        }
        echo "\n";

        $satir++;
    }
}

$satirSayisi = intval(readline("Üçgenin satır sayısını girin: "));
ucgenCiz($satirSayisi);

?>
