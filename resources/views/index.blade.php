<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="anthor" content="Hallmader">
    <meta name="description" content="bilibili是国内知名的视频弹幕网站，这里有最及时的动漫新番，最棒的ACG氛围，最有创意的Up主。大家可以在这里找到许多欢乐。">
    <meta name="keywords" content="B站,弹幕,字幕,AMV,MAD,MTV,ANIME,动漫,动漫音乐,游戏,游戏解说,ACG,galgame,动画,番组,新番,初音,洛天依,vocaloid">
    <title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ  乾杯~  - bilibili</title>
    <link rel="shortcut icon" href="http://static.hdslb.com/images/favicon.ico">
    <link rel="stylesheet" href="stylesheets/screen.css">
</head>

<body>
    <!--顶部信息-->
    <header class="navbar">
        <div class="navbar-top-mask">
            <div class="mask-blur"></div>
            <div class="mask-wrap"></div>
        </div>
        <div class="inner">
            <nav class="navbar-top">
                <ul class="navbar-top-list">
                    <li>
                        <a href="javascript:;">主站</a>
                    </li>

                    <li>
                        <a href="javascript:;">论坛</a>
                    </li>

                    <li>
                        <a href="javascript:;">商城</a>
                    </li>

                </ul>
                <div class="inner-right">
                    <ul>
                        <li class="login">
                            <a href="javascript:;">登录<span>|</span>注册</a>
                        </li>
                        <li class="contribute">
                            <a href="javascript:;">投稿</a>
                            <ul class="contribute-panel" id="contribute-panel">
                                <li>
                                    <span class="contribute-icon1"></span>
                                    <a href="javascript:;">视频投稿</a>
                                </li>
                                <li>
                                    <span class="contribute-icon2"></span>
                                    <a href="javascript:;">投稿管理</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="search">
                <form action="">
                    <input type="text" placeholder="尻夫♂的爱">
                    <button></button>
                </form>
                <div class="ranking">
                    <a href="javascript:;">排行榜</a>
                </div>
            </div>

            <div class="header-title-hoverbox">
                <a href="/" class="logo" style="background-image: url(&quot;http://i0.hdslb.com/bfs/archive/3e3d17f3a30f49ae1716a595fed12b621e19ab41.png&quot;);"></a>
            </div>
            <a class="header-title">拜年祭预告抢先看！</a>
            <nav class="kind-list">
                <ul class="navlist-box">
                    <li class="home">
                        <a href="/">首页</a>
                    </li>
                    @foreach($typeList as $type)
                        <li class="list-panel">
                            <i>203</i>
                            <a href="{{ $type->link }}">{{ $type->name }}</a>
                            <ul class="childlist-box">
                            @foreach($tList as $tlist)
                                @if($tlist->tid == $type->id)
                                <li>
                                    <a href="{{ $tlist->link }}">{{ $tlist->name }}
                                        <em></em>
                                    </a>
                                </li>

                                @endif
                            @endforeach
                            </ul>
                        </li>
                    @endforeach

                    <li class="list-panel">
                        <span></span>

                    </li>
                    <li class="list-panel">
                        <span></span>

                    </li>
                    <li class="list-panel nav-gif" title="miku">
                    </li>
                    <li class="list-panel nav-iphone">
                        <div class="mobile-box">
                            <img src="http://static.hdslb.com/images/base/app-qrcode.png" alt="">
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!--主内容部分-->
    <section class="main">
        <!--定宽度居中显示————针对不同屏幕由@media自适应-->
        <div class="main-inner">
            <!--第一部分————首页视频推荐-->
            <div class="part1">
                <div class="carousel">
                    <ul class="carousel-list">
                        @foreach($lunbo as $lunList)
                            <li>
                                <a href="{{ $lunList->link }}">
                                    <img src="{{ $lunList->image }}" alt="{{ $lunList->alt }}" title="{{ $lunList->title }}">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <nav class="carousel-ctrl">
                        <ul>
                            <!-- @foreach($lunbo as $lunList)
                                @if($lunList->id == 1)
                                    <li class="active">
                                        <a href=""></a>
                                    </li>
                                @else
                                    <li>
                                        <a href=""></a>
                                    </li>
                                @endif
                            @endforeach -->
                            <li class="active">
                                <a href=""></a>
                            </li>
                            <li>
                                <a href=""></a>
                            </li>
                            <li>
                                <a href=""></a>
                            </li>
                            <li>
                                <a href=""></a>
                            </li>
                            <li>
                                <a href=""></a>
                            </li>
                            <li>
                                <a href=""></a>
                            </li>
                            <li>
                                <a href=""></a>
                            </li>
                        </ul>
                        <span class="carousel-title"></span>
                    </nav>
                </div>
                <!-- 热门视频遍历 -->
                <div class="indextop-video">
                    <ul class="indextop-video-listpanel">
                        <!-- <li class="indextop-video-list">
                            <div class="mask"></div>
                            <div class="video-img"><img src="http://i0.hdslb.com/320_200/video/08/08a6a4bc9fe1679ffd6377f4ec8eb5e2.jpg" alt="test"></div>
                            <div class="info">
                                <h2>【祈Inory】《雏蜂》粤语OP【BEE配音组企划】</h2>
                                <p>up主：祈Inory</p>
                                <p>播放：33423</p>
                            </div>
                        </li> -->
                        @foreach($hotList as $v)
                        <li class="indextop-video-list">
                            <div class="mask"></div>
                            <div class="video-img"><img src="{{ $v->image }}" alt="test"></div>
                            <div class="info">
                                <h2>【{{ $v->name }}】{{ $v->title }}</h2>
                                <p>up主：{{ $v->name }}</p>
                                <p>播放：{{ $v->count }}</p>
                            </div>
                        </li>

                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- 分区遍历 -->
            @foreach($typeList as $type)
                <a name="{{ $type->id }}"></a>
                <div class="inner-section part{{ $type->id }} part-animate" id="part{{ $type->id+3 }}">
                    <div class="box-left">
                        <header class="part-animate-top">
                            <h2><i></i>{{ $type->name }}</h2>
                            <!-- <span class="animation-tab active">有新动态</span>
                            <span class="animation-tab">最新投稿</span>
                            <span class="animation-tab">干物妹小埋异闻录！</span> -->
                            <div class="btn-right">
                                <div class="btn-reset">
                                    <a href="javascript:;"></a>
                                    <span><strong>2967</strong>条新动态</span>
                                </div>
                                <div class="btn-more">
                                    <a href="javascript:;">更多</a>
                                </div>
                            </div>
                        </header>
                        <div class="video-list">
                            <ul>
                            @foreach($list as $v)
                                @if($v->tid == $type->id)
                                    <li>
                                        <div class="image-box">
                                            <img src="{{ $v->image }}" alt="">
                                            <div class="video-time">60:00</div>
                                        </div>
                                        <a class="image-title">
                                            <p class="title">
                                                {{ $v->title }}
                                            </p>
                                            <p class="click-num">
                                                <span class="play">
                                                    万
                                                </span>
                                                <span class="barrage">
                                                    {{ $v->commentSum }}万
                                                </span>
                                            </p>
                                        </a>
                                    </li>
                                @endif

                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <aside>
                        <header class="part-animate-aside">
                            <ul>
                                <h2>排行</h2>


                            </ul>
                        </header>
                        <div class="carousel-animate-box">
                            <div class="rank-box">
                                <ul>
                                    <span style="display:none;">{{$num=0}}</span>
                                    @foreach($listP as $p)
                                        @if($p->tid == $type->id)
                                            <li>

                                                <div class="rank">{{ $num+=1 }}</div>

                                                <a href="{{ $p->link }}" class="rank-top">
                                                @if($num==1)
                                                    <img src="{{ $p->image }}" alt="">
                                                @endif
                                                </a>

                                                <a href="{{ $p->link }}" class="rank-top-info">
                                                    <p class="rank-id">
                                                        <span class="rank-name">
                                                          【{{ $p->name }}】 {{ $p->title }}
                                                        </span>
                                                        <span class="rank-num">{{ $p->count }}</span>
                                                    </p>
                                                </a>
                                            </li>
                                        @endif

                                    @endforeach

                                </ul>
                            </div>
                            <!-- <div class="rank-box">
                                <ul>
                                    <li>
                                        <div class="rank">1</div>
                                        <a href="javascript:;" class="rank-top">
                                            <img src="images/video/rank2-2.jpg" alt="哔哩哔哩音乐台">
                                        </a>
                                        <a href="javascript:;" class="rank-top-info">
                                            <p class="rank-id">
                                                <span class="rank-name">
                                                   高达中十大开挂场景
                                                </span>
                                                <span class="rank-num">综合评分:23.4万</span>
                                            </p>
                                        </a>
                                    </li>

                                </ul>
                            </div> -->
                        </div>
                        <div class="checkmore">
                            <span>查看更多</span>
                        </div>
                    </aside>
                </div>
                @if($type->name == "番剧")
                    <!--第五部分-2————番剧更新列表-->
                    <div class="part-animate-list">
                                        <div class="list-left">
                                            <header>
                                                <ul>
                                                    <li class="list-controller" id="day1">
                                                        <div class="weekDay-active">
                                                            <i class="icon"></i>
                                                            <span>周一</span>
                                                        </div>
                                                        <span class="weekDay">一</span>
                                                    </li>
                                                    <li class="list-controller" id="day2">
                                                        <div class="weekDay-active">
                                                            <i class="icon"></i>
                                                            <span>周二</span>
                                                        </div>
                                                        <span class="weekDay">二</span>
                                                    </li>
                                                    <li class="list-controller" id="day3">
                                                        <div class="weekDay-active">
                                                            <i class="icon"></i>
                                                            <span>周三</span>
                                                        </div>
                                                        <span class="weekDay">三</span>
                                                    </li>
                                                    <li class="list-controller" id="day4">
                                                        <div class="weekDay-active">
                                                            <i class="icon"></i>
                                                            <span>周四</span>
                                                        </div>
                                                        <span class="weekDay">四</span>
                                                    </li>
                                                    <li class="list-controller" id="day5">
                                                        <div class="weekDay-active">
                                                            <i class="icon"></i>
                                                            <span>周五</span>
                                                        </div>
                                                        <span class="weekDay">五</span>
                                                    </li>
                                                    <li class="list-controller" id="day6">
                                                        <div class="weekDay-active">
                                                            <i class="icon"></i>
                                                            <span>周六</span>
                                                        </div>
                                                        <span class="weekDay">六</span>
                                                    </li>
                                                    <li class="list-controller" id="day7">
                                                        <div class="weekDay-active">
                                                            <i class="icon"></i>
                                                            <span>周日</span>
                                                        </div>
                                                        <span class="weekDay">日</span>
                                                    </li>
                                                </ul>
                                                <a href="javascript:;" class="list-btn">
                                                    <span>新番放送表</span>
                                                </a>
                                            </header>
                                            <div class="list-box-1 list-box">
                                                <ul>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i2.hdslb.com/u_user/57f3a73a6f1cc6d5337362bf55e1742c.jpg" alt="">
                                                        </div>
                                                        <span class="title">黑之宣告</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-box-2 list-box">
                                                <ul>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/sp/e1/e1c1672bc56e12bdf59c3c47862e9657.jpg" alt="">
                                                        </div>
                                                        <span class="title">我们这一家 新篇</span>
                                                        <span class="episodes">更新至<i>17话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i2.hdslb.com/u_user/4a1042b5d762a94365ef13c1aa395c51.jpg" alt="">
                                                        </div>
                                                        <span class="title">苍之彼方的四重奏</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/u_user/6066e4f6724b4a7ae767b183772401ca.jpg" alt="">
                                                        </div>
                                                        <span class="title">赤发白雪姬 第二季</span>
                                                        <span class="episodes">更新至<i>16话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i2.hdslb.com/u_user/a3273fb4cc38900ae36d58518e6127bc.jpg" alt="">
                                                        </div>
                                                        <span class="title">魔法少女什么的已经够了啦</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i2.hdslb.com/sp/a0/a04ce62b0c09abe9468ad33dbfeec164.jpg" alt="">
                                                        </div>
                                                        <span class="title">女高中生给你做饭了!</span>
                                                        <span class="episodes">更新至<i>18话</i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-box-3 list-box">
                                                <ul>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/u_user/89572d46d6d6beb63908129907097b3c.jpg" alt="">
                                                        </div>
                                                        <span class="title">爱神巧克力</span>
                                                        <span class="episodes">更新至<i>10话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/u_user/0bc44d59451adcf539af6f5a0e059cbe.jpg" alt="">
                                                        </div>
                                                        <span class="title">侦探小队KZ事件薄</span>
                                                        <span class="episodes">更新至<i>16话</i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-box-4 list-box">
                                                <ul>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/u_user/73ee53de8f13cc7fe222870c01c5098a.jpg" alt="">
                                                        </div>
                                                        <span class="title">少女们向荒野进发</span>
                                                        <span class="episodes">更新至<i>5话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://x-img.hdslb.net/group1/M00/98/55/oYYBAFaVy1SAebT8AADECTTfflU002.jpg" alt="">
                                                        </div>
                                                        <span class="title">火影忍者 疾风传</span>
                                                        <span class="episodes">更新至<i>667话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i2.hdslb.com/u_user/e40c371e7ff905d2f9f33e6e0ff4f33c.jpg" alt="">
                                                        </div>
                                                        <span class="title">画江湖之 灵主</span>
                                                        <span class="episodes">更新至<i>184话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/u_user/033aed76e9492f3762ead0c5603ca58b.jpg" alt="">
                                                        </div>
                                                        <span class="title">SUSHI POLICE</span>
                                                        <span class="episodes">更新至<i>5话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/sp/b6/b6eea08a34318b3d208b0026760978d2.jpg" alt="">
                                                        </div>
                                                        <span class="title">战斗之魂 第七季</span>
                                                        <span class="episodes">更新至<i>41话</i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-box-5 list-box">
                                                <ul>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/u_user/24ced5d68bbffbff6c9164000f204835.jpg" alt="">
                                                        </div>
                                                        <span class="title">粗点心战争</span>
                                                        <span class="episodes">更新至<i>5话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/group1/M00/1D/28/oYYBAFaq7TSAYh9ZAAEqmTsxV5s498.jpg" alt="">
                                                        </div>
                                                        <span class="title">侠岚·决敌篇</span>
                                                        <span class="episodes">更新至<i>133话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/u_user/1ef5aee7d8ac0a3a69bb4772b29ce526.jpg" alt="">
                                                        </div>
                                                        <span class="title">从前有座灵剑山</span>
                                                        <span class="episodes">更新至<i>5话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/sp/97/97fb5abd6abba77594016a522f0a45cb.jpg" alt="">
                                                        </div>
                                                        <span class="title">狐妖小红娘</span>
                                                        <span class="episodes">更新至<i>18话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/sp/19/19d92659f69c03bc7dadef740d15625b.jpg" alt="">
                                                        </div>
                                                        <span class="title">恐怖~僵尸猫</span>
                                                        <span class="episodes">更新至<i>18话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/u_user/5bcf0db196d9acc43b638a64436fce66.jpg" alt="">
                                                        </div>
                                                        <span class="title">大叔与棉花糖</span>
                                                        <span class="episodes">更新至<i>5话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://x-img.hdslb.net/group1/M00/94/86/oYYBAFaU22OAJRAiAABNUCxXEQo235.jpg" alt="">
                                                        </div>
                                                        <span class="title">旅街LateShow</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/u_user/64376dc79c745ffd3ff445beadf23ff6.jpg" alt="">
                                                        </div>
                                                        <span class="title">石膏男孩</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/u_user/73833869ff5db2829bd85ca6d9e20f8d.jpg" alt="">
                                                        </div>
                                                        <span class="title">梦幻之星Online2</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/sp/83/8361b7e22fd1667e3cc25dd6864108f1.jpg" alt="">
                                                        </div>
                                                        <span class="title">那年那兔那些事儿第二季</span>
                                                        <span class="episodes">更新至<i>7话</i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-box-6 list-box">
                                                <ul>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/u_user/c4d0b50ebc8d9a525064ea5d09624df4.jpg" alt="">
                                                        </div>
                                                        <span class="title">无头骑士异闻录x2 结</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/u_user/849e1648e99746ceff5fae8645aaa618.jpg" alt="">
                                                        </div>
                                                        <span class="title">舞武器舞乱伎</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/u_user/fe700c5dfed890e9e80a4e1bf3f29a8c.jpg" alt="">
                                                        </div>
                                                        <span class="title">重装武器</span>
                                                        <span class="episodes">更新至<i>16话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i2.hdslb.com/sp/8b/8bf97dee5405043b0970278d0c4a01ad.jpg" alt="">
                                                        </div>
                                                        <span class="title">牙狼 红莲之月</span>
                                                        <span class="episodes">更新至<i>16话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://x-img.hdslb.net/group1/M00/BC/7E/oYYBAFacRXCATo62AAGZeEFLBAY749.jpg" alt="">
                                                        </div>
                                                        <span class="title">Gate 奇幻异世界第二季</span>
                                                        <span class="episodes">更新至<i>16话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i2.hdslb.com/u_user/d2ca319feb0b7e87a8153ce51c4a131e.jpg" alt="">
                                                        </div>
                                                        <span class="title">红壳的潘多拉</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i2.hdslb.com/sp/b7/b746c6098af8da6ff4bc2eeb0fc99b4f.jpg" alt="">
                                                        </div>
                                                        <span class="title">游戏王 重制版 决斗者王国篇</span>
                                                        <span class="episodes">更新至<i>49话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/sp/fb/fbf2b8a0946350af1b8138f843d45e26.jpg" alt="">
                                                        </div>
                                                        <span class="title">游戏王 重制版 战斗都市篇</span>
                                                        <span class="episodes">更新至<i>10话</i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-box-0 list-box">
                                                <ul>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/u_user/9161ab0d652f8ba8c45dbe9a23d7af76.jpg" alt="">
                                                        </div>
                                                        <span class="title">网球并不可笑嘛 第七季</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/u_user/4deca12b4f2e3707e193131a9d95463c.jpg" alt="">
                                                        </div>
                                                        <span class="title">房东妹子青春期</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/sp/95/95b6ce0320e4f47f1bc2ec3093aa877e.jpg" alt="">
                                                        </div>
                                                        <span class="title">家有穆珂</span>
                                                        <span class="episodes">更新至<i>17话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/u_user/6c6ba7cb2a0c71b5fa7e3e72c9e4c09e.jpg" alt="">
                                                        </div>
                                                        <span class="title">魔法护士小麦R</span>
                                                        <span class="episodes">更新至<i>4话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i0.hdslb.com/u_user/4eed50135b10411a96ab3c58331372de.jpg" alt="">
                                                        </div>
                                                        <span class="title">传颂之物 虚伪的假面</span>
                                                        <span class="episodes">更新至<i>17话</i></span>
                                                    </li>
                                                    <li>
                                                        <div class="img-box">
                                                            <img src="http://i1.hdslb.com/sp/c7/c7489efbaa8c1b9a40daeb5c077c6274.jpg" alt="">
                                                        </div>
                                                        <span class="title">宝石宠物 第七季</span>
                                                        <span class="episodes">更新至<i>28-36话</i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <aside>
                                            <div class="carousel-box">
                                                <ul class="carousel-panel">
                                                    <li class="carousel-img"><img src="http://i0.hdslb.com/u_user/9b79d30420b9f32c31785de7f7518cde.jpg" alt=""></li>
                                                    <li class="carousel-img"><img src="http://i2.hdslb.com/u_user/046ccd23b5e1b0e0d82e7a02936ac981.jpg" alt=""></li>
                                                    <li class="carousel-img"><img src="http://i2.hdslb.com/u_user/eba3ff2c512a39a67f57005d01981033.jpg" alt=""></li>
                                                </ul>
                                                <div class="carousel-box-ctrl">
                                                    <ul>
                                                        <li data-name="混沌武士" data-index="0" class="active">
                                                        </li>
                                                        <li data-name="老虎和兔子" data-index="1">
                                                        </li>
                                                        <li data-name="隐王" data-index="2">
                                                        </li>
                                                    </ul>
                                                    <span class="animate-name">
                                                        混沌武士
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="finish-list">
                                                <ul>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                            <div class="other-finish">
                                                <ul>
                                                    <li>
                                                        <div class="preview">
                                                            <img src="http://i1.hdslb.com/sp/c6/c6f7339ea957882229dc4d3ac8a8cec3.jpg" alt="">
                                                            <p>全25话</p>
                                                        </div>
                                                        <a href="javascript:;">Fate/Zero 第二季</a>
                                                    </li>
                                                    <li>
                                                        <div class="preview">
                                                            <img src="http://i0.hdslb.com/sp/32/32ff84ce8967b06061299a2acebcf72a.jpg" alt="">
                                                            <p>全26话</p>
                                                        </div>
                                                        <a href="javascript:;">二舍六房的七人</a>
                                                    </li>
                                                    <li>
                                                        <div class="preview">
                                                            <img src="http://i1.hdslb.com/sp/67/67642f55895e70f058f3f74b6bea99e5.jpg" alt="">
                                                            <p>全24话</p>
                                                        </div>
                                                        <a href="javascript:;">欢迎加入NHK！</a>
                                                    </li>
                                                    <li>
                                                        <div class="preview">
                                                            <img src="http://i0.hdslb.com/sp/14/14c2c9bef69fd1f5adf7ce617368018b.jpg" alt="">
                                                            <p>全29话</p>
                                                        </div>
                                                        <a href="javascript:;">越狱兔 第1~5季</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </aside>
                    </div>
                 @endif
            @endforeach

            <div class="sidebar">
                <div class="sidebar-box">
                    <ul class="sidebar-list">
                    @foreach($typeList as $type)

                        <a class="liebiao" href="#{{ $type->id }}"><li draggable="true" id="list{{ $type->id }}">{{ $type->name }}</li></a>

                    @endforeach
                        <!-- <li class="sort">排序</li> -->
                    </ul>
                    <div class="sidebar-line"></div>
                    <div class="sidebar-arrow">
                    </div>
                    <div class="sidebar-gif">
                        <img src="http://i1.hdslb.com/u_user/nav_float/download.png" alt="">
                    </div>
                </div>
                <div class="dragtip"></div>
            </div>
        </div>
        <!--侧边栏内容-->
        <!--主内容至此全部结束-->
    </section>
    <!--页脚信息-->
    <footer>
        <div class="inner">
            <div class="footer-list-left">
                <h2>Bilibili</h2>
                <ul>
                    <li><a href="javascript:;">关于我们</a></li>
                    <li><a href="javascript:;">友情链接</a></li>
                    <li><a href="javascript:;">联系我们</a></li>
                    <li><a href="javascript:;">加入我们</a></li>
                </ul>
                <a href="http://bilibili2233.taobao.com/">
                    <img src="http://static.hdslb.com/images/base/b-taobao.png" alt="">
                </a>
            </div>
            <div class="footer-list-middle">
                <h2>帮助</h2>
                <ul>
                    <li><a href="javascript:;">帮助中心</a></li>
                    <li><a href="javascript:;">补档认领处</a></li>
                    <li><a href="javascript:;">侵权申诉</a></li>
                    <li><a href="javascript:;">建议/BUG汇报</a></li>
                </ul>
            </div>
            <div class="footer-list-right">
                <h2>传送门</h2>
                <ul>
                    <li><a href="javascript:;">高级弹幕</a></li>
                    <li><a href="javascript:;">名人堂</a></li>
                    <li><a href="javascript:;">活动专题页</a></li>
                    <li><a href="javascript:;">资讯</a></li>
                    <li><a href="javascript:;">壁纸站</a></li>
                    <li><a href="javascript:;">分院帽计划</a></li>
                    <li><a href="javascript:;">活动中心</a></li>
                </ul>
                <div class="icon-mobile">
                    <p><i><img src="http://static.hdslb.com/images/base/app-qrcode.png" alt=""></i></p>
                    <a href="javascript:;">手机端下载</a>
                </div>
                <div class="icon-weibo">
                    <p><i><img src="http://static.hdslb.com/images/base/weibo-qrcode.png" alt=""></i></p>
                    <a href="javascript:;">新浪微博</a>
                </div>
                <div class="icon-weixin">
                    <p><i><img src="http://static.hdslb.com/ad-images/wx.jpg" alt=""></i></p>
                    <a href="javascript:;">官方微信</a>
                </div>
            </div>
            <div class="copyright">
                <div class="copyright-img">
                </div>
                <ul>
                    <li>广播电视节目制作经营许可证：（沪）字第1248号 </li>
                    <li>网络文化经营许可证：沪网文[2013]0480-056号</li>
                    <li>信息网络传播视听节目许可证：0910417</li>
                    <li><a href="javascript">上海互联网举报中心</a></li>
                </ul>
                <ul>
                    <li>互联网ICP备案：沪ICP备13002172号-3</li>
                    <li>沪ICP证：沪B2-20100043</li>
                    <li>违法不良信息举报邮箱：help@bilibili.com</li>
                    <li>违法不良信息举报电话：4000233233 转 3</li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="main-mask">
    </div>
    <!--[if lte IE 8]>
        <script type="text/javascript" src="html5shiv.js"></script>
        <script type="text/javascript" src="respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
