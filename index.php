<?php
echo "TASK 2.1\n";

echo "Current file: ";
echo __FILE__;

echo "\n";

echo "Current row: ";
echo __LINE__;

echo "\nTASK 2.2\n";

echo <<<TAG
heredoc text
TAG;

echo "\nTASK 2.3\n";

$a='Рыба';
$b='человек';

echo "$a рыбою сыта, а $b человеком";

echo "\nTASK 3.1\n";

//$variable = 3.14;
 $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
// $variable = [];

//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float,
//  int, string, null или other
if (is_bool($variable)) {
    $type = "boolean";
} else if (is_float($variable)) {
    $type = "float";
} else if (is_int($variable)) {
    $type = "int";
} else if (is_string($variable)) {
    $type = "string";
} else if (is_null($variable)) {
    $type = "null";
} else {
    $type = "other";
}
echo "type is $type";

echo "\nTASK 3.2\n";

switch ($variable) {
    case is_bool($variable):
        $type = "boolean";
        break;
    case is_float($variable):
        $type = "float";
        break;
    case is_int($variable):
        $type = "int";
        break;
    case is_string($variable):
        $type = "string";
        break;
    case is_null($variable):
        $type = "null";
        break;
    default:
        $type = "other";
}

echo "type is $type";