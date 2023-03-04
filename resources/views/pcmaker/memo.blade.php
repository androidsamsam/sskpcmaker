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
    <main>
        @foreach ($pcmakers as $pcmaker) 
<div class = "memo-img"><img class="memo-img-pic" src="{{ $pcmakers ->image}}"></img></a></div>
        <div class = "memo-text">
            <p>「フロンティア」とは、言葉の意味としては、新しい領域や未開拓地、あるいは未知の分野などを指します。</p>
            <p> この言葉は、様々な分野で用いられ、例えば、科学技術の分野での新しい発見や、ビジネスの分野での新しい市場の開拓、</p>
            <p> あるいは社会的な問題に対する新しいアプローチなど、広い意味での「未知の領域」を指します。</p>
        </div>
       <!--- @if (session('err_msg'))
          <p class = "text-danger">
            {{session('err_msg') }}
          </p>
          @endif  -->
        <div class = "memo-table">
            <table border ="1">
                <tr>
                  <th>CPU</th>
                  <td>{{ $pcmaker->cpu}}</td>
                </tr>
                <tr>
                  <th>GPU</th>
                  <td>{{ $pcmaker->gpu}}</td>
                </tr>
                <tr>
                  <th>メモリ</th>
                  <td>{{ $pcmaker->memory}}GB</td>
                </tr>
                <tr>
                  <th>ストレージ</th>
                  <td>{{ $pcmaker->storage}}</td>
                </tr>
                <tr>
                  <th>電源</th>
                  <td>{{ $pcmaker->power}}</td>
                </tr>
                <tr>
                  <th>価格</th>
                  <td>{{ $pcmaker->price}}</td>
                </tr>
                <tr>
                  <th>セール情報</th>
                  <td>{{ $pcmaker->campaign}}</td>
                </tr>
              </table> 
        </div>
        @endforeach
    </main>
    </body>
<footer>
@include('footer')
</footer>
</html>