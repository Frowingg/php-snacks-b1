<?php 
$students = [
        '1A' => [
                [
                    'name' => 'Alessio',
                    'lastname' => 'Rossi',
                    'avarage_vote' => '4'
                ],
                [
                    'name' => 'Marco',
                    'lastname' => 'Verdi',
                    'avarage_vote' => '8'
                ],
                [
                    'name' => 'Giorgio',
                    'lastname' => 'Violi',
                    'avarage_vote' => '7'
                ],
        ],
        '1B' => [
            [
                'name' => 'Giulio',
                'lastname' => 'Gialli',
                'avarage_vote' => '9'
            ],
            [
                'name' => 'Riccardo',
                'lastname' => 'Rossi',
                'avarage_vote' => '5'
            ],
            [
                'name' => 'Claudio',
                'lastname' => 'Bianchi',
                'avarage_vote' => '7'
            ],
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php
    foreach($students as $thisClass) {

        foreach($thisClass as $thisStudent) {

            foreach($thisStudent as $thisInfo => $thisInfoValue) {
                echo $thisInfo . ' = ';                
                echo $thisInfoValue . ' ';  
                ?>
                <br>
                <?php
            }
            ?>
            <br>
            <?php
        }
    }
    ?>

</body>
</html>
