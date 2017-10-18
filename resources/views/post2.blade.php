<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<?php  error_reporting(1); ?>
<head>
    <title>{{$PostDetails->title}}</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../../magazine/style.css" media="screen" />
</head>
<body id="top">
<div id="network">
    <div class="center-wrapper">
        <div class="right">
            <div class="clearer">&nbsp;</div>
        </div>
        <div class="clearer">&nbsp;</div>
    </div>
</div>
<div id="site">
    <div class="center-wrapper">
        <div id="header">
            <div class="right" id="toolbar"> <a href="#"> <a href="#"><img src="img/icon-minus.gif" width="20" height="20" alt="" /></a> </div>
            <div class="clearer">&nbsp;</div>
            <div id="site-title">
                <h1><a href="http://127.0.0.1:8000/">Amatör Yorum</a> <span> / Haber</span></h1>
            </div>
            <div id="navigation">
                <div id="main-nav">
                    <div class="clearer">&nbsp;</div>
                </div>
                <div id="sub-nav">

                    <div class="clearer">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="main" id="main-three-columns">
            <div class="left" id="main-left">
                <div class="post">
                    <div class="post-title">
                        <h2>{{$PostDetails->title}}</h2></div>
                       &nbsp
                    <div class="post-body">
                        <p><a href="#"><img src="/storage/{{ $PostDetails->image}}" height="320" width="600"  style="border: double #0216ff" alt=""></a></p>
                        <p> {!! $PostDetails->body !!} <p>
                        <h5><p><span class="meta"> {{ $AuthorDetails->name}} Tarafından {{ $PostDetails->created_at}} Tarihinde yazıldı</span></p></h5>

                    </div>
                </div>
                      <hr>
                          <!-- Comment Show buraya gelecek -->

                             <!-- <img class="media-object" src="http://placehold.it/64x64" alt=""> -->
                        </a>
                        <div class="media-body">
                            @foreach($comments as $commentw)
                            {
                            <h4 class="media-heading">{{$commentw->comment_name}}
                             <small>{{$commentw->created_at}}</small>
                            </h4>
                            {{$commentw->comment_text}}
                        </div>
                            }
                        @endforeach
                    <form action="/PostComment" method="post">
                        <input name="makale_id" type="hidden" value="{{ $PostDetails['makale_id']}}"><input/>
                        <input name="comment_title" type="text" class="form-control" id="comment_title" placeholder="İsminiz"></input>
                        <input name="comment_text" type="text" class="form-control" id="comment_text" placeholder="Yorumunuzu Yazın" style="height:100px"></input>
                        <input type="submit" value="Submit">
                        {{ csrf_field() }}
                    </form>
                </div>
                       <hr>
                <!-- Comment Show -->
                 &nbsp; Buraya yorumlar gelecek
                <hr>
                &nbsp;

                <left><h2><p>En çok beğenilenler</p></h2></left>
                <div class="col2 center">
                    <div class="column-content">
                        <div class="post">
                            <!-- en cok beğenilenler rating pluging -->
                            @foreach($Latests as $Latest)
                            <a href="#"><img src="/storage/{{ $Latest->image}}" height="100" width="250" alt="" class="bordered" /></a>
                            <h5><a href="#">{{ $Latest->title}}</a></h5>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="clearer">&nbsp;</div>
            </div>
            <div class="right sidebar" id="sidebar-2">
                <div class="section">
                    <div class="section-title">
                        <div class="left">En Yeni Yazılar</div>
                        <div class="right"><img src="../../magazine/img/icon-time.gif" width="14" height="14" alt="" /></div>
                        <div class="clearer">&nbsp;</div>
                    </div>
                    <div class="section-content">
                        <ul class="nice-list">
                            <!-- en yeni yazilar bolumu -->
                           @foreach($Latests as $Latest) <li>
                                <div class="left">
                                <p><a href="#"><img src="/storage/{{$Latest->image}}"  height="100" width="190" alt="" class="bordered" /></a></p>
                                   <p> {{$Latest->title}} </p>

                                </div>
                                <div class="right">{{$Latest->created_at}}</div>
                                <div class="clearer">&nbsp;</div>
                            </li>
                          @endforeach


                        </ul>
                    </div>
                </div>
                <div class="section">
                    <div class="section-title">Most Viewed</div>
                    <div class="section-content">
                        <ul class="nice-list">
                            <li><span class="quiet">1.</span> <a href="#">Integer diam elit</a></li>
                            <li><span class="quiet">2.</span> <a href="#">Condimentum ac semper</a></li>
                            <li><span class="quiet">3.</span> <a href="#">Tincidunt non diam</a></li>
                            <li><span class="quiet">4.</span> <a href="#">Ut congue rutrum</a></li>
                            <li><span class="quiet">5.</span> <a href="#">Enim dapibus venenatis</a></li>
                            <li><span class="quiet">6.</span> <a href="#">Cras hendrerit iaculis</a></li>
                            <li><span class="quiet">7.</span> <a href="#">Duis mi lectus</a></li>
                            <li><span class="quiet">8.</span> <a href="#">Eleifend nec tortor</a></li>
                            <li><a href="#" class="more">Browse all &#187;</a></li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
            <div class="clearer">&nbsp;</div>
        </div>
            </div>
            <div class="clearer">&nbsp;</div>
        </div>
    </div>
</div>



        <div id="footer">
            <div class="left">&copy; 2017 Amator Yorum <span class="text-separator">&rarr;</span> </div>
            <div class="right"><a href="http://templates.arcsin.se/">Website template</a> by <a href="http://arcsin.se/">Exertion IT</a></div>
            <div class="clearer">&nbsp;</div>
        </div>
    </div>
</div>
</body>
</html>
