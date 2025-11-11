<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php the_title(); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common101.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/table4.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
 
<style type="text/css">
/*single
================================================================================================*/	
#post-single{
	font-size:14px;
	line-height:26px;
}
#post-single a{
    color:#006d00;
}
/*H
 ---------------------------------------------------------------*/
body #post-single h1.page{
	margin-top:30px;
}
#post-single h2{
	background-image:url(/wp/wp-content/themes/aisiteru/images/single/bg_h2.png);
    background-repeat:no-repeat;
	border:none;
	height:auto;
	font-size:20px;
    padding: 5px 5px 5px 32px;
    margin:65px 0 20px 0;    
}
#post-single h2.matome{
    background-image:url("/wp/wp-content/themes/aisiteru/images/single/bg_h2_matome.png");
}    
#post-single h2.omake{
    background-image:url("/wp/wp-content/themes/aisiteru/images/single/bg_h2_omake.png");
}  
#post-single h3{
	margin-top:30px;
    background-color: #f7f8f8;
    border-radius: 3px;
	margin-bottom:10px;
	font-size:16px;
	padding-left:15px;
	line-height:20px;
	padding-top:10px;
	padding-bottom:10px;
}
#post-single h4{
	margin-top:40px;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/arrow_shita_bk.png);
	background-repeat:no-repeat;
	background-size:16px auto;
	padding-left:22px;
	background-position: center left;
    font-size: 16px;
    line-height: 16px;
    padding-top: 3px;
    margin-bottom: 5px;
}
#post-single p{
    margin-top: 10px;
	margin-bottom:10px;
}
#post-single img{
	width:100%;
	height:auto;
	vertical-align:bottom;
}
/*NEWマーク
 ---------------------------------------------------------------*/
.newMarkSingle{
    display: block;
    width: 30px;
    height: 30px;
    margin: 0 auto;
    position:absolute;
    top:0;
}
.newMarkSingle::before {
    content: "";
    top: 0;
    left: 0;
    border-bottom: 3em solid transparent;
    border-left: 3em solid #eff30c; 
    position: absolute;
    z-index: 90;
}
.newMarkSingle::after {
    content: "NEW";
    display: block;
    top: 5px;
    transform: rotate(-45deg);
    color: #333333; 
    left: 2px;
    position: absolute;
    z-index: 91;
    font-size: 8px;
    font-weight: bold;
}


#post-single a[target="_blank"] {
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/blank.png);
	background-repeat:no-repeat;
	padding-left:17px;
	background-position:1px 4px;
}
#post-single .addtoany_share_save_container a[target="_blank"] {
	background-image:none;
	padding-left:0;
}


#post-single .post_thumbnail{
	width:100%;
    position: relative;
}
#post-single .post_thumbnail img{
	width:100%;
	height:auto;
}

ul.post-info{
	font-size:12px;
	line-height:12px;
	margin-bottom:7px;
}
ul.post-info li{
	float:left;
}
#post-single ul.post-info{
	margin-bottom:10px;
	margin-top:20px;
}

/*post-head
================================================================================================*/
#post-head .post-cat{
    background-color:#ffffff;
    padding: 3px;
    text-align: center;
    border-top:dotted 1px #eeeeee;
    border-bottom:dotted 1px #eeeeee;
    font-size: 12px;
    font-weight: bold;
}
#post-head .post-cat span{
    background-image: url("/wp/wp-content/themes/aisiteru/images/icon/folder_bl.png");
    background-repeat: no-repeat;
    background-size: 15px auto;
    background-position: left 0px;
    padding-left: 20px;

}
    
#post-single .post_thumbnail{
    margin-left: -20px;
}

