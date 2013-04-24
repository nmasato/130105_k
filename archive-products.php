<?php get_header() ?>

<?php breadcrumb(); ?>

<section id="main">

<div class="pageTitle">
<h1><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></h1>
<!-- /.pageTitle --></div>


<div class="heading-A">
<h2><?php
$term = array_pop(get_the_terms($post->ID, 'produtslist'));
$term_p = $term->parent;
if ( ! $term_p == 0 ){
    $term = array_shift(get_the_terms($post->ID, 'produtslist'));
}
   echo esc_html($term->name);
?></h2>
<!-- /.heading-A --></div>
<div class="sectionBody">

<?php
 $terms = get_terms("produtslist"); //分類で設定した名称
 $count = count($terms);
 if ( $count > 0 ){
     echo "<ul>";
     foreach ( $terms as $term ) {
       echo "<li>term_id: " . $term->term_id . "</li>";
       echo "<li>name: " . $term->name . "</li>";
       echo "<li>slug: " . $term->slug . "</li>";
       echo "<li>term_group: " . $term->term_group . "</li>";
       echo "<li>term_taxonomy_id: " . $term->term_taxonomy_id . "</li>";
       echo "<li>taxonomy: " . $term->taxonomy . "</li>";
       echo "<li>description: " . $term->description . "</li>";
       echo "<li>parent: " . $term->parent . "</li>";
       echo "<li>count: " . $term->count . "</li>";
       echo "<br />";
     }
     echo "</ul>";
 }
?>
＝＝＝＝＝＝＝＝＝＝


<?php
// 最上位のタームのみ取得
$terms = get_terms( 'productslist', 'hide_empty=0&parent=0' );
foreach( $terms as $term ) :
?>
     <li>
          <?php
          echo esc_html( $term->name );
          $term_id = esc_html( $term->term_id );
          ?>
          <ul>
          <?php wp_list_categories( array('title_li'=>'', 'show_count'=>'1', 'child_of'=>$term_id, 'taxonomy'=>'productslist') ); ?>
          </ul>
     </li>
<?php
endforeach;
?>



<article id="item-<?php the_ID(); ?>" class="item">
<div class="heading-B">
<h3><?php
$terms = get_the_terms( $post->ID, 'produtslist' ); //分類で設定した名称
     foreach ( $terms as $term ) {
          echo "".$term->name.""; //""にliなどを入れて装飾
     }
?>
</a></h3>
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
