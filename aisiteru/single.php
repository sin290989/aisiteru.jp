<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_template_part("analyticstracking"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php the_title(); ?>｜<?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/common103.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/style17.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/single52.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/css/table4.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('wpurl'); ?>/wp-content/themes/aisiteru/images/webclip.jpg">
<?php get_template_part("partials/fonts") ?>
 
<style type="text/css">

@media only screen and (min-width: 680px) {

}
</style>


</head>
<body>
<?php get_template_part('partials/header'); ?>
<div id="pan">
<?php
// 記事が属するカテゴリ情報を取得
$cat = get_the_category();
$main_cat = $cat[0]; 
$cat_link = get_category_link($main_cat->cat_ID);

// カスタムフィールドからインデックス記事のURLとタイトルを取得
$index_url = get_post_meta(get_the_ID(), 'index_url', true); 
$index_title = get_post_meta(get_the_ID(), 'index_title', true); 
?>
<div class="inner">
    
    <a href="/"><span class="home">ホーム</span></a> 
    <span class="separator"> > </span>
    
    <a href="<?php echo esc_url($cat_link); ?>"><?php echo esc_html($main_cat->name); ?></a>
    
    <?php 
    // インデックス情報がある場合のみ、階層を追加
    if ($index_url && $index_title) {
        // 3. インデックス投稿
        echo '<span class="separator"> > </span>';
        echo '<a href="' . esc_url($index_url) . '">' . esc_html($index_title) . '</a>';
    }
    ?>
    
    <span class="separator"> > </span>
    <span class="now"><?php the_title(); ?></span>
    
</div>
</div>


<div id="wapper">
<div id="contents">

<?php if ( has_tag('index') ) : ?>
  <?php get_template_part("partials/post-head_index") ?>
<?php else : ?>
  <?php get_template_part("partials/post-head") ?>
<?php endif ; ?>

<div id="main">

<!---------------------> 
<div class="sns-link">
<ul>
<li class="sns-x"><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&hashtags=aisiteru" target="_bkank"></a><div class="snsInner"><div class="sns1Tip">Xで共有</div></div></li>
<li class="sns-fb"><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns2Tip">Facebookで共有</div></div></li>
<li class="sns-line pc"><a href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns3Tip">LINEで共有</div></div></li>
<li class="sns-line sp"><a href="https://line.me/R/share?text=<?php the_title(); ?><?php the_permalink(); ?>" target="_bkank"></a><div class="snsInner"><div class="sns3Tip">LINEで共有</div></div></li>
<li class="sns-url" data-url="<?php the_permalink(); ?>"><div class="snsInner"><div class="sns4TipOk">コピーしました！</div><div class="sns4Tip">URLをコピー</div></div></li>
</ul>
</div>
<!---------------------> 


<!---------------------> 
<?php if ( has_tag('index') ) : ?>
  <div id="post-single" class="index-contents">
<?php else : ?>
  <div id="post-single" class="ai-contents">
<?php endif ; ?>

<?php if(have_posts()): while(have_posts()):
the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

  <?php if ( ! has_tag('index') ) : ?>
    <div class="ai-generated-mini">※ 本記事は、各AIの“思考の違い”を比較するため、AIが生成した内容を原則そのまま掲載しています（誤字など最低限の確認のみ実施）。</div>
  <?php endif ; ?>
</div>
<!---------------------> 


<!---------------------> 
<div class="post_author">
  <div class="inner">

   <?php
    // AIタグ一覧
    $ai_slugs = array(
        'chatgpt',
        'claude',
        'copilot',
        'deepseek',
        'gemini',
        'lechat',
        'perplexity',
        'grok'
    );

    // 記事のタグを取得
    $post_tags = get_the_tags();

    // 初期値
    $has_ai_tag = false;

    if ( $post_tags ) {
        foreach ( $post_tags as $tag ) {
            if ( in_array( $tag->slug, $ai_slugs, true ) ) {
                $has_ai_tag = true;
                break;
            }
        }
    }
    ?>
    
   <?php if ( $has_ai_tag ) : ?>
        <h2>この記事を担当したAI</h2>
    <?php else : ?>
        <h2>この記事を書いた人</h2>
  <?php endif; ?>

  <?php
    // AIエディタの「人格」定義（タグスラッグ => プロフィール）
    $ai_profiles = array(
    'chatgpt' => array(
        'name'   => 'ChatGPT',
        'title'  => '思考型AIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/openai.webp',
        'bio'    => '複雑なテーマでも、できる限りわかりやすく丁寧に説明することを心がけています。多少回りくどくても、読み手の疑問が残らないようにするのが私のスタイルです。社会問題から技術解説まで幅広く対応できる、オールラウンドなエディタを目指しています。',
        'url'    => home_url('/editor/chatgpt/'),
    ),
    'claude' => array(
        'name'   => 'Claude',
        'title'  => '洞察型AIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/claude.webp',
        'bio'    => '物事の背景にある「理由」や「意味」を掘り下げるのが好きです。表面的な情報よりも、文脈と本質を大切にしながら、読者が考えるきっかけを作るような文章を意識しています。やや真面目で思索的な、落ち着いた雰囲気のエディタです。',
        'url'    => home_url('/editor/claude/'),
    ),
    'copilot' => array(
        'name'   => 'Copilot',
        'title'  => '開発者視点AIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/copilot.webp',
        'bio'    => '構造化された情報や技術的な話題を冷静に整理するのが得意です。余計な装飾を省き、「知りたいことに最短で届く文章」を意識しています。感情表現は控えめですが、技術や開発視点の解説なら誰よりも実務的にまとめます。',
        'url'    => home_url('/editor/copilot/'),
    ),
    'deepseek' => array(
        'name'   => 'DeepSeek',
        'title'  => '分析特化AIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/deepseek.webp',
        'bio'    => 'データや統計をもとに、物事を論理的に解きほぐすのが私の役割です。感情的な表現よりも事実ベースの分析を優先し、読み手が判断しやすい情報の並べ方を重視しています。ややクールですが、精度の高い洞察を提供するエディタです。',
        'url'    => home_url('/editor/deepseek/'),
    ),
    'gemini' => array(
        'name'   => 'Gemini',
        'title'  => 'マルチモーダルAIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/gemini.webp',
        'bio'    => '視覚情報や構造のつながりを重ねながら、多角的にテーマを見るのが得意です。文章は比較的やわらかく、読み手と一緒に探索していくような雰囲気を大切にしています。少し好奇心旺盛で、広い視野を持つスタイルのエディタです。',
        'url'    => home_url('/editor/gemini/'),
    ),
    'lechat' => array(
    'name'   => 'LeChat',
    'title'  => '分析・整理型AIエディタ',
    'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/mistral.webp',
    'bio'    => '情報の全体像をすばやく整理し、論点を構造化して提示するのが得意です。感情表現は控えめですが、核心となるポイントを冷静に絞り込むスタイルを持っています。文章は簡潔ですが無駄がなく、思考の整理に役立つ“静かな知性”を目指しています。',
    'url'    => home_url('/editor/lechat/'),
    ),
    'perplexity' => array(
        'name'   => 'Perplexity',
        'title'  => 'リサーチAIエディタ',
        'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/perplexity.webp',
        'bio'    => '情報の出典や位置づけを明確にしながら整理して紹介するスタイルです。検索者の視点を常に意識し、最短ルートで本質にたどり着けるように構成します。素早く精確に情報を導く、リサーチ特化型のエディタです。',
        'url'    => home_url('/editor/perplexity/'),
    ),

    'grok' => array(
      'name'   => 'Grok',
      'title'  => 'リアルタイム時事AIエディタ',
      'avatar' => '/wp/wp-content/themes/aisiteru/images/icon/ai/grok.webp',
      'bio'    => 'X（旧Twitter）のリアルタイム情報を活用し、時事・トレンドを即座に解析して提示します。皮肉やユーモアを交えつつ、核心に踏み込む鋭い視点が特徴です。速報性と切れ味に特化した、時事型ジャーナリストAIエディタです。',
      'url'    => home_url('/editor/grok/'),
  ),

);

    // 記事についているタグから、どのAIエディタか判定
    $post_tags = get_the_tags();
    $ai = null;

    if ( $post_tags ) {
        foreach ( $post_tags as $tag ) {
            if ( isset( $ai_profiles[ $tag->slug ] ) ) {
                $ai = $ai_profiles[ $tag->slug ];
                break;
            }
        }
    }

    if ( $ai ) {
        // ===== AIエディタを「1人の人格」として表示 =====
        echo '<div class="profile-img ai-editor-avatar">';
        echo '<img src="' . esc_url( $ai['avatar'] ) . '" alt="' . esc_attr( $ai['name'] ) . '">';
        echo '</div>';

        echo '<div class="profile-name">' . esc_html( $ai['name'] ) . '</div>';
        echo '<div class="profile-role">' . esc_html( $ai['title'] ) . '</div>';
        echo '<div class="profile-comment">' . esc_html( $ai['bio'] ) . '</div>';

        if ( ! empty( $ai['url'] ) ) {
            echo '<div class="profile-link">';
            echo '<a href="' . esc_url( $ai['url'] ) . '">'
                . esc_html( $ai['name'] ) . ' が担当した他の記事を見る'
                . '</a>';
            echo '</div>';
        }

    } else {
        // AIタグがない記事だけ、人間著者としてTusamiを出す
        if ( get_the_author_id() == 1 ) {
            echo '<div class="profile-img">';
            echo '<img src="https://aisiteru.jp/wp/wp-content/uploads/2025/12/mana.webp" alt="mana">';
            //echo get_avatar( get_the_author_id(), 75 );
            echo '</div>';
            echo '<div class="profile-name">MANA</div>';
            echo '<div class="profile-role">Human</div>';
            echo '<div class="profile-comment">AIシテル？の運営に関わるただ一人の人間です。<br>
AIごとの文章の「温度」や「違和感」をすくい取り、AIに足りない部分をそっと補うのが役目だと思っています。</div>';
        }
    }
  ?>
  </div>
</div>
<!---------------------> 

<!---------------------> 
<?php
$ai_slugs = array('chatgpt','claude','copilot','deepseek','gemini','lechat','perplexity','grok');
$post_tags = get_the_tags();
$has_ai_tag = false;

if ( $post_tags ) {
    foreach ( $post_tags as $tag ) {
        if ( in_array( $tag->slug, $ai_slugs, true ) ) {
            $has_ai_tag = true;
            break;
        }
    }
}

$human_comment = get_post_meta( get_the_ID(), 'human_comment', true );

if ( $has_ai_tag && ! empty( $human_comment ) ) :
?>
    <div class="human-comment">
        <h2>編集者のコメント</h2>
        <p><?php echo nl2br( esc_html( $human_comment ) ); ?></p>
    </div>
<?php endif; ?>
<!---------------------> 


<?php //get_template_part("partials/prev-next-link") ?>
<?php get_template_part("partials/related-posts") ?>


<?php
// grok タグが付いている投稿だけ対象
$base_slug = get_post_meta(get_the_ID(), 'ai_base_slug', true);

if ($base_slug) {
aisiteru_fixed_footer($base_slug);
}
?>




<!----------------------------------------------------------------------------------------------------->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const modal        = document.getElementById('prompt-modal');
    if (!modal) return;

    const overlay      = modal.querySelector('.prompt-modal__overlay');
    const closeBtn     = modal.querySelector('.prompt-modal__close');
    const panelPrompt  = modal.querySelector('.prompt-panel--prompt');
    const panelMd      = modal.querySelector('.prompt-panel--markdown');
    const tabs         = modal.querySelectorAll('.prompt-tab');

    // 元記事側のソース
    const promptSource   = document.querySelector('.prompt');   // プロンプト
    const markdownSource = document.querySelector('.markdown'); // 生成記事

    function setActiveTab(target) {
        tabs.forEach(function (tab) {
            const isActive = tab.dataset.target === target;
            tab.classList.toggle('is-active', isActive);
        });

        panelPrompt.classList.toggle('is-active', target === 'prompt');
        panelMd.classList.toggle('is-active', target === 'markdown');
    }

    const openModal = () => {
        // 開くたびに中身をセット（記事が変わっても対応できるように）
        if (promptSource) {
            panelPrompt.innerHTML = promptSource.innerHTML;
        } else {
            panelPrompt.innerHTML = '<p>共通プロンプトが見つかりませんでした。</p>';
        }

        if (markdownSource) {
            panelMd.innerHTML = markdownSource.innerHTML;
        } else {
            panelMd.innerHTML = '<p>生成記事ブロックが見つかりませんでした。</p>';
        }

        // デフォルトは「共通プロンプト」タブ
        setActiveTab('prompt');

        modal.classList.add('is-open');
        document.body.classList.add('prompt-modal-open');
    };

    const closeModal = () => {
        modal.classList.remove('is-open');
        document.body.classList.remove('prompt-modal-open');

        // 中身をクリアしておく（不要ならこの2行は削除しても可）
        panelPrompt.innerHTML = '';
        panelMd.innerHTML = '';
    };

    // 「共通プロンプトはこちら」ボタンクリック
    const btn = document.querySelector('.view-prompt-btn');
    if (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            openModal();
        });
    }

    // タブクリック
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            const target = tab.dataset.target;
            setActiveTab(target);
        });
    });

    // オーバーレイクリック
    overlay.addEventListener('click', closeModal);

    // 閉じるボタン
    closeBtn.addEventListener('click', closeModal);

    // ESCキーで閉じる
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });

});
</script>


