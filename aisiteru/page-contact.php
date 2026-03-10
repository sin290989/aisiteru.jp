<?php
/*
Template Name:contact
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>お問合せ｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common114.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/page.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
 <style type="text/css">
 .wpcf7 form.invalid .wpcf7-response-output,
 .wpcf7 form.unaccepted .wpcf7-response-output {
     border-color: #ff0000;
 }
 div.wpcf7 .ajax-loader{
     display:none;
 }
 span.wpcf7-list-item {
 display: block;
 }

#contact-form{
	width:100%;
	box-sizing:border-box;
}

#contact-form .must span{
    background-color:#0069ff;
    color: #ffffff;
	font-size:11px;
	line-height:11px;
	border-radius:2px;
	padding-bottom:1px;
	padding-left:3px;
	padding-right:3px;
	margin-left:6px;
    font-weight: bold;
}
#contact-form .nini span{
	background-color:#EEEEEE;
	font-size:12px;
	line-height:12px;
	border-radius:2px;
	padding-bottom:1px;
	padding-left:3px;
	padding-right:3px;
	margin-left:6px;
}

#contact-form  #contact-mes{
    margin-bottom: 50px;
}
#contact-form .head{
	padding-bottom:40px;
}

#contact-form .title{
    font-family: '游明朝','Yu Mincho',YuMincho,'Hiragino Mincho Pro',serif;
    font-weight: bold;
	margin-bottom:5px;
	float:left;
}


#contact-form .inputarea input{
	width:100%;
	padding:7px;
	box-sizing: border-box;
	border:2px solid #eeeeee;
    border-radius: 5px;
}

#contact-form .inputarea textarea{
	width:100%;
	height:300px;
	padding:7px;
	box-sizing: border-box;
	border:2px solid #eeeeee;
    border-radius: 5px;
}

#contact-form .inputarea input[type="checkbox"]{
	width:auto;
}

#contact-form .inputarea input[type="radio"]{
	width:auto;
}

/*送信ボタンのデザイン変更*/
input.wpcf7-submit{
	display: block;
    width: 320px;
    height: 60px;
    margin: 20px auto 0 auto;
    border-radius: 30px;
    background-image: url("/wp/wp-content/themes/a-carnet/img/top/arrow_tya.png");
    background-repeat: no-repeat;
    background-size: 8px auto;
    background-position: right 25px center;
    line-height: 60px;
    text-align: center;
    font-size: 16px;
    background-color:#031b4e;
    color: #FFFFFF;
    letter-spacing: 1px;
    border: none;
}
input.wpcf7-submit:focus{
	outline: none;
}

#thanks{
    margin: 0 15px 0 15px;
    padding-bottom: 100px;
}
#thanks #thankyou{
font-size: 18px;
    border-bottom: 1px solid #222222;
    margin-bottom: 15px;
    padding-bottom: 9px;
}     

@media only screen and (min-width: 680px) {

#contact-form{
	width:750px;
    padding: 0;
}
#contact-form  #contact-mes{
        margin: 0 0 30px 0;
}
#contact-form #contact-input-area{
	width:750px;
	margin-left:auto;
	margin-right:auto;
	padding-top:30px;
}
#contact-form .head{
	padding-bottom:25px;
    
}
#contact-form .title{
	width:200px;
	float:left;
	text-align:left;
	margin-bottom:0px;
	font-size:15px;
    border-top: 2px solid #031b4e;
    padding-top: 25px;
}
#contact-form .must,
#contact-form .nini{
	width:65px;
	height:50px;
	float:left;
    border-top: 2px solid #eeeeee;
    padding-top: 25px;

}
#contact-form .inputarea{
	width:475px;
	float:left;
    border-top: 2px solid #eeeeee;
    padding-top: 25px;

}
#contact-form .inputarea input{
	width:450px;
	padding:10px;
}
#contact-form .inputarea textarea{
	width:450px;
	height:200px;
	padding:10px;
}

#contact-form .inputarea input:focus{
	outline: none;
	border:2px solid #CCCCCC;
}

#contact-form .inputarea textarea:focus{
	outline: none;
	border:2px solid #CCCCCC;
}


/*送信ボタンのデザイン変更*/
input.wpcf7-submit{
	width: 200px;
    height: 40px;
    margin: 20px auto 0 auto;
    background-size: 8px auto;
    transition: all 0.3s ease;
    border-radius: 20px;
    background-position: right 50px center;
    line-height: 40px;
    font-size: 16px; 
    color: #FFFFFF;
}
/*送信ボタンマウスホバー時*/
input.wpcf7-submit:hover{
	background-position: right 35px center;
    background-color: #0069ff;
    box-shadow: none;
    cursor: pointer;
}


#thanks{
    width:900px;
    margin: 0 auto 0 auto;
    padding-bottom: 150px;
}
#thanks #thankyou{
    font-size: 22px;
    border-bottom: 1px solid #222222;
    margin-bottom: 30px;
    padding-bottom: 18px;
} 
    
    .contactOutline{
        padding: 0;
        width: 900px;
        margin-left: auto;
        margin-right: auto;
    }
}
</style>   
</head>
<body>
<?php get_template_part('partials/header'); ?>
<div id="pan">
<div class="inner">
<a href="/"><span class="home">トップページ</span></a> > <a href="/contact">お問合せ</a></span>
</div>
</div>
<div class="page-main-img"><h1>お問合せ</h1></div>
<div id="page-wapper">
<div id="page-contents">
<?php
    if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>
</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>