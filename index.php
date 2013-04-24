<?php get_header(); ?>

<section id="main">
<section id="products">
<header class="heading-A">
<h2>取扱商品</h2>
<p class="moreLink"><a href="<?php echo home_url('/'); ?>products/">取扱商品一覧へ</a></p>
<!-- /.heading-A --></header>
<div class="sectionBody">
<div class="div700-3col">
<div class="block"><a href="<?php echo home_url('/'); ?>products/cable/">
<dl>
<dt><img src="<?php bloginfo('template_url'); ?>/images/home/products_img01.png" alt="電線" width="218" height="58"></dt>
<dd>電線</dd>
</dl></a>
<!-- /.block --></div>
<div class="block"><a href="<?php echo home_url('/'); ?>products/connector/">
<dl>
<dt><img src="<?php bloginfo('template_url'); ?>/images/home/products_img02.png" alt="コネクタ" width="218" height="58"></dt>
<dd>コネクタ</dd>
</dl>
<!-- /.block --></a></div>
<div class="block"><a href="<?php echo home_url('/'); ?>products/harness/">
<dl>
<dt><img src="<?php bloginfo('template_url'); ?>/images/home/products_img03.png" alt="ハーネス" width="218" height="58"></dt>
<dd>ハーネス</dd>
</dl>
<!-- /.block --></a></div>
<div class="block"><a href="<?php echo home_url('/'); ?>products/print/">
<dl>
<dt><img src="<?php bloginfo('template_url'); ?>/images/home/products_img04.png" alt="プリント基板" width="218" height="58"></dt>
<dd>プリント基板</dd>
</dl>
<!-- /.block --></a></div>
<div class="block"><a href="<?php echo home_url('/'); ?>products/electric/">
<dl>
<dt><img src="<?php bloginfo('template_url'); ?>/images/home/products_img05.png" alt="電子機器・部品" width="218" height="58"></dt>
<dd>電子機器・部品</dd>
</dl>
<!-- /.block --></a></div>
<div class="block"><a href="<?php echo home_url('/'); ?>products/power/">
<dl>
<dt><img src="<?php bloginfo('template_url'); ?>/images/home/products_img06.png" alt="電源" width="218" height="58"></dt>
<dd>電源</dd>
</dl>
<!-- /.block --></a></div>
<div class="block"><a href="<?php echo home_url('/'); ?>products/powercode/">
<dl>
<dt><img src="<?php bloginfo('template_url'); ?>/images/home/products_img07.png" alt="電源コード" width="218" height="58"></dt>
<dd>電源コード</dd>
</dl>
<!-- /.block --></a></div>
<div class="block"><a href="<?php echo home_url('/'); ?>products/parts/">
<dl>
<dt><img src="<?php bloginfo('template_url'); ?>/images/home/products_img08.png" alt="配線材料" width="218" height="58"></dt>
<dd>配線材料</dd>
</dl>
<!-- /.block --></a></div>
<div class="block"><a href="<?php echo home_url('/'); ?>products/etc/">
<dl>
<dt><img src="<?php bloginfo('template_url'); ?>/images/home/products_img09.png" alt="化成品" width="218" height="58"></dt>
<dd>化成品</dd>
</dl>
<!-- /.block --></a></div>
<!-- /.div700-3col --></div>
<!-- /.sectionBody --></div>
<!-- /#products --></section>



<section id="recommend">
<div class="div700-2col">
<div class="borderBlock">
<div class="heading-A">
<h2>鐘通おすすめ商品・注目商品</h2>
<!-- /.heading-A --></div>
<div class="sectionBody">
<dl>
<dt><a href="<?php echo home_url('/'); ?>recommend/"><img src="<?php bloginfo('template_url'); ?>/images/home/recommend_img.png" alt="鐘通おすすめ商品・注目商品" width="318" height="120"></a></dt>
<dd><a href="<?php echo home_url('/'); ?>recommend/">鐘通おすすめ商品・注目商品</a></dd>
<dd class="list-A">経験豊かな設計専門メーカによるアートワーク設計で、実装時のコスト、品質を考慮した設計を致します。</dd>
</dl>
<!-- /.sectionBody --></div>
<!-- /.borderBlock --></div>
<div class="borderBlock">
<div class="heading-A">
<h2>お問い合わせ</h2>
<!-- /.heading-A --></div>
<div class="sectionBody">
<dl>
<dt><a href="<?php echo home_url('/'); ?>inquiry/"><img src="<?php bloginfo('template_url'); ?>/images/home/inquiry_img.png" alt="お問い合わせ" width="318" height="120"></a></dt>
<dd class="list-A"><a href="<?php echo home_url('/'); ?>inquiry/">お問い合わせ</a></dd>
<dd>弊社へのお問い合わせはこちらから</dd>
</dl>
<!-- /.sectionBody --></div>
<!-- /.borderBlock --></div>
<!-- /.div700-2col --></div>
<!-- /#recommend --></section>



<section id="news">
<div class="heading-A">
<h2>Kanetsu News</h2>
<p class="moreLink"><a href="<?php echo home_url('/'); ?>news/">Kanetsu News一覧へ</a></p>
<!-- /.heading-A --></div>
<div class="sectionBody">
<div class="dateList">
<dl>
<dt>2000.11.11</dt>
<dd><a href="<?php bloginfo('template_url'); ?>/solarlock_pv4_connectors.pdf" rel="bookmark">TE Connectivity 新商品「Solarlock PV4 Connectors」</a></dd>
<?php query_posts('showposts=10&category_name=news'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<dt><?php the_time("Y.m.d"); ?></dt>
<dd><a href="<?php echo home_url('/'); ?><?php the_permalink(); ?>" rel="bookmark"><?php the_title_attribute(); ?></a></dd>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
</dl>
<!-- /.dateList --></div>
<!-- /.sectionBody --></div>
<!-- /#news --></section>



<section id="related">
<div class="heading-A">
<h2>関連情報</h2>
<p class="moreLink"><a href="<?php echo home_url('/'); ?>links">リンク集</a></p>
<!-- /.heading-A --></div>
<div class="sectionBody">
<div class="bannerGroup ul700-3col">
<ul>
<li><a href="<?php echo home_url('/'); ?>http://www.tocom.or.jp/jp/souba/crude_oil/" target="_blank">原油相場</a></li>
<li><a href="<?php echo home_url('/'); ?>http://www.kanetuu.co.jp/kanrenkikaku/index00.htm" target="_blank">電線関連団体</a></li>
<li><a href="<?php echo home_url('/'); ?>http://business.nikkeibp.co.jp/money/index.html" target="_blank">経済関連指標</a></li>
<li><a href="<?php echo home_url('/'); ?>http://www.tdb.co.jp/tosan/jouhou.html" target="_blank">大型倒産情報</a></li>
<li><a href="<?php echo home_url('/'); ?>http://www.kanetuu.co.jp/suii3/index0.htm" target="_blank">銅建値推移グラフ</a></li>
<li><a href="<?php echo home_url('/'); ?>http://www.benet.ne.jp/arai/souba/dousouba.htm" target="_blank">銅相場</a></li>
</ul>
<!-- /.bannerGroup --></div>
<!-- /.sectionBody --></div>
<!-- /#related --></section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
