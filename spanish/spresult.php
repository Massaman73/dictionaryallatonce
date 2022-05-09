
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="xs.css" media="screen and (max-width:767px)">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700">
    <link href="https://fonts.googleapis.com/css?family=Quicksand " rel="stylesheet">
    <link rel="stylesheet" href="spresult.css" >
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
      <li><a href="../french/French.php" class="languageList" >French</a></li>
      <li><a href="../index2.php" class="languageList">Portuguese</a></li>
      <li><a href="./sp.php" class="languageList">Spanish</a></li>
      <li><a href="../contact/contact.php" class="languageList">contact</a></li>
      <li><a href="https://kaigaitripzuki.hateblo.jp/" class="languageList">BLOG(friend's)</a></li>
    </ul>
  </nav>s
</div>
    <header>
   <a href="sp.php">    
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
    <label class="tab_item tab2" for="programming">Dict.com</label>
    <input id="design" type="radio" name="tab_item">
    <label class="tab_item tab3" for="design" style="word-break: normal">Spanishcent</label>
               
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
                        $html_stoe = file_get_contents("https://www.collinsdictionary.com/dictionary/spanish-english/{$_POST['palavra']}",false,$context);
                       if($html_stoe){
                        $dom_stoe = phpQuery::newDocument($html_stoe);
                        $dom_stoe['.copyright']->remove();
                        $dom_stoe['.sense > .mpuslot_b-container']->remove();
                        $dom_stoe['.title_frequency_container']->remove();   
                        $dom_stoe[".mini_h2"]->remove(); 
                        echo $dom_stoe['.cB.cB-def.dictionary.biling'];
                        }elseif($html_stoe==false){
                          echo ("sorry, the result of {$_POST['palavra']} doesn't exist in Collins Dictionary");
                        }
                      }elseif($_COOKIE['flag']=="0"){
                       if( $html_etos = file_get_contents("https://www.collinsdictionary.com/dictionary/english-spanish/{$_POST['palavra']}",false,$context)){   
                        $dom_etos = phpQuery::newDocument($html_etos);
                        $dom_etos['.copyright']->remove();
                    $dom_etos['.sense > .mpuslot_b-container']->remove(); 
                    $dom_etos['.title_frequency_container']->remove();   
                    $dom_etos[".mini_h2"]->remove();
                    echo $dom_etos['.cB.cB-def.dictionary.biling'];
                        }
                      }
                   
                    ?>
                     
                                    </p>
                                    
              </div>

            </div>
            <div class="tab_content 2" id="programming_content">
             <div class="tab_content_description">   
                <p class="nomeDeDic">
                    Result In <span id="variedadeDeDic2">D</span>ict.com
                </p> 
                
                <?php
                
              if ($_COOKIE['flag']=="1"){
                $html2_stoe = file_get_contents("https://www.dict.com/spanish-english/{$_POST['palavra']}",false,$context);
                $dom2_stoe = phpQuery::newDocument($html2_stoe);
                $dom2_stoe[".lex_ful_wsnd"]->remove();
                pq("<br></br>")->insertAfter(".lex_ful_coll2s.w.l1");
                pq("<br></br>")->insertAfter(".lex_ful_coll2t.w.l2");
                pq("<br></br>")->insertAfter(".lex_ful_samp2s.w.l1");
                pq("<br></br>")->insertAfter(".lex_ful_samp2t.w.l2");
                echo $dom2_stoe[".entry"];
                   
                
              }elseif($_COOKIE['flag']=="0"){
                $html2_etos = file_get_contents("https://www.dict.com/english-spanish/{$_POST['palavra']}",false,$context);
                $dom2_etos = phpQuery::newDocument($html2_etos);
                $dom2_etos[".lex_ful_wsnd"]->remove();
                pq("<br></br>")->insertAfter(".lex_ful_coll2s.w.l1");
                pq("<br></br>")->insertAfter(".lex_ful_coll2t.w.l2");
                pq("<br></br>")->insertAfter(".lex_ful_samp2s.w.l1");
                pq("<br></br>")->insertAfter(".lex_ful_samp2t.w.l2");
                echo $dom2_etos[".entry"];
              }

                
                ?>
                      
             </div>
            </div> 

            <div class="tab_content 3" id="design_content">
               <div class="tab_content_description"> 
                <p class="nomeDeDic">
                    Result In <span id="variedadeDeDic3">S</span>panishcentral
                </p>
               </div> 
               <?php
               
               
               if ($_COOKIE['flag']=="1"){
                $html3 = file_get_contents("http://www.spanishcentral.com/translate/{$_POST["palavra"]}");
               
                $dom3 = phpQuery::newDocument($html3);  
                pq("<span>&ensp;</span>")->insertAfter(".ex_top");
                echo $dom3['.defset.defset_entry'];
              }elseif ($_COOKIE['flag']=="0") {
                $html3 = file_get_contents("http://www.spanishcentral.com/translate/{$_POST["palavra"]}");
               
                $dom3 = phpQuery::newDocument($html3);  
                
                
                echo $dom3['.defset.defset_entry'];
                # code...
              }
               ?>

            </div> 
          </div> 
        </div> 
           
    </main>

    <script src="sp.js"></script>
</body>
</html>