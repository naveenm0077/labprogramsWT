<?php

$con = mysqli_connect("localhost", "root", "") or error(msql_error());
mysqli_select_db($con, "students_detail") or error(mysql_error());
$i = 0;
$id = array();
$q = mysqli_query($con, "select * from student") or error(mysql_error());
if (mysqli_num_rows($q) > 0) {
    print "<h3>Student information before sorting</h3>";
    print
        "<table border size=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Mobile</th>
        </tr>";
    while ($data = mysqli_fetch_row($q)) {
        $id[$i] = $data[0];
        print
            "<tr>
            <td>$data[0]</td>
            <td>$data[1]</td>
            <td>$data[2]</td>
            <td>$data[3]</td>
        </tr>";
        $i++;
    }
    echo "</table>";
    sort($id);
    echo "<h3>Sorted data</h3><br>";
    echo "<table border=\"2\">
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Mobile</th>";
    for ($k = 0; $k < count($id); $k++) {
        $sq = "select * from student where id=\"$id[$k]\"";
        $result = mysqli_query($con, $sq);
        $rowcount = mysqli_num_rows(mysqli_query($con, $sq));
        if (mysqli_num_rows($result) > 0) {
            if ($row = mysqli_fetch_assoc($result)) {
                echo
                    "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['age'] . "</td>
                    <td>" . $row['mob'] . "</td>
                </tr>";
            }
        }
    }
    echo "</table>";
}

?>