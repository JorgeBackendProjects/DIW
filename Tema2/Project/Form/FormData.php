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
                $name  = $_POST['name'];
                $surname  = $_POST['surname'];
                $birthdate  = $_POST['birthdate'];
                $city  = $_POST['city'];
                $region  = $_POST['region'];
                $postcode  = $_POST['postcode'];
                $regionalCode  = $_POST['regionalCode'];
                $subscriptionType  = $_POST['subscritionType'];
                $subscriptionCode  = $_POST['subscritionCode'];
                $areasOfInterest  = $_POST['areas'];
                $username  = $_POST['username'];
                $password  = $_POST['password'];
                $creditCardType  = $_POST['creditCardType'];
                $cardNumber  = $_POST['cardNumber'];
                $discountCode  = $_POST['discountCode'];
                $feedback  = $_POST['feedback'];
                $suggests  = $_POST['suggests'];
                $tags = $_POST['tags'];

                $areasValues = "";

                for ($i=0; $i < count($areasOfInterest); $i++) { 
                    if($i == count($areasOfInterest) - 1){
                        $areasValues .= " and " . $areasOfInterest[$i] . ".";
                    }else{
                        $areasValues .= $areasOfInterest[$i] . ", ";
                    }
                }

                echo "<p><h3>Title: </h3> " . $title . "</p>";
                echo "<p><h3>Name: </h3> " . $name . "</p>";
                echo "<p><h3>Surname: </h3> " . $surname . "</p>";
                echo "<p><h3>Birthdate: </h3> " . $birthdate . "</p>";
                echo "<p><h3>City: </h3> " . $city . "</p>";
                echo "<p><h3>Region: </h3> " . $region . "</p>";
                echo "<p><h3>Postcode: </h3> " . $postcode . "</p>";
                echo "<p><h3>Regional code: </h3> " . $regionalCode . "</p>";
                echo "<p><h3>Subscription type: </h3> " . $subscriptionType . "</p>";
                echo "<p><h3>Subscription code: </h3> " . $subscriptionCode . "</p>";
                echo "<p><h3>Areas of interest: </h3> " . $areasValues . "</p>";
                echo "<p><h3>Username: </h3> " . $username . "</p>";
                echo "<p><h3>Password: </h3> " . $password . "</p>";
                echo "<p><h3>Credit card type: </h3> " . $creditCardType . "</p>";
                echo "<p><h3>Card number: </h3> " . $cardNumber . "</p>";
                echo "<p><h3>Discount code: </h3> " . $discountCode . "</p>";
                echo "<p><h3>Feedback: </h3> " . $feedback . "</p>";
                echo "<p><h3>Suggests: </h3> " . $suggests . "</p>";
                echo "<p><h3>Tags: </h3> " . $tags . "</p>";
            }
        ?>  
    </body> 
</html>
