<style type="text/css">
ul.post-index h2,
ul.post-index h3,
#side h2,
ul.catList li a,
ul.aiList li a{
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: 600;
    font-style: normal; 
}
#side .widget h2::before,
#side h2.catTitle::before,
#side h2.aiTitle::before,
h2#related::before{
    font-family: 'Noto Sans JP', sans-serif;
    font-weight: 900;
    font-style: normal; 
}    

/* side
================================================================================================ */
#side{
    margin:0;
    padding:0 0 50px 0;
}
#side h2{
    padding:0;
    font-weight:bold;
    margin-bottom:4px;
    margin-top:30px;
    border-radius:3px;
    font-size:12px;
}
#side h2.catTitle,
#side h2.aiTitle{
    text-align:left;
    margin-left:30px;
}
#side h2.catTitle{
    margin-top:0px;
}
#side h2.aiTitle{
    margin-top:50px;
}
#side h2.catTitle::before,
#side h2.aiTitle::before{
    white-space:pre;
    font-size:24px;
    margin-right:15px;
    letter-spacing:1px;
    color:#031b4e;
}
#side h2.catTitle::before{
    content:'CATEGORY'; 
}
#side h2.aiTitle::before{
    content:'AI'; 
}
#side ul.catList,
#side ul.aiList{
    margin:0 20px;
    border-radius:5px;
    overflow:hidden;
    background-color:#FFFFFF;
}
#side ul.catList li a,
#side ul.aiList li a{
    text-decoration:none;
    background-image:url(/wp/wp-content/themes/aisiteru/images/icon/arrow.png);
    background-position:right 20px center;
    background-size:auto 9px;
    background-repeat:no-repeat;
    display:block;
    height:42px;
	line-height:42px;
	font-size:14px;
    padding-left:15px;
    transition-duration:0.3s;
    box-sizing: border-box;
}
#side ul.catList li ul li a,
#side ul.aiList li ul li a{
    padding-left:50px;
    font-size:14px;
    height:42px;
    line-height:42px;
    border-bottom:solid 1px #f7f8f8;
    border-top:none;
    box-sizing: border-box;
}
#side ul.catList li,
#side ul.aiList li{
border-bottom:solid 1px #f7f8f8;
box-sizing: border-box;
}

#side ul.catList li:last-child,
#side ul.aiList li:last-child{
border:none;
}



#side span.chatgpt,
#side span.gemini,
#side span.copilot,
#side span.claude,
#side span.lechat,
#side span.deepseek,
#side span.perplexity,
#side span.grok {
    padding-left: 30px;
background-position: left center;
  background-repeat: no-repeat;
  background-size: 20px auto;
}

#side span.chatgpt{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/openai.webp");
}
#side span.gemini{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/gemini.webp");
}
#side span.copilot{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/copilot.webp");
}
#side span.claude{
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/claude.webp");
}
#side span.lechat {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/mistral.webp");
}
#side span.deepseek {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/deepseek.webp");
}
#side span.perplexity {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/perplexity.webp");
}
#side span.grok {
  background-image: url("/wp/wp-content/themes/aisiteru/images/icon/ai/grok.webp");
}
/* PC */
@media only screen and (min-width: 680px) {

#side{
    width:300px;
    float:right;
    padding:0;
}
#side h2.catTitle,
#side h2.aiTitle{
    margin-left:0px;
}
#side h2.aiTitle{
    margin-top:60px;
}
#side h2.catTitle{
    margin-top:0;
}
#side h2.aiTitle::before{
    content:' AI';
}
#side ul.catList,
#side ul.aiList{
    border:none;
}
#side ul.catList li a,
#side ul.aiList li a{
    font-size:14px;
    background-size:auto 8px;
    background-image:url(/wp/wp-content/themes/aisiteru/images/icon/arrow_bk.png);
}
#side ul.aiList li a:hover,
#side ul.catList li a:hover{
    color:#0069ff;
    background-position:right 15px center;
}
#side ul.aiList li ul li a,
#side ul.catList li ul li a{
    font-size:12px;
}
#side ul.aiList,
#side ul.catList{
    margin:0;
}

}
</style>

<?php if ( ! wp_is_mobile() ) : ?>
<script type="text/javascript">
jQuery(function ($) {
    $('#side ul.wpp-list li').hover(
        function(){
            $(".wpp-views .wpp-meta span.wpp-views", this).css('color','#FF0000');
            $("img.wpp-thumbnail", this).css('transform','scale(1.1)');
        },
        function(){
            $(".wpp-views .wpp-meta span.wpp-views", this).css('color','#46526f');
            $("img.wpp-thumbnail", this).css('transform','scale(1)');
        }
    );
});
</script>
<?php endif; ?>


<?php
echo '<h2 class="catTitle">カテゴリ</h2>';
echo '<ul class="catList">';
echo '<li><a href="/category/prediction/">AI予測・時事</a></li>';
echo '<li><a href="/category/regional/">地域・社会</a></li>';
echo '<li><a href="/category/sports/">スポーツ・格闘技</a></li>';
echo '<li><a href="/category/business/">ビジネス・キャリア</a></li>';
echo '<li><a href="/category/culture/">創作・エンタメ</a></li>';
echo '<li><a href="/category/life/">実用・ライフ</a></li>';
echo '<li><a href="/category/technology/">技術・倫理</a></li>';
echo '<li><a href="/category/history/">歴史・ミステリー</a></li>';
echo '</ul>';
?>

<?php
echo '<h2 class="aiTitle">生成AI</h2>';
echo '<ul class="aiList">';
echo '<li><a href="/editor/chatgpt/"><span class="chatgpt">ChatGPT</span></a></li>';
echo '<li><a href="/editor/gemini/"><span class="gemini">Gemini</span></a></li>';
echo '<li><a href="/editor/copilot/"><span class="copilot">Copilot</span></a></li>';
echo '<li><a href="/editor/grok/"><span class="grok">Grok</span></a></li>';
echo '<li><a href="/editor/claude/"><span class="claude">Claude</span></a></li>';
echo '<li><a href="/editor/perplexity/"><span class="perplexity">Perplexity</span></a></li>';
echo '<li><a href="/editor/deepseek/"><span class="deepseek">DeepSeek</span></a></li>';
echo '<li><a href="/editor/lechat/"><span class="lechat">LeChat</span></a></li>';
echo '</ul>';
?>