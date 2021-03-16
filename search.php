<?php get_header(); ?> 


<div class="wrapper light-wrapper pd-search-pge">
    <div class="container inner">
        <?php
        global $query_string;
        $query_args = explode("&", $query_string);
        $search_query = array();

        foreach ($query_args as $key => $string) {
            $query_split = explode("=", $string);
            $search_query[$query_split[0]] = urldecode($query_split[1]);
        } // foreach

        $the_query = new WP_Query($search_query);
        if ($the_query->have_posts()) :
        ?>
            <!-- the loop -->

            <ul class="pd-search-page-items">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li>
                    <i class="jam jam-search"></i> 
                    <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail( 'large' ); ?>
                    <?php the_title(); ?></a>                       
                    </li>
                    
                <?php endwhile; ?>
            </ul>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p class="text-center" style="font-size:20px"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    </div>
</div>
<?php get_footer(); ?>