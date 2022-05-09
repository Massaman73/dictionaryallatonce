
<!doctype html>
<html lang="en">
    <head>

    <link rel="stylesheet" href="sp.css" type="text/css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vollkorn">
        

        <link href="https://fonts.googleapis.com/css?family=Quicksand " rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>dictionariesallatonce</title>
    </head>
    <body class="" >
       
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <label class="toggle" for="open"><i class="fa fa-bars" aria-hidden="true"></i><span class="MENU">MENU</MENU></span>
</label>
          <input id="open" type="checkbox">
        
       <div id="menu">
       
  <nav>
    <ul>
     



</li>
     
      <li><a href="../french/French.php" class="langList">French</a></li>
      <li><a href="../index2.php" class="langList">Portuguese</a></li>
      <li><a href="#" class="langList">Spanish</a></li>
      <li><a href="../contact/contact.php" class="langList">contact</a></li>
      <li><a href="https://kaigaitripzuki.hateblo.jp/" class="langList">BLOG(friend's)</a></li>
    </ul>
  </nav>
</div>
            
             
            <header>
          <div class="logo">
            <img  src="../dictionaries all at once logo.png">
          </div>
           


          <div id="Switch" class="<?php if ($_COOKIE['flag']=="0"){echo ($_COOKIE['flag']);}else{echo ("");} ?> grande"  >
              ENtoSP
          </div>
          <div id="Switch2" class="<?php if ($_COOKIE['flag']=="1"){echo ($_COOKIE['flag']);}else{echo ("");}  ?> grande" >
              SPtoEN
          </div>
      
        
        

          
       </header>
       <main>
       
         
            <div class="main-content">
                <h1 id="welcome" > Bienvenida ,
                     </h1> 
                <h2 > you can search words in various dictionaries. </h2>
                <h3>choose language.</h3>
                <div class="current_lang">
                    <div id="Switch_pequeno" class="<?php if ($_COOKIE['flag']=="0"){echo ($_COOKIE['flag']);}else{echo ("");} ?> pequeno 1"  >
                    ENtoSP
                    </div>  
                    <span class="pequeno">or</span>  
                    <div id="Switch2_pequeno" class="<?php if ($_COOKIE['flag']=="1"){echo ($_COOKIE['flag']);}else{echo ("");}  ?> pequeno" >
                    SPtoEN
                    </div>  

                </div>

                    
                <form action="./spresult.php" method="POST" class="search_container" class="form" > 
                       
                        <input type="text" size="25"  placeholder= ""  name="palavra" id="Input" autocomplete="off">
                        <input type="submit" value="&#xf002">
                               
                </form>
            </div> 
           
        </main>
        
       
          <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
        <script src="sp.js"></script>
          

       
      
       
    </body>
    
    </html>