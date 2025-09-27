@extends('layout')
@section('content')
<div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
    <div class="container">
        <nav aria-label="breadcrumb" style="display:none">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}" title="Trang chủ">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{route('danhMucCon',[$category->slug])}}" title="{{$category->title}}">{{$category->title}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$nick->ms}}</li>
            </ol>
        </nav>
        <div class="c-shop-product-details-4">
            <div class="row">
            <div class="col-md-4 m-b-20">
                <div class="c-product-header">
                    <!--<h4 class="c-font-uppercase c-font-bold">Liên minh huyền thoại - Việt Nam</h4>-->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">{{$nick->ms}}</h3>
                        <span class="c-font-red c-font-bold">{{$category->title}}</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 visible-sm visible-xs visible-sm">
                <div class="text-center m-t-20">
                    <img class="img-responsive img-thumbnail" src="/storage/images/ILTS15nlZf_1650210905.jpg" alt="png-image">
                </div>
                <div class="c-product-meta">
                    <div class="c-content-divider">
                        <i class="icon-dot"></i>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-xs-6 c-product-variant">
                        <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Rank: <span class="c-font-red">Cao Thủ</span></p>
                        </div>
                        <div class="col-sm-4 col-xs-6 c-product-variant">
                        <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Tướng: <span class="c-font-red">110</span></p>
                        </div>
                        <div class="col-sm-4 col-xs-6 c-product-variant">
                        <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Trang Phục: <span class="c-font-red">139</span></p>
                        </div>
                        <div class="col-sm-4 col-xs-6 c-product-variant">
                        <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Ngọc 90: <span class="c-font-red">Có</span></p>
                        </div>
                        <div class="col-sm-4 col-xs-6 c-product-variant">
                        <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Nick có tướng trong đá quý: <span class="c-font-red">Có</span></p>
                        </div>
                        <div class="col-sm-4 col-xs-6 c-product-variant">
                        <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Nick có trang phục trong đá quý: <span class="c-font-red">Có</span></p>
                        </div>
                        <div class="col-sm-12 col-xs-12 c-product-variant">
                        <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Nổi bật: <span class="c-font-red">Violet Huyết Mà Thần, Ryoma Samurai, Ryoma Thanh Long Bang Chủ, Florentino ULTRAMAN, Lilianna Nguyệt Mỵ Ly, Nakroth Siêu Việt III, Nakroth Quán Quân, Bboy Công Nghệ, Murad Siêu Việt, Murad MTP, Triệu Vân Quý Công Tử, Volkath Xung Thiên Thần Tướng.DƯ 1 VIÊN ĐÁ QUÝ.</span></p>
                        </div>
                    </div>
                    <div class="c-content-divider">
                        <i class="icon-dot"></i>
                    </div>
                </div>
            </div>
            <div class="c-product-meta">
                <div class="c-product-price c-theme-font" style="float: none;text-align: center">
                    <!-- <div class="position0">
                        5,999,994 CARD
                    </div> -->
                    <div class="position1">
                        {{ number_format((float) $nick->price, 0, ',', '.') }}đ
                    </div>
                </div>
                <div style="display: none">
                </div>
                <script type="text/javascript">
                    $(".c-product-price").append($(".position0"));
                    $(".c-product-price").append($(".position1"));
                </script>
            </div>
            <div class="col-md-4 text-right">
                <div class="c-product-header">
                    <div class="c-content-title-1">
                        <button type="button" class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20 load-modal" rel="/buyacc/518323">Mua ngay</button>
                        <button type="button" class="btn c-btn btn-lg btn-danger c-font-uppercase c-font-bold c-btn-square m-t-20 load-modal" rel="/hire-purchase/518323">Trả góp</button>
                        <a type="button" class="btn c-btn btn-lg c-bg-green-4 c-font-white c-font-uppercase c-font-bold c-btn-square m-t-20" href="/recharge">ATM - Ví điện tử</a>
                        <a class="btn c-btn btn-lg c-bg-green-4 c-font-white c-font-uppercase c-font-bold c-btn-square m-t-20" href="/nap-the">Nạp thẻ cào</a>
                    </div>
                </div>
            </div>
            </div>
            <div class="c-product-meta visible-md visible-lg">
            <div class="c-content-divider">
                <i class="icon-dot"></i>
            </div>
            <div class="row">
                @php
                    $attribute = json_decode($nick->attribute, true);
                @endphp

                @foreach($attribute as $attr)
                    <div class="col-sm-4 col-xs-6 c-product-variant">
                    <p style="color: red" class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">{{$attr}}</p>
                </div>
                @endforeach
                <div class="clearfix"></div>
                <style>
                    .mota_game{
                        text-transform: uppercase;
                        margin: 0 15px;
                        color: chocolate;
                        font-weight:bold;
                        font-size: 20px;
                    }
                </style>
                <p class="mota_game"> Mô tả nick game: {{$nick->description}}</p>
                
            </div>
            <div class="c-content-divider">
                <i class="icon-dot"></i>
            </div>
            </div>
        </div>
    </div>
    <div class="container m-t-20 content_post">
        <p>
            <a rel="gallery1" data-fancybox="images" href="img/1.jpg">
            <img class="img-responsive img-thumbnail" src="img/1.jpg" alt="png-image">
            </a>
        </p>
        <p>
            <a rel="gallery1" data-fancybox="images" href="img/2.jpg">
            <img class="img-responsive img-thumbnail" src="img/2.jpg" alt="png-image">
            </a>
        </p>
        <p>
            <a rel="gallery1" data-fancybox="images" href="img/3.jpg">
            <img class="img-responsive img-thumbnail" src="img/3.jpg" alt="png-image">
            </a>
        </p>
        <p>
            <a rel="gallery1" data-fancybox="images" href="img/4.jpg">
            <img class="img-responsive img-thumbnail" src="img/4.jpg" alt="png-image">
            </a>
        </p>
        <p>
            <a rel="gallery1" data-fancybox="images" href="img/5.jpg">
            <img class="img-responsive img-thumbnail" src="img/5.jpg" alt="png-image">
            </a>
        </p>
        <div class="buy-footer" style="text-align: center">
            <button type="button" class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20 load-modal" rel="/buyacc/518323">Mua ngay</button>
        </div>
    </div>
    <div class="container m-t-20 ">
        <div class="game-item-view" style="margin-top: 40px">
            <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold">Tài khoản liên quan</h3>
            <div class="c-line-center c-theme-bg"></div>
            </div>
            <div class="row row-flex  item-list">
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/443449">
                        <img src="img/3RcdbTs582_1650188706.jpg" alt="png-image">
                        <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Nakroth Siêu Việt, Slimz Thỏ Ngọc
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                        <div class="col-xs-6 a_att">
                            Rank: <b>Vàng</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Tướng: <b>30</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Trang Phục: <b>7</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Ngọc 90: <b>Có</b>
                        </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                        <div class="col-xs-6">
                            <div class="price_item">
                                180,000đ
                            </div>
                        </div>
                        <div class="col-xs-6 ">
                            <div class="view">
                                <a href="/acc/443449">Chi tiết</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/443449">
                        <img src="img/3RcdbTs582_1650188706.jpg" alt="png-image">
                        <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Nakroth Siêu Việt, Slimz Thỏ Ngọc
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                        <div class="col-xs-6 a_att">
                            Rank: <b>Vàng</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Tướng: <b>30</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Trang Phục: <b>7</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Ngọc 90: <b>Có</b>
                        </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                        <div class="col-xs-6">
                            <div class="price_item">
                                180,000đ
                            </div>
                        </div>
                        <div class="col-xs-6 ">
                            <div class="view">
                                <a href="/acc/443449">Chi tiết</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/443449">
                        <img src="img/3RcdbTs582_1650188706.jpg" alt="png-image">
                        <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Nakroth Siêu Việt, Slimz Thỏ Ngọc
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                        <div class="col-xs-6 a_att">
                            Rank: <b>Vàng</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Tướng: <b>30</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Trang Phục: <b>7</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Ngọc 90: <b>Có</b>
                        </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                        <div class="col-xs-6">
                            <div class="price_item">
                                180,000đ
                            </div>
                        </div>
                        <div class="col-xs-6 ">
                            <div class="view">
                                <a href="/acc/443449">Chi tiết</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/443449">
                        <img src="img/3RcdbTs582_1650188706.jpg" alt="png-image">
                        <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Nakroth Siêu Việt, Slimz Thỏ Ngọc
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                        <div class="col-xs-6 a_att">
                            Rank: <b>Vàng</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Tướng: <b>30</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Trang Phục: <b>7</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Ngọc 90: <b>Có</b>
                        </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                        <div class="col-xs-6">
                            <div class="price_item">
                                180,000đ
                            </div>
                        </div>
                        <div class="col-xs-6 ">
                            <div class="view">
                                <a href="/acc/443449">Chi tiết</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/443449">
                        <img src="img/3RcdbTs582_1650188706.jpg" alt="png-image">
                        <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Nakroth Siêu Việt, Slimz Thỏ Ngọc
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                        <div class="col-xs-6 a_att">
                            Rank: <b>Vàng</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Tướng: <b>30</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Trang Phục: <b>7</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Ngọc 90: <b>Có</b>
                        </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                        <div class="col-xs-6">
                            <div class="price_item">
                                180,000đ
                            </div>
                        </div>
                        <div class="col-xs-6 ">
                            <div class="view">
                                <a href="/acc/443449">Chi tiết</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/443449">
                        <img src="img/3RcdbTs582_1650188706.jpg" alt="png-image">
                        <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Nakroth Siêu Việt, Slimz Thỏ Ngọc
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                        <div class="col-xs-6 a_att">
                            Rank: <b>Vàng</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Tướng: <b>30</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Trang Phục: <b>7</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Ngọc 90: <b>Có</b>
                        </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                        <div class="col-xs-6">
                            <div class="price_item">
                                180,000đ
                            </div>
                        </div>
                        <div class="col-xs-6 ">
                            <div class="view">
                                <a href="/acc/443449">Chi tiết</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/443449">
                        <img src="img/3RcdbTs582_1650188706.jpg" alt="png-image">
                        <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Nakroth Siêu Việt, Slimz Thỏ Ngọc
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                        <div class="col-xs-6 a_att">
                            Rank: <b>Vàng</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Tướng: <b>30</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Trang Phục: <b>7</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Ngọc 90: <b>Có</b>
                        </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                        <div class="col-xs-6">
                            <div class="price_item">
                                180,000đ
                            </div>
                        </div>
                        <div class="col-xs-6 ">
                            <div class="view">
                                <a href="/acc/443449">Chi tiết</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/443449">
                        <img src="img/3RcdbTs582_1650188706.jpg" alt="png-image">
                        <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Nakroth Siêu Việt, Slimz Thỏ Ngọc
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                        <div class="col-xs-6 a_att">
                            Rank: <b>Vàng</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Tướng: <b>30</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Trang Phục: <b>7</b>
                        </div>
                        <div class="col-xs-6 a_att">
                            Ngọc 90: <b>Có</b>
                        </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                        <div class="col-xs-6">
                            <div class="price_item">
                                180,000đ
                            </div>
                        </div>
                        <div class="col-xs-6 ">
                            <div class="view">
                                <a href="/acc/443449">Chi tiết</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            </div>
        </div>
        <div class="tab-vertical tutorial_area">
            <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="">Thử vận may liên quân chỉ với 12k  - 18k -60k <i class="glyphicon glyphicon-flag"></i></a>
                    </h5>
                </div>
                <div id="tab1" class="panel-collapse collapse in" aria-expanded="true" style="">
                    <div class="panel-body">
                        <p>Ngoài <strong><a href="https://nick.vn/garena/lien-quan" target="_blank">Bán Nick Liên Quân Mobile</a></strong> theo các thông tin đã show sẵn.<strong><a href="https://nick.vn/mua-ban-nick-game-random" target="_blank">Shop chuyên bán acc liên quân random</a></strong> cho các bạn thử vận may với các gói ưu đãi khác nhau :</p>
                        <p>- <strong><a href="https://nick.vn/garena/lien-quan-random-so-cap" target="_blank">Random liên quân sơ cấp 12k&nbsp;</a></strong></p>
                        <p>- <a href="https://nick.vn/garena/lien-quan-random-trung-cap" target="_blank"><strong>Random liên quân trung cấp 18k</strong></a></p>
                        <p>- <a href="https://nick.vn/garena/lien-quan-random-cao-cap" target="_blank"><strong>Random liên quân cao cấp 60k</strong></a></p>
                        <p>.Các bạn sẽ có cơ hội nhận được những <a href="https://nick.vn/mua-ban-nick-game-random" target="_blank"><strong>acc liên quân ngẫu nhiên</strong> </a>có thể là acc víp,acc cùi, acc tầm trung..vv</p>
                        <p>Mỗi mức giá để có tỷ lệ random khác nhau.Nào nào nhanh chóng thử vậy may của mình thôi.&nbsp;<span style="color:#e74c3c"><strong>Tích cực quay tay vận may sẽ đến</strong></span></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="">Dịch vụ game khác <i class="glyphicon glyphicon-flag"></i></a>
                    </h5>
                </div>
                <div id="tab1" class="panel-collapse collapse in" aria-expanded="true" style="">
                    <div class="panel-body">
                        <p>Ngoài&nbsp; <strong>shop bán acc liên quân</strong>&nbsp;Shop còn có các dịch vụ khác như <strong><a href="https://nick.vn/dich-vu/ban-quan-huy" target="_blank"><span style="color:#e74c3c">mua bán quân huy giá rẻ</span></a></strong>, <strong>&nbsp;,<a href="https://nick.vn/mua-the" target="_blank"><span style="color:#e74c3c">bán thẻ garena giá&nbsp; rẻ</span> </a>và hơn 40 dịch vụ game khác</strong> tại&nbsp;<strong><a href="https://nick.vn/dich-vu" target="_blank">https://nick.vn/dich-vu</a>&nbsp;(<a href="https://nick.vn/dich-vu" target="_blank">click</a>)</strong></p>
                        <p><strong>Link bán quân huy</strong> :&nbsp;<strong><a href="https://nick.vn/dich-vu/lien-quan" target="_blank">https://nick.vn/dich-vu/lien-quan</a>&nbsp;(<a href="https://nick.vn/dich-vu/lien-quan" target="_blank">click</a>)</strong></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="">Xem Thêm <i class="glyphicon glyphicon-flag"></i></a>
                    </h5>
                </div>
                <div id="tab1" class="panel-collapse collapse in" aria-expanded="true" style="">
                    <div class="panel-body">
                        <h3><a href="https://shopsonflo.vn/garena/nick-lien-quan-gia-re-100-trang-thong-tin"><span style="color:#ffffff"><strong>- Nick liên quân có đá quý</strong></span></a></h3>
                        <h3><a href="https://muanicklienquan.com/"><span style="color:#ffffff"><strong>- Nick liên quân game random&nbsp;</strong></span></a></h3>
                        <h3><a href="https://muanicklienquan.com/garena/nick-lien-quan-gia-re-shop-ban-nick-lien-quan-gia-re-dam-bao-uy-tin-100-trang-thong-tin"><span style="color:#ffffff"><strong>- Nick liên quân giá rẻ</strong></span></a></h3>
                        <h3><span style="color:#ffffff"><strong>- Acc liên quân rank cao thủ , thách đấu.</strong></span></h3>
                        <h3><a href="https://muanicklienquan.com/vong-quay-quan-huy"><span style="color:#ffffff"><strong>- Tài khoản liên quân có nhiều tướng</strong></span></a></h3>
                        <h3><span style="color:#ffffff"><strong>- Tài khoản lq có nhiều trang phục</strong></span></h3>
                        <h3><a href="https://muanicklienquan.com/vong-quay-nak-ve-than"><span style="color:#ffffff"><strong>-&nbsp;Acc liên quân trang phục - skin Siêu Việt</strong></span></a></h3>
                        <h3><span style="color:#ffffff"><strong>- Nick liên quân bản thử nghiệm</strong></span></h3>
                        <h3><span style="color:#ffffff"><strong>- Acc liên quân full tướng full skin&nbsp;</strong></span></h3>
                        <h3><span style="color:#ffffff"><strong>- Acc liên quân 9k</strong></span></h3>
                        <h3><span style="color:#ffffff"><strong>- Nick liên quân full ngọc</strong></span></h3>
                        <h3><span style="color:#ffffff"><strong>- Nick liên quân giá rẻ 20k</strong></span></h3>
                        <h3><span style="color:#ffffff"><strong>- Acc liên quân ngọc 90</strong></span></h3>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection