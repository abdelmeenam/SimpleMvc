<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- echo some this in php by < ?= > that equal to < ?php echo ?> -->
    <title> <?= $title; ?> </title>
</head>

<body>
    <h1><?= $h1; ?> </h1>
    <h3><?= $h3; ?> </h 3>
        <ul>
            <?php foreach ($data as $k) { ?>
                <li><?php echo $k['name']; ?></li>
            <?php  } ?>

        </ul>
</body>

</html>