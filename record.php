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
        <link rel="stylesheet" href="css/record.css">
        <link rel="stylesheet" type="text/css" href="css/s.css">
        <link rel="stylesheet" type="text/css" href="css/record.css">
        <script type="text/javascript" src="js/record.js"></script>
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


        <main class="container">
            <h2>Medical Record</h2>
             <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'about')"><span class="glyphicon glyphicon-user"></span> About</button>
              <button class="tablinks" onclick="openCity(event, 'contact')"><span class="glyphicon glyphicon-earphone"></span> Contact</button>
              <button class="tablinks" onclick="openCity(event, 'health_matrix')"><span class="glyphicon glyphicon-stats"></span> Health Matrix</button>
              <button class="tablinks" onclick="openCity(event, 'symptoms')"><span class="glyphicon glyphicon-copy"></span> Symptoms</button>
              <button class="tablinks" onclick="openCity(event, 'medications')"><span class="glyphicon glyphicon-plus"></span> Medications</button>
              <button class="tablinks" onclick="openCity(event, 'vaccination')"><span class="glyphicon glyphicon-pushpin"></span> Vaccination</button>
              <button class="tablinks" onclick="openCity(event, 'labtest')"><span class="   glyphicon glyphicon-list-alt"></span> Lab Test</button>
              <button class="tablinks" onclick="openCity(event, 'lifestyle')"><span class="glyphicon glyphicon-glass"></span> Life Style</button>
            </div>

            <div id="about" class="tabcontent">
              <h3>London</h3>
              <p>London is the capital city of England.</p>
            </div>

            <div id="contact" class="tabcontent">
              <h3>Paris</h3>
              <p>Paris is the capital of France.</p>
            </div>

            <div id="health_matrix" class="tabcontent">
              <h3>Tokyo</h3>
              <p>Tokyo is the capital of Japan.</p>
            </div> 

            <div id="symptoms" class="tabcontent">
              <h3>Paris</h3>
              <p>Paris is the capital of France.</p>
            </div>

            <div id="medications" class="tabcontent">
              <h3>Paris</h3>
              <p>Paris is the capital of France.</p>
            </div>

            <div id="vaccination" class="tabcontent">
              <h3>Paris</h3>
              <p>Paris is the capital of France.</p>
            </div>
            <div id="labtest" class="tabcontent">
              <h3>Paris</h3>
              <p>Paris is the capital of France.</p>
            </div>
            <div id="lifestyle" class="tabcontent">
              <h3>Paris</h3>
              <p>Paris is the capital of France.</p>
            </div>
        </main>
    </body>
</html>