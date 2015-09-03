<?php the_content(); ?>
<section class="about-sections">

  <section class="about-blurb">
    <?php the_field('paragraph_1'); ?>
  </section>

  <div class="rule about-blurb"></div>

  <section class="capabilities">
    <h3>Capabilities</h3>
    <ul>
      <?php the_field('capabilities'); ?>
    </ul>
  </section>

  <div class="rule capabilities"></div>

  <section class="methods">
    <h3>Methods</h3>
    <ul>
      <?php the_field('methods'); ?>
    </ul>
  </section>
  <div class="rule methods"></div>

  <section class="clients">
    <div class="clients-blurb">
      <h3>Clients</h3>
      <?php the_field('clients_blurb'); ?>
    </div>
    <?php $client_logos = get_field('client_logos');
    // Testing purposes
    // - repeats the field X num of times to bulk up array
    // for ($i=0; $i < 17; $i++) { 
    //   $client_logos[] = $client_logos[0];
    // }
    ?>
    <?php if ( $client_logos ): ?>
      <div class="clients-list">
        <?php foreach ( $client_logos as $image ): ?>
          <img src="<?php echo $image['url']; ?>" alt="Sticky Pictures Client Logo">
        <?php endforeach ?>
      </div>
    <?php endif; ?>

  </section>
  <div class="rule clients"></div>
</section>

<?php
$case_studies = get_field('case_studies');
related_projects( $case_studies, $title = 'Case Studies' );
?>
