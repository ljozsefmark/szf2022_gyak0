<?php

require_once 'conf/TemplateRenderer.php';
$loader = new \Twig\Loader\FilesystemLoader('pages');
$twig = new \Twig\Environment($loader, []);


$jsonData = file_get_contents('resources/json/Universities_Schoolarships_All_Around_the_World.json');
$decodedData = json_decode($jsonData, true);


foreach ($decodedData as $pRecord){
    $newRecord = ORM::for_table('scholarships')->create();
    $newRecord->id = $pRecord['id'];
    $newRecord->title = $pRecord['title'];
    $newRecord->funds= $pRecord['funds'];
    $newRecord->date = $pRecord['date'];
    $newRecord->location = $pRecord['location'];
    $newRecord->save();
}

echo $twig->render('success.twig');
