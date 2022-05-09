
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="xs.css" media="screen and (max-width:767px)">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700">
    <link href="https://fonts.googleapis.com/css?family=Quicksand " rel="stylesheet">
    <link rel="stylesheet" href="FrenchResult.css" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>document.php</title>
</head>
<body>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            <label class="toggle" for="open"><i class="fa fa-bars" aria-hidden="true"></i><span class="MENU">MENU</MENU></span>
</label>
          <input id="open" type="checkbox">
        
       <div id="menu">
       
  <nav>
    <ul>     
      <li><a href="./French.php" class="languageList" >French</a></li>
      <li><a href="../index2.php" class="languageList">Portuguese</a></li>
      <li><a href="../spanish/sp.php" class="languageList">Spanish</a></li>
      <li><a href="../contact/contact.php" class="languageList">contact</a></li>
      <li><a href="https://kaigaitripzuki.hateblo.jp/" class="languageList">BLOG(friend's)</a></li>
    </ul>
  </nav>s
</div>
    <header>
   <a href="French.php">    
        <div class="logo">
            <img src="../dictionaries all at once logo.png" >
         </div>
    </a> 

         
    
    </header>
    <main >
    
        <div class="main-content ">
         <div class="tabs">
         <input id="all" type="radio" name="tab_item" checked>
    <label class="tab_item tab1" for="all">Collins</label>
    <input id="programming" type="radio" name="tab_item">
    <label class="tab_item tab2" for="programming">Cambridge</label>
    <input id="design" type="radio" name="tab_item">
    <label class="tab_item tab3" for="design">Bab.la</label>
               
            <div class="tab_content 1" id="all_content">
              <div class="tab_content_description">  
                <p class="resultado1">
                   
                <p class="nomeDeDic">
                    Result In <span id="variedadeDeDic">C</span>ollins
                </p>
                
                   
                    <?php
                    
                    require_once("../phpQuery-onefile.php");
                   
                      $context= stream_context_create(
                        array(
                          'http' => array(
                            'ignore_errors'=> true,
                            'method' => 'GET',
                            'header' => "User-Agent:
                            Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Mobile Safari/537.36",
                          )
                        )
                      );

                                          
                      if ($_COOKIE['flag']=="1"){
                        $html_ftoe = file_get_contents("https://www.collinsdictionary.com/dictionary/french-english/{$_POST['palavra']}",false,$context);
                       if($html_ftoe){
                        $dom_ftoe = phpQuery::newDocument($html_ftoe);
                        $dom_ftoe['.copyright']->remove();
                        $dom_ftoe['.sense > .mpuslot_b-container']->remove();
                        $dom_ftoe['.title_frequency_container']->remove();    
                        echo $dom_ftoe['.cB.cB-def.dictionary.biling'];
                        }elseif($html_ftoe==false){
                          echo ("sorry, the result of {$_POST['palavra']} doesn't exist in Collins Dictionary");
                        }
                      }elseif($_COOKIE['flag']=="0"){
                       if( $html_etof = file_get_contents("https://www.collinsdictionary.com/dictionary/english-french/{$_POST['palavra']}",false,$context)){   
                        $dom_etof = phpQuery::newDocument($html_etof);
                        $dom_etof['.copyright']->remove();
                    $dom_etof['.sense > .mpuslot_b-container']->remove(); 
                    $dom_etof['.title_frequency_container']->remove();   
                    echo $dom_etof['.cB.cB-def.dictionary.biling'];
                        }
                      }
                   
                    ?>
                     
                                    </p>
                                    
              </div>

            </div>
            <div class="tab_content 2" id="programming_content">
             <div class="tab_content_description">   
                <p class="nomeDeDic">
                    Result In <span id="variedadeDeDic2">C</span>ambridge
                </p> 
                
                <?php
                
              if ($_COOKIE['flag']=="1"){
                $html2_ftoe = file_get_contents("https://dictionary.cambridge.org/ja/dictionary/french-english/{$_POST['palavra']}",false,$context);
                $dom2_ftoe = phpQuery::newDocument($html2_ftoe);
                $dom2_ftoe[".def.ddef_d.db"]->remove();
                $dom2_ftoe[".freq"]->remove();
                $dom2_ftoe[".d_br"]->remove();
                
                $dom2_ftoe["strong"]->remove();
                $dom2_ftoe[".pr.dictionary:eq(1)"]->remove();
                echo $dom2_ftoe[".d.pr.di.french-english.kdic"];
                
                  
                
              }elseif($_COOKIE['flag']=="0"){
                $html2_etof = file_get_contents("https://dictionary.cambridge.org/ja/dictionary/english-french/{$_POST['palavra']}",false,$context);
                $dom2_etof = phpQuery::newDocument($html2_etof);
                $dom2_etof[".def.ddef_d.db"]->remove();
                $dom2_etof[".freq"]->remove();
                $dom2_etof[".d_br"]->remove();
                
                $dom2_etof["strong"]->remove();
                $dom2_etof[".pr.dictionary:eq(1)"]->remove();
                echo $dom2_etof[".d.pr.di.english-french.kdic"];
              }

                
                ?>
                      
             </div>
            </div> 

            <div class="tab_content 3" id="design_content">
               <div class="tab_content_description"> 
                <p class="nomeDeDic">
                    Result In <span id="variedadeDeDic3">B</span>ab.la
                </p>
               </div> 
               <?php
               
               
               if ($_COOKIE['flag']=="1"){
                $html3 = file_get_contents("https://fr.bab.la/dictionnaire/francais-anglais/{$_POST['palavra']}");
               
                $dom3 = phpQuery::newDocument($html3);  
                $dom3[".sound-inline.bab-quick-sound"]->remove()  ;
                echo $dom3['.quick-result-entry'];
              }elseif ($_COOKIE['flag']=="0") {
                $html3 = file_get_contents("https://fr.bab.la/dictionnaire/anglais-francais/{$_POST['palavra']}");
               
                $dom3 = phpQuery::newDocument($html3);  
                
                $dom3[".sound-inline.bab-quick-sound"]->remove();
                echo $dom3['.quick-result-entry'];
                # code...
              }
               ?>

            </div> 
          </div> 
        </div> 
           
    </main>

    <script src="French.js"></script>
</body>
</html>