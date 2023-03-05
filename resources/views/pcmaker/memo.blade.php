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
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="description" conntent="ゲーミングPCを検索">
        <meta name="viewport" content="width=device-width, initiial-scale=1">
    <!--css-->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" hrref="http://unpkg.com/ress/dist/ress.min.css">
    <script src="https://kit.fontawesome.com/37671d8671.js" crossorigin="anonymous"></script>
    <script src="/js/app.js" defer></script>
    </head>
    <header>
        @include('header')
    </header>
    <body>
<div class = "memo-img"><img class="memo-img-pic" src="{{ $pcmakers ->image}}"></img></a></div>
        <div class = "memo-text">
            <p>----------------------工事中--------------------------------------</p>
            <p> ----------------------工事中--------------------------------------</p>
            <p> ----------------------工事中--------------------------------------</p>
        </div>
        <div class = "memo-table">
            <table border ="1">
                <tr>
                  <th>CPU</th>
                  <td>{{ $pcmakers->cpu}}</td>
                </tr>
                <tr>
                  <th>GPU</th>
                  <td>{{ $pcmakers->gpu}}</td>
                </tr>
                <tr>
                  <th>メモリ</th>
                  <td>{{ $pcmakers->memory}}GB</td>
                </tr>
                <tr>
                  <th>ストレージ</th>
                  <td>{{ $pcmakers->storage}}</td>
                </tr>
                <tr>
                  <th>電源</th>
                  <td>{{ $pcmakers->power}}</td>
                </tr>
                <tr>
                  <th>価格</th>
                  <td>{{ $pcmakers->price}}円</td>
                </tr>
                <tr>
                  <th>セール情報</th>
                  <td><a href = "{{ $pcmakers->campaignurl}}" target=_blank>{{ $pcmakers->campaign_content}}</a></td>
                </tr>
              </table> 
        </div>
    </main>
    </body>
<footer>
@include('footer')
</footer>
</html>