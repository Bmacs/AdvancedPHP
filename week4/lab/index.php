<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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

    include './views/index.html.php/';
    include 'upload-form.php';

         
      if (isset($_GET['delete'])) {
           if (filter_input(INPUT_GET, 'delete' != null)) {
                    $delete = $_GET['delete'];
                    unlink($delete);
                    header('Location: scandir.php');
                }
        }
            

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
