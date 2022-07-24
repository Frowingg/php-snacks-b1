<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
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
foreach ($db as $key => $value) {

    foreach ($value as $sub_key => $sub_val) {
              
        foreach ($sub_val as $k => $v) {
                                                    
            if($key == 'teachers') {
                $listTeachers[] =  $v . ' ';
            } else {
                $listPm[] = $v . ' ';
            }
        }
    }
}
?>

<div style="border: 3px solid gray" >

<?php
    foreach ($listTeachers as $el) {
        echo $el;
    }
?>

</div>

<div style="border: 3px solid green; margin-top: 20px" >

<?php
    foreach ($listPm as $el) {
        echo $el;
    }
?>

</div>

</body>
</html>