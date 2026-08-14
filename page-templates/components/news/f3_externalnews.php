<!--S2: EXTERNAL-NEWS-->
<section class="f3-section f3-supporting f3-externalnews" id="externalnews">
    <div class="container-lg">
        <div class="row align-items-center">
            <div class="col-12">
                <?php if($externalnews_title = get_field('externalnews_title')):?><h2 class="f3-section__heading f3-section__text--white" data-aos="fade-up-right"><?php echo $externalnews_title;?></h2><?php endif;?>
                <?php if($externalnews_subtitle = get_field('externalnews_subtitle')):?><p class="f3-section__text f3-section__text--white" data-aos="fade-up"><?php echo $externalnews_subtitle;?></p><?php endif;?>
            </div><!--/.col-->
        </div><!--/.row-->

        <div class="row g-5 mt-0 align-items-center">
            <?php if($externalnews_article_title = get_field('externalnews_article_title')):?><h2 class="f3-section__heading f3-section__text--white" data-aos="fade-up-right"><?php echo $externalnews_article_title;?></h2><?php endif;?>
            
            <div class="col-12 mt-2">
                <?php if(have_rows('externalnews_articles_blocks')) :?> 
                    <?php while(have_rows('externalnews_articles_blocks')) : the_row();?>
                        <?php
                        $externalnews_articles_blocks_title = get_sub_field('externalnews_articles_blocks_title');
                        $externalnews_articles_blocks_subtitle = get_sub_field('externalnews_articles_blocks_subtitle');
                        $externalnews_articles_blocks_source = get_sub_field('externalnews_articles_blocks_source');
                        $externalnews_articles_blocks_date = get_sub_field('externalnews_articles_blocks_date');
                        ?>
                        <article class="externalnew-article mt-3">
                            <a href="<?php echo esc_url($externalnews_articles_blocks_source);?>" target="_blank" rel="noopener noreferrer" class="news-item">
                                <?php if($externalnews_articles_blocks_title):?><h4 class="news-title"><?php echo esc_html($externalnews_articles_blocks_title);?></h4><?php endif;?>
                                <?php if($externalnews_articles_blocks_subtitle):?><p class="news-description mb-3"><?php echo esc_html($externalnews_articles_blocks_subtitle);?></p><?php endif;?>
                                <?php if($externalnews_articles_blocks_date):?><span class="news-date"><?php echo esc_html($externalnews_articles_blocks_date);?></span><?php endif;?>
                            </a>
                        </article>
                    <?php endwhile;?>
                <?php endif;?>
                <article class="externalnew-article mt-3 d-none">
                    <a href="https://news.google.com/rss/articles/CBMiogFBVV95cUxQYXRqc0dyOEx1YzBlLXF6U1AyalNqQmcyUjEzd0RZVE5jYm10cVdzUklmekM3MTFPV2JzUEVMX1VablI0aVFhVzFkdHFLdE1Oa21VSUtkUG1oUVdxeW9ScEJNWU5RclpXVjNHYXlINzRVWUJHZndENFIxc3kybF9WZ200TjVJM0tydXVwYmpZZmRoa1JPQkUxRlEwR1pLUTJ0eFE?oc=5" target="_blank" rel="noopener noreferrer" class="news-item">
                        <h4 class="news-title">New cell tower going up in Red Deer’s West Park neighbourhood - Red Deer Advocate</h4>
                        <p class="news-description mb-3">New cell tower going up in Red Deer’s West Park neighbourhood Red Deer Advocate</p>
                        <span class="news-date">May 13, 2026</span>
                    </a>
                </article>
            </div><!--/.col-->

        </div><!--/.row-->
    </div><!--/.container-->
</section>
<!--/S2: EXTERNAL-NEWS-->