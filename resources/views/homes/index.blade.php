﻿@extends('homes.layout.moban')

@section('title','傻家伙')

@section('content')

<!-- 轮播图 start -->
<div class="slider-wrap">
	<div class="fullwidthbanner-container">
		<div class="fullwidthbanner">
			<ul>
				<li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="on">
					<!--MAIN IMAGE-->
					<img src="/homes/img/slider/slider1.jpg" alt="" data-bgposition="center top" data-duration=""
						data-ease="Power0.easeInOut" data-bgfit="cover" data-bgrepeat="no-repeat" />
					<!-- LAYER NR. -->
					<div class="tp-caption skewfromrightshort skewtorightshort tp-resizeme" data-x="center"
						data-hoffset="0" data-y="center" data-voffset="-150" data-speed="500" data-start="500"
						data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.01"
						data-endelementdelay="0.1" data-endspeed="500" data-endeasing="Power4.easeIn"
						style="z-index: 5; color: #fff; text-align: left !important; line-height: 100%;
						font-size: 60px; letter-spacing: 6px; text-transform: uppercase; font-weight: 900;">
						the best collection for 2016
					</div>
					<!-- LAYERS 3-->
					<div class="tp-caption skewfromrightshort skewtorightshort tp-resizeme splitted"
						data-x="center" data-hoffset="0" data-y="center" data-voffset="-30" data-speed="500"
						data-start="1300" data-easing="Power4.easeInOut" data-splitin="chars" data-splitout="none"
						data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="500" style="z-index: 4;
						font-size: 35px; line-height: 30px; text-transform: none; font-weight: 400; letter-spacing: 4px;
						color: #fff; text-align: right !important; max-width: auto; max-height: auto;
						white-space: nowrap;">
						Fashion show with designer
					</div>
					<div class="tp-caption tp-fade fadeout tp-resizeme" data-x="center" data-hoffset="0"
						data-y="center" data-voffset="75" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none"
						data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="500"
						style="z-index: 7;">
						
					</div>
				</li>
				<li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="on">
					<!--MAIN IMAGE-->
					<img src="/homes/img/slider/slider6_2.jpg" alt="" data-bgposition="center center" data-duration=""
						data-ease="Power0.easeInOut" data-bgfit="cover" data-bgrepeat="no-repeat" />
					<!-- LAYER NR. -->
					<div class="tp-caption skewfromrightshort skewtorightshort tp-resizeme" data-x="center"
						data-hoffset="0" data-y="center" data-voffset="-150" data-speed="500" data-start="500"
						data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.01"
						data-endelementdelay="0.1" data-endspeed="500" data-endeasing="Power4.easeIn"
						style="z-index: 5; color: #fff; text-align: left !important; line-height: 100%;
						font-size: 60px; letter-spacing: 6px; text-transform: uppercase; font-weight: 900;">
						Buy To Get 15% Discount
					</div>
					<!-- LAYERS 3-->
					<div class="tp-caption skewfromrightshort skewtorightshort tp-resizeme splitted"
						data-x="center" data-hoffset="0" data-y="center" data-voffset="-30" data-speed="500"
						data-start="1300" data-easing="Power4.easeInOut" data-splitin="chars" data-splitout="none"
						data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="500" style="z-index: 4;
						font-size: 35px; line-height: 30px; text-transform: none; font-weight: 400; letter-spacing: 4px;
						color: #fff; text-align: right !important; max-width: auto; max-height: auto;
						white-space: nowrap;">
						fantastic women's cloths
					</div>
					<div class="tp-caption tp-fade fadeout tp-resizeme" data-x="center" data-hoffset="0"
						data-y="center" data-voffset="65" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none"
						data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="500"
						style="z-index: 7;">
						
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- 轮播图 end -->

<!-- 热映电影 start -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h3>
                    热映电影
                </h3>
            </div>
            @foreach($res as $k=>$v)
            <div class="col-lg-4 col-md-4 col-sm-4">
                <a href="{{url('/homes/filmdetail?id=').$v['id']}}">
                    <div class="single-banner">
                        <img src="{{ asset($v['filepic'])}}" alt="" />
                        <div class="banner-details">
                            <div class="mask">
                                <p>
                                    {{ $v['summary']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="service-area pad-top">
	<div class="container">
		<div class="row">
			@foreach($res as $k=>$v)
			<div class="col-lg-4 col-md-4 col-sm-6">
				<a href="{{url('/homes/filmdetail?id=').$v['id']}}">
					<div class="single-service">
						<div class="service-icon">
							<i class="fa fa-file"></i>
						</div>
						<div class="service-text">
							<h2>
								{{ $v['filmname']}}</h2>
							<p>
								导演:{{ $v['director']}}</p>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- 热映电影 end -->

<!-- 即将上映 start -->
<div class="features-area pad-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>
                        即将上映
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-tab">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="product-curosel">
                                    <div class="col-lg-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="/homes/img/product/1.jpg" alt="" />
                                                    <img class="secondary-img" src="/homes/img/product/2.jpg" alt="" />
                                                </a>
                                                <span class="sale">
                                                    敬请期待
                                                </span>
                                                <div class="product-action">
                                                    <div class="pro-button-top">
                                                        <a href="#">
                                                            查看详情
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3>
                                                    <a href="single-product.html">
                                                        电影名字
                                                    </a>
                                                </h3>
                                                <div class="pro-price">
                                                    <span class="normal">
                                                        ￥50
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 即将上映 end -->

<!-- 底部横条 start -->
<div class="subscribe-area">
	<div class="container">
		<div class="subscribe-title">
			<h3>
				<span>傻家伙</span>给你最好的视觉享受</h3>
			<p>梦幻时空的魔幻快车给你带来的刺激体验。３D、４D、5D、6D、7D、nD动感影院，海市蜃楼般如真如幻。</p>
			
		</div>
	</div>
</div>
<!-- 底部横条 end -->

@endsection
