<!-- <?php
$name = "ahmad";
echo $name;
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br";
echo $_SERVER["PHP_SELF"];
// echo $_GET["name"];
// echo $_GET["lastName"];
// echo $_SESSION["name"];
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="clac.css">
</head>
<body>
<form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post">
    <label for="">FIRST NUMBER</label>
    <input name="number1" type="number" placeholder="enter the first number">
    <select name="opritor" id="">
        <option value="plus">+</option>
        <option value="mines">-</option>
        <option value="mutiply">*</option>
        <option value="divid">/</option>
        <option value="module">%</option>
    </select>
    <label for="">Second Number</label>
    <input type="number" placeholder="enter the second number" name="number2">
    <button>save</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] ==="POST"){
    $number1 =filter_input(INPUT_POST,"number1",FILTER_SANITIZE_NUMBER_FLOAT);
    $number2 =filter_input(INPUT_POST,"number2",FILTER_SANITIZE_NUMBER_FLOAT);
    $opritor=htmlspecialchars($_POST["opritor"]);

    $error = false;
    if(empty($number1)|| empty($number2)|| empty($opritor)){
        $error = true;
        echo "all inputs should be filed";
    }
    $error1 = false;
    if(is_numeric($number1)|| is_numeric($number2)){
        $error1 = true;
    }
    if(!$error){
        $result = 0;
        switch($opritor){
            case "plus":
                $result = $number1 + $number2;
                break;
                case "mines":
                    $result = $number1 - $number2;
                    break;
                    case "mutiply":
                        $result = $number1 * $number2;
                        break;
                        case "divid":
                            $result = $number1 / $number2;
                            break;
                            case "module":
                                $result = $number1 % $number2;
                                break;
                                default:
                                echo "all something win to wrong";
        }
        echo "<p class='result'>$result</p>";
    }
}
?>  
</body>
</html>
