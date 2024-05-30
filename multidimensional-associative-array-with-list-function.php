<?php
//For Associative Array
$emp = [

    ["id" => 1, "name" => "Krishna", "designation" => "Manager", "salary" => 50000],
    ["id" => 2, "name" => "Rajesh", "designation" => "Salesman", "salary" => 20000],
    ["id" => 3, "name" => "Mohan", "designation" => "Computer Operator", "salary" => 35000],
    ["id" => 4, "name" => "Yogesh", "designation" => "Driver", "salary" => 25000],
    ["id" => 5, "name" => "Ravi", "designation" => "Software Engineer", "salary" => 60000]
];

echo "<table border='2px' cellpadding='5px' cellspacing='0'>
<tr>
<th>EMP ID</th>
<th>EMP Name</th>
<th>EMP Designation</th>
<th>EMP Salary</th>
</tr>";
foreach ($emp as list("id" => $id, "name" => $name, "designation" => $designation, "salary" => $salary)) {
    echo "<tr><td>$id</td><td>$name</td><td>$designation</td><td>$salary</td></tr>";
}
echo "</table>";
?>