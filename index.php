<?php 
$day = date('N');
if ($day == 1 || $day == 3 || $day == 5) {
    $john = "8:00-12:00";
} else {
    $john = "Нерабочий день";
} 
if ($day == 2 || $day == 4 || $day == 6) {
    $jane = "12:00-16:00";
} else {
    $jane = "Нерабочий день";
} 
echo "<table border ='1'>";
echo "<tr>";
echo "<th>№</th>";
echo "<th>Фамилия Имя</th>";
echo "<th>График работы</th>";
echo "</tr>";
echo "<tr>";
echo "<td>1</td>";
echo "<td>John Styles</td>";
echo "<td>$john</td>";
echo "</tr>";
echo "<tr>";
echo "<td>2</td>";
echo "<td>Jane Doe</td>";
echo "<td>$jane</td>";
echo "</tr>";
echo "</table>";
echo "<h2>Цикл for</h2>";
$a = 0;
$b = 0; 
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Итерация $i: a = $a, b = $b <br>";
} 
echo "End of the loop: a = $a, b = $b";
echo "<h2>Цикл while</h2>";
$a = 0;
$b = 0; 
$i = 0;
while ($i <= 5) {
     $a += 10;
    $b += 5;
    echo "Итерация $i: a = $a, b = $b <br>";
    $i++;
} 
echo "End of the loop: a = $a; b = $b";
echo "<h2>Цикл do-while</h2>";
$a = 0;
$b = 0; 
$i = 0;
do {
      $a += 10;
    $b += 5;
     echo "Итерация $i: a = $a, b = $b <br>";
    $i++;
} while ($i <= 5);
echo "End of the loop: a = $a, b = $b";
