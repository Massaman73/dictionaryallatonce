<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    require_once("./phpQuery-onefile.php");
                   
                      $context= stream_context_create(
                        array(
                          'http' => array(
                            'ignore_errors'=> true,
                            'method' => 'GET',
                            'header' => 'User-Agent:
                            Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)',
                          )
                        )
                      );
    $html = file_get_contents("https://www.collinsdictionary.com/dictionary/portuguese-english/amor",false,$context);
    echo $html;
    
    
    ?>
</body>
</html>