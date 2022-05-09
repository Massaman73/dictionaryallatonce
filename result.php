
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="xs.css" media="screen and (max-width:767px)">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700">
    <link href="https://fonts.googleapis.com/css?family=Quicksand " rel="stylesheet">
    <link rel="stylesheet" href="result.css" >
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
     



</li>
     
      <li><a href="./french/French.php" class="langList" >French</a></li>
      <li><a href="index2.php" class="langList">Portuguese</a></li>
      <li><a href="./spanish/sp.php" class="langList">Spanish</a></li>
      <li><a href="./contact/contact.php" class="langList">contact</a></li>
      <li><a href="https://kaigaitripzuki.hateblo.jp/" class="langList">BLOG(friend's)</a></li>
    </ul>
  </nav>
</div>
    <header>
   <a href="index2.php">    
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
    <label class="tab_item tab2" for="programming">Michaelis</label>
    <input id="design" type="radio" name="tab_item">
    <label class="tab_item tab3" for="design">Infopédia</label>
               
            <div class="tab_content 1" id="all_content">
              <div class="tab_content_description">  
                <p class="resultado1">
                   
                <p class="nomeDeDic">
                    Result In <span id="variedadeDeDic">C</span>ollins
                </p>
                
                   
                    <?php
                    
                    require_once("./phpQuery-onefile.php");
                   
                      $context= stream_context_create(
                        array(
                          'http' => array(
                            'ignore_errors'=> true,
                            'method' => 'GET',
                            'header' => 'User-Agent:Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36',
                          )
                        )
                      );

                                          
                      if ($_COOKIE['flag']=="1"){
                        $html_ptoe = file_get_contents("https://www.collinsdictionary.com/dictionary/portuguese-english/{$_POST['palavra']}",false,$context);
                       if($html_ptoe){
                        $dom_ptoe = phpQuery::newDocument($html_ptoe);
                        $dom_ptoe['.copyright']->remove();
                        $dom_ptoe['.sense > .mpuslot_b-container']->remove();
                        $dom_ptoe['.title_frequency_container']->remove();    
                        echo $dom_ptoe['.cB.cB-def.dictionary.biling'];
                        }elseif($html_ptoe==false){
                          print ("sorry, the result of {$_POST['palavra']} doesn't exist in Collins Dictionary");
                        }
                      }elseif($_COOKIE['flag']=="0"){
                       if( $html_etop = file_get_contents("https://www.collinsdictionary.com/dictionary/english-portuguese/{$_POST['palavra']}",false,$context)){   
                        $dom_etop = phpQuery::newDocument($html_etop);
                        $dom_etop['.copyright']->remove();
                    $dom_etop['.sense > .mpuslot_b-container']->remove(); 
                    $dom_etop['.title_frequency_container']->remove();   
                    echo $dom_etop['.cB.cB-def.dictionary.biling'];
                        }
                      }
                   
                    ?>
                     
                                    </p>
                                    
              </div>

            </div>
            <div class="tab_content 2" id="programming_content">
             <div class="tab_content_description">   
                <p class="nomeDeDic">
                    Result In <span id="variedadeDeDic2">M</span>chaelis
                </p> 
                
                <?php
                require_once("./phpQuery-onefile.php");
              if ($_COOKIE['flag']=="1"){
                $html2 = file_get_contents("https://michaelis.uol.com.br/moderno-ingles/busca/portugues-ingles-moderno/{$_POST['palavra']}");
                $dom2 = phpQuery::newDocument($html2);
                $dom2[".verbete.bs-component > ex"]->addClass('excluir');
                  
                echo  $dom2[".verbete.bs-component"] ;
              }elseif($_COOKIE['flag']=="0"){
                $html2 = file_get_contents("https://michaelis.uol.com.br/moderno-ingles/busca/ingles-portugues-moderno/{$_POST['palavra']}");
                $dom2 = phpQuery::newDocument($html2);
                $dom2[".verbete.bs-component > ex"]->addClass('excluir');
                echo  $dom2[".verbete.bs-component"];
              }

                
                ?>
                      
             </div>
            </div> 

            <div class="tab_content 3" id="design_content">
               <div class="tab_content_description"> 
                <p class="nomeDeDic">
                    Result In <span id="variedadeDeDic3">I</span>nfopédia
                </p>
               </div> 
               <?php
               
              // require_once("./phpQuery-onefile.php");
               if ($_COOKIE['flag']=="1"){
                $html3 = file_get_contents("https://www.infopedia.pt/dicionarios/portugues-ingles/{$_POST['palavra']}");
                $dom3 = phpQuery::newDocument($html3);    
                $dom3[".dolEntrinfoExpo"]->remove();
                $dom3[".dolEntradaVverbeteConjugar"]->remove();
                
                echo $dom3['.dolDivisaoCatgram'];
              }elseif ($_COOKIE['flag']=="0") {
                $html3 = file_get_contents("https://www.infopedia.pt/dicionarios/ingles-portugues/{$_POST['palavra']}");
               
                $dom3 = phpQuery::newDocument($html3);  
                $dom3[".dolEntrinfoExpo"]->remove();
                $dom3[".dolEntradaVverbeteConjugar"]->remove();

                echo $dom3['.dolDivisaoCatgram'];
                # code...
              }
               ?>

            </div> 
          </div> 
        </div> 
           
    </main>

    <script src="script.js"></script>
</body>
</html>