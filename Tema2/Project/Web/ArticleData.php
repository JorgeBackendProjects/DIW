<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data</title>
    </head>
    <body>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sendData'])){
                $title  = $_POST['title'];
                $article  = $_POST['article'];
                $date  = $_POST['date'];
                $location  = $_POST['location'];
                $category  = $_POST['category'];
                $areas  = $_POST['areas'];
                $age  = $_POST['age'];
                $username  = $_POST['username'];
                $email  = $_POST['email'];
                $tags = $_POST['tags'];

                $areasValues = "";

                for ($i=0; $i < count($areas); $i++) { 
                    if($i == count($areas) - 1){
                        $areasValues .= " and " . $areas[$i] . ".";
                    }else{
                        $areasValues .= $areas[$i] . ", ";
                    }
                }

                echo "<p><h3>Title: </h3> " . $title . "</p>";
                echo "<p><h3>Article: </h3> " . $article . "</p>";
                echo "<p><h3>Date: </h3> " . $date . "</p>";
                echo "<p><h3>Location: </h3> " . $location . "</p>";
                echo "<p><h3>Category: </h3> " . $category . "</p>";
                echo "<p><h3>Areas of interest: </h3> " . $areasValues . "</p>";
                echo "<p><h3>Age: </h3> " . $age . "</p>";
                echo "<p><h3>Username: </h3> " . $username . "</p>";
                echo "<p><h3>E-mail: </h3> " . $email . "</p>";
                echo "<p><h3>Tags: </h3> " . $tags . "</p>";
            }
        ?>  
    </body> 
</html>