body #post-single h1{
	padding:0;
	margin:0;
	border:none;
	font-size:18px;
	box-shadow:none;
    line-height: 28px;
    margin-bottom: 0;
    padding-top: 25px;
}

    
    ul.tag-list{
        margin: 15px 0 0 0 ;
        padding: 10px 0 0 0 ;
        border-top:solid 1px #eeeeee;
    }
    
    ul.tag-list li{
        display: inline;
        margin-right: 5px;
    }

    body ul.tag-list a{
        font-size: 12px !important;
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
        border:solid 1px #eeeeee;
        background-image:url(/wp/wp-content/themes/aisiteru/images/icon/tag_bl.png);
        background-size: 13px auto;
        background-repeat: no-repeat;
        background-position: left 10px center;
        color: #444444 !important;
    }
    
    #post-head .inner{
        padding: 0px 0px 20px 0px;
    }

/*合わせて読みたい
================================================================================================*/
#post-single .awasete a[target="_blank"] {
	background-image:none;
}

#post-single .awasete ul {
	border:1px solid #eeeeee;
	border-radius: 0px 0px 3px 3px;
}

#post-single .awasete .awasete-title {
	background-color:#444444;;
	padding:10px;
	font-size:11px;
	line-height:12px;
	color:#FFF;
	border-radius: 3px 3px 0px 0px;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/link_wh.png);
	background-repeat:no-repeat;
	background-size:24px auto;
	padding-left:32px;
	background-position:5px 3px;
}

#post-single .awasete ul li a{
	width:100%;
	display:block;
	box-sizing: border-box;
	padding-left:10px;
	padding-right:10px;
	color:#333;
}
#post-single .awasete ul li .awasete-wap{
	padding-top:10px;
	padding-bottom:10px;
	border-bottom:1px solid #eeeeee;
}
#post-single .awasete ul li:last-child .awasete-wap{
	border-bottom:none;
	padding-bottom:10px;
}
#post-single .awasete ul li .awasete-img{
	width:15%;
	float:left;
	
}

#post-single .awasete ul li .awasete-img img {
	width:100%;
	height:35px;
	object-fit: cover;
	margin-right:17px;
}

#post-single .awasete ul li .awasete-content{
	display:block;
	width:80%;
	float:right;
}

body #post-single .awasete ul li a .awasete-content-title{
	font-weight:bold;
	font-size:12px;
	line-height:16px;
}

/*目次
================================================================================================*/    
#toc_container{
	width:100%;
	box-sizing: border-box;
	border:1px solid #cccccc;
	border-top:1px solid #eeeeee;
	border-left:1px solid #eeeeee;
	padding:15px;
	background-color:#f7f8f8;
	border-radius: 5px;
}
#toc_container p.toc_title{
	font-weight:bold;
	margin-bottom:0;
	display:block;
	font-size:16px;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/mokuji.png);
	background-repeat:no-repeat;
	background-size:18px auto;
	padding-left:24px;
	border-bottom:1px solid #cccccc;
	padding-bottom:5px;
	margin-bottom:10px;
}
ul.toc_list li{
	font-weight:bold;
}
ul.toc_list li ul li {
	margin-left:20px;
	font-size:85%;
}

/*ブックマークボタン
================================================================================================*/  
#post-single .addtoany-btn .addtoany_shortcode a[target="_blank"] {
	background-image:none;
	padding-left:0;
}
#post-single .addtoany-btn {
	padding-bottom:10px;
	padding-top:10px;
}


strong.red{
	color:#F00;
}
strong.red120{
	color:#F00;
	font-size:120%;
}
span.co-de{
    background-color: #EEEEEE;
    border-radius: 3px;
    font-size:0.9em;
    line-height: 0.9em;
    padding: 2px;
    padding-left: 5px;
    padding-right: 5px;
    margin: 0 1px 0 1px;
}
.yaku {
	background-color:#f7f8f8;
	padding:30px;
	padding-left:45px;
	padding-right:45px;
	margin-bottom:15px;
	font-size:90%;
	line-height:150%;
}
.yaku2 {
	background-color:#f7f8f8;
	padding:10px;
	padding-left:15px;
	padding-right:15px;
	margin-bottom:15px;
	font-size:90%;
}
.yaku2 .title-yaku,
.yaku .title-yaku{
    font-weight:bold;
}




