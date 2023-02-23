<?php get_header(); ?><!-- <header>を呼び出す関数 -->
<div class="company-subcontainer">
<h2>会社案内</h2>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>
<?php endif; ?>

<div class="company-table-container">

  <div class="company-table">
    <dl class="company-dl">
      <dt class="text-table">会社名</dt>
      <dd class="cell">○○電気工事株式会社</dd>
    </dl>
    <dl>
      <dt class="text-table">代表者</dt>
      <dd class="cell">代表取締役社長　川井貴弘</dd>
    </dl>
    <dl>
      <dt class="text-table">会社設立</dt>
      <dd class="cell">1990年5月30日</dd>
    </dl>
    <dl>
      <dt class="text-table">住所</dt>
      <dd class="cell">東京都八王子市成瀬町1-1-1</dd>
    </dl>
    <dl>
      <dt class="text-table">資本金</dt>
      <dd class="cell">5,000,000円</dd>
    </dl>
    <dl>
      <dt class="text-table">従業員</dt>
      <dd class="cell">４名</dd>
    </dl>
    <dl>
      <dt class="text-table">事業内容</dt>
      <dd class="cell">電気工事設備設計・施工</dd>
    </dl>
    <dl>
      <dt class="text-table">各種許認可</dt>
      <dd class="cell">○○電気工事株式会社</dd>
    </dl>
  </div>
  
  <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.868148101318!2d139.33666421561148!3d35.65562003898287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60191ddbe2e8769b%3A0xf1cd0ce672c86e75!2z5YWr546L5a2Q6aeF!5e0!3m2!1sja!2sjp!4v1674652513254!5m2!1sja!2sjp" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
  </div>
  </div>

  </div>

<?php get_footer();//<footer>を呼び出す関数。誤動作を防ぐため最終行には閉じタグを書かない。