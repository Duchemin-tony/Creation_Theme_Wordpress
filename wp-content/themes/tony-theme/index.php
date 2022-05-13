<?php get_header() ?>

<?php if (have_posts()) : ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
                <div class="card text-center">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => 'Image article', 'style' => 'height: auto;']) ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <p class="card-text"><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Voir l'article</a>
                    </div>
                    <div class="card-footer text-muted">Publié le <?php the_time('j M Y'); ?></div>
                </div>
            </div>
        <?php endwhile ?>
    </div>
<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>




<?php get_footer() ?>