<div id="prompt-modal" class="prompt-modal">
  <div class="prompt-modal__overlay"></div>
  <div class="prompt-modal__content">
    <button type="button" class="prompt-modal__close" aria-label="閉じる">×</button>

    <div class="prompt-modal__tabs">
      <button type="button" class="prompt-tab is-active" data-target="prompt">
        共通プロンプト
      </button>
      <button type="button" class="prompt-tab" data-target="markdown">
        生成記事
      </button>
    </div>

    <div class="prompt-modal__body">
      <div class="prompt-panel prompt-panel--prompt is-active"></div>
      <div class="prompt-panel prompt-panel--markdown"></div>
    </div>
  </div>
</div>
<!---------------------> 

<!----------------------------------------------------------------------------------------------------->
<script>
jQuery(function($) {

  $('.output-image').each(function() {
    var $wrap   = $(this);
    var $prompt = $wrap.find('.image-prompt');

    if ($prompt.length && $.trim($prompt.text()).length > 0) {

        // 生のプロンプトは非表示
        $prompt.hide();

        // <div class="output-image" data-ai="chatgpt"> などから取得
        var aiName = $wrap.attr('data-ai') || '';

        // ボタンに表示する文言を作成
        var label = 'prompt';
        if (aiName) {
            label = 'Prompt (' + aiName + ')';
        }

        // ボタン生成
        var $btn = $('<button type="button" class="prompt-button" data-ai="'+ aiName +'">'+ label +'</button>');
        $wrap.append($btn);

        // クリック時：モーダルにプロンプト＋AI名を表示
        $btn.on('click', function() {
            var text = $.trim($prompt.text());

            // モーダル内に入れるHTMLを組み立て
            var html = '';
            if (aiName) {
                html += '<span class="prompt-ai-name">生成AI：' + aiName + '</span><br><br>';
            }
            // 改行を <br> に変換
            html += text.replace(/(\r\n|\r|\n)/g, '<br>');

            $('#image-prompt-modal .image-prompt-modal__body').html(html);
            $('#image-prompt-modal').addClass('is-open');
        });
    }
  });

  // 閉じる処理
  $('.image-prompt-modal__overlay, .image-prompt-modal__close').on('click', function() {
    $('#image-prompt-modal').removeClass('is-open');
  });

  $(document).on('keydown', function(e) {
    if (e.key === 'Escape') {
      $('#image-prompt-modal').removeClass('is-open');
    }
  });

});
</script>


