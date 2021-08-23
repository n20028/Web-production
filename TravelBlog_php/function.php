function custom_theme_setup() {
  add_theme_support( "automatic-feed-links");
  add_theme_support( "title-tag" );
  // 以下1行を追加
  add_theme_support( "responsive-embeds");
}
add_action( "after_setup_theme","custom_theme_setup");

function css_scripts() {
  wp_enqueue_style("base-style",
    get_stylesheet_uri(),
    array(),
    "1.0",
    "all"
    );
}
add_action( "wp_enqueue_scripts" , "css_scripts" );