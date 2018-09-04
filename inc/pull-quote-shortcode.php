<?php

function pull_quote_shortcode($atts, $content = "") {
    
    $cite = $atts['cite'];
    
    ob_start();
    ?>
<blockquote class="pull-quote">
  <p><?=$content?></p>
  <footer><cite><?=$cite?></cite></footer>
</blockquote>    
    <?php
    return ob_get_clean();
}

add_shortcode('pullquote', 'pull_quote_shortcode');