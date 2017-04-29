<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        //DIRECTORY_SEPARATOR 

        include 'index.php';
        //include 'upload.php';
        $folder = './uploads';
        $directory = scandir('./uploads');
         
        //var_dump($directory);
        ?>


        
        <?php foreach ($directory as $file) : ?>        
            <?php if ( is_file($folder . DIRECTORY_SEPARATOR . $file) ) : ?>
                <h2><?php echo $file; ?></h2>
                <img src="./uploads/<?php echo $file; ?>" />
                <a href='?delete=./uploads/ <?php echo $fileInfo->getFileName(); ?>'>Delete</a>
            <?php endif; ?>
        <?php endforeach; ?>

    </body>
</html>