.imageWaku{
    border:5px solid #eeeeee;
    margin-bottom: 10px;
}
.imageWaku .img {
    vertical-align: bottom;
}


blockquote {
    padding: 15px;;
    box-sizing: border-box;
    font-style: italic;
    background: #f3f3f3;
    border-left:5px solid #CCCCCC;
}




ul.check{
	border:3px solid #CCCCCC;
	padding-left:20px;
	padding-right:20px;
	margin-bottom:10px;
	font-weight:bold;
}
ul.check li{
	border-bottom:1px dashed #CCCCCC;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:40px;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/check_gr.png);
	background-repeat:no-repeat;
	background-size:20px auto;
	background-position:center left 10px;
}
ul.check li:last-child{
	border:none;
}



.imp {
    position: relative;
    margin:40px 0 10px 0;
    padding: 20px 15px 0 30px;;
    border: solid 3px #eff30c;
    border-radius: 8px;
}
.imp .box-title {
    position: absolute;
    display: inline-block;
    top: -13px;
    left: 10px;
    padding: 0 9px;
    line-height: 1;
    font-size: 18px;
    background:#ffffff;
    color: #444444;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/megaphone_yellow.png);
	background-position:center left 10px;
	background-size:30px auto;
	background-repeat:no-repeat;
	padding-left:50px;
	padding-bottom:5px;
	padding-top:5px;
}

.imp p{
	margin:0;
	padding:0;
}


.hint {
    position: relative;
    margin:40px 0 10px 0;
    padding: 0 15px 0 30px;;
    border: solid 3px #CCCCCC;
    border-radius: 8px;
}

.hint .box-title {
    position: absolute;
    display: inline-block;
    top: -13px;
    left: 10px;
    padding: 0 9px;
    line-height: 1;
    font-size: 18px;
    background:#ffffff;
    color: #111111;
    font-weight: bold;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/megaphone_bk2.png);
	background-position:center left 10px;
	background-size:30px auto;
	background-repeat:no-repeat;
	padding-left:50px;
	padding-bottom:5px;
	padding-top:5px;
}

.hint p{
	margin:0;
	padding:0;
}



.hosoku {
    position: relative;
    margin:40px 0 10px 0;
    padding: 0 15px 0 30px;;
    border: solid 3px #CCCCCC;
    border-radius: 8px;
}
.hosoku .box-title {
    position: absolute;
    display: inline-block;
    top: -13px;
    left: 10px;
    padding: 0 9px;
    line-height: 1;
    font-size: 18px;
    background:#ffffff;
    color: #111111;
    font-weight: bold;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/megaphone_bk2.png);
	background-position:center left 10px;
	background-size:30px auto;
	background-repeat:no-repeat;
	padding-left:50px;
	padding-bottom:5px;
	padding-top:5px;
}

.hosoku p{
	margin:0;
	padding:0;
}

span.btn-wp-blue{
	background-color:#007cba;
	color:#FFF;
	font-weight:bold;
	padding:3px 5px 3px 5px;
	margin:0 2px 0 2px;
	font-size:85%;
	border-radius: 3px;
	border:1px solid #007cba;
}

span.btn-wp-white{
	background-color:#ffffff;
	color:#007cba;
	font-weight:bold;
	padding:3px 5px 3px 5px;
	margin:0 2px 0 2px;
	font-size:85%;
	border-radius: 3px;
	border:1px solid #007cba;
}

