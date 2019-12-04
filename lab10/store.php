<?php

$db=mysqli_connect("localhost","root","") or error(mysql_error());
mysqli_select_db($db,"students_detail") or error(mysql_error());
$id=$_POST["id"];
$name=$_POST["Name"];
$age=$_POST["Age"];
$mob=$_POST["Mob"];
if ($id>0)
{
    $q=mysqli_query($db,"insert into student values('$id','$name','$age','$mob')");
    if ($q)
    {
        echo
            "<script>
            alert(\"Insert Successful\");
            window.location.href=\"retrieve.php\";
            </script>";
    }
    else {
        echo
            "<script>
            alert(\"Error\");
            </script>";
    }
}
else {
    echo
        "<script>
        alert(\"Invalid ID\");
        </script>";
}
?>
