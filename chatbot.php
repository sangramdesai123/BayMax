<!DOCTYPE html>
<html>
    <head>
        <title>Navigation bar DEMO</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/s.css">
        <link rel="stylesheet" href="css/chatbot.css">
        <script type="text/javascript" src="js/chat.js"></script>
    </head>
    <body>
        <header>
           <img src="test1.png" width="150px" style="background-color: white;">
            <nav>
                <ul>
                    <li><a href="home.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="care.php"><i class="glyphicon glyphicon-comment"></i> Care</a></li>
                    <li><a href="record.php"><i class="glyphicon glyphicon-list-alt"></i> My Records</a></li>
                    <li><a href="notification.php"><i class="glyphicon glyphicon-bell"></i> Notifications</a></li>
                    <li><a href="chatbot.php"><i class="glyphicon glyphicon-new-window"></i> New Chat</a></li>
                    <li><a href="setting.php"><i class="right glyphicon glyphicon-list"></i></a></li>                   
                </ul>
            </nav>
        </header>


        <main class="">
            <a href="#" onclick="newchat()" class="btn btn-primary btn1 rightbtn">Start New Chat <i class="glyphicon glyphicon-plus"></i> </a>
<div class="chatcontainer">

             <div class="homecard" id="homecard">
                    <p class="bot">hi! i am chatBot</p>
                    <p class="user">Hi i have qustion</p>
            </div>
            <br>
</div>
                <button id="yes" onclick="chat(this.value)" name="ans" value="yes" class="btn btn-primary yes">YES</button>
                <button id="no" onclick="chat(this.value)" name="ans" value="no" class="btn btn-primary no">NO</button>
            <br><br>
        </main>
    </body>
</html>
