<style type="text/css">
ul.wpp-list li a,
ul.post-index h2,
ul.post-index h3,
#side h2,
ul.catList li a{
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: 600;
    font-style: normal; 
}
#side .widget h2::before,
#side h2.catTitle::before,
#side h2.tagTitle::before,
h2#kanren::before{
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: 900;
    font-style: normal; 
}    
/*side
================================================================================================*/
#side{
    margin:0;
    padding:10px 0 0 0 ;
}
#side h2{
	padding:0;
	font-weight:bold;
	margin-bottom:10px;
	margin-top:30px;
    border-radius: 3px;
    font-size: 12px;
}
#side .widget h2,
#side h2.catTitle,
#side h2.tagTitle{
    text-align: center;
}
#side .widget h2::before,
#side h2.catTitle::before,
#side h2.tagTitle::before{
    white-space: pre;
    font-size: 24px;
    margin-right:15px;
    letter-spacing: 1px;
    color:#031b4e;
}
#side .widget h2::before{
    content: 'RANKING\A';
    margin:0 0 0 4px;
}
#side h2.catTitle::before{
    content: 'CATEGORY\A'; 
}
#side h2.tagTitle::before{
    content: 'TAG CLOUD\A';
}
#side h2.tagTitle{
    margin-top: 60px;
} 

ul.catList{
    margin: 0 20px;
    border-radius: 5px;
    overflow: hidden;
    background-color: #FFFFFF;
}
ul.catList li a{
	text-decoration:none;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/arrow.png);
	background-position:right 20px center;
	background-size:auto 11px;
	background-repeat:no-repeat;
	display:block;
	height:50px;
	line-height:50px;
	font-size:16px;
	border-bottom:solid 1px #f7f8f8;
	padding-left:25px;
    transition-duration: 0.3s;
}

ul.catList li ul li a{
    padding-left:50px;
    font-size: 14px;
    height:40px;
	line-height:40px;
    border-bottom:solid 1px #f7f8f8;
    border-top:none;
}

/*タグクラウドのデザイン*/
ul.tagcloud{
margin: 0 20px;
overflow: hidden;
box-sizing: border-box;
}

ul.tagcloud li{
    display: inline;
    margin-right: 5px;
}

ul.tagcloud a{
	font-size: 13px !important;
	line-height: 1em;
	background: #ffffff;
	display: inline-block;
	white-space: nowrap;
	padding: 8px 8px;
    padding-left: 30px;
	margin-top: 3px;
	border-radius: 3px;
	text-decoration: none;
    transition-duration: 0.3s;
    background-image:url(/wp/wp-content/themes/aisiteru/images/icon/tag_bl.png);
    background-size: 13px auto;
    background-repeat: no-repeat;
    background-position: left 10px center;
}
ul.tagcloud a:hover {
	text-decoration:underline;
}
/**/
ul.wpp-list{
    font-size:13px;
    line-height:18px;
    width: auto;
    overflow-x: auto;
  	-webkit-overflow-scrolling: touch;
  	white-space: nowrap;
    position: relative;
    height: 280px;
    width: 100%;
    /* IE, Edge 対応 */
	-ms-overflow-style: none;
	/* Firefox 対応 */
	scrollbar-width: none;
}
ul.wpp-list li{
	width:200px;
    position:absolute;
    background-repeat: no-repeat;
    background-position: center top;
    background-size: 50px auto;
}
ul.wpp-list li:nth-child(1){
    top:0;
    left: 20px;
    background-image:url(/wp/wp-content/themes/aisiteru/images/icon/rank1.png); 
}
ul.wpp-list li:nth-child(2){
    top:0;
    left: 250px;
    background-image:url(/wp/wp-content/themes/aisiteru/images/icon/rank2.png); 
}

ul.wpp-list li:nth-child(3){
    top:0;
    left: 480px;
    background-image:url(/wp/wp-content/themes/aisiteru/images/icon/rank3.png); 
}

ul.wpp-list li:nth-child(4){
    top:0;
    left: 710px;
    background-image:url(/wp/wp-content/themes/aisiteru/images/icon/rank4.png); 
}
ul.wpp-list li:nth-child(5){
    top:0;
    left: 940px;
    padding-right: 30px;
    background-position: 80px top;
    background-image:url(/wp/wp-content/themes/aisiteru/images/icon/rank5.png); 
}