.markerYellow {
background: linear-gradient(transparent 60%, #ffff66 60%);
}


/*前の投稿・次の投稿
    ================================================================================================*/
    .prev-next-link{
        margin-top: 50px;
        margin-bottom: 50px;
    }
    
    .prev-link,
    .next-link{
        width: 50%;
        box-sizing: border-box;
        position: relative;
    }
    .prev-link{
        float: left;
        padding-right: 15px;
        border-right: solid 1px #cccccc;
    }
    .next-link{
        float: right;
        padding-left: 15px;
    }
    
    .prev-link a,
    .next-link a{
        text-decoration: none;
    }
    
    
    .prev-thumb,
    .next-thumb{
        width: 70%;
        border-radius: 3px;
        overflow: hidden;
    }
    .prev-thumb{
        margin-left: 30%;
    }
    
    .next-thumb img,
    .prev-thumb img{
        width: 100%;
        height: auto;
        vertical-align: bottom;
    }

    
    .prev-con{
        width: 100%;
        box-sizing: border-box;
    }
    .next-con{
        width: 100%;
        box-sizing: border-box;
    }
    
    
    .prev-con h3,
    .next-con h3{
        font-size: 13px;
	    line-height:18px;
    }

    .prev-text,
    .next-text{
        /*color: #2d046a;*/
        color: #006d00;
        margin-bottom: 10px;
        position: absolute;
        background-color: rgba(255,255,255,0.9);
        line-height: 16px;
    }
    .prev-text{
        left:10px;
        top:20px;
    }
    
    .next-text{
        right:10px;
        top:20px;
    }
    
    
    .item-time{
        font-size: 12px;
        color: #555555;
        background-image:url("/wp/wp-content/themes/aisiteru/images/icon/time_bl.png");
        background-repeat:no-repeat;
        background-size:11px auto;
        padding-left:15px;
        background-position:left center;
    }



/*関連ポスト
================================================================================================*/
ul.kanren-post{
    font-size:13px;
    line-height:18px;
    width: auto;
    overflow-x: auto;
  	-webkit-overflow-scrolling: touch;
  	white-space: nowrap;
    position: relative;
    height: 280px;
}
ul.kanren-post li{
	width:200px;
    position:absolute;
}
ul.kanren-post .item-time{
        font-size: 12px;
        color: #555555;
        background-image:url("/wp-content/themes/aisiteru/images/icon/time_bl.png");
        background-repeat:no-repeat;
        background-size:11px auto;
        padding-left:15px;
        background-position:0px 3px;
    margin-bottom: 3px;
    }
ul.kanren-post li:nth-child(1){
    top:0;
    left: 0;
}
ul.kanren-post li:nth-child(2){
    top:0;
    left: 230px;
}

ul.kanren-post li:nth-child(3){
    top:0;
    left: 460px;
}

ul.kanren-post li:nth-child(4){
    top:0;
    left: 690px;
}

ul.kanren-post li:nth-child(5){
    top:0;
    left: 920px;
}
    
ul.kanren-post li:nth-child(6){
    top:0;
    left: 1150px;
}    
 
ul.kanren-post li:nth-child(7){
    top:0;
    left: 1380px;
} 
ul.kanren-post li:nth-child(8){
    top:0;
    left: 1610px;
    padding-right: 30px;
} 


ul.kanren-post img{
	width:100%;
	height:auto;
    border-radius: 3px;
    margin-bottom: 10px;
}
ul.kanren-post li a {
	color:#444444;
    white-space:normal;
    display: block;
}
ul.kanren-post li a:hover{
	text-decoration:none;
}   

h2#kanren{
	padding:0;
	margin-bottom:10px;
	margin-top:30px;
    border-radius: 3px;
    font-size: 12px;
}
h2#kanren{
    text-align: center;
}
h2#kanren::before{
    white-space: pre;
    font-size: 24px;
    margin-right:15px;
    letter-spacing: 1px;
}
h2#kanren::before{
    content: ' RELATION\A';
} 
@media only screen and (min-width: 680px) {
/*single
================================================================================================*/	
#post-single{
    width: 640px;
	font-size:15px;
	line-height:28px;
}

#post-single p{
	margin-bottom:15px;
    margin-top: 15px;
}
    
/*H
 ---------------------------------------------------------------*/
body #post-single h1.page{
	margin-top:15px;
}
#post-single h2{
    margin-top: 80px;
    font-size: 28px;
    padding: 5px 10px 5px 32px;
}
#post-single h3{
    margin-top: 50px;
    font-size:20px;
}
#post-single h4{
    padding-left:27px;
    background-position: left center;
    font-size: 18px;
    line-height: 18px;
    padding-top: 4px;
} 
 
