<?php get_header() ?>

<?php breadcrumb(); ?>

<article id="item-<?php the_ID(); ?>">
<div class="heading-A"><div class="headingInner">
<h2><?php the_title(); ?></h2>
<!-- /.heading-A --></div></div>
<div class="sectionBody">

<nav class="contentNavi">
<ul>
<li></li>
</ul>
</nav>
<?php
global $wpdb;
$query = "SELECT meta_id,post_id,meta_key,meta_value FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id ASC";
$cf = $wpdb->get_results($query, ARRAY_A);
$pics = array();
$item = array();
$desc = array();
foreach( $cf as $row ){
	if( $row['meta_key'] == "sectionTit" ){
		array_push( $pics, $row['meta_value'] );
	}
	if( $row['meta_key'] == "sectionTxt" ){
		array_push( $item, $row['meta_value'] );
	}
}
$length = count( $pics );
//表示
for( $i = 0; $i < $length; $i ++ ){
echo '<div class="block">';
echo '<div class="heading-B">';
echo '<h3>' . $pics[$i] . '</h3>';
echo '<!-- /.heading-B --></div>';
echo '<div class="sectionBody">';
echo '' . $item[$i] . '';
echo '<!-- /.sectionBody --></div>';
echo '<!-- /.block --></div>';
}
?>



<?php
//DBからデータ取得。
//$wpdb->postmeta カスタムフィールドのキーと値が保存されているテーブル
global $wpdb;
$query = "SELECT meta_id,post_id,meta_key,meta_value FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id ASC";
$cf = $wpdb->get_results($query, ARRAY_A);

$pics = array();
$item = array();
$desc = array();

foreach( $cf as $row ){
	if( $row['meta_key'] == "sectionTit" ){
		array_push( $item, $row['meta_value'] );
	}
	if( $row['meta_key'] == "sectionTxt" ){
		array_push( $desc, $row['meta_value'] );
	}
}

$length = count( $pics );
//表示
for( $i = 0; $i < $length; $i ++ ){
		echo '<div class="food">';
		echo '<h3>' . $sectionTit[$i] . '</h3>';
		echo '<p>' .  $sectionTxt[$i] . '</p>';
		echo '<hr />';
		echo '</div>';
} ?>



<?php
global $wpdb;
$query = "SELECT meta_id,post_id,meta_key,meta_value FROM $wpdb->postmeta WHERE post_id = $post->ID ORDER BY meta_id ASC";
$cf = $wpdb->get_results($query, ARRAY_A);

$sectionTit = array();
$sectionTxt = array();
$no = array();

foreach( $cf as $row ){
	if( $row['meta_key'] == "sectionTit" ){
		array_push( $sectionTit, $row['meta_value'] );
	}
	if( $row['meta_key'] == "sectionTxt" ){
		array_push( $sectionTxt, $row['meta_value'] );
	}
}

$length = count( $pics );
//表示
for( $i = 0; $i < $length; $i ++ ){
		echo '<div class="food">';
		echo '<h3>' . $sectionTit[$i] . '</h3>';
		echo '<p>' . $sectionTxt[$i] . '</p>';
		echo '</div>';
}
?>

<!-- /.setionBody --></div>
</article>

<?php get_sidebar(); ?>
<?php get_footer() ?>