ul.wpp-list li:nth-child(5) img {
     margin-right: 50px;
}
ul.wpp-list img{
	width:100%;
	height:auto;
    border-radius: 3px;
    margin-bottom: 10px;
    margin-top: 35px;
}
ul.wpp-list li a {
	color:#444444;
    white-space:normal;
    display: block;
}
ul.wpp-list li a:hover{
	text-decoration:none;
}
body ul.wpp-list li a.wpp-post-title{
    color:#031b4e;
}
@media only screen and (min-width: 680px) {
/*side
================================================================================================*/
#side{
	width:300px;
	float:right;
	padding:0;
}
#side .widget h2,
#side h2.catTitle,
#side h2.tagTitle{
    text-align: left;
}
#side h2.catTitle,
#side h2.tagTitle{
    margin-top: 60px;
}    
#side .widget h2::before{
     content: ' RANKING';
     margin:0;
}
#side h2.catTitle::before{
    content: ' CATEGORY'; 
}
#side h2.tagTitle::before{
    content: ' TAG CLOUD';
}
ul.catList{
    border:none;
}

ul.catList li a{
    font-size:14px;
    border-top:none;
    background-size:auto 8px;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/arrow_bk.png);
}   
ul.catList li a:hover{
    color: #0069ff;
    background-position:right 15px center;
}
ul.catList li ul li a{
    font-size:12px;
} 
/*タグクラウドのデザイン*/
ul.tagcloud a{
    font-size: 11px !important;
}
ul.tagcloud a:hover{
    color:#0069ff;
    text-decoration: none;
}

ul.catList,
ul.tagcloud,
ul.wpp-list{
margin: 0;
}

li#wpp-2{
	overflow:hidden;
	padding-bottom:15px;
}
li#wpp-2 h2{
	margin-top:0;
}
ul.wpp-list{
	font-size:12px;
	line-height:18px;
    position: static;
    white-space:normal;
    height: auto;
    overflow-x: visible;
}
ul.wpp-list li{
	width:100%;
	padding-top:8px;
	padding-bottom:8px;
    margin-bottom: 0;
    position: static;
    background-position: left top 15px;
    background-size: 40px auto;
}
ul.wpp-list li:nth-child(4){
    display: none;
}

ul.wpp-list li:nth-child(5){
    display: none;
}    
ul.wpp-list img{
	width:40%;
	height:80px;
	margin-right:10px;
    margin-bottom:0px;
	object-fit: cover; /* この一行を追加するだけ！ */
    border-radius: 3px;
    margin-top: 0px;
}
ul.wpp-list li:nth-child(5) img {
     margin-right: 10px;
}
ul.wpp-list li a {
    margin-top: 35px;
}
ul.wpp-list li a:hover{
	text-decoration:none;
}

#wpp-2 h2.widgettitle{
	background-size:22px auto;
	background-position: 12px center;
	padding-left:42px;
}
body ul.wpp-list li a.wpp-post-title{
    transition-duration: 0.3s;
    font-weight: bold;
    color:#031b4e;
    margin: 0 0 5px 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
}

body ul.wpp-list li a.wpp-post-title:hover{
    color: #0069ff;
}
}
</style> 

<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
$('#side ul.wpp-list li').hover(function(){
    $(".wpp-views .wpp-meta span.wpp-views",this).css('color','#FF0000');
    $("img.wpp-thumbnail",this).css('transform','scale(1.1)');
}, function(){
    $(".wpp-views .wpp-meta span.wpp-views",this).css('color','#46526f');
    $("img.wpp-thumbnail",this).css('transform','scale(1)');
});  
});
</script>
<?php endif; ?>

<?php
echo '<h2 class="catTitle">カテゴリ</h2>';
echo '<ul class="catList">'; 
echo '<li>';
echo '<a href="/category/web/">WEB制作</a>';
echo '<ul>';
echo '<li><a href="/category/web/html-css/">html・CSS</a></li>';
echo '<li><a href="/category/web/javascript/">JavaScript</a></li>';
echo '<li><a href="/category/web/php/">PHP</a></li>';
echo '<li><a href="/category/web/wordpress/">WordPress</a></li>';
echo '<li><a href="/category/web/htaccess/">.htaccess</a></li>';
echo '</ul>';
echo '</li>';
echo '</ul>';
?>