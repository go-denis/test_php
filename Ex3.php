<?

$arrayInfo = [
    'name' => 'Ivan',
    'surname' => 'Ivanov',
    'address' => 'Petrovsk',
    'telefone' => '8 (985) 222-33-44'
];


foreach ($arrayInfo as $key => $value){
    echo 'Ключ: '.$key.' Значение: '.$value.PHP_EOL;
}