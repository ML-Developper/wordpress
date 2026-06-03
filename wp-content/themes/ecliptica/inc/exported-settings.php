<?php

return array (
  'header_front_page' => 
  array (
    'navigation' => 
    array (
      'style' => 
      array (
        'ancestor' => 
        array (
          'sticky' => 
          array (
            'background' => 
            array (
              'color' => '#ffffff',
            ),
          ),
        ),
        'background' => 
        array (
          'color' => 'rgba(42, 38, 37, 0.5)',
        ),
        'padding' => 
        array (
          'top' => 
          array (
            'value' => 20,
          ),
        ),
      ),
      'props' => 
      array (
        'showTopBar' => false,
        'sticky' => true,
        'overlap' => true,
        'width' => 'boxed',
        'layoutType' => 'logo-spacing-menu',
      ),
    ),
    'hero' => 
    array (
      'props' => 
      array (
        'heroSection' => 
        array (
          'layout' => 'textOnly',
        ),
      ),
      'style' => 
      array (
        'padding' => 
        array (
          'top' => 
          array (
            'value' => '120',
            'unit' => 'px',
          ),
          'bottom' => 
          array (
            'value' => 200,
            'unit' => 'px',
          ),
        ),
        'separatorBottom' => 
        array (
          'height' => 
          array (
            'unit' => 'px',
            'value' => 100,
          ),
          'type' => 'tilt',
          'color' => '#FFF',
        ),
        'background' => 
        array (
          'image' => 
          array (
            0 => 
            array (
              'source' => 
              array (
                'gradient' => 
                array (
                  'steps' => 
                  array (
                    0 => 
                    array (
                      'color' => '#b721ff',
                    ),
                    1 => 
                    array (
                      'color' => '#21d4fd',
                      'position' => '100',
                    ),
                  ),
                ),
              ),
              'attachment' => 'scroll',
              'position' => 
              array (
                'x' => 51.602390073015,
              ),
              'repeat' => 'no-repeat',
              'size' => 'cover',
            ),
          ),
          'type' => 'image',
          'overlay' => 
          array (
            'enabled' => true,
            'type' => 'color',
            'gradient' => 
            array (
              'angle' => '180',
              'steps' => 
              array (
                0 => 
                array (
                  'color' => 'rgba(79, 172, 254, 0.8)',
                ),
                1 => 
                array (
                  'color' => 'rgba(0, 242, 254, 0.8)',
                  'position' => '100',
                ),
              ),
              'name' => 'october_silence',
            ),
            'color' => 
            array (
              'opacity_' => 10,
              'value' => '#2A2625',
            ),
          ),
        ),
      ),
    ),
  ),
  'header_post' => 
  array (
    'hero' => 
    array (
      'style' => 
      array (
        'padding' => 
        array (
          'bottom' => 
          array (
            'value' => 110,
          ),
        ),
        'background' => 
        array (
          'overlay' => 
          array (
            'color' => 
            array (
              'value' => '#2A2625',
              'opacity_' => 50,
            ),
          ),
        ),
      ),
    ),
    'navigation' => 
    array (
      'style' => 
      array (
        'padding' => 
        array (
          'top' => 
          array (
            'value' => 20,
          ),
        ),
      ),
    ),
  ),
);
