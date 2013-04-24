<?php get_header() ?>

<?php breadcrumb(); ?>

<div class="pageTitle">
<h1><?php $cat_info = get_category( $cat ); ?><?php echo esc_html( $cat_info->name ); ?></h1>
<!-- /.pageTitle --></div>


<div class="heading-A">
<h2><?php $cat_info = get_category( $cat ); ?><?php echo esc_html( $cat_info->name ); ?></h2>
<!-- /.heading-A --></div>
<div class="sectionBody">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article id="item-<?php the_ID(); ?>" class="item">
<div class="heading-B">
<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></h3>
<!-- /.heading-B --></div>


<?php the_content(); ?>


<p class="al-right">※商品については、売却済みの場合がございますので、お問合せ下さい。</p>
<!-- /.sectionBody --></div>
<!-- /.item-<?php the_ID(); ?> --></article>
<?php endwhile;?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer() ?>
