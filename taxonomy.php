<?php get_header() ?>

<?php breadcrumb(); ?>


<?php //print_r($post); ?>
<?php $aaa = wp_get_post_terms($post->ID,'produtslist'); //print_r($aaa[0]->parent) ?>
<?php $bbb = get_term($aaa[0]->parent,'produtslist'); //print_r($bbb->name); ?>
<?php $tag = get_the_tags($post->ID); //print_r($tag); ?>
<div class="pageTitle">
<h1><?php echo $bbb->name ?></h1>
<!-- /.pageTitle --></div>


<section id="main">
<div class="heading-A">
<h2><?php $cat_info = get_category( $cat ); ?><?php echo $aaa[0]->name ?></h2>
<!-- /.heading-A --></div>
<div class="sectionBody">

<article id="item-<?php the_ID(); ?>" class="item">
<div class="heading-B">
<?php foreach($tag as $key => $val) : ?>
<h3><?php echo $val->name ?></h3>
<?php endforeach; ?>
<!-- /.heading-B --></div>
<div class="sectionBody">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="block">
<dl>
<dt class="btns" data-tgt="wd<?php the_ID(); ?>"><?php the_post_thumbnail(); ?></dt>
<dd><a href="<?php the_permalink(); ?>" rel="bookmark" class="list-A"><?php the_title(); ?></a></dd>
<dd>温度：<?php $values = get_post_custom_values("ondo"); echo $values[0]; ?></dd>
<dd>電圧：<?php $values = get_post_custom_values("denatsu"); echo $values[0]; ?></dd>
</dl>
<!-- /.block --></div>
<div class="modal wd<?php the_ID(); ?>">
<div class="modalBody">
<p class="close">×close</p>
<p>.....</p>
</div>
<div class="modalBK"></div>
</div>
<?php endwhile;?>
<?php endif; ?>
<!-- /.sectionBody --></div>


<!-- /.sectionBody --></div>
<!-- /.item-<?php the_ID(); ?> --></article>

<?php get_sidebar(); ?>
<?php get_footer() ?>