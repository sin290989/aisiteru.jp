<script type="text/javascript">
/*$(function () {
    $(window).scroll(function(){
        if( $(window).scrollTop() > 80 ){
            $('#header').css('box-shadow','0px 3px 3px -1px rgba(0,0,0,0.31)');
        } else if( $(window).scrollTop() < 20 ){
            $('#header').css('box-shadow','0px 0px 0px 0px rgba(0,0,0,0.31)');
        }
    });  
    });*/
</script>
<style type="text/css">
#header{
   
}
@media only screen and (min-width: 680px) {


}


/*==============================================================================================*/
/*header*/
/*==============================================================================================*/

#header {
  height: 70px;
  width: 100%;
  position: fixed;
  top: 0;
  z-index: 99;
   background-color: #FFFFFF;
  transition-duration: 0.3s;
}
#header .inner {
  width: 100%;
  height: 70px;
  position: relative;
  margin: 0 auto;
}
.logo {
  position: absolute;
  top: 25px;
  left: 22px;
  font-size: 22px;
  font-weight: bold;
}
.logo a span{
    color: var(--color-secondary);
}
#header .message,
ul.global-menu {
  display: none;
}
@media only screen and (min-width: 680px) {
  #header {
    height: 60px;
    top: 0px;
    background-color: #f7f8f8;
  }
  #header .inner {
    width:100%;
    height: 60px;
  }
  .logo {
    top: 15px;
    left: 60px;
    font-weight: 700;
    font-size: 16px;
  }
.logo a span{
    font-weight: 700;
    font-size: 16px;
}
.logo a:hover{
    text-decoration: none;
    color: var(--color-primary);
}
  #header .message {
    display: block;
    position: absolute;
    top: 18px;
    left: 300px;
    font-size: 18px;
    font-weight: 700;
    color: #1433d6;
  }


}


/*pan
================================================================================================*/
#pan {
  height: 40px;
  font-size: 12px;
  line-height: 40px;
  margin-top: 70px;
  border-top: 1px solid #f7f8f8;
  border-bottom: 1px solid #f7f8f8;
}
#pan span.home {
  background-image: url(/wp/wp-content/themes/aisiteru/images/icon/home_bk.png);
  background-size: 15px auto;
  background-repeat: no-repeat;
  padding-left: 18px;
  background-position: left center;
}
#pan .inner {
  width: 100%;
  height: 30px;
  padding-left: 10px;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  white-space: nowrap;
  box-sizing: border-box;
  /* IE, Edge 対応 */
  -ms-overflow-style: none;
  /* Firefox 対応 */
  scrollbar-width: none;
  box-sizing: border-box;
}
#pan .inner ul li {
  float: left;
  margin-right: 5px;
}

#page-title {
  width: 100%;
  height: 150px;
  background-image: url(../images/bg_page.jpg);
  background-size: auto 100%;
  background-position: center;
  text-align: center;
  box-sizing: border-box;
  padding-top: 50px;
}
#page-title .title {
  font-size: 28px;
  color: #fff;
  font-weight: bold;
}
#page-title .slug {
  font-size: 12px;
  color: #fff;
  font-weight: bold;
  margin-top: 10px;
}

#post-single ul.post-info {
  margin-bottom: 10px;
  margin-top: 20px;
}

.youtube100,
.youtube {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
}
.youtube100 iframe,
.youtube iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

@media only screen and (min-width: 680px) {
  .sp {
    display: none;
  }
  .pc {
    display: block;
  }
  #menu-btn {
    display: none;
  }
  body {
    font-size: 14px;
    line-height: 24px;
    font-family: "Noto Sans JP", sans-serif;
    font-weight: 400;
    font-style: normal;
    letter-spacing: 1px;
  }

  #main {
    width: 750px;
    float: left;
    margin-left: 0px;
    box-sizing: border-box;
    margin-right: 0px;
    padding-top: 0px;
  }

  #pan {
    height: 30px;
    line-height: 30px;
    margin-top: 60px;
  }

  #pan .inner {
    width: auto;
    margin-left:30px;
    padding: 0;
  }

  /*#contents {
    width: 1100px;
    margin: 0 auto;
    padding: 50px 0 50px 0;
  }*/

  #page-title {
    width: 100%;
    height: 300px;
    background-image: url(../images/bg_page.jpg);
    background-size: auto 100%;
    background-position: center;
    text-align: center;
    box-sizing: border-box;
    padding-top: 100px;
  }
  #page-title .title {
    font-size: 60px;
    line-height: 60px;
    color: #fff;
    font-weight: bold;
  }
  #page-title .slug {
    font-size: 18px;
    color: #fff;
    font-weight: bold;
    margin-top: 20px;
  }

  .youtube {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
  }

  .youtube iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .youtube100 {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
  }
  .youtube100 iframe,
  .youtube iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  #pan {
    position:fixed;
    margin: 0;
    padding: 0;
    top:13px;
    right:30px;
    z-index: 1500;
  }

  #pan span.home {
  background-image:none;
  padding-left:0;
}
}
</style>



<div id="top"></div>
<div id="header">
<div class="inner">
<div class="logo"><a href="/"><span>AI</span> SITERU？</a></div>
<?php get_template_part('partials/h-menu2'); ?>
</div>
</div>