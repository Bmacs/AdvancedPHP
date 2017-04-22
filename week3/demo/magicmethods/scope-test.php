<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include './Scope.php';
        
        try {
            $scope = new week3\gforti\Scope();
        
            $scope->test = 'hello';
            $scope->hello = 'hey';
            echo $scope->hello; 
            echo $scope->test;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
        
        ?>
    </body>
</html>
