<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <form enctype="multipart/form-data" action="upload.php" method="POST">
    <?php
        // put your code here

        
    
    $folder = './uploads';
    if (!is_dir($folder)) {
        die('Folder does not exist');
    }

    $directory = new DirectoryIterator($folder);


           if (filter_input(INPUT_GET, 'delete') != null) {
                    $delete = filter_input(INPUT_GET, 'delete');
                    unlink($delete);
                    header('Location: index.php');
                }


    include './index.html.php';
    
         
 
            

            /*
             * http://php.net/manual/en/ref.filesystem.php
             * http://php.net/manual/en/ref.dir.php
             * http://php.net/manual/en/book.filesystem.php
             * http://php.net/manual/en/class.directoryiterator.php
             * 
             */
            
            
        ?>
        </form>
    </body>
</html>
