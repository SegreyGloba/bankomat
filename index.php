<?php
$cash = 100000;
$inputCash = $argv[1];



$nominals = [
  '500',
  '200',
  '100',
  '50',
  '20',
  '10',
  '5',
  '2',
  '1',
];

if ($cash >= $inputCash){
    $result = [];
    foreach ($nominals as $nominal) {
        $count = intdiv($inputCash, $nominal);
        if (!$count){
            continue;
        }
        $inputCash = $inputCash % $nominal;
        $result[$nominal] = $count;
    }
}

else {
    echo "В банкомате только 100000 грн.";
}


var_export($result);

