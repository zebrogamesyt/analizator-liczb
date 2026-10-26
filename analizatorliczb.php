<?php
$sumaWszystkich = 0;
$sumaParzystych = 0;
$sumaNieparzystych = 0;
$liczbyPodzielnePrzez3 = 0;

echo "<h2>Analiza liczb od 1 do 100</h2>";

for ($i = 1; $i <= 100; $i++) {
    echo $i . " - ";

    if ($i % 2 == 0) {
        echo "parzysta";
        $sumaParzystych += $i;
    } else {
        echo "nieparzysta";
        $sumaNieparzystych += $i;
    }

    if ($i % 3 == 0) {
        echo ", podzielna przez 3";
        $liczbyPodzielnePrzez3++;
    }

    echo "<br>";

    $sumaWszystkich += $i;
}

echo "<hr>";
echo "<h2>Podsumowanie</h2>";

echo "Suma wszystkich liczb: " . $sumaWszystkich . "<br>";
echo "Suma liczb parzystych: " . $sumaParzystych . "<br>";
echo "Suma liczb nieparzystych: " . $sumaNieparzystych . "<br>";
echo "Liczb podzielnych przez 3: "
    . $liczbyPodzielnePrzez3 . "<br>";
?>