<?php

    
    
   
  if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['submitButton'])){
      if($_POST['name'] != '' && $_POST['email'] != '' && $_POST['subject'] != '' && $_POST['message']){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $subject = $_POST['subject'];
          $message = $_POST['message'];
          $to = 'stillfreeproject25@gmail.com';//<-問い合わせ送信先メールアドレス
            $header = "From: " . $email . "\r\n";
            $message .= "\r\n\r\n " . $name;
            mb_send_mail($to, $subject, $message, $header);
            $popupmsg = "送信されました";
            echo "<script type='text/javascript'>alert('$popupmsg');</script>";
            header('Location: websiet.php'); 
            
      }
  } 
}


  
 

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="stillfree projectは、不要品回収、便利屋まで様々なお仕事を請け負う秋田県の業者です。お困りの方は是非一度ご相談ください。">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="website.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    
    <title>【stillfree project】秋田県の不要品回収,便利屋</title>
</head>
<body>
    <script>
        $(function(){
          $('.fadein').fadeIn(2000);




        });

    </script>

    <header class="fixed-top">
    
      <nav class="navbar navbar-light bg-white float-left w-100 px-2 py-3">
        <a class="mx-0 navbar-brand" href="#">
            <img  class="d-none d-md-block" src="logo4.jpg" alt="">
            <img class="d-md-none" src="logo5.jpg" alt="">

        </a>
       <h6 class="d-none d-md-block font-weight-bold">営業時間：8:00～20:00<br>定休日：不定休</h6>
        <div class="pull-right d-flex align-items-center" style="font-size: 1em;">
       <a href="tel:080-1664-5454" class="" >
           <!-- ↑電話番号 -->
          <i class="fas fa-phone-square fa-3x fa-md-3x size" style="color:#1dbbfa;">
          </i>
        </a>
        <i class="size fas fa-envelope-square fa-3x fa-md-4x mx-3" style="color:#1dbbfa;" data-toggle="modal" data-target="#exampleModalCenterContact"></i>
       <a href="" ><img class="float-right" src="instaicon.png" style="margin: left 14.5px; "></a>
         <!-- ↑インスタのURL -->
        
        </div>
        







        <div class="float-right">
        <button class="navbar-toggler btn-white ml-2 px-3" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
         </div>
       
      
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
         
         <ul class="navbar-nav mr-auto text-center">
            <li class="nav-item active">
              <a class="nav-link text-dark btn btn-light" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark  btn btn-light" href="#" data-toggle="modal" data-target="#exampleModalCenterStaff">スタッフのご紹介</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark btn btn-light" href="#" data-toggle="modal" data-target="#exampleModalCenter">不要品回収</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark  btn btn-light" href="#" data-toggle="modal" data-target="#exampleModalCenter3">便利屋</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark  btn btn-light" href="#" data-toggle="modal" data-target="#exampleModalCenter4">お客様の声</a>
            </li>
            
           
        </div>
      
      </nav> 
   </header>
   
    <div role="main ">
        <div class="jumbotron bg-cover text-white">
            <div class="container text-center  mt-2">
              <h2 id="" class="display-5 pt-5 mt-md-5 fadein">お家のお掃除お任せ下さい！</h1>
                <p class="fadein underlined">スティルフリープロジェクトは、秋田の地元密着型お掃除屋さんです。</p>
              <p class="fadein">「小屋の中が散らかりっぱなし…」 ​「要らないガラクタばかりだけど、捨てるのが面倒くさい…」<br>「汚いから掃除したくない！」</p>
              <h4 class="fadein">そんなあなたに！</h4>
              <p class="fadein">整理整頓から掃除、不用品回収まで承っております！</p>
              <h6 class="font-weight-bold fadein d-md-none">営業時間：8:00～20:00</h6> 
         <h6 class="font-weight-bold ml-3 fadein d-md-none">​定休日：不定休</h6>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-4 offset-md-1 ">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="18148.jpg" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22208%22%20height%3D%22226%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20208%20226%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_177c86f6d23%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_177c86f6d23%22%3E%3Crect%20width%3D%22208%22%20height%3D%22226%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2266.9296875%22%20y%3D%22117.95%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <h5 class="card-text fade show active underlined"><strong>不要品回収サービス</strong></h5>
                  <p>当店の不要品回収サービスは、軽トラックに積み放題で1台当たりの明朗会計！</p>
                  <p>様々なご依頼に対応できます。また、値の付くものであれば私共の方で買取させて頂くことも可能です！</p>
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group w-50">
                      <button type="button" class="btn btn-sm btn-outline-secondary w-50" data-toggle="modal" data-target="#exampleModalCenter">詳しく</button>
                     
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">お仕事内容例</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table">
                      <thead>
                        <tr>
                          
                          <th scope="col">内容</th>
                          <th scope="col">価格</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <td>不要品回収</td>
                          <td>¥15,000～<br>/軽トラック1台</td>
                          
                        </tr>
                        
                      </tbody>
                    </table>                  
                  </div>
                  <h6>1．まずはお電話を！</h6>
                  <p>気になることがあれば、まずはご連絡ください！メールでのご相談も可能です。</p>
                  <h6>2．お見積りは無料！</h6>
                  <p>お客様のご都合のつく日時をお伝えください。　実際にお客様のお宅までお伺いし、清掃にかかる時間や費用を概算しお伝えします。</p>
                  <h6>3．ご依頼後は…？</h6>
                  <p>お見積もりにご納得頂けましたら、さっそく作業開始です！  もちろん、ハウスクリーニングと併用してご依頼いただくことも可能です。</p>
                  <p>お支払いは作業後でOK!</p>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                  
                </div>
              </div>
            </div>


            
            <div class="col-md-4 offset-md-1">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="yukikaki.jpg">
                <div class="card-body">
                  <h5 class="card-text underlined"><b>便利屋</b></h5>
                  <p>スティルフリーでは不要品回収だけでなく、普段のお困りごとにも迅速に対応しております。</p>
                  <p>ちょっとした人手が欲しいとき、お気軽にご連絡くださいね！</p>
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group w-50">
                      <button type="button" class="btn btn-sm btn-outline-secondary " data-toggle="modal" data-target="#exampleModalCenter3">詳しく</button>
                     
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>


            <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle3">お仕事内容例</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table">
                      <thead>
                        <tr>
                          
                          <th scope="col">内容</th>
                          <th scope="col">価格</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
                          <td>雪かき作業</td>
                          <td>¥3,000～  <br>/時間</td>
                          
                        </tr>
                        <tr>
                          
                          <td>草刈り作業</td>
                          <td>¥100～ <br>/㎡</td>
                          
                        </tr>
                        
                        <tr>
                          
                          <td>家具組み立て</td>
                          <td>¥5,000～</td>
                          
                        </tr>
                        <tr>
                          
                          <td>引っ越し(秋田↔近県)</td>
                          <td>応相談</td>
                          
                        </tr>
                        <tr>
                          
                          <td>ハウスクリーニング</td>
                          <td>応相談</td>
                          
                        </tr>

                        <tr>
                          
                          <td>...</td>
                          <td>...</td>
                          
                        </tr>
                      </tbody>
                    </table>   
                    <p>​上記の項目はほんの一例です。ちょっとした人手が欲しいとき、お気軽にご連絡くださいね！</p>               
                  </div>
                  <p></p>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                  </div>
                  
                </div>
              </div>
            </div>

            








            <div class="col-md-4 offset-md-1 ">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="3.jpg" alt="Thumbnail [100%x225]" data-holder-rendered="true" style="height: 225px; width: 85%; display: inline-block;">
                <div class="card-body">
                  <h5 class="card-text fade show active underlined"><strong>お客様の声</strong></h5>
                  <p>お客様からは様々な感想を頂いております。<br>ぜひ参考にしてみてください。</p>
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group w-50">
                      <button type="button" class="btn btn-sm btn-outline-secondary " data-toggle="modal" data-target="#exampleModalCenter4">詳しく</button>
                     
                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">お客様の声</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table">
                      <thead>
                        <tr>
                          
                          <td scope="col">①H.Nさん(秋田市 女性 70代)</td>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                       <th scope="row">
                            車庫の隅にギュウギュウに押し込めていた古い家財道具の数々をスティルフリーさんに整理してもらいました 。 <br>空いたスペースに娘の軽自動車が停められるようになりました。駐車場代も浮いて一石二鳥です。</th>
                            
                      </tbody>
                      <thead>
                        <tr>
                          
                          <td scope="col">②A.Hさん(秋田市 男性 50代)</td>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                       <th scope="row">
                           
                          今回はエアコンのクリーニングをやってもらいました。しっかり丁寧に養生をしていたので、周りを汚さず安心でした。
                          おかげさまでエアコンのカビくさいニオイがなくなりました。年に一回は掃除しないといけませんね。 </th>
                            
                      </tbody>
                      <thead>
                        <tr>
                          
                          <td scope="col">③S.Tさん(潟上市 女性 50代)
                          </td>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                      <th scope="row">
                            
                        父が亡くなり、実家にある古い小屋を少しずつ整理していたのですが、不用品の処分に関しては市役所の粗大ごみ収集では間に合わず、まとめて回収してくれる業者にお願いすることにしました。<br>
                          スティルフリーさんは不要品の買取りもしているので、いらない古い農機具などの査定もしていただけて助かりました。

                      </th> 
                            
                      </tbody>
                    </table>     
                               
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                  
                </div>
              </div>
            </div>

          </div>
            
           <div class="modal fade" id="exampleModalCenterStaff" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">スタッフ紹介</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    　<div class="image w-100">
                        <img src="staff1.jpg" alt="">
                      </div>         
                      <div class="explain">
                        <p>stillfree project 代表<br>

                          秋田市出身、平成生まれ！<br>
                                                  
                          ​地元に根差した、色んな方に愛される小さな小さなお掃除屋さんを目指してます！</p>

                      </div>
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                  </div>
                  
                </div>
              </div>
            </div>





















          <div class="modal fade" id="exampleModalCenterContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">コンタクトフォーム</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                     
               









                <form action="" method="POST" class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-3 control-label" for="name1">お名前</label>
                    <div class="w-100">
                      <input type="text" class="form-control" name="name" >
                    </div>
                    </div>
                
                    
                
                    <div class="form-group">
                      <label class="control-label" for="email">メールアドレスまたはその他の連絡先</label>
                    <div class="">
                      <input type="text" class="form-control" name="email">
                    </div>
                    </div>
                
                    <div class="form-group">
                      <label class="control-label" for="ask1"><label>
                    <div class="">
                    <label class="form-control-static">
                    <p>対象のサービス</p>
                　  　<input type="radio" name="subject" value="不要品回収">不要品回収<br>
                　　  <input type="radio" name="subject" value="便利屋">便利屋<br>
                　  　<input type="radio" name="subject" value="その他">その他<br>
                     </label>
                     </div>
                     </div>
                
                    <div class="form-group">
                      <label class="control-label" for="ask1">お問い合わせ内容</label>
                    <div class="">
                    <textarea rows="7" name="message" class="form-control"></textarea>
                    </div>
                    </div>
                
                    <div class="form-group">
                      <label class="col-sm-3"></label>
                    <div class="col-sm-9">
                      
                       <input name="submitButton" type="submit" class="btn btn-success btn-block">
                    </div>
                    </div>
                </form>
                




                </div>
            
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 
                </div>
                
              </div>
            </div>
          </div>





          <footer class="footer mt-auto py-3 fixed-bottom bg-white">
            <div class="container">
              <p>stillfree project </p>
              <span class="text-muted">stillfreeproject25@gmail.com</span>
                
              
              
            </div>
            
            
          </footer>

    </div>
   



    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>