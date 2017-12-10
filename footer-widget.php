<?php

if ( is_active_sidebar( 'footer-left' ) || is_active_sidebar( 'footer-center-left' ) || is_active_sidebar( 'footer-center-right' ) || is_active_sidebar( 'footer-right' ) ) {?>
        <div id="footer-widget" class="row m-0 py-4" style="">

                    <?php if ( is_active_sidebar( 'footer-left' )) : ?>
                        <div class="col-12 col-md-5 p-3"><?php dynamic_sidebar( 'footer-left' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-center-left' )) : ?>
                        <div class="col-12 col-md-2 p-3"><?php dynamic_sidebar( 'footer-center-left' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-center-right' )) : ?>
                        <div class="col-12 col-md-2 p-3"><?php dynamic_sidebar( 'footer-center-right' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-right' )) : ?>
                        <div class="col-12 col-md-3 p-3"><?php dynamic_sidebar( 'footer-right' ); ?></div>
                    <?php endif; ?>

        </div>

<?php }