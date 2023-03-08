       @extends('layout')
       @section('title','ゲーミングPC検索')
       @section('searchside')
         <form method="POST" action= "/pcpc">
         @csrf

            <div class="pcmakertype">
            <p><input type="submit" value="絞り込み検索" class = "picbtn"></p>
            <label class="tate"><input type="checkbox" name = "campaign[]" value="SallNow Click!!">セール中商品ピックアップ！</label>
            <p class ="searchtitlebrand">ブランド</p>
            <label class="tate"><input type="checkbox" name = "brand[]" value="OMEN">OMEN</label>
            <label class="tate"></label><input type="checkbox" name = "brand[]" value="FRONTIER">FRONTIER</label>
            <label class="tate"></label><input type="checkbox" name = "brand[]" value="GALLERIA">GALLERIA</label>
            <label class="tate"><input type="checkbox" name = "brand[]" value="Alienware">Alienware</label>
             </div>
            <div class="intelcputype">
                <p class ="searchtitlecpu">CPU</p>
                <span>Intel製CPU</span>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i5-12400">core-i5-12400</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i5-12400F">core-i5-12400F</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i5-13400F">core-i5-13400F</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i5-13600KF">core-i5-13600KF</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i5-13600KF">core-i5-13600KF</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i7-11700">core-i7-11700</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i7-12700">core-i7-12700</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i7-12700F">core-i7-12700F</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i7-12700K">core-i7-12700K</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i7-13700F">core-i7-13700F</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i7-13700K">core-i7-13700K</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i7-13700KF">core-i7-13700KF</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ccore-i9-11900K">core-i9-11900K</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i9-12900K">core-i9-12900K</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i9-12900KF">core-i9-12900KF</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i9-13900KF">core-i9-13900KF</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="core-i9-13900F">core-i9-13900F</label></br></br>
                <Sspan>AMD製CPU</span>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-5-3500">ryzen-5-3500</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-5-4500">ryzen-5-4500</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-5-5600X">ryzen-5-5600X</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-5-7600">ryzen-5-7600</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-5-7600X">ryzen-5-7600X</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-7-5700X">ryzen-7-5700X</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-7-5800">ryzen-7-5800</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-7-5800X">ryzen-7-5800X</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-7-7700">ryzen-7-7700</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-7-7700X">ryzen-7-7700X</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-9-5900">ryzen-9-5900</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-9-5900X">ryzen-9-5900X</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-9-7900X">ryzen-9-7900X</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-9-5950X">ryzen-9-5950X</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-9-7900">ryzen-9-7900</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-9-7900X">ryzen-9-7900X</label>
                <label class="tate"></label><input type="checkbox" name = "cpu[]" value="ryzen-9-7950X">ryzen-9-7950X</label>
            </div>  
            <div class="nvidiagputype">
                <p class ="searchtitlegpu">GPU</p>
                <span>GTX & RTX30シリーズ</span>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="GTX1650">GTX1650</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="GTX1660SUPER">GTX1660SUPER</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="GTX1660Ti">GTX1660Ti</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="rtx3050">RTX3050</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="rtx3060">RTX3060</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="rtx3060Ti">RTX3060Ti</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="rtx3070">RTX3070</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="rtx3070Ti">RTX3070Ti</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="rtx3080">RTX3080</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="rtx3080Ti">RTX3080Ti</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="rtx3090">RTX3090</label></br></br>
                <span>最新RTX40シリーズ</span>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RTX4070">RTX4070</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RTX4070Ti">RTX4070Ti</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RTX4080">RTX4080</label>               
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RTX4090">RTX4090</label></br></br>
                <Sspan>RX6000シリーズ</span>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RX6500XT">RX6500XT</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RX6600">RX6600</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RX6600XT">RX6600XT</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RX6650XT">RX6650XT</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RX6700XT">RX6700XT</label>     
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RX6750XT">RX6750XT</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RX6900XT">RX6900XT</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RX6950XT">RX6950XT</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RX7900XT">RX7900XT</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="RX7900XTX">RX7900XTX</label></br></br>             
                <Sspan>その他</span>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="ArcA750">ArcA750</label>
                <label class="tate"></label><input type="checkbox" name = "gpu[]" value="ArcA770">ArcA770</label>               
        
            </div>
            <div class="memorytype">
                <p class ="searchtitlememory">メモリ</p>
                <label class="tate"></label><input type="checkbox" name = "memory[]" value="8">8GB</label>
                <label class="tate"></label><input type="checkbox" name = "memory[]" value="16">16GB</label>
                <label class="tate"></label><input type="checkbox" name = "memory[]" value="32">32GB</label>
                <label class="tate"></label><input type="checkbox" name = "memory[]" value="64">64GB</label>
            </div>
            <p><input type="submit" value="絞り込み検索" class = "picbtn"></p>
             </form>
             <ul style="list-style: none;" class="icon-nav">
        <li><a href="https://twitter.com/home" target=_blank><i class="fa-brands fa-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/shinsyoku.jun/" target=_blank><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-facebook" target=_blank></i></a></li>
             </ul>
            </body>   
        @endsection


       