<?php get_header(); 
    $id_blog = get_option('page_for_posts');
?>
<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <blockquote class="text-center pl-3 subtitle">
                <?php
                    echo get_post_meta($id_blog, 'edc_blog_top_slogan', true);
                ?>
            </blockquote>
        </div>
        <!-- col-md-8 -->
    </div>
    <!-- row -->
</div>

<div class="container">
    <div class="row">
        <main class="col-lg-9 col-md-8">
            <h1 class="divider text-center mb-3">
                <?php
                    echo get_post_meta($id_blog, 'edc_blog_top_title', true);
                ?>
            </h1>

            <?php if(have_posts()):
            
            while(have_posts()): the_post();?>
            <div class="row mb-4 post-preview">
                <div class="col-md-4">
                    <?php the_post_thumbnail('mediano', array('class' => 'img-fluid')); ?>
                </div>
                <!-- col-md-4 image -->
                <div class="col-md-8">
                    <div class="post-content pt-4 pt-md-0">
                        <a href="entrada.html">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <div class="post-meta pt-2 pt-md-0">
                            <p class="m-0">
                                Escrito el: <span>
                                    <?php the_time(get_option('date_format')); /* insert the date in all posts */?>
                                </span>por
                                <a
                                    href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename') ); ?>"><?php the_author(); ?></a>
                            </p>
                        </div>
                        <!-- post-meta -->
                        <p>
                            <?php the_excerpt();?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary text-light">Ver entrada</a>
                    </div>
                    <!-- post-content -->
                </div>
                <!-- col-md-8 -->
            </div>
            <!-- row postPreview -->
            <?php endwhile; ?>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <?php
                        previous_posts_link('
                            <span class="page-link" aria-hidden="true">&laquo; Anteriores</span>
                            <span class="sr-only">Anteriores</span> 
                        ');
                    ?>
                </li>
                <li class="page-item">
                    <?php
                        next_posts_link('
                            <span class="page-link" aria-hidden="true">Siguiente &raquo;</span>
                            <span class="sr-only">Siguiente</span> 
                        ');
                    ?>
                </li>
            </ul>
            <?php else : ?>
            <div class="container">
                <div class="row justify-content-center">
                    <p>
                        <?php echo get_post_meta($id_blog, 'edc_blog_no_posts', true); ?>
                    </p>
                </div>
            </div>
            <?php endif; ?>
        </main>
        <?php get_sidebar(); ?>
    </div>
    <!-- main row -->
</div>
<!-- main container -->
<?php get_footer(); ?>