<?php
$arg  = array(
    'post_type' => 'project',
    'orderby' => 'date',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'post_status' => 'publish',
);
$projects = new WP_Query($arg);

if ($projects->have_posts()) {
?>
    <section class="m-project-list u-py-3xl">
        <div class="l-container">
            <div class="l-row">
                <div class="l-col-md-10 l-col-lg-8">
                    <h2 class="m-project-list__title">
                        Our mission is to support the meaningful companies, causes, and communities building a more equitable world.
                    </h2>

                    <a href="#" class="c-btn c-btn__margin" title="Projects" aria-label="Projects">
                        <span>Projects</span>
                        <span>→</span>
                    </a>
                </div>
            </div>
            <div class="m-project-list__slider">
                <?php
                while ($projects->have_posts()) {
                    $projects->the_post();
                    // Get image data
                    $thumbnail_id    = get_post_thumbnail_id();
                    $thumbnail       = wp_get_attachment_image_src($thumbnail_id, 'medium');
                    $srcset          = wp_get_attachment_image_srcset($thumbnail_id, 'medium');
                    $sizes           = wp_get_attachment_image_sizes($thumbnail_id, 'medium');
                    $image_title     = get_the_title($thumbnail_id);
                    $image_alt       = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>
                    <a href="#" class="m-project-list__single-card" title="<?php echo get_the_title() ?>" aria-label="<?php echo get_the_title() ?>">
                        <div class="l-row">
                            <div class="l-col-md-7 l-col-lg-8">
                                <?php if ($thumbnail) { ?>
                                    <figure class="m-project-list__figure c-figure lazy-content-hidden" animation="img-intro">
                                        <div>
                                            <img class="c-image js-lazy-media"
                                                src="<?php echo esc_url($thumbnail[0]); ?>"
                                                srcset="<?php echo esc_attr($srcset); ?>"
                                                sizes="<?php echo esc_attr($sizes); ?>"
                                                width="<?php echo esc_attr($thumbnail[1]); ?>"
                                                height="<?php echo esc_attr($thumbnail[2]); ?>"
                                                alt="<?php echo esc_attr($image_alt ?: $image_title); ?>"
                                                title="<?php echo esc_attr($image_title); ?>">
                                            <span></span>
                                        </div>
                                    </figure>
                                <?php } ?>
                            </div>
                            <div class="l-col-md-5 l-col-lg-4">
                                <h3 class="m-project-list__single-card-title">
                                    <?php echo esc_html(get_field('project_except') ?? "This is a dummy text of project");?>
                                    <span><?php echo get_the_title() ?> →</span>
                                </h3>
                            </div>
                        </div>
                    </a>

                <?php } ?>
            </div>
        </div>
    </section>
<?php
}
wp_reset_postdata();
?>