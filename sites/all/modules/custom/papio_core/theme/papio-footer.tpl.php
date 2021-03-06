<div class="footer-container lateral-container left-container">
  <div class="inner">
    <p><img src="<?php print drupal_get_path('theme', 'papio'); ?>/images/footer/confortabil.jpg" /></p>
    <p class="text"><?php print $footer_left_img_text; ?></p>
  </div>
</div>
<div class="footer-container">
  <?php if ($footer_line_1) : ?>
    <div class="footer-order"><p><?php print $footer_line_1; ?></p></div>
  <?php endif; ?>
  <?php if ($footer_phone) : ?>
    <div class="footer-phone"><p><?php print $footer_phone; ?></p></div>
  <?php endif; ?>
  <?php if ($footer_line_2) : ?>
    <div class="additional-info"><p><?php print $footer_line_2; ?></p></div>
  <?php endif; ?>

  <?php if ($footer_facebook_site_url || $footer_twitter_site_url || $footer_youtube_site_url) : ?>
    <div class="social-buttons">
      <ul class="footer-social">
        <?php if ($footer_facebook_site_url) : ?>
          <li rel="fb"><a href="<?php print $footer_facebook_site_url; ?>"></a></li>      
        <?php endif; ?>
        <?php if ($footer_twitter_site_url) : ?>
          <li rel="twitter"><a href="<?php print $footer_twitter_site_url; ?>"></a></li>
        <?php endif; ?>
        <?php if ($footer_youtube_site_url) : ?>
          <li rel="yt"><a href="<?php print $footer_youtube_site_url; ?>"></a></li>
        <?php endif; ?>
      </ul>
    </div>
  <?php endif; ?>

  <?php if ($footer_credits) : ?>
    <div class="footer-credits"><p><?php print str_replace('[:current_year]', date('Y'), $footer_credits); ?></p></div>
  <?php endif; ?>

</div>
<div class="footer-container lateral-container right-container">
  <div class="inner">
    <p><img src="<?php print drupal_get_path('theme', 'papio'); ?>/images/footer/accesibil.jpg" /></p>
    <p class="text"><?php print $footer_right_img_text; ?></p>
  </div>
</div>
