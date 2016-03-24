<?php
/*
 * this is slider parts.
 *
 * @package conveythought
 */
?>

<section class="flexslider">
    <ul class="slides">
    <?php
    for ( $i = 1; $i <= 5; ) {
    ?>
    <?php if(get_option('conveythought_mainvisu_image_'.$i )){
                echo '<li>';
                if(get_option('conveythought_mainvisu_link_'.$i )){
                    echo '<a href="';
                    echo esc_url(get_option('conveythought_mainvisu_link_' .$i ));
                    echo '" target="_blank">';
                    echo '<img src="';
                    echo esc_url(get_option('conveythought_mainvisu_image_' . $i));
                    echo '" />';
                    echo '</a>';

                }else{

                echo '<img src="' . esc_url(get_option('conveythought_mainvisu_image_'.$i)) . '" />';
            }}
                echo '</li>';
            $i++;

            } ?>
    </ul>
</section>
