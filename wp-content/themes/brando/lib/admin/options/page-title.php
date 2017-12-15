<?php
/**
 * Page Title Tab For Theme Option.
 *
 * @package Brando
 */
?>
<?php
$this->sections[] = array(
    'icon' => 'el-icon-website',
    'title' => esc_html__('Page Title', 'brando'),
    'fields' => array(
                  	  array(
                          'id'       => 'brando_enable_title_wrapper',
                          'type'     => 'switch',
                          'title'    => esc_html__('Enable Title', 'brando'),
                          'default'  => true,
                          'subtitle' => esc_html__('If on, a title will display in page', 'brando'),
                      ),
                      array(
                        'id' => 'brando_header_subtitle',
                        'type' => 'text',
                        'title' => esc_html__('Subtitle', 'brando'),
                        'required'  => array('brando_enable_title_wrapper', 'equals', '1'),
                      ),
                      array(
                          'id'       => 'brando_title_background',
                          'type'     => 'media',
                          'preview'  => true,
                          'url'      => true,  
                          'title'    => esc_html__( 'Title Background Image', 'brando' ),
                          'subtitle' => esc_html__('Recommended image size (1920px X 700px) for better result.', 'brando'),
                          'required'  => array('brando_enable_title_wrapper', 'equals', '1'),
                      ),
                      array(
                          'id'       => 'brando_title_parallax_effect',
                          'type'     => 'select',
                          'title'    => esc_html__( 'Parallax effect', 'brando' ),
                          'options'  => array('no-effect' => esc_html__('No Effect', 'brando'),
                                    'parallax1' => esc_html__('Parallax effect 1', 'brando'),
                                    'parallax2' => esc_html__('Parallax effect 2', 'brando'),
                                    'parallax3' => esc_html__('Parallax effect 3', 'brando'),
                                    'parallax4' => esc_html__('Parallax effect 4', 'brando'),
                                    'parallax5' => esc_html__('Parallax effect 5', 'brando'),
                                    'parallax6' => esc_html__('Parallax effect 6', 'brando'),
                                    'parallax7' => esc_html__('Parallax effect 7', 'brando'),
                                    'parallax8' => esc_html__('Parallax effect 8', 'brando'),
                                    'parallax9' => esc_html__('Parallax effect 9', 'brando'),
                                    'parallax10' => esc_html__('Parallax effect 10', 'brando'),
                                    'parallax11' => esc_html__('Parallax effect 11', 'brando'),
                                    'parallax12' => esc_html__('Parallax effect 12', 'brando')
                                   ),
                          'subtitle' => esc_html__( 'Choose parallax effect', 'brando' ),
                          'required'  => array('brando_enable_title_wrapper', 'equals', '1'),
                      ),
                      array(
                          'id'        => 'opt-accordion-begin-page-title',
                          'type'      => 'accordion',
                          'title'     => esc_html__('Default Posts / Blog Page Title Settings', 'brando' ),
                          'subtitle'  => esc_html__('Set default / blog page title settings.', 'brando' ),
                          'position'  => 'start',
                      ),
                      array(
                          'id'       => 'brando_enable_blog_title_wrapper',
                          'type'     => 'switch',
                          'title'    => esc_html__('Enable Title', 'brando'),
                          'default'  => true,
                          'subtitle' => esc_html__('If on, a title will display in page', 'brando'),
                      ),
                      array(
                        'id' => 'brando_blog_page_title',
                        'type' => 'text',
                        'title' => esc_html__('Blog Page Title', 'brando'),
                        'default' => 'Blog',
                        'required'  => array('brando_enable_blog_title_wrapper', 'equals', '1'),
                      ),
                      array(
                          'id' => 'brando_blog_page_subtitle',
                          'type' => 'text',
                          'title' => esc_html__('Subtitle', 'brando'),
                          'required'  => array('brando_enable_blog_title_wrapper', 'equals', '1'),
                      ),
                      array(
                          'id'       => 'brando_blog_page_background_image',
                          'type'     => 'media',
                          'preview'  => true,
                          'url'      => true,  
                          'title'    => esc_html__( 'Background Image', 'brando' ),
                          'subtitle' => esc_html__( 'Upload the background image for Blog page', 'brando' ),
                          'required'  => array('brando_enable_blog_title_wrapper', 'equals', '1'),
                      ),
                      array(
                          'id'       => 'brando_blog_title_parallax_effect',
                          'type'     => 'select',
                          'title'    => esc_html__( 'Parallax effect', 'brando' ),
                          'options'  => array('no-effect' => esc_html__('No Effect', 'brando'),
                                    'parallax1' => esc_html__('Parallax effect 1', 'brando'),
                                    'parallax2' => esc_html__('Parallax effect 2', 'brando'),
                                    'parallax3' => esc_html__('Parallax effect 3', 'brando'),
                                    'parallax4' => esc_html__('Parallax effect 4', 'brando'),
                                    'parallax5' => esc_html__('Parallax effect 5', 'brando'),
                                    'parallax6' => esc_html__('Parallax effect 6', 'brando'),
                                    'parallax7' => esc_html__('Parallax effect 7', 'brando'),
                                    'parallax8' => esc_html__('Parallax effect 8', 'brando'),
                                    'parallax9' => esc_html__('Parallax effect 9', 'brando'),
                                    'parallax10' => esc_html__('Parallax effect 10', 'brando'),
                                    'parallax11' => esc_html__('Parallax effect 11', 'brando'),
                                    'parallax12' => esc_html__('Parallax effect 12', 'brando')
                                   ),
                          'subtitle' => esc_html__( 'Choose parallax effect', 'brando' ),
                          'default'  => 'parallax2',
                          'required'  => array('brando_enable_blog_title_wrapper', 'equals', '1'),
                      ),
                      array(
                          'id'        => 'opt-accordion-end-page-title',
                          'type'      => 'accordion',
                          'position'  => 'end'
                      ),
                    array(
                        'id'        => 'opt-accordion-begin-page-title',
                        'type'      => 'accordion',
                        'title'     => esc_html__('Archive Page Title Settings', 'brando' ),
                        'subtitle'  => esc_html__('Set archive, categories, tags, author and search page title settings.', 'brando' ),
                        'position'  => 'start',
                    ),
                    array(
                          'id'       => 'brando_enable_general_title_wrapper',
                          'type'     => 'switch',
                          'title'    => esc_html__('Enable Title', 'brando'),
                          'default'  => true,
                          'subtitle' => esc_html__('If on, a title will display in page', 'brando'),
                      ),
                      array(
                          'id'       => 'brando_general_background_image',
                          'type'     => 'media',
                          'preview'  => true,
                          'url'      => true,  
                          'title'    => esc_html__( 'Background Image', 'brando' ),
                          'subtitle' => esc_html__( 'Upload the background image for Archive, Search, Author pages', 'brando' ),
                          'required'  => array('brando_enable_general_title_wrapper', 'equals', '1'),
                      ),
                      array(
                          'id'       => 'brando_general_title_parallax_effect',
                          'type'     => 'select',
                          'title'    => esc_html__( 'Parallax effect', 'brando' ),
                          'options'  => array('no-effect' => esc_html__('No Effect', 'brando'),
                                    'parallax1' => esc_html__('Parallax effect 1', 'brando'),
                                    'parallax2' => esc_html__('Parallax effect 2', 'brando'),
                                    'parallax3' => esc_html__('Parallax effect 3', 'brando'),
                                    'parallax4' => esc_html__('Parallax effect 4', 'brando'),
                                    'parallax5' => esc_html__('Parallax effect 5', 'brando'),
                                    'parallax6' => esc_html__('Parallax effect 6', 'brando'),
                                    'parallax7' => esc_html__('Parallax effect 7', 'brando'),
                                    'parallax8' => esc_html__('Parallax effect 8', 'brando'),
                                    'parallax9' => esc_html__('Parallax effect 9', 'brando'),
                                    'parallax10' => esc_html__('Parallax effect 10', 'brando'),
                                    'parallax11' => esc_html__('Parallax effect 11', 'brando'),
                                    'parallax12' => esc_html__('Parallax effect 12', 'brando')
                                   ),
                          'subtitle' => esc_html__( 'Choose parallax effect', 'brando' ),
                          'default'  => 'parallax2',
                          'required'  => array('brando_enable_general_title_wrapper', 'equals', '1'),
                      ),
                    array(
                        'id'        => 'opt-accordion-end-page-title',
                        'type'      => 'accordion',
                        'position'  => 'end'
                    ),
                    array(
                        'id'        => 'opt-accordion-begin-page-title',
                        'type'      => 'accordion',
                        'title'     => esc_html__('Portfolio Post Title Settings', 'brando' ),
                        'subtitle'  => esc_html__('Set portfolio posts title settings.', 'brando' ),
                        'position'  => 'start',
                    ),
                    array(
                          'id'       => 'brando_enable_title_wrapper_portfolio',
                          'type'     => 'switch',
                          'title'    => esc_html__('Enable Title', 'brando'),
                          'default'  => true,
                          'subtitle' => esc_html__('If on, a title will display in page', 'brando'),
                      ),
                      array(
                        'id' => 'brando_header_subtitle_portfolio',
                        'type' => 'text',
                        'title' => esc_html__('Subtitle', 'brando'),
                        'required'  => array('brando_enable_title_wrapper_portfolio', 'equals', '1'),
                      ),
                      array(
                          'id'       => 'brando_title_background_portfolio',
                          'type'     => 'media',
                          'preview'  => true,
                          'url'      => true,  
                          'title'    => esc_html__( 'Title Background Image', 'brando' ),
                          'subtitle' => esc_html__('Recommended image size (1920px X 700px) for better result.', 'brando'),
                          'required'  => array('brando_enable_title_wrapper_portfolio', 'equals', '1'),
                      ),
                      array(
                          'id'       => 'brando_title_parallax_effect_portfolio',
                          'type'     => 'select',
                          'title'    => esc_html__( 'Parallax effect', 'brando' ),
                          'options'  => array('no-effect' => esc_html__('No Effect', 'brando'),
                                    'parallax1' => esc_html__('Parallax effect 1', 'brando'),
                                    'parallax2' => esc_html__('Parallax effect 2', 'brando'),
                                    'parallax3' => esc_html__('Parallax effect 3', 'brando'),
                                    'parallax4' => esc_html__('Parallax effect 4', 'brando'),
                                    'parallax5' => esc_html__('Parallax effect 5', 'brando'),
                                    'parallax6' => esc_html__('Parallax effect 6', 'brando'),
                                    'parallax7' => esc_html__('Parallax effect 7', 'brando'),
                                    'parallax8' => esc_html__('Parallax effect 8', 'brando'),
                                    'parallax9' => esc_html__('Parallax effect 9', 'brando'),
                                    'parallax10' => esc_html__('Parallax effect 10', 'brando'),
                                    'parallax11' => esc_html__('Parallax effect 11', 'brando'),
                                    'parallax12' => esc_html__('Parallax effect 12', 'brando')
                                   ),
                          'subtitle' => esc_html__( 'Choose parallax effect', 'brando' ),
                          'required'  => array('brando_enable_title_wrapper_portfolio', 'equals', '1'),
                      ),
                      array(
                        'id'        => 'opt-accordion-end-page-title',
                        'type'      => 'accordion',
                        'position'  => 'end'
                    ),
                    array(
                        'id'        => 'opt-accordion-begin-page-title',
                        'type'      => 'accordion',
                        'title'     => esc_html__('Portfolio Category, Tag Page Title Settings', 'brando' ),
                        'subtitle'  => esc_html__('Set portfolio category, tag page title settings.', 'brando' ),
                        'position'  => 'start',
                    ),
                    array(
                          'id'       => 'brando_category_enable_title_wrapper',
                          'type'     => 'switch',
                          'title'    => esc_html__('Enable Title', 'brando'),
                          'default'  => true,
                          'subtitle' => esc_html__('If on, a title will display in page', 'brando'),
                      ),
                      array(
                          'id'       => 'brando_category_title_background',
                          'type'     => 'media',
                          'preview'  => true,
                          'url'      => true,  
                          'title'    => esc_html__( 'Title Background Image', 'brando' ),
                          'subtitle' => esc_html__('Recommended image size (1920px X 700px) for better result.', 'brando'),
                          'required'  => array('brando_category_enable_title_wrapper', 'equals', '1'),
                      ),
                      array(
                          'id'       => 'brando_category_title_parallax_effect',
                          'type'     => 'select',
                          'title'    => esc_html__( 'Parallax effect', 'brando' ),
                          'options'  => array('no-effect' => esc_html__('No Effect', 'brando'),
                                    'parallax1' => esc_html__('Parallax effect 1', 'brando'),
                                    'parallax2' => esc_html__('Parallax effect 2', 'brando'),
                                    'parallax3' => esc_html__('Parallax effect 3', 'brando'),
                                    'parallax4' => esc_html__('Parallax effect 4', 'brando'),
                                    'parallax5' => esc_html__('Parallax effect 5', 'brando'),
                                    'parallax6' => esc_html__('Parallax effect 6', 'brando'),
                                    'parallax7' => esc_html__('Parallax effect 7', 'brando'),
                                    'parallax8' => esc_html__('Parallax effect 8', 'brando'),
                                    'parallax9' => esc_html__('Parallax effect 9', 'brando'),
                                    'parallax10' => esc_html__('Parallax effect 10', 'brando'),
                                    'parallax11' => esc_html__('Parallax effect 11', 'brando'),
                                    'parallax12' => esc_html__('Parallax effect 12', 'brando')
                                   ),
                          'subtitle' => esc_html__( 'Choose parallax effect', 'brando' ),
                          'required'  => array('brando_category_enable_title_wrapper', 'equals', '1'),
                      ),
                      array(
                        'id'        => 'opt-accordion-end-page-title',
                        'type'      => 'accordion',
                        'position'  => 'end'
                    ),
                )
);
?>