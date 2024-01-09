<?php



if (!function_exists('homebody_setup')) :

    // 기본 세팅 
    function homebody_setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('post-thumbnail-img', 345);

        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ));
    }
endif; // homebody_setup
add_action('after_setup_theme', 'homebody_setup');


function homebody_style_sheet()
{
    wp_enqueue_style('homebody-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
};
add_action('wp_enqueue_scripts', 'homebody_style_sheet');

function custom_scripts() {
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array('jquery'),true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery'),true);
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '1.0.0',true);
    wp_enqueue_script('home-script', get_stylesheet_directory_uri() . '/js/home.js', array(), '1.0.0',true);

}

add_action('wp_enqueue_scripts', 'custom_scripts');


// 커스텀 메뉴
function homebody_custom_menu()
{
    register_nav_menus(
        array(
            'primary-menu'   => __('Primary Menu', 'homebody'),
            'middle-menu'   => __('Middle Menu', 'homebody'),
            'subscribe-menu' => __('Subscribe Menu', 'homebody'),
            'footer-menu' => __('Footer Menu', 'homebody'),
            'sidebar-menu' => __('Sidebar Menu', 'homebody')
        )
    );
}
add_action('init', 'homebody_custom_menu');


// 커스텀 사이드바 위젯
function homebody_widgets_sidebar_init()
{
    register_sidebar(
        array(
            'name'          => __('Sidebar', 'homebody'),
            'id'            => 'sidebar-widget',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'homebody_widgets_sidebar_init');

// 커스텀 푸터 위젯
function homebody_widgets_footer_init()
{
    register_sidebar(
        array(
            'name'          => __('Footer', 'homebody'),
            'id'            => 'footer-widget',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'homebody_widgets_footer_init');


add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_year()) {
        $title = get_the_date(_x('Y', 'yearly archives date format'));
    } elseif (is_month()) {
        $title = get_the_date(_x('F Y', 'monthly archives date format'));
    } elseif (is_day()) {
        $title = get_the_date(_x('F j, Y', 'daily archives date format'));
    } elseif (is_tax('post_format')) {
        if (is_tax('post_format', 'post-format-aside')) {
            $title = _x('Asides', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-gallery')) {
            $title = _x('Galleries', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-image')) {
            $title = _x('Images', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-video')) {
            $title = _x('Videos', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-quote')) {
            $title = _x('Quotes', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-link')) {
            $title = _x('Links', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-status')) {
            $title = _x('Statuses', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-audio')) {
            $title = _x('Audio', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-chat')) {
            $title = _x('Chats', 'post format archive title');
        }
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } else {
        $title = __('Archives');
    }
    return $title;
});


function get_submenu_categories($parent_category_name = 0, $url = 0, $image = true, $post_type = 'overview')
{
    echo '<div>';

    if ($parent_category_name == 0) {
        $sub_categories = get_categories(array(
            'child_of' => 0,  // 0을 지정하면 모든 카테고리의 서브 카테고리를 가져옵니다.
            'taxonomy' => 'category',  // 사용할 택소노미(기본 'category' 타입)
        ));
    } else {
        $sub_categories = get_categories(array(
            'parent'     => get_cat_ID($parent_category_name),
            'hide_empty' => false, // 글이 없는 카테고리도 가져오기
        ));
    }


    foreach ($sub_categories as $category) {
        $category_id = $category->cat_ID;
        $category_name = $category->cat_name;

        if ($url == 0) {
            $category_link = get_category_link($category_id);
        } else {
            $category_link = home_url() . '/' . $url . '/' . str_replace(' ', '-', strtolower($category_name)) . '/?option=' . $post_type;
        }
        //$category_img = 이미지 불러오기;

        if($image){
            // 이미지 URL을 지정
            $image_url = 'http://localhost/homebody/wp-content/uploads/2023/10/' . str_replace(' ', '-', strtolower($category_name)) . '.jpg'; // 여기에 원하는 이미지의 URL을 입력

            // 이미지 출력
            $image_data = wp_get_attachment_image_src(attachment_url_to_postid($image_url), 'full');
            if ($image_data) {
                echo '<div class="categoryBox" onclick="location.href=\''.$category_link.'\'"><img class="categoryImg" src="' . $image_data[0] . '" alt="Image Alt Text">';
            } else {
                echo '<div class="categoryBox" onclick="location.href=\''.$category_link.'\'"><div class="categoryImg"></div>';
            }

            echo "<a href='$category_link'>$category_name</a></div>";
        }else{
            echo "<a href='$category_link'>$category_name</a>";
        }
    };

    echo "</div>";
};


//section 만드는 함수
// 1. 특정 카테고리의 목록 가져오기 (카테고리, taxonomy)
// 2. 특정 카테고리의 서브카테고리의 목록 가져오기 (카테고리, taxonomy, slug)
// 3. 그냥 모든 목록 가져오기 (postType)

function create_section($target_post_type, $target_taxonomy, $target_category)
{
    // 변수 지정: 섹션 제목, 버튼으로 이동할 url
    $section_title = ucfirst(str_replace('-', ' ', $target_category));
    $uc_post_type = ucfirst($target_post_type);
    $more_url = esc_url(home_url('/' . $target_post_type));;


    echo '
    <section class="' . $target_post_type . '-section">
    <div class="container">
        <div class="category-title-wrap">
            <h2 class="category-title">' . $section_title . ' ' . $uc_post_type . '</h2>
            <a class="button line-button show-more-btn" href=' . $more_url . '>Show More</a>
        </div>
        <div class=" row">';

    get_section_content_list($target_post_type, $target_taxonomy, $target_category);
    echo '</div></div></section>
    ';
};


//모든 content 리스트업 하는 함수
// 1. 특정 카테고리의 목록 가져오기 (카테고리, taxonomy)
// 2. 특정 카테고리의 서브카테고리의 목록 가져오기 (카테고리, taxonomy, slug)
// 3. 모든 목록 가져오기 (postType)

function get_section_content_list($target_post_type, $target_taxonomy, $target_category = 0)
{
    // wp query
    if ($target_category == 0) {
        $contents_array = new WP_Query(
            array(
                'posts_per_page' => -1,
                'post_type' => $target_post_type,
                'orderby' => 'rand',
            )
        );
    } else {
        $contents_array = new WP_Query(
            array(
                'posts_per_page' => -1,
                'post_type' => $target_post_type,
                'orderby' => 'rand',
                'tax_query'      => array(
                    array(
                        'taxonomy' => $target_taxonomy,   // Taxonomy 이름
                        'field'    => 'slug',      // Term Slug를 사용
                        'terms'    => $target_category,
                    ),
                ),
            )
        );
    }
    if ($contents_array->have_posts()) {
        while ($contents_array->have_posts()) {
            $contents_array->the_post();

            echo '<div class="col-4">';
            get_template_part('content');
            echo '</div>';
        }

        wp_reset_postdata(); // 글 정보를 원래대로 복원
    } else {
        get_template_part('content', 'empty');
    };
    the_posts_pagination(array('prev_text' => '', 'next_text' => ''));
};

//content 바로 보기
function get_section_contents($target_post_type, $target_taxonomy, $target_category)
{
    // wp query
    $contents_array = new WP_Query(
        array(
            'posts_per_page' => -1,
            'post_type' => $target_post_type,
            'tax_query'      => array(
                array(
                    'taxonomy' => $target_taxonomy,   // Taxonomy 이름
                    'field'    => 'slug',      // Term Slug를 사용
                    'terms'    => $target_category,
                ),
            ),
        )
    );

    if ($contents_array->have_posts()) {
        while ($contents_array->have_posts()) {
            $contents_array->the_post();

            the_title('<h1>', '</h1>');
            the_content();
        }

        wp_reset_postdata(); // 글 정보를 원래대로 복원
    } else {
        get_template_part('content', 'empty');
    };
};















//For_duplicate
function duplicate_post_as_template()
{
    global $wpdb;

    if (!isset($_GET['post']) || empty($_GET['post'])) {
        return;
    }

    // Get the post ID
    $post_id = absint($_GET['post']);

    // Get the post
    $post = get_post($post_id);

    // Allow only specific post types
    $allowed_post_types = array('post', 'producty', 'guide', 'homepedia', 'ranks');
    if (!in_array(get_post_type($post), $allowed_post_types)) {
        return;
    }

    // Duplicate the post
    $new_post_id = wp_insert_post(array(
        'post_title'   => $post->post_title,
        'post_content' => $post->post_content,
        'post_status'  => 'draft',
        'post_type'    => $post->post_type,
        'post_author'  => get_current_user_id(),
    ));

    // Copy post meta data
    $post_meta = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
    if ($post_meta) {
        foreach ($post_meta as $meta) {
            update_post_meta($new_post_id, $meta->meta_key, $meta->meta_value);
        }
    }

    // Redirect to the new post
    wp_redirect(admin_url("post.php?action=edit&post=$new_post_id"));
    exit;
}

add_action('admin_action_duplicate_post_as_template', 'duplicate_post_as_template');

function add_duplicate_post_link($actions, $post)
{
    $allowed_post_types = array('post', 'product', 'guide', 'homepedia', 'ranks');

    if (current_user_can('edit_posts') && in_array(get_post_type($post), $allowed_post_types) && $post->post_status == 'publish') {
        $actions['duplicate'] = '<a href="' . wp_nonce_url(admin_url('admin.php?action=duplicate_post_as_template&post=' . $post->ID), basename(__FILE__), 'duplicate_nonce') . '" title="Duplicate this item" rel="permalink">Duplicate as Template</a>';
    }

    return $actions;
}

add_filter('post_row_actions', 'add_duplicate_post_link', 10, 2);

// function create_product_post_type() {
//     register_post_type('producty',
//         array(
//             'labels' => array(
//                 'name' => __('Productys'),
//                 'singular_name' => __('Producty'),
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => array('slug' => 'productys'),
//             'supports' => array('title', 'editor', 'thumbnail'),
//             'taxonomies' => array('category'), // 기존 카테고리(taxonomy) 사용
//         )
//     );
// }

// add_action('init', 'create_product_post_type');