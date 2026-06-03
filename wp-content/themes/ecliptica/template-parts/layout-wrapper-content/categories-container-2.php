<div data-colibri-id="1853-m5" class="h-row-container gutters-row-lg-0 gutters-row-md-0 gutters-row-0 gutters-row-v-lg-0 gutters-row-v-md-0 gutters-row-v-0 style-139 style-local-1853-m5 position-relative">
  <div class="h-row justify-content-lg-start justify-content-md-start justify-content-start align-items-lg-stretch align-items-md-stretch align-items-stretch gutters-col-lg-0 gutters-col-md-0 gutters-col-0 gutters-col-v-lg-0 gutters-col-v-md-0 gutters-col-v-0">
    <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-313-outer style-local-1853-m6-outer">
      <div data-colibri-id="1853-m6" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-0 v-inner-md-0 v-inner-0 style-313 style-local-1853-m6 position-relative">
        <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
          <div data-href="<?php the_permalink(); ?>" data-colibri-component="link" data-colibri-id="1853-m7" class="colibri-post-thumbnail <?php ecliptica_post_thumbnail_classes(); ?> <?php ecliptica_post_thumb_placeholder_classes(); ?> style-289 style-local-1853-m7 h-overflow-hidden position-relative h-element">
            <div class="h-global-transition-all colibri-post-thumbnail-shortcode style-dynamic-1853-m7-height">
              <?php ecliptica_post_thumbnail(array (
                'link' => true,
              )); ?>
            </div>
            <div class="colibri-post-thumbnail-content align-items-lg-center align-items-md-center align-items-center flex-basis-100">
              <div class="w-100 h-y-container"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="h-column h-column-container d-flex h-col-lg-auto h-col-md-auto h-col-auto style-140-outer style-local-1853-m8-outer">
      <div data-colibri-id="1853-m8" class="d-flex h-flex-basis h-column__inner h-px-lg-3 h-px-md-3 h-px-2 v-inner-lg-0 v-inner-md-0 v-inner-3 style-140 style-local-1853-m8 position-relative">
        <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
          <div data-colibri-id="1853-m9" class="h-blog-title style-142 style-local-1853-m9 position-relative h-element">
            <div class="h-global-transition-all">
              <?php ecliptica_post_title(array (
                'heading_type' => 'h5',
                'classes' => 'colibri-word-wrap',
              )); ?>
            </div>
          </div>
          <?php if ( \ColibriWP\Theme\Core\Hooks::prefixed_apply_filters( 'show_post_meta', true ) ): ?>
          <div data-colibri-id="1853-m10" class="h-blog-meta style-312 style-local-1853-m10 position-relative h-element">
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
                <?php ecliptica_the_date('F j, Y'); ?>
              </a>
            </div>
          </div>
          <?php endif; ?>
          <div data-colibri-id="1853-m11" class="style-293 style-local-1853-m11 position-relative h-element">
            <div class="h-global-transition-all">
              <?php ecliptica_post_excerpt(array (
                'max_length' => 20,
              )); ?>
            </div>
          </div>
          <div data-colibri-id="1853-m12" class="h-x-container style-145 style-local-1853-m12 position-relative h-element">
            <div class="h-x-container-inner style-dynamic-1853-m12-group">
              <span class="h-button__outer style-295-outer style-local-1853-m13-outer d-inline-flex h-element">
                <a h-use-smooth-scroll="true" href="<?php the_permalink(); ?>" data-colibri-id="1853-m13" class="d-flex w-100 align-items-center h-button justify-content-lg-center justify-content-md-center justify-content-center style-295 style-local-1853-m13 position-relative">
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
