// Function to calculate reading time
function reading_time() {
    global $post;
    $content = get_post_field('post_content', $post->ID);
    $word_count = str_word_count(strip_tags($content));
    $readingtime = ceil($word_count / 200);

    if ($readingtime == 1) {
        $timer = " minute";
    } else {
        $timer = " minutes";
    }
    $totalreadingtime = $readingtime . $timer;

    return $totalreadingtime;
}

// Shortcode to use reading time function
function reading_time_shortcode() {
    return reading_time();
}
add_shortcode('reading_time', 'reading_time_shortcode');



// SHORT CODE

// [reading_time]

