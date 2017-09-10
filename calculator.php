<!DOCTYPE html>
<html>
<head>
    <title>Kevin Calculator</title>
    <link rel="stylesheet" type="text/css" href="calstyle.css">
    <meta charset="utf-8">
</head>
<body>
<h1>Welcome to Kevin's calculator</h1>
<div id="calculator">
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
    <input type="number" name="para1">
    <input type="radio" name="op" value="+">+
    <input type="radio" name="op" value="-">-
    <input type="radio" name="op" value="*">*
    <input type="radio" name="op" value="/">/
    <input type="number" name="para2">
    <input type="submit" value="Calculate">
</form>
</div>
<?php
if (isset($_GET['para1']) && isset($_GET['para2']) && isset($_GET['op'])) {
    $op    = $_GET['op'];
    $para1 = $_GET['para1'];
    $para2 = $_GET['para2'];
    switch ($op) {
        case '+':
            $result = $para1 + $para2;
            break;
        case '-':
            $result = $para1 - $para2;
            break;
        case '*':
            $result = $para1 * $para2;
            break;
        case '/':
            if ($para2 == 0) {
                $result = "Divisor cannot be 0";
            } else {
                $result = $para1 / $para2;
            }
            break;
        default:
            break;
    }
    //$result = "<h2 align=\"center\">". $para1. ' '. $op. ' '. $para2. ' = '. $result. "</h2>";
    $re_str = "<h2 align=\"center\">$para1 $op $para2 = $result</h2>";
    echo $re_str;
}
?>
</body>
</html>
