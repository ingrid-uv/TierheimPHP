<!DOCTYPE html><he<d><meta charset="utf-8"></head><body>
    <?php
$con = mysqli_connect("", "root", "janina");
mysqli_select_db($con, "tierheim");
$res = mysqli_query($con, "SELECT * FROM hunde");
$num = mysqli_num_rows($res);
if($num > 0) echo "Ergebnis:<br>";
else         echo "Keine Ergebnisse<br>";
while ($dsatz = mysqli_fetch_assoc($res))
{
    echo $dsatz["HundName"] . ", "
    .    $dsatz["HundCode"] . ", "
    .    $dsatz["HundGeburtstag"] . ", "
    .    $dsatz["HundAnkunft"] . ", "
    .    $dsatz["HundGeschlecht"] . ", "
    .    $dsatz["HundRasse"] . ", "
    .    $dsatz["HundCharakter"] . ", "
    .    $dsatz["HundGesundheit"] . ", "
    .    $dsatz["HundHerkunft"] . ", "
    .    $dsatz["HundBeschreibung"] . "<br>";
}
mysqli_close($con);

?>
</body></html>