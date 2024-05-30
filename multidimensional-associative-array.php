<?php
$marks = [
    "krishna" => ["physics" => 85, "maths" => 78, "chemistry" => 89],
    "rohit" => ["physics" => 77, "maths" => 87, "chemistry" => 65],
    "Dinesh" => ["physics" => 87, "maths" => 67, "chemistry" => 54]
];

echo "<table border='2px' cellpadding='5px' cellspacing='0' >
<tr>
      <th>Student Name</th>
      <th>Physics</th>
      <th>Math</th>
      <th>Chemistry</th>
      </tr>";
foreach ($marks as $key => $v1) {
    echo "<tr><td>
    $key
    </td>";
    foreach ($v1 as $v2) {
        echo "<td>$v2</td>";
    }
    echo "</tr>";
}


echo "</table>";


// echo "<pre>";
// print_r($marks);
// echo "</pre>";


?>