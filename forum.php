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
        <link rel="stylesheet" href="css/s.css">
        <link rel="stylesheet" href="css/forum.css">
        <script type="text/javascript" src="js/forum.js"></script>
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

    <main>
        <div class="container">
        <h3>Ask A question here !!</h3>
        <hr>
        <div class="forum">
            <div class="ask">
                <p>
                    <img src="img/avatar.jpg" style="width: 70px;height:70px;border-radius: 50%">  
                    <h4>Sangram</h4>
                    <h5>gsdfagdfajbf fajbhfhjbefhjbhjbf</h5>
                </p>
            </div>
            <div class="ask">
                <p>
                    <img src="img/avatar.jpg" style="width: 70px;height:70px;border-radius: 50%">  
                    <h4>Sangram</h4>
                    <h5>gsdfagdfajbf fajbhfhjbefhjbhjbf</h5>
                </p>
            </div>
            <div class="ask">
                <p>
                    <img src="img/avatar.jpg" style="width: 70px;height:70px;border-radius: 50%">  
                    <h4>Sangram</h4>
                    <h5>gsdfagdfajbf fajbhfhjbefhjbhjbf</h5>
                </p>
            </div>
            <div class="ask">
                <p>
                    <img src="img/avatar.jpg" style="width: 70px;height:70px;border-radius: 50%">  
                    <h4>Sangram</h4>
                    <h5>gsdfagdfajbf fajbhfhjbefhjbhjbf</h5>
                </p>
            </div>
            <div class="ask">
                <p>
                    <img src="img/avatar.jpg" style="width: 70px;height:70px;border-radius: 50%">  
                    <h4>Sangram</h4>
                    <h5>gsdfagdfajbf fajbhfhjbefhjbhjbf</h5>
                </p>
            </div>
            <div class="ask">
                <p>
                    <img src="img/avatar.jpg" style="width: 70px;height:70px;border-radius: 50%">  
                    <h4>Sangram</h4>
                    <h5>gsdfagdfajbf fajbhfhjbefhjbhjbf</h5>
                </p>
            </div>
        </div>
            <input type="text" name="askquestion"> 
            <button class="btn btn-primary" onclick="ask()">ASK</button>
        </div>       
    </main>

    </body>
</html>