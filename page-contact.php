<?php get_header(); ?><!-- <header>を呼び出す関数 -->
<div class="contact-subcontainer-title">
  <h2>お問い合わせ</h2>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
</div>
<?php the_content(); ?>
<?php endwhile; else: ?>
<?php endif; ?>
<div class="all-container myform">
<?php echo do_shortcode('[contact-form-7 id="15" title="お問い合わせ"]'); ?>

</div>



<?php get_footer();//<footer>を呼び出す関数。誤動作を防ぐため最終行には閉じタグを書かない。