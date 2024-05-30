<?php
$array = [

    [1, "Krishna", "Manager", 50000],
    [2, "Rajesh", "Salesman", 20000],
    [3, "Mohan", "Computer Operator", 35000],
    [4, "Yogesh", "Driver", 25000]
];

echo "<table border='2px' cellpadding='5px' cellspacing='0'>
<tr>
<th>EMP ID</th>
<th>EMP Name</th>
<th>EMP Designation</th>
<th>EMP Salary</th>
</tr>";
foreach ($array as list($id, $name, $designation, $salary)) {
    echo "<tr><td>$id</td><td>$name</td><td>$designation</td><td>$salary</td></tr>";
}
echo "</table>";

?>