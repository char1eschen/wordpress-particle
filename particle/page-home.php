<?php
/*
 Template Name: Home Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>
  <div id="home">
    <div class="intro">
      <div class="introtext">
        <h1 class="name">Hello world!</h1>
        <h1 class="name">I'm Charles.</h1>
        <h1>Creator.</h1>
        <h1>Coder.</h1>
        <h1>Web Developer.</h1>
      </div>
    </div>
  </div>
  <div id="Projects">
  	  <h2>I love <span class="emphasis">web development</span> because it allows me to create and build projects from scratch. Here are my project highlights:</h2>
					<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						

						<h2 itemprop="headline"><?php the_title(); ?></h2>

						<div class="cf" itemprop="articleBody">
							<?php
								// the content (pretty self explanatory huh)
								the_content();
							?>
						</div> 

						<?php ?>

					</article>

					<?php endwhile; endif; ?>

				</main>

				<?php ?>

  </div>

<?php get_footer(); ?>
