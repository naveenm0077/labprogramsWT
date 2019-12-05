<html>
    <head>
        <title>CALCULATOR_PHP</title>
    </head>
    <body>
        <center>
            <form method="GET" action="lab8a.php">
                <fieldset>
                    <label>Number 1: </label>
                    <input type="number" name="num1"><br><br>
                    <label>Number 2: </label>
                    <input type="number" name="num2"><br><br>
                    <select name="op">
                        <option value="+">Addition</option>
                        <option value="-">Subtraction</option>
                        <option value="*">Multiplication</option>
                        <option value="/">Division</option>
                    </select><br><br>
                    <input type="submit" value="Result"><br><br>
                    <?php
                        $res=0;
                        $a=$_GET["num1"];
                        $b=$_GET["num2"];
                        $op=$_GET["op"];
                        switch ($op)
                        {
                            case '+':
                                $res=$a+$b;
                                break;
                            case '-':
                                $res=$a-$b;
                                break;
                            case '*':
                                $res=$a*$b;
                                break;
                            case '/':
                                $res=$a/$b;
                                break;
                            default: break;
                        }
                        echo "<input type=\"number\" value=\"$res\">";
                    ?>
                </fieldset>
            </form>
        </center>
    </body>
</html>