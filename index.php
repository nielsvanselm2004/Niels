<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>ZULULULUlululululu</h1>
    <p>U SUCK JOE</p>
    <form id="chatbot" method="post">
        <input name="cMessage" type="text" placeholder="Your Message">
        <label for="cMessage">EWA</label><br>
        <input type="submit" name="submit"/>
    </form>
    <?php
    
    function getCMessage(){
        if(isset($_POST["submit"])) {
            if (!empty($_POST["cMessage"])) {
                return $_POST["cMessage"];
            } else {
                return "ERROR: No message was send!";
            }
        }
    }
    function sendSResponse($response){
        echo $response;
    }
    function findSResponse(){
    }

    echo getCMessage();
    ?>
</body>
</html>
