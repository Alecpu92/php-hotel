<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<form action=""></form>

<?php
$hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    // echo "<pre>" :
    // var_dump {$hotels};
    // echo "</pre>";

    echo "<ul>";
foreach ($hotels as $hotel) {
    echo "<li>" . $hotel["name"] .
     " " . $hotel["description"] .
      " " . $hotel["parking"] .
       " " . $hotel["vote"] .
        " " . $hotel["distance_to_center"] .
         "</li>";
}

    echo "</ul>";
?>

<table border="1px">
        <tr>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>PARKING</th>
            <th>VOTE</th>
            <th>DISTANCE TO CENTER</th>
        </tr>

        <?php

            foreach ($hotels as $hotel) {

                if (($parking === null  
                    || ($parking === "yes" && $hotel['parking'])    // $hotel['parking'] === true
                    || ($parking === "no" && !$hotel['parking']))
                    && $vote <= $hotel['vote']) { // $hotel['parking'] === false

                    echo '<tr>';
                    echo '<td>' . $hotel['name'] . '</td>';
                    echo '<td>' . $hotel['description'] . '</td>';
                    echo '<td>' . ($hotel['parking'] ? "yes" : "no") . '</td>';
                    echo '<td>' . $hotel['vote'] . '/5</td>';
                    echo '<td>' . $hotel['distance_to_center'] . 'Km</td>';
                    echo '</tr>';
                }
            }
        ?>
    </table>

    
</body>
</html>