<!--メイン画面-->
<!DOCTYPE html>
<html lang="ja">
    <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-238597756-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-238597756-1');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1201782274406741"
     crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="description" conntent="ゲーミングPCを検索">
        <meta name="viewport" content="width=device-width, initiial-scale=1">
        <meta name="description" content="OMEN、GALLERIA、FRONTIER、AlienwareのゲーミングPCデスクトップを横断的に比較・検索できるサイトです。セール情報も確認できるので、ゲーミングパソコンをこれから探す人にオススメのサイトです。" />
        <meta name="keywords" content="ゲーミングPC 比較,ゲーミングPC 検索,ゲーミングパソコン 検索,ゲーミングパソコン 比較,ゲーミングPC おすすめ">
    <!--css-->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" hrref="http://unpkg.com/ress/dist/ress.min.css">
    <script src="https://kit.fontawesome.com/37671d8671.js" crossorigin="anonymous"></script>
    <script src="/js/app.js" defer></script>
    <link rel="shortcut icon" href="https://storage.googleapis.com/pcsearch.net/favicon.png">
    </head>
    <header>
        @include('header')
        <script type="text/javascript" language="javascript">
    var vc_pid = "890881839";
   </script><script type="text/javascript" src="//aml.valuecommerce.com/vcdal.js" async></script>
    </header>
    <body>
    <a href="{{url('/memomemo')}}"> </a>
    <div class="search-contents wrapper">
        <aside class="searchpro">
        @yield('searchside')
        </aside>
        <div class="search-item">
        @foreach ($pcmakers as $pcmaker) 
        <div class = "block">
        <ul style="list-style: none;", class = "item-list">
            <li><a class = "pctitle">{{ $pcmaker->product}}</a><a href ="/pcpc/{{ $pcmaker->id }}" target=_blank><div class = "memo-icon"><i>おすすめポイント！</i></div></a></li>
            <!--<li><div class = "sallbt"><a href = "{{ $pcmaker->campaignurl}}" target=_blank>{{$pcmaker->campaign}}</a></div></li>-->
            <li><a href = "{{ $pcmaker->afurl}}" target=_blank><img class="pclistpic" src="{{ $pcmaker->image}}"></img></a></li>
            <li><a>ブランド：{{ $pcmaker->pcmaker}}</a></li>
            <li><a>CPU：{{ $pcmaker->cpu}}</a></li>
            <li><a>GPU：{{ $pcmaker->gpu}}</a></li>
            <li><a>メモリ：{{ $pcmaker->memory}}</a>GB</li>
            <li><a>価格：{{ $pcmaker->price}}</a>円</li>        
            <l1><div class = "buybt"><a href="{{ $pcmaker->afurl}}" target=_blank>公式サイトはこちら</div></li>
        </a>
        </ul>
        </div>
        @endforeach
        </div>
    </div>
     <!--  <section class ="topic-sec">
    <p class= "toic-text">↓各種ブランドまとめ情報・解説記事一覧↓</p>
        <div class = "topic-all">
             <a href = "https://onikari.com/omen/" class = "topica"><img src ="https://onikari.com/wp-content/uploads/2022/08/OMEN2.gif"  class ="topic"></a>
             <a href = "https://onikari.com/frontier_gamingpc/" class = "topica"><img src ="https://onikari.com/wp-content/uploads/2022/08/frontier2.gif"  class ="topic"></a>
             <a href = "https://onikari.com/superdesk1/" class = "topica"><img src ="https://onikari.com/wp-content/uploads/2023/01/alienware.gif"  class ="topic"></a>
             <a href = "https://onikari.com/" class = "topica"><img src ="https://onikari.com/wp-content/uploads/2022/07/logo-2.png"  class ="topic"></a>
             <a href = "https://onikari.com/ssk/" class = "topica"><img src ="https://onikari.com/ssk/wp-content/uploads/2022/12/ssk%E3%83%98%E3%83%83%E3%83%80%E3%83%BC2.png"  class ="topic"></a>
            </div>

    </section>-->
    <!-- Rakuten Automate starts here -->
<script type="text/javascript">
    var _rakuten_automate = {u1: "", snippetURL: "https://automate-frontend.linksynergy.com/minified_logic.js", automateURL: "https://automate.linksynergy.com", widgetKey: "e3KtF5dgPXHUzLC69cShExwcbVVWATAT", aelJS: null, useDefaultAEL: false, loaded: false, events: [] };var ael=window.addEventListener;window.addEventListener=function(a,b,c,d){"click"!==a&&_rakuten_automate.useDefaultAEL?ael(a,b,c):_rakuten_automate.events.push({type:a,handler:b,capture:c,rakuten:d})};_rakuten_automate.links={};var httpRequest=new XMLHttpRequest;httpRequest.open("GET",_rakuten_automate.snippetURL,!0);httpRequest.timeout=5E3;httpRequest.ontimeout=function(){if(!_rakuten_automate.loaded){for(i=0;i<_rakuten_automate.events.length;i++){var a=_rakuten_automate.events[i];ael(a.type,a.handler,a.capture)}_rakuten_automate.useDefaultAEL=!0}};httpRequest.onreadystatechange=function(){httpRequest.readyState===XMLHttpRequest.DONE&&200===httpRequest.status&&(eval(httpRequest.responseText),_rakuten_automate.run(ael))};httpRequest.send(null);
</script>
<!-- Rakuten Automate ends here -->

</body>
<footer>
@include('footer')
</footer>
</html>