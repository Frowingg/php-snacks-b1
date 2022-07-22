<?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
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
        var_dump($name);
        var_dump($mail);
        var_dump($age);


        if(strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age)
        ) {
            $userMessage = 'Accesso riuscito';
        } else {
            $userMessage = 'Accesso negato';
        }        
    ?>
    <h1> <?php echo $userMessage; ?> </h1>

</body>
</html>