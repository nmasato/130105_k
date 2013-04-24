<?php get_header() ?>

<?php breadcrumb(); ?>

<section id="main">

<article id="item-<?php the_ID(); ?>">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="heading-A"><div class="headingInner">
<h2><?php echo $post -> post_title; ?></h2>
<!-- /.heading-A --></div></div>

<?php the_content(); ?>

<?php endwhile;?>
<?php endif; ?>
</article>

<?php get_sidebar(); ?>
<?php get_footer() ?>
