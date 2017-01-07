<?php
  $images = get_field('gallery_images');
  if($images):
?>
  <section class="gallery">
    <div class="row">
      <?php foreach($images as $image): ?>
        <div class="col-xs-6 col-sm-4">
          <div class="gallery-image-container image-container">
            <a href="<?php echo $image['sizes']['large']; ?>" data-lightbox="gallery" data-title="<?php echo $image['caption']; ?>" >
              <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" />
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>
