<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></title>
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
    include 'upload-form.php';

         
 
            

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
