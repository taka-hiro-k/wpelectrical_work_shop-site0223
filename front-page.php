<?php get_header(); ?><!-- <header>を呼び出す関数 -->

    <!-- ここからメイン画像 -->
<div class="main-visual-container">
<?php xo_slider( 83 ); ?> <!--　＊プラグインで３枚のスライド画像  -->
</div>
 

<div class="all-container">
  <!-- ここから会社案内 -->
  <div id="company" class="company-container">
    <h2>会社案内</h2>
    <h3 class="company-box">
    <img class="company-img" src="http://electricalworkshopsite.local/wp-content/uploads/2023/01/電気工事店-社是.png">
    </h3>
    <div class="company-text">
      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
    </div>
    <div class="more-btn">More</div>
  </div>
  <!-- ここまで会社案内 -->
  
  <!-- ここから事業案内 -->
  <div id="business" class="business-container">
    <h2>事業案内</h2>
    <div class="business-box">
      <div class="business-item">
        <div class="business-img"><img src="http://electricalworkshopsite.local/wp-content/uploads/2023/01/bisiness-sample.png" alt="住宅電気工事設備"></div>
        <div class="business-text">住宅電気設備</div>
      </div>
    <div class="business-item">
      <div class="business-img"><img src="http://electricalworkshopsite.local/wp-content/uploads/2023/01/bisiness-sample.png" alt="店舗電気工事設備"></div>
        <div class="business-text">店舗電気設備</div>
      </div>
    <div class="business-item">
      <div class="business-img"><img src="http://electricalworkshopsite.local/wp-content/uploads/2023/01/bisiness-sample.png" alt="リニューアル電気設備"></div>
      <div class="business-text">リニューアル工事</div>
      </div>
    </div>
  </div>

  <!-- ここまで事業案内 -->

  <!-- ここから施工実績 -->
  <div id="works" class="works-container">
    <h2>施工実績</h2>
    <div class="works-box">
    <?php xo_slider( 72 ); ?>
    </div>
  </div>
    
      
  
  <!-- ここまで施工実績 -->

  <!-- ここからお客様の声 -->
  <div id="voice" class="voice-container">
    <h2>お客様の声</h2>
    <div class="voice-box">
      <div class="voice-img"><img src="http://electricalworkshopsite.local/wp-content/uploads/2023/01/voice-sample.png" alt="お客様の顔写真"></div>
    </div>
    <div class="voice-text">
      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
    </div>
  </div>
    
  <!-- ここまでお客様の声 -->

  <!-- ここからお問い合わせ -->
  <div id="contact" class="contact-container">
    <h2>お問い合わせ</h2>
    <div class="contact-box">
      <div class="contact-item">
        <div class="contact-img"><img src="http://electricalworkshopsite.local/wp-content/uploads/2023/01/contact-sample.png" alt="ヘルメット被る人"></div>
        <div class="contact-text">案件ご依頼のお客様はコチラ</div>       
      </div>
      <div class="contact-item">
        <div class="contact-img"><img src="http://electricalworkshopsite.local/wp-content/uploads/2023/01/contact-sample.png" alt="円陣組む人"></div>
        <div class="contact-text">パートナーご依頼のお客様はコチラ</div>       
      </div>
      <div class="contact-item">
        <div class="contact-img"><img src="http://electricalworkshopsite.local/wp-content/uploads/2023/01/contact-sample.png" alt="リクルート写真"></div>
        <div class="contact-text">採用募集</div>       
      </div>
    </div>
  </div>
</div>
  
  <!-- ここまでお問い合わせ -->
  
  <div class="page-bottom">
    <div class="bottom-container">
      <div class="banner">
        <div class="banner-img"><a href="#"><img src="http://electricalworkshopsite.local/wp-content/uploads/2023/01/banner-2.png" alt="バナー①"> </a></div>
        <div class="banner-img"><a href="#"><img src="http://electricalworkshopsite.local/wp-content/uploads/2023/01/banner-1.png" alt="バナー②"> </a></div>
        </div>
      </div>
      <h3 class="followus">Follow Us!</h3>
      <div class="sns">
        <div><a href="#"><i class="bi bi-instagram"></i></a></div>
      </div>
      <div class="gotop">
        <a href="#top"><i class="bi bi-chevron-double-up"></i></a>
      </div>
    </div>




<?php get_footer();//<footer>を呼び出す関数。誤動作を防ぐため最終行には閉じタグを書かない。