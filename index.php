<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>ChatBot</title>
</head>
<body>
    <div id="main">
        <h1 class="title">Een ChatBot is geen ChatRobot en al helemaal geen RobotChat.</h1>
        <p>snor</p>
        <form id="chatbot" method="post">
            <input name="cMessage" type="text" placeholder="Your Message">
            <label for="cMessage">EWA</label><br>
            <input type="submit" name="submit"/>
        </form>
        <?php
        //base variables
        $jFileW = fopen("jData.ini", "w");
        $jFileA = fopen("jData.ini", "a");
        $wFileW = fopen("wData.ini", "w");
        $wFileA = fopen("wData.ini", "a");
        //base functions
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
    </div>
</body>
</html>
