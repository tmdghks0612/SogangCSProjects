<?
echo "<table border='1'><br>";

for ($rcnt = 1; $rcnt < 10; $rcnt++) {
   echo "<tr>";

   for ($ccnt = 1; $ccnt < 10; $ccnt++) {
        echo "<td>$rcnt x $ccnt = ",($rcnt*$ccnt), "</td>";
   }

   echo "</tr>";
}

echo "</table>";
?>