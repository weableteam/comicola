<?php

/**
 * Load ACF json
 * 
 * @author weable team
 */
function acf_json_load_point($paths)
{
    unset($paths[0]);

    $paths[] = get_template_directory_uri() . '/acf-json';

    return $paths;
}
add_filter('acf/settings/load_json', 'acf_json_load_point');

/**
 * Add ACF option page
 * 
 * @author weable team
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Cấu hình website',
		'menu_title'	=> 'Cấu hình website',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'icon_url' => 'dashicons-superhero-alt',
	));
	
}

/**
 * ACF blocks registant
 * 
 * @author weable team
 */
add_action('acf/init', 'tpa_acf_init_block_types');
function tpa_acf_init_block_types() {

    /**
     * Elements registant
     */
    if( function_exists('acf_register_block_type') ) {

        /**
         * [W-Elements] Section
         */
        acf_register_block_type( array(
            'name'              => 'w-element-container',
            'title'             => __('[W-Elements] Section'),
            'description'       => __('Element "Section"'),
            'render_template'   => 'template-parts/blocks/elements/w-element-container.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'preview',
            'align'             => 'full',
            'keywords'          => array( '[W-Elements] Section', 'acf' ),
            'supports'          => array(
                'align' => true,
                'mode' => false,
                'jsx' => true
            ),
        ));
    }

    /**
     * Blocks registant
     */
    if( function_exists('acf_register_block_type') ) {

        /** 
         * [W-Section] Banner Hero
         */
        acf_register_block_type(array(
            'name'              => 'banner-hero',
            'title'             => __('[W-Section] Banner Hero'),
            'description'       => __('Slider'),
            'render_template'   => 'template-parts/blocks/sections/banner-hero.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Banner Hero', 'acf' ),
        ));

        /** 
         * [W-Section] Project Items
         */
        acf_register_block_type(array(
            'name'              => 'project-items',
            'title'             => __('[W-Section] Project Items'),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/project-items.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Project Items', 'acf' ),
        ));
        /** 
         * [W-Section] Banner 
         */
        acf_register_block_type(array(
            'name'              => 'banner',
            'title'             => __('[W-Section] Banner '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/banner.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Banner ', 'acf' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview'   => "http://localhost:10065/wp-content/uploads/2023/04/image.webp",
                        'is_preview'    => true
                    )
                )
            ),
        ));
        /** 
         * [W-Section] Featured
         */
        acf_register_block_type(array(
            'name'              => 'featured',
            'title'             => __('[W-Section] Featured'),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/featured.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Featured', 'acf' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview'   => "http://localhost:10065/wp-content/uploads/2023/04/image-1.webp",
                        'is_preview'    => true
                    )
                )
            ),
        ));
         /** 
         * [W-Section] Rank
         */
        acf_register_block_type(array(
            'name'              => 'rank',
            'title'             => __('[W-Section] Rank '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/rank.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Rank ', 'acf' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview'   => "http://localhost:10065/wp-content/uploads/2023/04/image-2.webp",
                        'is_preview'    => true
                    )
                )
            ),
        ));

        /** 
         * [W-Section] Problem
         */
        acf_register_block_type(array(
            'name'              => 'problem',
            'title'             => __('[W-Section] Problem '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/problem.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Problem ', 'acf' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview'   => "http://localhost:10065/wp-content/uploads/2023/04/image-3.webp",
                        'is_preview'    => true
                    )
                )
            ),
        ));

        /** 
         * [W-Section] Slider List
         */
        acf_register_block_type(array(
            'name'              => 'sliderList',
            'title'             => __('[W-Section] Slider List '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/sliderList.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Slider List ', 'acf' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview'   => "http://localhost:10065/wp-content/uploads/2023/04/image-11.webp",
                        'is_preview'    => true
                    )
                )
            ),
        ));

        /** 
         * [W-Section] Team
         */
        acf_register_block_type(array(
            'name'              => 'team',
            'title'             => __('[W-Section] Team '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/team.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Team ', 'acf' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview'   => "http://localhost:10065/wp-content/uploads/2023/04/image-5.webp",
                        'is_preview'    => true
                    )
                )
            ),
        ));

          /** 
         * [W-Section] Posts
         */
        acf_register_block_type(array(
            'name'              => 'posts',
            'title'             => __('[W-Section] posts '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/posts.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] posts ', 'acf' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview'   => "http://localhost:10065/wp-content/uploads/2023/04/image-6.webp",
                        'is_preview'    => true
                    )
                )
            ),
        ));

        /** 
         * [W-Section] Online Shop
         */
        acf_register_block_type(array(
            'name'              => 'onlineShop',
            'title'             => __('[W-Section] Online Shop '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/onlineShop.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Online Shop ', 'acf' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview'   => "http://localhost:10065/wp-content/uploads/2023/04/image-7.webp",
                        'is_preview'    => true
                    )
                )
            ),
        ));

    
         /** 
         * [W-Section] Projects
         */
        acf_register_block_type(array(
            'name'              => 'projects',
            'title'             => __('[W-Section] Projects '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/projects.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Projects ', 'acf' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview'   => "http://localhost:10065/wp-content/uploads/2023/04/image-9.webp",
                        'is_preview'    => true
                    )
                )
            ),
        ));

        /** 
         * [W-Section] About Us
         */
        acf_register_block_type(array(
            'name'              => 'aboutUs',
            'title'             => __('[W-Section] About Us '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/aboutUs.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] About Us ', 'acf' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview'   => "http://localhost:10065/wp-content/uploads/2023/04/image-10.webp",
                        'is_preview'    => true
                    )
                )
            ),
        ));
     
        
    
        
        /** 
         * [W-Section] Cta
         */
        acf_register_block_type(array(
            'name'              => 'cta',
            'title'             => __('[W-Section] Cta '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/cta.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Cta ', 'acf' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                        'preview'   => "http://localhost:10065/wp-content/uploads/2023/04/image-8.webp",
                        'is_preview'    => true
                    )
                )
            ),
        ));
    }

    
}