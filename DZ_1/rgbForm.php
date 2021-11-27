<div>
    <h2>Заливка выборочным цветом</h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <p><input type="text" name="getR" placeholder="Значение цвета-R"></p>
        <p><input type="text" name="getG" placeholder="Значение цвета-G"></p>
        <p><input type="text" name="getB" placeholder="Значение цвета-B"></p>
        <input style="background-color: " type="submit" value="Accept">
    </form>
</div>
<div>
    <h3>Вывод результата:</h3>
    <p><span id="txt">Результат работы приложения!!!</span></p>

</div>
<?php
$arrRGB = array($_GET["getR"], $_GET["getG"], $_GET["getB"]);
//print_r($arrRGB);
$rgb = "rgb(" . $arrRGB[0] . ", " . $arrRGB[1] . ", " . $arrRGB[2] . ")";
echo "Цвет заливки: " . $rgb;
echo "<script>\n";
echo "let text = document.getElementById(`txt`);";
echo "text.style = `background-color: $rgb; color: red`;";
echo "</script>";
