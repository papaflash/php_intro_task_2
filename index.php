<?php
$currentFileName = basename($_SERVER['SCRIPT_FILENAME']);
$currentLineNumber = __LINE__;
echo 'Имя файла: ' . $currentFileName . '<br/>'
    .'Номер строки: ' . $currentLineNumber . '<br/>';

$fish = 'Рыба';
$human = 'человек';
$manyLineArg = <<< LABEL
    $fish рыбою сыта, 
    а $human человеком
LABEL;
echo $manyLineArg;