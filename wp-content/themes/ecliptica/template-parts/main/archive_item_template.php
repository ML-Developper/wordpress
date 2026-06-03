<div class="<?php ecliptica_print_archive_entry_class("h-column h-column-container d-flex  masonry-item style-108-outer style-local-1847-m4-outer");?>" data-masonry-width="<?php ecliptica_print_masonry_col_class(true); ?>">
  <div data-colibri-id="1847-m4" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-108 style-local-1847-m4 position-relative">
    <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
      <div data-href="<?php the_permalink(); ?>" data-colibri-component="link" data-colibri-id="1847-m5" class="colibri-post-thumbnail <?php ecliptica_post_thumbnail_classes(); ?> <?php ecliptica_post_thumb_placeholder_classes(); ?> style-289 style-local-1847-m5 h-overflow-hidden position-relative h-element">
        <div class="h-global-transition-all colibri-post-thumbnail-shortcode style-dynamic-1847-m5-height">
          <?php ecliptica_post_thumbnail(array (
            'link' => true,
          )); ?>
        </div>
        <div class="colibri-post-thumbnail-content align-items-lg-center align-items-md-center align-items-center flex-basis-100">
          <div class="w-100 h-y-container"></div>
        </div>
      </div>
      <div data-colibri-id="1847-m6" class="h-row-container gutters-row-lg-0 gutters-row-md-0 gutters-row-0 gutters-row-v-lg-2 gutters-row-v-md-2 gutters-row-v-2 style-110 style-local-1847-m6 position-relative">
        <div class="h-row justify-content-lg-center justify-content-md-center justify-content-center align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-0 gutters-col-md-0 gutters-col-0 gutters-col-v-lg-2 gutters-col-v-md-2 gutters-col-v-2">
          <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-291-outer style-local-1847-m7-outer">
            <div data-colibri-id="1847-m7" class="d-flex h-flex-basis h-column__inner h-px-lg-3 h-px-md-3 h-px-3 v-inner-lg-0 v-inner-md-0 v-inner-3 style-291 style-local-1847-m7 position-relative">
              <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
                <div data-colibri-id="1847-m8" class="h-blog-title style-112 style-local-1847-m8 position-relative h-element">
                  <div class="h-global-transition-all">
                    <?php ecliptica_post_title(array (
                      'heading_type' => 'h5',
                      'classes' => 'colibri-word-wrap',
                    )); ?>
                  </div>
                </div>
                <?php if ( \ColibriWP\Theme\Core\Hooks::prefixed_apply_filters( 'show_post_meta', true ) ): ?>
                <div data-colibri-id="1847-m9" class="h-blog-meta style-312 style-local-1847-m9 position-relative h-element">
                  <div name="2" class="metadata-item">
                    <span class="metadata-prefix">
                      <?php esc_html_e('Posted on','ecliptica'); ?>
                    </span>
                    <a href="<?php ecliptica_post_meta_date_url(); ?>">
                      <span class="h-svg-icon">
                        <!--Icon by Icons8 Line Awesome (https://icons8.com/line-awesome)-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="calendar" viewBox="0 0 512 545.5">
                          <path d="M144 96h32v16h160V96h32v16h64v352H80V112h64V96zm-32 48v32h288v-32h-32v16h-32v-16H176v16h-32v-16h-32zm0 64v224h288V208H112zm96 32h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm-192 64h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm-192 64h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32z"></path>
                        </svg>
                      </span>
                      <?php ecliptica_the_date('F j Y'); ?>
                    </a>
                  </div>
                </div>
                <?php endif; ?>
                <div data-colibri-id="1847-m10" class="style-293 style-local-1847-m10 position-relative h-element">
                  <div class="h-global-transition-all">
                    <?php ecliptica_post_excerpt(array (
                      'max_length' => 20,
                    )); ?>
                  </div>
                </div>
                <div data-colibri-id="1847-m11" class="h-x-container style-115 style-local-1847-m11 position-relative h-element">
                  <div class="h-x-container-inner style-dynamic-1847-m11-group">
                    <span class="h-button__outer style-295-outer style-local-1847-m12-outer d-inline-flex h-element">
                      <a h-use-smooth-scroll="true" href="<?php the_permalink(); ?>" data-colibri-id="1847-m12" class="d-flex w-100 align-items-center h-button justify-content-lg-center justify-content-md-center justify-content-center style-295 style-local-1847-m12 position-relative">
                        <span>
                          <?php esc_html_e('Read More','ecliptica'); ?>
                        </span>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
