<?php 
    $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tortor pretium viverra suspendisse potenti nullam ac. Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est. Et pharetra pharetra massa massa ultricies. Vitae congue mauris rhoncus aenean vel elit scelerisque. Ut faucibus pulvinar elementum integer enim neque volutpat ac. Enim eu turpis egestas pretium aenean. Eget mauris pharetra et ultrices. Amet nulla facilisi morbi tempus iaculis urna id volutpat. Euismod elementum nisi quis eleifend quam. Interdum velit euismod in pellentesque. Lectus sit amet est placerat in egestas. Lectus proin nibh nisl condimentum. Arcu ac tortor dignissim convallis aenean et tortor at risus.';
    $newText = explode('.', $text);
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
    <h2>Prima:</h2>
    <p> <?php echo $text ?> </p>
    
    <h2>Dopo:</h2>
    <ul>
    <?php for($i = 0; $i < count($newText)-1; $i++) { ?>
        <?php $thisParagraph = $newText[$i]; ?>
        <li> 
            <?php echo $thisParagraph; ?> 
        </li>
    <?php } ?>
    </ul>

</body>
</html>