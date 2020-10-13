<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php

$array =
[
    'classCode' =>
    [
        rand(1,1000) => [ 
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("vardas"), 
            'pavarde' => strtoupper("pavarde"), 
            'balai' => [ 
                'matematika' => rand(1,2),
                'informacines' => rand(1,2), 
                'anglu' => rand(1,2) 
            ]
        ],
        rand(1, 1000) => [
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("vardas"),
            'pavarde' => strtoupper("pavarde"), 
            'balai' => [
                'matematika' => rand(1,2), 
                'informacines' => rand(1,2), 
                'anglu' => rand(1,2) 
            ]
        ]
    ],

    'classCode2' =>
    [ 
        rand(1, 1000) => [ 
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("vardas"),
            'pavarde' => strtoupper("pavarde"), 
            'balai' => [
                'matematika' => rand(1,2),
                'informacines' => rand(1,2),
                'anglu' => rand(1,2) 
            ]
        ],
        rand(1, 1000) => [
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("vardas"), 
            'pavarde' => strtoupper("pavarde"), 
            'balai' => [
                'matematika' => rand(1,2),
                'informacines' => rand(1,2),
                'anglu' => rand(1,2)
            ]
        ]
    ],

    'classCode3' => [
        rand(1,1000) => [ 
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("vardas"), 
            'pavarde' => strtoupper("pavarde"), 
            'balai' => [ 
                'matematika' => rand(1,2),
                'informacines' => rand(1,2), 
                'anglu' => rand(1,2) 
            ]
        ],
        rand(1, 1000) => [
            'data' => date("Y-m-d"), 
            'vardas' => strtoupper("vardas"),
            'pavarde' => strtoupper("pavarde"), 
            'balai' => [
                'matematika' => rand(1,2), 
                'informacines' => rand(1,2), 
                'anglu' => rand(1,2) 
            ]
        ]
    ],
    
];

?>
    <table><tr><th>Klasė</th><th>Kodas</th><th>Vardas</th><th>Pavardė</th><th>Vidrukis</th><th>Duomenų formatavimo date</th></tr>
    <?php foreach($array as $klase => $mokiniai):?>
        <?php foreach($mokiniai as $data => $datainfo):?>
            <tr>
                <td><?=$klase;?></td>
                <td><?=$data;?></td>
                <td><?=$datainfo['vardas'];?></td>
                <td><?=$datainfo['pavarde'];?></td>
                <td>Vidurkis</td>
                <td><?=$datainfo['data'];?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </table>
</body>