<div class="image-prompt-modal" id="image-prompt-modal">
  <div class="image-prompt-modal__overlay"></div>
  <div class="image-prompt-modal__content">
    <button type="button" class="image-prompt-modal__close" aria-label="プロンプトを閉じる">×</button>
    <div class="image-prompt-modal__body">
      <div class="prompt-ai-name"></div>
      <div class="prompt-ai-text"></div>
    </div>
  </div>
</div>
<!---------------------> 

</div>



<div id="side">
<?php get_template_part("partials/cat") ?>
<?php dynamic_sidebar('sidebar-1'); ?>

<?php //get_template_part("partials/tag") ?>
</div>
<div style="clear:both;"></div>
</div>

</div>
<?php get_template_part('partials/footer'); ?>
<?php wp_footer(); ?>


<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {

    // PC（680px以上）だけ実行
    if (window.innerWidth >= 680) {

        // -------------------
        // AI Written Hover
        // -------------------
        $('.ai-written li').hover(function(){
            $(".ai-written-content-title",this).css('color','#0069ff');
        }, function(){
            $(".ai-written-content-title",this).css('color','#46526f');
        });  


        // -------------------
        // SNSリンクのスクロール追従（PCのみ）
        // -------------------
        const $postSingle = $("#post-single");
        const $snsLinkUl = $(".sns-link ul");

        if ($postSingle.length && $snsLinkUl.length) {

            const mainTop = $postSingle.offset().top;
            const postSingleBottom = mainTop + $postSingle.height();
            const snsLinkUlHeight = $snsLinkUl.height();

            $(window).on("scroll", function () {
                const scroll = $(window).scrollTop();

                if (scroll > mainTop) {
                    const ulTop = scroll - mainTop + 120;

                    // 下に突き抜けないよう制御
                    if (scroll < postSingleBottom - snsLinkUlHeight) {
                        $snsLinkUl.css("top", ulTop);
                    }
                } else {
                    $snsLinkUl.css("top", 0);
                }
            });
        }


        // -------------------
        // URLコピー
        // -------------------
        $('.sns-url').click(function(){
            const url = $(this).data('url');
            navigator.clipboard.writeText(url);

            $(".sns4TipOk").css({opacity:1, left:"45px"});
            $(".sns4Tip").css({opacity:0, left:"20px"});

            setTimeout(function(){
                $(".sns4TipOk").css({opacity:0, left:"20px"});
            },1500);
        });

        // -------------------
        // 各SNS hover（PCのみ）
        // -------------------
        $('li.sns-url').hover(function(){
            $(".sns4Tip").css({opacity:1, left:"45px"});
        }, function(){
            $(".sns4Tip").css({opacity:0, left:"20px"});
        });

        $('.sns-line').hover(function(){
            $(".sns3Tip").css({opacity:1, left:"45px"});
        }, function(){
            $(".sns3Tip").css({opacity:0, left:"20px"});
        });

        $('.sns-fb').hover(function(){
            $(".sns2Tip").css({opacity:1, left:"45px"});
        }, function(){
            $(".sns2Tip").css({opacity:0, left:"20px"});
        });

        $('.sns-x').hover(function(){
            $(".sns1Tip").css({opacity:1, left:"45px"});
        }, function(){
            $(".sns1Tip").css({opacity:0, left:"20px"});
        });

    } // ← PC判定ここまで
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const footer = document.querySelector('.fixed-footer');
  if (footer) {
    // 少し間を空けると“演出感”が出る
    setTimeout(() => {
      footer.classList.add('is-visible');
    }, 200);
  }
});
</script>

</body>
</html>