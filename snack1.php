<?php $matches = [
                    [
                        'homeTeam' => 'Virtus Roma',
                        'guestTeam' => 'Napoli Basket',
                        'score' => '60-55',
                    ],
                    [
                        'homeTeam' => 'Olimpia Milano',
                        'guestTeam' => 'Banco di Sardegna',
                        'score' => '23-42',
                    ],
                    [
                        'homeTeam' => 'Virtus Bologna',
                        'guestTeam' => 'CUS Bari',
                        'score' => '23-42',
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
        
    <h1>Lista Partite Lega Basket</h1>
    <?php if(count($matches) > 0) { ?>
        <ul>
            <?php for($i = 0; $i < count($matches); $i++) { ?>
                <?php $thisMatch = $matches[$i]; ?>
                <li> 
                    <?php echo $thisMatch['homeTeam']; ?> - <?php echo $thisMatch['guestTeam']; ?> | <?php echo $thisMatch['score']; ?> 
                </li>
            <?php } ?>
        </ul>
        
    <?php } ?>
</body>
</html>