<?php get_header() ?>

<?php the_post(); ?>

<?php //print_r($post); ?>
<?php $aaa = wp_get_post_terms($post->ID,'produtslist'); //print_r($aaa[0]->parent) ?>
<?php $bbb = get_term($aaa[0]->parent,'produtslist'); //print_r($bbb->name); ?>
<?php $tag = get_the_tags($post->ID); //print_r($tag); ?>
<div class="pageTitle">
<h1><?php echo $bbb->name ?></h1>
<!-- /.pageTitle --></div>


<section id="main">
<?php breadcrumb(); ?>

<article id="item-<?php the_ID(); ?>">
<div class="heading-A"><div class="headingInner">
<h2><?php the_title(); ?><span><?php
$terms = get_the_terms( $post->ID, 'produtslist' ); //分類で設定した名称
     foreach ( $terms as $term ) {
          echo "".$term->name.""; //""にliなどを入れて装飾
     }
?></span></h2>
<!-- /.heading-A --></div></div>
<div class="sectionBody">
<nav class="contentNavi">
<ul>
<?php
global $wpdb;
$query = "SELECT meta_id,post_id,meta_key,meta_value FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id ASC";
$cf = $wpdb->get_results($query, ARRAY_A);
$pics  = array();
$item  = array();
$desc  = array();
$width = array();
$no = array();
foreach( $cf as $row ){
	if( $row['meta_key'] == "blockWidth" ){
		array_push( $width, $row['meta_value'] );
	}
	if( $row['meta_key'] == "sectionTit" ){
		array_push( $pics, $row['meta_value'] );
	}
	if( $row['meta_key'] == "sectionTxt" ){
		array_push( $item, $row['meta_value'] );
	}
	if( $row['meta_key'] == "no" ){
		array_push( $no, $row['meta_value'] );
	}
}
$length = count( $no );
//表示
for( $i = 0; $i < $length; $i ++ ){
echo '<li><a href="#section-' . $no[$i] . '">';
echo ''. $pics[$i] . '</a></li>
';
}
?>
</ul>
<div class="naviContact"><a href="<?php echo home_url('/'); ?>inquery/">お問い合わせ</a></div>
</nav>


<?php
global $wpdb;
$query = "SELECT meta_id,post_id,meta_key,meta_value FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id ASC";
$cf = $wpdb->get_results($query, ARRAY_A);
$pics  = array();
$item  = array();
$desc  = array();
$width = array();
$no = array();
foreach( $cf as $row ){
	if( $row['meta_key'] == "blockWidth" ){
		array_push( $width, $row['meta_value'] );
	}
	if( $row['meta_key'] == "sectionTit" ){
		array_push( $pics, $row['meta_value'] );
	}
	if( $row['meta_key'] == "sectionTxt" ){
		array_push( $item, $row['meta_value'] );
	}
	if( $row['meta_key'] == "no" ){
		array_push( $no, $row['meta_value'] );
	}
}
$length = count( $no );
//表示
for( $i = 0; $i < $length; $i ++ ){
echo '<div class="block block-' . $width[$i] . '" ';
echo 'id="section-' . $no[$i] . '">
';
echo '<div class="heading-B">
';
echo '<h3>' . $pics[$i] . '</h3>
';
echo '<!-- /.heading-B --></div>
';
echo '<div class="sectionBody">
';
echo '' . $item[$i] . ''
;
echo '<!-- /.sectionBody --></div>
';
echo '<!-- /.block --></div>

';
}
?>




<!-- /.setionBody --></div>
</article>


<?php get_sidebar(); ?>
<?php get_footer() ?>
