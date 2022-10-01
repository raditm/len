$num = 123456789;

$km = $num/1000;
$km = round($km, 0, PHP_ROUND_HALF_UP);
echo "km: ".$km."<br>";
