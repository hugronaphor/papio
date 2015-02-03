<div class="social header-social-buttons">
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
</div>

<?php if (count($bows_count) > 1) : ?>
  <div class="global-bows-count"> 
    <?php if ($count_block_title) : ?>
      <label class="global-bows-count-title"><?php print $count_block_title; ?></label>
    <?php endif; ?>
    <div class="global-bows-count-itself">
      <?php foreach ($bows_count as $value) : ?>    
        <span class="split-digit"><?php print $value; ?></span>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>
