<?php
echo "TASK 1\n";

echo "Current file: ";
echo __FILE__;

echo "\n";

echo "Current row: ";
echo __LINE__;

echo "\nTASK 2\n";

echo <<<TAG
heredoc text
TAG;

echo "\nTASK 3\n";

$a='Рыба';
$b='человек';

echo "$a рыбою сыта, а $b человеком";