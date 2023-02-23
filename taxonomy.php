<?php get_header(); ?>

<main>
    <h1><?php
    if(is_tax()) {
        echo single_term_title('施工タイプ：');//タクソノミー名を表示
    }
    ?></h1>

    <div class="archive-loop">

    <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
        
        <div class="archive-loop-box">
            <div class="">
                <?php
                if(has_post_thumbnail()):
                    the_post_thumbnail('thumbnail');
                else: ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post-thumb150.jpg" alt="">
                <?php endif; ?>
            </div>
            <div class="title-block">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><!-- 投稿のタイトル（とリンク） -->
            </div>
        </div>

    <?php endwhile; else: ?>
    <p>投稿はありません</p>
    <?php endif; ?>

    </div>