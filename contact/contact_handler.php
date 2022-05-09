
<?php
    $to = "contact@dictionariesallatonce.com";
    $name = $_POST['name_or_subject'];
    $email_address = $_POST['email'];
    $content = $_POST['message'];
    $headers = "from:{$_POST["email"]}";
    mb_send_mail($to,$name,$content,$headers);

?>

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
                <li><a href="./contact.php" class="languageList">contact</a></li>
                <li><a href="https://kaigaitripzuki.hateblo.jp/" class="languageList">BLOG(friend's)</a></li>
            </ul>
        </nav>
    </div>
            
             
    <header>
        <a href="./contact.php">
          <div class="logo">
            <img  src="../dictionaries all at once logo.png">
          </div>
        </a>
    </header>                 
    <div class="main-content">
        <h1 class="message">thank you for your message,</h1>
        <h2 class="message">sent correctly. </h2>
        <br>
        <h3 class="message">It may take several days to respond. </h3>


            </form>

          </div>
    </div>
       
      
       
    </body>
    
    </html>