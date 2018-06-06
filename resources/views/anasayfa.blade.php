@extends('layouts.anasablon') @section('icerik')
<!--Sayfa Başlangıcı-->
<div class="col-lg-8">
    <article>
        <!-- Flexslider Başlangıç -->
        <div class="post-slider">
            <div id="post-slider" class="postslider flexslider">
                <ul class="slides">
                    <li>
                        <img src="img/dummies/blog/img1.jpg" alt="" />
                    </li>
                    <li>
                        <img src="img/dummies/blog/img2.jpg" alt="" />
                    </li>
                    <li>
                        <img src="img/dummies/blog/img3.jpg" alt="" />
                    </li>
                </ul>
            </div>
        </div>
        <!-- Flexslider Bitiş -->
    </article>
    @foreach($makaleler as $makale)
    <article>
        <div class="post-quote">
            <div class="post-heading">
                <h3><a href="yayinlanan-makale/{{$makale->slug}}">{{$makale->baslik}}</a></h3>
            </div>
        </div>
        <div class="bottom-article">
            <ul class="meta-post">
                <li><i class="fa fa-calendar"></i><a href="#"> {{$makale->created_at->formatLocalized('%A %d %B %Y')}}</a></li>
                <li><i class="fa fa-user"></i><a href="#"> {{$makale->user->name}}</a></li>
                <li><i class="fa fa-folder-open"></i><a href="#"> {{$makale->kategori->baslik}}</a></li>
            </ul>
        </div>
    </article>
    @endforeach

    <!-- Sayfalama Başlangıç -->
    <div id="pagination">
        {{$makaleler->links()}}
    </div>
    <!-- Sayfalama Bitiş -->
</div>
<!--Sayfa Bitişi-->

<!--Yan Menü Başlangıç-->
<div class="col-lg-4">
    <aside class="right-sidebar">
        <div class="widget">
            <form role="form">
                <div class="form-group">
                    <input type="text" class="form-control" id="s" placeholder="Ne Aramıştınız...">
                </div>
            </form>
        </div>
        <div class="widget">
            <h5 class="widgetheading">Kategoriler</h5>
            <ul class="cat">
                @foreach(App\Kategori::all() as $kategori)
                <li><i class="fa fa-angle-right"></i><a href="/yayinlanan-kategori/{{$kategori->slug}}">{{$kategori->baslik}}</a><span> (20)</span></li>
                @endforeach
            </ul>
        </div>
        <div class="widget">
            <h5 class="widgetheading">Son Paylaşımlar</h5>
            <ul class="recent">
                <li>
                    <img src="img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
                    <h6><a href="#">Lorem ipsum dolor sit</a></h6>
                    <p>
                        Mazim alienum appellantur eu cu ullum officiis pro pri
                    </p>
                </li>
                <li>
                    <a href="#"><img src="img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
                    <h6><a href="#">Maiorum ponderum eum</a></h6>
                    <p>
                        Mazim alienum appellantur eu cu ullum officiis pro pri
                    </p>
                </li>
                <li>
                    <a href="#"><img src="img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
                    <h6><a href="#">Et mei iusto dolorum</a></h6>
                    <p>
                        Mazim alienum appellantur eu cu ullum officiis pro pri
                    </p>
                </li>
            </ul>
        </div>
        <div class="widget">
            <h5 class="widgetheading">Etiketler</h5>
            <ul class="tags">
                <li><a href="#">Sağlıklı Beslenme</a></li>
                <li><a href="#">Sağlığımıza Dikkat Edelim</a></li>
                <li><a href="#">Sağlık Hakkında Herşey</a></li>
            </ul>
        </div>
    </aside>
</div>
<!--Yan Menü Biriş-->
@endsection