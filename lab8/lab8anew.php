<html>
    <head>
        <title>CALCULATOR_PHP</title>
    </head>
    <style>
      [type="number"]::-webkit-inner-spin-button,
      [type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
      }
    </style>
    <body>
        <center>
            <form method="GET" action="altlab8a.php">
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
                        if( isset($_GET["num1"]))
                        $a=(int)$_GET["num1"];
                        if( isset($_GET["num2"]))
                        $b=(int)$_GET["num2"];
                        if( isset($_GET["op"]))
                        {
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
                        }
                        echo "<input type=\"number\" value=\"$res\">";
                    ?>
                </fieldset>
            </form>
        </center>
    </body>
</html>