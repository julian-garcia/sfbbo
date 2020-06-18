<?php get_header(); ?>
<!-- <?php the_post(); get_template_part( 'content', get_post_format() ); ?> -->
<div class="auto-columns">
  <div class="text-block move-right up">
    <h1 class="page-heading">San Francisco Bay Bird Observatory</h1>
    <p>The San Francisco Bay Bird Observatory is a nonprofit organization dedicated to the conservation of birds and their habitats through science and outreach. Birds are excellent indicators of ecosystem health. They are highly visible and cost-effective to track, and are sensitive to environmental change.</p>
    <a href="#" class="button secondary">Our work</a>
  </div>
  <div class="text-block move-right small up three-quarts">
    <div class="background-image" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/support.png');"></div>
    <p>Support our mission: science research and educational outreach to continue to protect the birds of the San Francisco Bay Area</p>
    <a href="#" class="button primary">Donate</a>
  </div>
  <div class="text-block move-right small up half white-bg">
    <h2 class="page-heading">Get Involved</h2>
    <p>From volunteering to conduct avian science and participating in our educational outreach activities to making a donation to writing an article about us for the media.</p>
    <div class="background-image overlay light" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/involved.png');"></div>
    <p>There are many ways you can to get involved in our mission to conserve birds and their habitats through science and outreach.</p>
    <a href="#" class="button tertiary"><i class="fas fa-at"></i> Contact us</a> <span>to learn more</span>
  </div>
</div>
<div class="background-image map"></div>
<div class="background-image ragged full-width up three-quarts" style="background: linear-gradient(90deg, #334769 50%, transparent 100%), url('<?php echo get_bloginfo('template_directory'); ?>/images/sky-birds.png'); background-size: cover">
  <div class="auto-columns">
    <div class="text-block move-right white">
      <h2 class="page-heading">New from SFBBO</h2>
        <h3>Bird Photo Big Day</h3>
        <p> 170 Species Photographed in 24-hours by over 100 Bay Area bird enthusiasts. Read more about this amazing event</p>
        <h3>Birdy Hour Speaker Series</h3>
        <p>May 28th: How to Help Birds on the Homefront by Lisa Myers</p>
        <h3>Birdy Hour Speaker Series</h3>
        <p>June 4th: Coral Restoration on the Florida Reef Tract by Alicia Manfroy</p>
        <h3>Spring Appeal</h3> 
        <p>from Dr. Yiwei Wang, Executive Director</p>
    </div>
    <div></div>
  </div>
</div>
<?php get_footer(); ?>