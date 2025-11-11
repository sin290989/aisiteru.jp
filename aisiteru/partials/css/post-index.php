<style type="text/css">
.blog-main-img{
    /*height: 150px;
    background-color: #ffffff;*/
}

ul.post-index li{
    width: 100%;
    overflow:hidden;
    margin-bottom: 10px;
    position: relative;
    padding-bottom: 30px;
}
ul.post-index a{
	display:block;
    text-decoration: none;
}

/*左側
-------------------------------------------------------*/
ul.post-index .post_thumbnail{
	width:46%;
    float: left;
}

ul.post-index .post_thumbnail img{
	width:100%;
	height:auto;
	vertical-align:bottom;
    padding: 0;
    margin-bottom: 0;
    border-radius: 3px;
}


/*右側
-------------------------------------------------------*/
ul.post-index .head{
    width:52%;
    float: right;
    padding-top: 5px;
    color: #46526f;
}
ul.post-index .head h2{
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: 700;
    font-style: normal;
    color: #031b4e;
	font-size:12px;
    line-height: 18px;
	background-image:none;
	border:none;
	margin:0;
	padding:0;
	height:auto;
    padding-top: 5px;
}

ul.post-index .head .post-dates{
    font-size: 12px;
	background-image:url(/wp/wp-content/themes/aisiteru/images/icon/time_bl.png);
	background-repeat:no-repeat;
	background-size:12px auto;
    background-position: left 7px;
	padding: 0 0 0 16px;
	margin-bottom:5px;
}

/*post-author
-------------------------------------------------------*/
ul.post-index li .post-author{
    /*position: absolute;
    bottom:10px;
    left:10px;
    z-index: 79;
    width: 50%;*/
    display:none;
}
ul.post-index li .post-author .post-author-img{
    float: none;
    overflow:auto;
    width:30px;
	height:30px;
    margin-left:0;
	border-radius:50%;
	overflow:hidden;
    box-sizing: border-box;
    border:1px solid #CCCCCC;
    margin-bottom: 0;
    float: left;
}
ul.post-index li .post-author .post-author-img img {
    width:100%;
	height:auto;
}

ul.post-index li .post-author .post-author-name{
    font-size: 8px;
    text-align: center;
    width: 50px;
    font-weight: bold;
    line-height: 8px;
    float: left;
    width: auto;
    padding-top: 18px;
    margin-left: 5px;
    letter-spacing: 0;
}
/*-----------------------------------*/

@media only screen and (min-width: 680px) {
ul.post-index {
    background-color: #FFFFFF;
    padding: 50px;
    border-radius: 5px;
}
ul.post-index li{
	margin-bottom:15px;
	padding-bottom:15px;
    width: 100%;
    position: relative;
    border-bottom:1px solid #f7f8f8;
}
ul.post-index li:last-of-type{
    border-bottom:none;
    margin-bottom: 0;
    padding-bottom: 0;;
}

/*左側
-------------------------------------------------------*/
ul.post-index .post_thumbnail{
    overflow: hidden;
	width:35%;
	float:left;
	margin-bottom:0;
}
ul.post-index a img{
    transition-duration: 0.3s;
}

/*右側
-------------------------------------------------------*/
ul.post-index .head{
	width:60%;
	float:right;
}

ul.post-index .head h2{
    font-size:16px;
	line-height:24px;
	margin:0;
	padding:0;
    transition-duration: 0.3s;
    overflow: hidden;
}
ul.post-index .head h2 span {
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}
ul.post-index .head .post-title{
	margin-bottom:10px;
	padding-bottom:0;
}
ul.post-index .head .post-content{
    overflow: hidden;
}
ul.post-index .head .post-content p {
    font-size:13px;
    margin: 0;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}

/*post-author
-------------------------------------------------------*/
 ul.post-index li .post-author{
    /*margin-top: 10px;
    position: absolute;
    left:350px;
    top:-20px;*/
    display: none;
}
 ul.post-index li .post-author .post-author-name{
     font-size: 10px;
     padding-top: 12px;
     letter-spacing: 0;
    }

}
</style>