/*NEWマーク
 ---------------------------------------------------------------*/
.newMarkSingle{
    width: 50px;
    height: 50px;
}
.newMarkSingle::before {
    border-bottom: 4em solid transparent;
    border-left: 4em solid #eff30c;
}
.newMarkSingle::after{
    top: 8px;
    left: 4px;
    font-size: 11px;
}


#post-single a:hover{
	text-decoration:underline;
}
#post-single a[target="_blank"] {
    background-position:2px 1px;
    }
    
    


#post-single ul.post-info{
	margin-bottom:20px;
	margin-top:0;
}
ul.post-info li.cate{
	margin-left:15px;
}
ul.post-info li.time{
	margin-bottom:0;
}
    
 /*post-head
================================================================================================*/
    
#post-single .post_thumbnail{
        margin-left: 0;
        border-radius: 0 0 3px 3px ;
        overflow: hidden;
        width: 640px;
    }
    
    #post-head{
        border:solid 1px #eeeeee;
        border-radius: 3px 3px 0 0 ;
    }
    
    #post-head .inner{
        padding: 20px 50px 20px 40px;
    }
    
    
    #post-head .post-cat{
        background-color:#f7f8f8;
        padding: 7px;
        text-align: center;
        font-size: 14px;
        border-top:solid 1px #ffffff;
        border-bottom:solid 1px #eeeeee;
    }
    #post-head .post-cat span{
        background-repeat: no-repeat;
        background-size: 20px auto;
        background-position: left center;
        padding-left: 25px;
        
    }
    
    body #post-single h1{
        font-size:28px;
        line-height: 38px;
        margin-bottom: 0;
        margin-top: 30px;
        padding-top: 0;
    }

    
    body ul.tag-list a:hover{
        text-decoration:underline;
    }
    
    
/*合わせて読みたい
================================================================================================*/
#post-single .awasete .awasete-title {
	font-size:14px;
}
#post-single .awasete ul li a{
	width:100%;
	display:block;
	box-sizing: border-box;
	padding-left:15px;
	padding-right:15px;
	color:#333;
}
#post-single .awasete ul li .awasete-wap{
	padding-top:15px;
	padding-bottom:15px;
	border-bottom:1px solid #eeeeee;
}
#post-single .awasete ul li:last-child .awasete-wap{
	border-bottom:none;
	padding-bottom:15px;
}
#post-single .awasete ul li .awasete-img{
	width:200px;
}

#post-single .awasete ul li .awasete-img img {
	width:100%;
	height:60px;
	object-fit: cover;
	vertical-align:bottom;
}

#post-single .awasete ul li .awasete-content{
	width:500px;
	float:right;
}

body #post-single .awasete ul li a .awasete-content-title{
	line-height:18px;
	font-size:14px;
}

body #post-single .awasete ul li a .awasete-content-date{
	font-size:12px;
	background-image:url("/wp/wp-content/themes/aisiteru/images/icon/time_bl.png");
	background-repeat:no-repeat;
	background-size:12px auto;
	padding-left:17px;
	background-position:0px 0px;
	line-height:14px;
	margin-top:10px;
}
    
    .awasete-content-title{
        transition-duration: 0.3s;
    }

/*目次
================================================================================================*/   
#toc_container{
	padding-left:30px;
	padding-right:30px;
}

#toc_container p.toc_title{
	font-size:18px;
	background-size:24px auto;
	padding-left:28px;
}

    
    
/*前の投稿・次の投稿
================================================================================================*/
.prev-next-link{
    margin-top: 50px;
    margin-bottom: 50px;
}

.prev-link,
.next-link{
    width: 50%;
    box-sizing: border-box;
    height: 120px;
}
.prev-link{
    padding-right: 30px;
}
.next-link{
    padding-left: 30px;
}


.prev-thumb,
.next-thumb{
    width: 110px;
}

.prev-thumb{
    float: left;
    margin-left: 0;
}

