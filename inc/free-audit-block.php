<?php

function free_audit_block_shortcode() {
    ?>
<div class="free-audit">
    <h3>Get Your Free Audit</h3>
    <p>Find out how much we can help you!</p>
    <?php echo do_shortcode( '[contact-form-7 id="2710" title="AGI Inside Contact"]' ); ?>
</div>
    <?php
}

add_shortcode( 'free_audit', 'free_audit_block_shortcode' );