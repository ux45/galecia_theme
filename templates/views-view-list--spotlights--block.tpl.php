<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<div id="slider1_container" class="container-fluid">
  <!-- Slides Container -->
  <div class="container">
    <div id="spotlight-carousel" class="owl-carousel owl-theme">
    <?php foreach ($rows as $id => $row): ?>
      <div class="item">
        <div class="container-quote">
          <div class="container-quote_wrapper">
            <div class="container-quote_text">
              <?php print $row; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</div>
