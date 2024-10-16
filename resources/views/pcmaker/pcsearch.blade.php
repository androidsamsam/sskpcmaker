@extends('layout')
@section('title', 'ゲーミングPC検索')
@section('searchside')
<form method="POST" action="/pcpc">
    @csrf

    <div class="pcmakertype">
        <p><input type="submit" value="絞り込み検索" class="picbtn"></p>
        <label class="tate"><input type="checkbox" name="campaign[]" value="osusume">必見pig太朗おすすめモデル</label>
        <p class="searchtitlebrand">ブランド</p>
        <label class="tate"><input type="checkbox" name="brand[]" value="mousecomputer">mousecomputer</label>
        <label class="tate"><input type="checkbox" name="brand[]" value="OMEN">OMEN</label>
        <label class="tate"><input type="checkbox" name="brand[]" value="FRONTIER">FRONTIER</label>
        <label class="tate"><input type="checkbox" name="brand[]" value="GALLERIA">GALLERIA</label>
        <label class="tate"><input type="checkbox" name="brand[]" value="PCKOUBO">パソコン工房</label>
    </div>

    <div class="intelcputype">
        <p class="searchtitlecpu">CPU</p>
        <span>Intel製CPU</span>
        <label class="tate"><input type="checkbox" name="cpu[]" value="core-i5-14400">Core i5-14400</label>
        <label class="tate"><input type="checkbox" name="cpu[]" value="core-i5-14400F">Core i5-14400F</label>
        <label class="tate"><input type="checkbox" name="cpu[]" value="core-i7-14700F">Core i7-14700F</label>
        <label class="tate"><input type="checkbox" name="cpu[]" value="core-i7-14700K">Core i7-14700K</label>
        <label class="tate"><input type="checkbox" name="cpu[]" value="core-i9-14900">Core i9-14900</label>
    </div>  
    
    <div class="nvidiagputype">
        <p class="searchtitlegpu">GPU</p>
        <span>NVIDIA</span>
        <label class="tate"><input type="checkbox" name="gpu[]" value="RTX4060">RTX4060</label>
        <label class="tate"><input type="checkbox" name="gpu[]" value="RTX4070">RTX4070</label>
        <label class="tate"><input type="checkbox" name="gpu[]" value="RTX4080">RTX4080</label>
        <label class="tate"><input type="checkbox" name="gpu[]" value="RX6600">RX6600</label>
    </div>
    
    <div class="memorytype">
        <p class="searchtitlememory">メモリ</p>
        <label class="tate"><input type="checkbox" name="memory[]" value="8">8GB</label>
        <label class="tate"><input type="checkbox" name="memory[]" value="16">16GB</label>
        <label class="tate"><input type="checkbox" name="memory[]" value="32">32GB</label>
        <label class="tate"><input type="checkbox" name="memory[]" value="64">64GB</label>
    </div>

    <p><input type="submit" value="絞り込み検索" class="picbtn"></p>
</form>

<ul style="list-style: none;" class="icon-nav">
    <li><a href="https://twitter.com/home" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/shinsyoku.jun/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
    <li><a href="#"><i class="fa-brands fa-facebook" target="_blank"></i></a></li>
</ul>
@endsection