.next-thumb{
    float: right;
}

.next-thumb img,
.prev-thumb img{
    width: 100%;
    transition-duration: 0.3s;
}


.prev-con{
    width: 210px;
    float: right;
}
.next-con{
    width: 210px;
    float: left;
}


.prev-con h3,
.next-con h3{
    font-size: 13px;
    transition-duration: 0.3s;
}


.prev-text,
.next-text{
    position:static;
}
.prev-text{
    padding-left: 7px;
}

.next-text{
    padding-right: 7px;
    text-align: right;
}


.item-time{
    font-size: 12px;
    background-size:10px auto;
    padding-left:17px;
}

/*関連ポスト
================================================================================================*/
ul.kanren-post{
    width: 640px;
    height: 530px; 
}
ul.kanren-post li{
	width:150px;
}

ul.kanren-post li h3{
transition-duration: 0.3s;
}
 
ul.kanren-post .item-time{
    font-size: 12px;
    background-size:10px auto;
    padding-left:17px;
    background-position:left center;
}
ul.kanren-post li:nth-child(1){
    top:0;
    left: 0;
}
ul.kanren-post li:nth-child(2){
    top:0;
    left: 160px;
}

ul.kanren-post li:nth-child(3){
    top:0;
    left: 320px;
}

ul.kanren-post li:nth-child(4){
    top:0;
    left: 480px;
}
ul.kanren-post li:nth-child(4){
    padding-right: 0;
}  
ul.kanren-post li:nth-child(5){
    top:270px;
    left: 0px;
}   
    
ul.kanren-post li:nth-child(6){
    top:270px;
    left: 160px;
}    
 
ul.kanren-post li:nth-child(7){
    top:270px;
    left: 320px;
} 
ul.kanren-post li:nth-child(8){
    top:270px;
    left: 480px;
    padding-right: 0;
}
  
ul.kanren-post img{
	width:100%;
}

h2#kanren{
    text-align: left;
}
h2#kanren{
    margin-top: 60px;
} 
h2#kanren::before{
    font-size: 24px;
    margin-right:15px;
    letter-spacing: 1px;
    
}
     
h2#kanren::before{
     content: ' RELATION';
}
}
</style>  
    
<script type="text/javascript">    
$(function () {
    var windowWidth = $(window).width();
    if(windowWidth < 680){
        $("#post-single .post_thumbnail").css('width',windowWidth);
    }
});
     
$(function () {
    var windowWidth = $(window).width();
    var kanrenPostWidth = windowWidth - 20;
    if(windowWidth < 680){
        $("ul.kanren-post").css('width',kanrenPostWidth);
    }
});
</script>

</head>
<body>
<?php get_template_part('partials/header'); ?>
<div id="pan">
<?php
$cat = get_the_category();
$catid = $cat[0]->cat_ID; // ID
$catname = $cat[0]->name; // カテゴリ名
$catslug = $cat[0]->category_nicename; // カテゴリスラッグ名
$link = get_category_link($catid); // カテゴリURL
?>
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <a href="<?php echo $link; ?>"><?php echo $catname; ?></a> > <span class="now"><?php the_title(); ?></span>
</div>
</div>


<div id="wapper">
<div id="contents">
<div id="main">
<div id="post-single">
<?php if(have_posts()): while(have_posts()):
the_post(); ?>
 
<div id="post-head">
<div class="post-cat">
<span>
<?php
/* 子カテゴリーのみを表示する */
$categories = get_the_category();
foreach ($categories as $category) {
    $cat_name = $category->name;
    $cat_link = esc_url(get_category_link($category->term_id));
    if ($category->parent) {
        echo sprintf("<a href='%s'>%s</a>", $cat_link, $cat_name);
    }
}
?>
</span>
</div>
<div class="inner">

<ul class="post-info">
<?php
if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
?>
    <li class="time">
    最終更新日:<time class="updated" datetime="<?php the_modified_date("Y-m-d H:i:s") ?>"><?php the_modified_date('Y.n.j') ?>（公開:<?php echo get_the_date('Y.n.j') ?>）</time>
    </li>
