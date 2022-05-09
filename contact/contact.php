
<!doctype html>
<html lang="en">
    <head>

    <link rel="stylesheet" href="./contact.css" type="text/css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vollkorn">   
        <link href="https://fonts.googleapis.com/css?family=Quicksand " rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>contact form</title>
    </head>
    <body class="" >
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <label class="toggle" for="open"><i class="fa fa-bars" aria-hidden="true"></i><span class="MENU">MENU</MENU></span></label>
            <input id="open" type="checkbox">
        
    <div id="menu">
        <nav>
            <ul>        
                <li><a href="../french/French.php" class="languageList">French</a></li>
                <li><a href="../index2.php" class="languageList">Portuguese</a></li>
                <li><a href="../spanish/sp.php" class="languageList">Spanish</a></li>
                <li><a href="#" class="languageList">contact</a></li>
                <li><a href="https://kaigaitripzuki.hateblo.jp/" class="languageList">BLOG(friend's)</a></li>
            </ul>
        </nav>
    </div>
            
             
    <header>
        <a href="">
          <div class="logo">
            <img  src="../dictionaries all at once logo.png">
          </div>
        </a>
    </header>                 
    <div class="main-content">
        <h1 class="message">Send the message,</h1>
        <h2 class="message">if you have questions or opinions</h2>
          <div class="contact-form">
            <form action="./contact_handler.php" method="POST">
                <input type="text" name="name_or_subject" placeholder="your name or subject">
                <br>
                <input id="email"type="text" name="email"  placeholder="your email-address(it's not mandatory)" cols="30" rows="10">
                <br>
                <textarea id="message-form" name="message"   placeholder="put the message"cols="30" rows="10" ></textarea>
                <br>
                <input type="submit">


            </form>

          </div>
    </div>
       
      
       
    </body>
    
    </html>