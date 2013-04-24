<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="robots" content="index,follow">
<title>
<?php if (is_home()) { ?><?php bloginfo('name'); ?>
<?php } elseif (is_search()) { ?>検索結果：<?php echo the_search_query(); ?> | <?php bloginfo('name'); ?>
<?php } elseif (is_single()) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?>
<?php } elseif (is_page()) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?>
<?php } elseif (is_category()) { ?><?php single_cat_title(); ?> | <?php bloginfo('name'); ?>
<?php } else { ?>
<?php bloginfo('name'); ?>
<?php } ?>
</title>
<meta name="description" content="<?php bloginfo(‘description’); ?>">
<meta name="keywords" content="電線,ケーブル,ハーネス,電子機器,基板,コネクタ,化成品,配線材料">
<link href="<?php bloginfo('pingback_url'); ?>" rel="pingback">
<link href="<?php bloginfo('rss2_url'); ?>" rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed">
<script src="<?php bloginfo('template_url'); ?>/js/import.js" type="text/javascript"></script>
<!--[if IE 9]-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<script type="text/javascript" src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('img, .png_bg');
</script>
<!--[endif]-->
<link href="<?php bloginfo('stylesheet_url' ); ?>" rel="stylesheet">
<?php wp_head(); ?>
<?php
$ancCateSlug = '';
$cats = wp_get_post_categories(get_the_ID());
if(is_array($cats)) {
	foreach($cats as $cat) {
	$cobj = get_category($cat);
	$ancCateSlug = $cobj->slug;
	}
}
?>
</head>
<?php if (is_home()) { ?><body id="home" class="index">
<?php } elseif (is_category()) { ?><body class="<?php echo $ancCateSlug; ?> page">
<?php } elseif (is_archive()) { ?><body class="archive">
<?php } elseif (is_page()) { ?><body id="<?php echo $post->post_name; ?>" class="page">
<?php } elseif (is_single()) {?><body id="<?php echo $ancCateSlug; ?>" class="page">
<?php } else { ?>
<body>
<?php } ?>
<div id="wrapper">
<aside id="language">
<ul>
<li><a href="<?php echo home_url('/'); ?>en/"><img src="<?php bloginfo('template_url'); ?>/images/common/lan_ico01.png" alt="" width="16" height="11">English</a></li>
<li><a href="<?php echo home_url('/'); ?>cn/"><img src="<?php bloginfo('template_url'); ?>/images/common/lan_ico02.png" alt="" width="16" height="11">中文</a></li>
</ul>
<!-- /#language --></aside>
<header id="header">
<h1 id="logo"><a href="<?php echo home_url('/'); ?>/">[__siteName__]</a></h1>
<!-- /#header --></header>

<nav id="headerNavi">
<ul class="list-A">
<li><a href="<?php echo home_url('/'); ?>company/">会社案内</a></li>
<li><a href="<?php echo home_url('/'); ?>recruit/">採用情報</a></li>
<li><a href="<?php echo home_url('/'); ?>sitemap/">サイトマップ</a></li>
<li><a href="<?php echo home_url('/'); ?>company/basemap/">拠点MAP</a></li>
</ul>
<!-- /#headerNavi --></nav>

<div id="navArea">
<nav id="globalnavi">
<ul>
<li id="gnavi01"><a href="<?php echo home_url('/'); ?>products/">取扱商品</a></li>
<li id="gnavi02"><a href="<?php echo home_url('/'); ?>stock/">在庫照会</a></li>
<li id="gnavi03"><a href="<?php echo home_url('/'); ?>recommend/">注目商品</a></li>
<li id="gnavi04"><a href="<?php echo home_url('/'); ?>maker/">取扱メーカー</a></li>
<li id="gnavi05"><a href="<?php echo home_url('/'); ?>company/">会社情報</a></li>
</ul>
<!-- /#globalnavi --></nav>

<div id="searchBox">
<form action="">
<input type="text" class="txtInput"/>
<input type="submit" class="submitBtn" />
</form>
<!-- /#searchBox --></div>
<!-- /#navArea --></div>

<div id="contents">