<?php
}else{
?>

    <li class="time">
    公開:<time class="entry-date published" datetime="<?php echo get_the_date("Y-m-d H:i:s") ?>"><?php echo get_the_date('Y.n.j') ?></time>
    </li>

<?php
}
?>
</ul>

<h1><?php the_title(); ?></h1>
<?php if(has_tag()==true) : ?>
<?php the_tags( '<ul class="tag-list"><li>', '</li><li>', '</li></ul>' ); ?>
<?php endif; ?>

</div>
    
    
<div class="post_thumbnail">
<?php
    $days = 5;  // NEWマークを表示する日数
    $now = date_i18n('U');  // 今の時間
    $entry = get_the_time('U');  // 投稿日の時間
    $term = date('U',($now - $entry)) / 86400;
    if( $days > $term ){
    echo '<span class="newMarkSingle"></span>';
    }
?>
<?php if (has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('single-thumbnails'); ?>
<?php else : ?>
    <img src="<?php bloginfo('template_url'); ?>/img/noimage.gif" width="100" height="100" alt="デフォルト画像" />
<?php endif ; ?>
</div>
    
</div>   
    
    


    
<div class="addtoany-btn">
<?php echo do_shortcode('[addtoany]'); ?>
</div>


<div class="post">
<div class="head">
</div>
<?php the_content(); ?>

</div><!-- .post -->

<?php endwhile; endif; ?>
</div>
<?php get_template_part("partials/prev-next-link") ?>
<?php get_template_part("partials/kanren-post") ?>
</div><!-- #main -->
<div id="side">
<?php dynamic_sidebar('sidebar-1'); ?>
<?php get_template_part("partials/cat") ?>
<?php get_template_part("partials/tag") ?>
</div>
<div style="clear:both;"></div>
</div><!-- #contents -->

</div><!-- #wapper -->
<?php get_template_part('partials/footer'); ?>

<?php wp_footer(); ?>
<?php if ( !wp_is_mobile() ) : ?>
<script type="text/javascript">
$(function () {
$('ul.post-index li').hover(function(){
    $("h2",this).css('color','#82d700');
    $(".post_thumbnail img",this).css('transform','scale(1.1)');
}, function(){
    $("h2",this).css('color','#444444');
    $(".post_thumbnail img",this).css('transform','scale(1)');
});  
});


$(function () {
$('ul.post li').hover(function(){
    $("h2",this).css('color','#82d700');
    $(".post_thumbnail img",this).css('transform','scale(1.1)');
}, function(){
    $("h2",this).css('color','#444444');
    $(".post_thumbnail img",this).css('transform','scale(1)');
});  
});
 
$(function () {
$('.wpp-list li').hover(function(){
    $(".wpp-post-title",this).css('color','#82d700');
}, function(){
    $(".wpp-post-title",this).css('color','#444444');
});  
});

$(function () {
$('.awasete li').hover(function(){
    $(".awasete-content-title",this).css('color','#82d700');
}, function(){
    $(".awasete-content-title",this).css('color','#444444');
});  
});
    
    
$(function () {
$('.next-link').hover(function(){
    $("h3",this).css('color','#82d700');
    $(".next-thumb img",this).css('transform','scale(1.1)');
}, function(){
    $("h3",this).css('color','#444444');
    $(".next-thumb img",this).css('transform','scale(1)');
});  
});
    
$(function () {
$('.prev-link').hover(function(){
    $("h3",this).css('color','#82d700');
    $(".prev-thumb img",this).css('transform','scale(1.1)');
}, function(){
    $("h3",this).css('color','#444444');
    $(".prev-thumb img",this).css('transform','scale(1)');
});  
});
     
  
$(function () {
$('.kanren-post li').hover(function(){
    $("h3",this).css('color','#82d700');
}, function(){
    $("h3",this).css('color','#444444');
});  
});
    
    

</script>
    
<?php endif; ?>
</body>
</html>