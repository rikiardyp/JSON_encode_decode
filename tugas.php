<?php

// Variabel berisi JSON
$arrayData = '["nama":"Budi","umur":30,"hobi":["membaca","bermain game","coding"]';

$arrayData1 = '{"nama":"Budi","umur":30,"hobi":"coding"}';

//encode array ke format JSON
$jsonData = json_encode($arrayData);
echo "data dalam format JSON: " . $arrayData . "<br><br>";

//Decode JSON kembali ke array
$decodeData = json_decode($arrayData1);
echo "data dalam format JSON: ";
echo "nama : " . $decodeData->nama;
echo ",umur : " . $decodeData->umur;
echo ",hobi : " . $decodeData->hobi;
