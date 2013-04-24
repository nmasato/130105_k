<?php get_header() ?>

<?php breadcrumb(); ?>

<section id="main">


<div class="pageTitle">
<h1><?php $cat_info = get_category( $cat ); ?><?php echo esc_html( $cat_info->name ); ?></h1>
<!-- /.pageTitle --></div>


<div class="heading-A">
<h2><?php $cat_info = get_category( $cat ); ?><?php echo esc_html( $cat_info->name ); ?></h2>
<!-- /.heading-A --></div>
<div class="sectionBody">


<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
    /* ループ開始 */?>
    <div class="post">
		<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		<?php the_post_thumbnail(); ?>
		<?php the_excerpt(); ?>
        <a class="more-link" href="<?php the_permalink() ?>">詳しく見る</a>
    </div>
	<?php endwhile; ?>
<?php else : ?>
    <div class="post">
		<h3>製品がありません</h3>
		<p>表示する製品がありませんでした</p>
    </div>
<?php endif; ?>

<?php
$terms = get_the_terms( $post->ID, 'productslist' ); //分類で設定した名称
          echo "分布: "; //前の文字列
     foreach ( $terms as $term ) {
          echo "".$term->name.""; //""にliなどを入れて装飾
     }
          echo ""; //後の文字列
?>

＝＝＝＝＝＝＝＝＝＝


<article id="item-<?php the_ID(); ?>" class="item">
<div class="heading-B">
<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
<!-- /.heading-B --></div>
<div class="sectionBody">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="block">
<dl>
<dt class="borderImg"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></dt>
<dd><a href="<?php the_permalink(); ?>" rel="bookmark" class="list-A"><?php the_title(); ?></a></dd>
<dd>温度：<?php $values = get_post_custom_values("ondo"); echo $values[0]; ?></dd>
<dd>電圧：<?php $values = get_post_custom_values("denatsu"); echo $values[0]; ?></dd>
</dl>
<!-- /.block --></div>
<?php endwhile;?>
<?php endif; ?>
<!-- /.sectionBody --></div>


<!-- /.sectionBody --></div>
<!-- /.item-<?php the_ID(); ?> --></article>

<?php get_sidebar(); ?>
<?php get_footer() ?>
