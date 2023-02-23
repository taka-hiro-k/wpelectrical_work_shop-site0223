<?php get_header(); ?>

<main>
 <div class="small-works">
    <h2>施工実績</h2>
    <div class="post-contents">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
       <div class="post-archive-flexbox">
                <div class="post-archive-box">
                    <?php if(has_post_thumbnail()): the_post_thumbnail('thumbnail'); else: ?><!-- サムネサイズのアイキャッチ画像を表示 -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post-thumb150.jpg" alt=""><!-- アイキャッチ画像が登録されていないとき用の画像（imagesフォルダに用意しておく） -->
                    <?php endif; ?>
                </div>
                    <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><!-- 投稿のタイトルとリンク --></h1>
        </div>
    </div>
 </div>
    <?php endwhile; else: ?>
        <p>該当する投稿はありません。
        </p>
    <?php endif; ?>
</main>

<?php get_footer();//誤動作を防ぐため最終行には閉じタグを書かない