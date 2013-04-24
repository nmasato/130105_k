<?php

//==========================================
//
//	Thumb
//
//==========================================

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(88, 88);						// Default
	add_image_size('category-thumb', 340, 9999, true);				// INDEX
	add_image_size('about-thumb', 260, 265);					// ABOUT (Profile Thumbnail)
	add_image_size('gallery-thumb', 170, 160, true);		// ABOUT (Gallery Thumbnail)
	add_image_size('services-thumb', 546, 210);				// SERVICES INDEX
	add_image_size('works-thumb', 328, 9999);					// WORKS INDEX
	add_image_size('page-thumb', 550, 9999);					// PAGES
	add_image_size('category-thumb', 300, 9999); 			// 300 pixels wide (and unlimited height)}
}




function breadcrumb(){
	global $post;
	$str ='';
	if(!is_home()&&!is_admin()){ /* !is_admin は管理ページ以外という条件分岐 */
		$str.= '<nav id="crumbs">';
		$str.= '<ol>';
		$str.= '<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">';
		$str.= '<a itemprop="url" href="'. home_url() .'/"><span itemprop="title">ホーム</span></a><span class="arrow">&gt;</span>';
		$str.= '</li>';

		if(is_search()){
			$str.='<li>「'. get_search_query() .'」で検索した結果</li>';
		} elseif(is_tag()){
			$str.='<li>タグ : '. single_tag_title( '' , false ). '</li>';
		} elseif(is_404()){
			$str.='<li>404 Not found</li>';
		} elseif(is_date()){
			if(get_query_var('day') != 0){
				$str.='<li><a href="'. get_year_link(get_query_var('year')). '">' . get_query_var('year'). '年</a></li>';
				$str.='<li>&gt;</li>';
				$str.='<li><a href="'. get_month_link(get_query_var('year'), get_query_var('monthnum')). '">'. get_query_var('monthnum') .'月</a></li>';
				$str.='<li>&gt;</li>';
				$str.='<li>'. get_query_var('day'). '日</li>';
			} elseif(get_query_var('monthnum') != 0){
				$str.='<li><a href="'. get_year_link(get_query_var('year')) .'">'. get_query_var('year') .'年</a></li>';
				$str.='<li>&gt;</li>';
				$str.='<li>'. get_query_var('monthnum'). '月</li>';
			} else {
				$str.='<li>'. get_query_var('year') .'年</li>';
			}
		} elseif(is_category()) {
			$cat = get_queried_object();
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">';
					$str.='<span itemprop="title"><a href="'. get_category_link($ancestor) .'">'. get_cat_name($ancestor) .'</a></span><span class="arrow">&gt;</span>';
					$str.='</li>';
				}
			}
			$str.='<li>'. $cat -> name . '</li>';
		} elseif(is_author()){
			$str .='<li>投稿者 : '. get_the_author_meta('display_name', get_query_var('author')).'</li>';
		} elseif(is_page()){
			if($post -> post_parent != 0 ){
				$ancestors = array_reverse(get_post_ancestors( $post->ID ));
				foreach($ancestors as $ancestor){
					$str.='<li><a href="'. get_permalink($ancestor).'">'. get_the_title($ancestor) .'</a></li>';
					$str.='<li>&gt;</li>';
				}
			}
			$str.= '<li>'. $post -> post_title .'</li>';

		} elseif(is_attachment()){
			if($post -> post_parent != 0 ){
				$str.= '<li><a href="'. get_permalink($post -> post_parent).'">'. get_the_title($post -> post_parent) .'</a></li>';
				$str.='<li>&gt;</li>';
			}
			$str.= '<li>' . $post -> post_title . '</li>';
		} elseif(is_single()){
			$categories = get_the_category($post->ID);
			$cat = $categories[0];
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">';
					$str.='<span itemprop="title"><a href="'. get_category_link($ancestor) .'">'. get_cat_name($ancestor) .'</a></span><span class="arrow">&gt;</span>';
					$str.='</li>';
				}
			}
			$str.='<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><a href="'. get_category_link($cat -> term_id). '">'. $cat-> cat_name . '</a></span><span class="arrow">&gt;</span></li>';
			$str.= '<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. $post -> post_title .'</span></li>';
		} else{
			$str.='<li>'. wp_title('', false) .'</li>';
		}
		$str.='</ol>';
		$str.='<!-- /#crumbs --></nav>';
	}
	echo $str;
}

//デバッグ関数
if ( ! function_exists('d'))
{
    function d() {
        echo '<pre style="text-align:left;background:#fff;color:#333;border:1px solid #ccc;margin:2px;padding:4px;font-family:monospace;font-size:12px">';
        foreach (func_get_args() as $val)
        {
            print_r($val);
        }
        echo '</pre>';
    }
}



?>