@extends('layout')
@section('content')
<div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->
        <div class="c-content-box c-size-md c-bg-white">
            <div class="container">
            <div class="row">
                <div class="alert alert-info" role="alert">
                    <h2 class="alert-heading">Account: {{$category->title}}</h2>
                    <p></p><p><span style="color:#e74c3c"><strong> {{$category->title}} </strong></span>{{$category->description}}</p><p></p>
                </div>
                <div class="row  hidden-xs hidden-sm" style="margin-bottom: 15px">
                    <div class="m-l-10 m-r-10">
                        <form class="form-inline m-b-10" role="form" method="get" data-hs-cf-bound="true">
                            <div class="col-md-3 col-sm-4 p-5 field-search">
                                <div class="input-group c-square">
                                <span class="input-group-addon">Tìm kiếm</span>
                                <input type="text" class="form-control c-square" value="" placeholder="Tìm kiếm" name="find">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 p-5 field-search">
                                <div class="input-group c-square">
                                <span class="input-group-addon">Mã số</span>
                                <input type="text" class="form-control c-square" value="" placeholder="Mã số" name="id">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                <div class="input-group c-square">
                                <span class="input-group-addon">Giá tiền</span>
                                <select style="" class="form-control c-square" name="price">
                                    <option value="">Chọn giá tiền</option>
                                    <option value="duoi-50k">Dưới 50K</option>
                                    <option value="tu-50k-200k">Từ 50K - 200K</option>
                                    <option value="tu-200k-500k">Từ 200K - 500K</option>
                                    <option value="tu-500k-1-trieu">Từ 500K - 1 Triệu</option>
                                    <option value="tren-1-trieu">Trên 1 Triệu</option>
                                    <option value="tren-5-trieu">Trên 5 Triệu</option>
                                    <option value="tren-10-trieu">Trên 10 Triệu</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 p-5 field-search">
                                <div class="input-group c-square">
                                <span class="input-group-addon">Trạng thái</span>
                                <select style="" class="form-control c-square" name="status">
                                    <option value="1" selected="">Chưa bán</option>
                                    <option value="0">Đã bán</option>
                                    <option value="3">Đã đặt cọc</option>
                                    <option value="-999">Tất cả</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                <div class="input-group c-square">
                                <span class="input-group-addon">Rank</span>
                                <select name="attribute_id_593" class="form-control c-square" title="-- Không chọn --">
                                    <option value="">-- Không chọn --</option>
                                    <option value="596">Đồng</option>
                                    <option value="597">Bạc</option>
                                    <option value="598">Vàng</option>
                                    <option value="599">Bạch Kim</option>
                                    <option value="600">Kim Cương</option>
                                    <option value="601">Cao Thủ</option>
                                    <option value="602">Thách Đấu</option>
                                    <option value="981">Tinh Anh</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                <div class="input-group c-square">
                                <span class="input-group-addon">Ngọc 90</span>
                                <select name="attribute_id_657" class="form-control c-square" title="-- Không chọn --">
                                    <option value="">-- Không chọn --</option>
                                    <option value="658">Không</option>
                                    <option value="659">Có</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                <div class="input-group c-square">
                                <span class="input-group-addon">Nick có tướng trong đá quý</span>
                                <select name="attribute_id_1173" class="form-control c-square" title="-- Không chọn --">
                                    <option value="">-- Không chọn --</option>
                                    <option value="1175">Không</option>
                                    <option value="1176">Có</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                <div class="input-group c-square">
                                <span class="input-group-addon">Nick có trang phục trong đá quý</span>
                                <select name="attribute_id_1174" class="form-control c-square" title="-- Không chọn --">
                                    <option value="">-- Không chọn --</option>
                                    <option value="1177">Không</option>
                                    <option value="1178">Có</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 p-5 no-radius">
                                <button type="submit" class="btn c-square c-theme c-btn-green">Tìm kiếm</button>
                                <a class="btn c-square m-l-0 btn-danger" href="https://nick.vn/garena/lien-quan">Tất cả</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Begin: Testimonals 1 component --> 
            <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
                <!-- Begin: Title 1 component -->
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold">Danh mục {{$category->title}}</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <div class="row row-flex  item-list">
                    @foreach($nicks as $key => $nick)
                        <div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image"> 
                                    <a href="#">
                                    <!-- <a href="/acc/518480"> -->
                                    <img src="{{asset('/uploads/nick/'.$nick->image)}}" alt="png-image">
                                    <span class="ms">MS: #{{$nick->ms}}</span>
                                    </a>
                                </div>
                                <div class="description">
                                    {{$nick->description}}
                                </div>
                                <div class="attribute_info">
                                    <div class="row">
                                        @php
                                            $attribute = json_decode($nick->attribute, true);
                                        @endphp

                                        @foreach($attribute as $attr)
                                        <div class="col-xs-6 a_att">
                                            {{$attr}}
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="a-more">
                                    <div class="row">
                                    <div class="col-xs-6">
                                        <div class="price_item">
                                            {{ number_format((float) $nick->price, 0, ',', '.') }}đ

                                        </div>
                                    </div>
                                    <div class="col-xs-6 ">
                                        <div class="view">
                                            <a href="/acc/518480">Chi tiết</a>
                                            <!-- <a href="/acc/518480">Chi tiết</a> -->
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- End-->
                </div>
                <!-- End-->
            </div>
            </div>
            <style type="text/css">
            .news_image, .image, .news_title, .a-more, .news_description {
            position: relative;
            z-index: 200;
            }
            span.sale {
            position: absolute;
            z-index: 1000;
            right: -1px;
            top:-1px;
            background: rgba(255, 212, 36, .9);
            padding: 5px;
            text-align: center;
            color: #ee4d2d;
            width: 50px;
            font-weight: 700;
            font-size: 15px;
            }
            .sale:after {
            content: "";
            width: 0;
            height: 0;
            left: 0;
            bottom: -4px;
            position: absolute;
            border-color: transparent rgba(255, 212, 36, .9);
            border-style: solid;
            border-width: 0 25px 4px;
            }
            .outPrice {
            padding-top: 20px;
            text-align: center;
            width: 100px;
            margin: 0 auto;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            }
            .oldPrice {
            text-decoration: line-through;
            color: #3f0;
            border: 2px solid;
            padding: 5px 15px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            }
            .newPrice {
            border: 2px solid red;
            padding: 5px 15px;
            color: red;
            display: inline;
            border-radius: 5px;
            margin-left: 10px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
            }
            .game-list .a-more .view{
            margin-top: 20px;
            }
            @media (max-width: 550px) {
            .outPrice {
            flex-direction: column;
            }
            .newPrice {
            margin-left: 0;
            margin-top: 10px;
            margin-bottom: 10px;
            }
            }
            </style>
            <!-- END: PAGE CONTENT -->
        </div>
        <div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif"
                style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">
            </div>
            </div>
        </div>
</div>

@endsection