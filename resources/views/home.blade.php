<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/header.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/home.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/footer.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>



@extends('layout.footer')

@section('content')
<section class="home-pc">
    <div class="container-lg container-fulid ">
        <div class="slide-adv">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 col-xs-12 col-sm-12 px-0 px-lg-3   banner-left">
                    <div class="slider slider-x">
                        <div class="slick-item">
                            <img src="https://lifesport.vn/uploads/partners/lifesport-top-10-thuong-hieu-dan-dau.jpg" title="Lifesport vinh danh top 10 thương hiệu dẫn đầu Việt Nam" alt="Lifesport vinh danh top 10 thương hiệu dẫn đầu Việt Nam">
                        </div>
                        <div class="slick-item">
                            <img src="https://lifesport.vn/uploads/partners/lifesport-top-100-thuong-hieu-duoc-ua-chuong.jpg" title="Lifesport vinh danh top 100 thương hiệu được ưa chuộng nhất 2020" alt="Lifesport vinh danh top 100 thương hiệu được ưa chuộng nhất 2020">
                        </div>
                        <div class="slick-item">
                            <img src="https://lifesport.vn/uploads/partners/chao-mung-ngay-phu-nu-viet-nam.jpg" title="Chào mừng ngày Phụ Nữ Việt Nam, giảm giá lên đến 50%" alt="Chào mừng ngày Phụ Nữ Việt Nam, giảm giá lên đến 50%">
                        </div>

                    </div>
                    <div class="slider slider-nav content-sd d-none d-lg-block d-md-none">
                        <div class="slider-content">
                            <h3>
                                <span>Chào mừng ngày Phụ Nữ Việt Nam</span>
                            </h3>
                        </div>
                        <div class="slider-content">
                            <h3>
                                <span>Chào mừng ngày Phụ Nữ Việt Nam</span>
                            </h3>
                        </div>
                        <div class="slider-content">
                            <h3>
                                <span>Chào mừng ngày Phụ Nữ Việt Nam</span>
                            </h3>
                        </div>

                    </div>


                    <!-- <div id="carouselExampleControls" class="carousel slide  slide-item carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://lifesport.vn/uploads/partners/lifesport-top-10-thuong-hieu-dan-dau.jpg" title="Lifesport vinh danh top 10 thương hiệu dẫn đầu Việt Nam" alt="Lifesport vinh danh top 10 thương hiệu dẫn đầu Việt Nam">
                            </div>
                            <div class="carousel-item">
                                <img src="https://lifesport.vn/uploads/partners/lifesport-top-100-thuong-hieu-duoc-ua-chuong.jpg" title="Lifesport vinh danh top 100 thương hiệu được ưa chuộng nhất 2020" alt="Lifesport vinh danh top 100 thương hiệu được ưa chuộng nhất 2020">
                            </div>
                            <div class="carousel-item">
                                <img src="https://lifesport.vn/uploads/partners/chao-mung-ngay-phu-nu-viet-nam.jpg" title="Chào mừng ngày Phụ Nữ Việt Nam, giảm giá lên đến 50%" alt="Chào mừng ngày Phụ Nữ Việt Nam, giảm giá lên đến 50%">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> -->
                </div>
                <div class="col-4 banner-right d-none d-lg-block d-md-none">
                    <div class="top-bn">
                        <div class="banner-item">
                            <a target="_blank" href="#" title="Lifesport giao hàng miễn phí">
                                <img class="" src="https://lifesport.vn/uploads/banner/Lifesport-giao-hang-mien-phi.jpg" alt="Lifesport giao hàng miễn phí">
                            </a>
                        </div>
                        <div class="banner-item">
                            <a target="_blank" href="#" title="Lifesport giao hàng miễn phí">
                                <img src="https://lifesport.vn/uploads/banner/lifesport-tra-gop-khong-phan-tram-lai-suat.jpg" alt="Lifesport trả góp 0% | hỗ trợ trả góp không lãi suất">
                        </div>

                    </div>
                    <div class="bottom-bn">
                        <div class="hotnews-content d-flex justify-content-between">
                            <h3>TIN NỔI BẬT</h3> <a href="https://lifesport.vn/kinh-nghiem-hay" target="_blank" title="">Xem tất cả</a>
                        </div>
                        <ul>
                            <li>
                                <a class="blog-bn d-flex" href="#" title="Cách tập vật lý trị liệu khớp gối tại nhà giúp giảm đau hiệu quả ">
                                    <span>
                                        <img class="lazy" src="https://lifesport.vn/uploads/articles/cach-tap-vat-ly-tri-lieu-khop-goi.jpg" alt="alt ảnh">
                                    </span>
                                    <h3>Cách tập vật lý trị liệu khớp gối tại nhà giúp giảm đau hiệu quả </h3>
                                </a>
                            </li>
                            <li>
                                <a class="blog-bn d-flex" href="#" title="Cách tập vật lý trị liệu khớp gối tại nhà giúp giảm đau hiệu quả ">
                                    <span>
                                        <img class="lazy" src="https://lifesport.vn/uploads/articles/nen-dap-xe-vao-luc-nao.JPG" alt="alt ảnh">
                                    </span>
                                    <h3>Cách tập vật lý trị liệu khớp gối tại nhà giúp giảm đau hiệu quả </h3>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigats">
            <img src="https://lifesport.vn/uploads/otherimage/chao-mung-ngay-phu-nu-viet-nam.png" alt="Giảm giá shock">
        </div>
        <div class="slide-pd">
            <div class="silder-product-1">
                <div class="items">
                    <div class="sp-item">
                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                        </label>
                        <a href="#">
                            <div class="box-image">
                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">
                                <label class="discount">GIẢM 23.500.000đ</label>

                            </div>

                            <h3>Ghế Massage LifeSport LS-500</h3>
                            <div class="price">
                                <strong>38.500.000đ</strong>
                                <span>62.000.000đ</span>
                                <i>-38%</i>
                            </div>
                            <div class="promo noimage">
                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                <p></p>
                            </div>

                        </a>
                    </div>
                    <div class="sp-item">
                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                        </label>
                        <a href="#">
                            <div class="box-image">
                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">
                                <label class="discount">GIẢM 23.500.000đ</label>

                            </div>

                            <h3>Ghế Massage LifeSport LS-500</h3>
                            <div class="price">
                                <strong>38.500.000đ</strong>
                                <span>62.000.000đ</span>
                                <i>-38%</i>
                            </div>
                            <div class="promo noimage">
                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                <p></p>
                            </div>

                        </a>
                    </div>
                    <div class="sp-item">
                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                        </label>
                        <a href="#">
                            <div class="box-image">
                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">
                                <label class="discount">GIẢM 23.500.000đ</label>

                            </div>

                            <h3>Ghế Massage LifeSport LS-500</h3>
                            <div class="price">
                                <strong>38.500.000đ</strong>
                                <span>62.000.000đ</span>
                                <i>-38%</i>
                            </div>
                            <div class="promo noimage">
                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                <p></p>
                            </div>

                        </a>
                    </div>
                    <div class="sp-item">
                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                        </label>
                        <a href="#">
                            <div class="box-image">
                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">
                                <label class="discount">GIẢM 23.500.000đ</label>

                            </div>

                            <h3>Ghế Massage LifeSport LS-500</h3>
                            <div class="price">
                                <strong>38.500.000đ</strong>
                                <span>62.000.000đ</span>
                                <i>-38%</i>
                            </div>
                            <div class="promo noimage">
                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                <p></p>
                            </div>

                        </a>
                    </div>
                    <div class="sp-item">
                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                        </label>
                        <a href="#">
                            <div class="box-image">
                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">
                                <label class="discount">GIẢM 23.500.000đ</label>

                            </div>

                            <h3>Ghế Massage LifeSport LS-500</h3>
                            <div class="price">
                                <strong>38.500.000đ</strong>
                                <span>62.000.000đ</span>
                                <i>-38%</i>
                            </div>
                            <div class="promo noimage">
                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                <p></p>
                            </div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="catbannermb d-block d-lg-none d-md-none">
                <img src="https://lifesport.vn/uploads/catbanner/ghe-massage-ls-2600-mobi-1.jpg" alt="ghế massage lifesport công nghệ châu âu">
            </div>
            <div class="sp1">
                <div class="navigat d-flex justify-content-between">
                    <h2><a href="#">Ghế massage</a></h2>
                    <div class="viewallcat d-flex justify-content-between ">
                        <div class="d-lg-block d-md-none d-none">
                            <a href="#">Lifesport</a>
                            <a href="#" class="mobile">Xem tất cả <b>24</b> <span style="text-transform:lowercase">Ghế massage</span></a>
                        </div>
                    </div>
                </div>
                <div class="pd-massage">
                    <div class="row sp-table">
                        <div class="col-lg-5 col-md-12 col-xs-12 col-sm-12 ms-item">
                            <div class="massage-hot sp-item ">
                                <a href="https://lifesport.vn/ghe-massage-lifesport-ls-999">
                                    <img class=" lazyloaded" alt="Ghế Massage LifeSport LS-999" src="https://lifesport.vn/uploads/products/banner/banner-ghe-massage-ls-999.jpg">
                                    <h3>Ghế Massage LifeSport LS-999</h3>
                                    <div class="price">
                                        <strong>155.000.000đ</strong>
                                        <span>330.000.000đ</span>
                                        <i>-53%</i>
                                    </div>
                                    <div class="promo noimage">
                                        <p class="rating-lst" style="padding: 0 0 10px 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.8</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">13 đánh giá</span></p>
                                        <p></p>
                                    </div>
                                    <label class="discount dis-mb">GIẢM 175.000.000đ</label>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-xs-12 col-sm-12 ">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 d-lg-none d-md-noned-block text-center py-3 ">

                                    <a href="#" class="mobile ">Xem tất cả <b>24</b> <span style="text-transform:lowercase">Ghế massage</span></a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row sp-table">
                        <div class="col-lg-5 col-md-12 col-xs-12 col-sm-12 ms-item">
                            <div class="massage-hot sp-item ">
                                <a href="https://lifesport.vn/ghe-massage-lifesport-ls-999">
                                    <img class=" lazyloaded" alt="Ghế Massage LifeSport LS-999" src="https://lifesport.vn/uploads/products/banner/banner-ghe-massage-ls-999.jpg">
                                    <h3>Ghế Massage LifeSport LS-999</h3>
                                    <div class="price">
                                        <strong>155.000.000đ</strong>
                                        <span>330.000.000đ</span>
                                        <i>-53%</i>
                                    </div>
                                    <div class="promo noimage">
                                        <p class="rating-lst" style="padding: 0 0 10px 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.8</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">13 đánh giá</span></p>
                                        <p></p>
                                    </div>
                                    <label class="discount dis-mb">GIẢM 175.000.000đ</label>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-xs-12 col-sm-12 ">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 d-lg-none d-md-noned-block text-center py-3 ">

                                    <a href="#" class="mobile ">Xem tất cả <b>24</b> <span style="text-transform:lowercase">Ghế massage</span></a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="sp2">
                <div class="navigat d-flex justify-content-between">
                    <h2><a href="#">Ghế massage</a></h2>
                    <div class="viewallcat d-flex justify-content-between ">
                        <div class="d-lg-block d-md-none d-none">
                            <a href="#">Lifesport</a>
                            <a href="#" class="mobile">Xem tất cả <b>24</b> <span style="text-transform:lowercase">Ghế massage</span></a>
                        </div>
                    </div>
                </div>
                <div class="pd-massage">
                    <div class="row sp-table">
                        <div class="col-lg-5 col-md-12 col-xs-12 col-sm-12 ms-item">
                            <div class="massage-hot sp-item ">
                                <a href="https://lifesport.vn/ghe-massage-lifesport-ls-999">
                                    <img class=" lazyloaded" alt="Ghế Massage LifeSport LS-999" src="https://lifesport.vn/uploads/products/banner/banner-ghe-massage-ls-999.jpg">
                                    <h3>Ghế Massage LifeSport LS-999</h3>
                                    <div class="price">
                                        <strong>155.000.000đ</strong>
                                        <span>330.000.000đ</span>
                                        <i>-53%</i>
                                    </div>
                                    <div class="promo noimage">
                                        <p class="rating-lst" style="padding: 0 0 10px 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.8</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">13 đánh giá</span></p>
                                        <p></p>
                                    </div>
                                    <label class="discount dis-mb">GIẢM 175.000.000đ</label>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-xs-12 col-sm-12 ">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 d-lg-none d-md-noned-block text-center py-3 ">

                                    <a href="#" class="mobile ">Xem tất cả <b>24</b> <span style="text-transform:lowercase">Ghế massage</span></a>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>
            <div class="sp3">
                <div class="navigat d-flex justify-content-between">
                    <h2><a href="#">Ghế massage</a></h2>
                    <div class="viewallcat d-flex justify-content-between ">
                        <div class="d-lg-block d-md-none d-none">
                            <a href="#">Lifesport</a>
                            <a href="#" class="mobile">Xem tất cả <b>24</b> <span style="text-transform:lowercase">Ghế massage</span></a>
                        </div>
                    </div>
                </div>
                <div class="pd-massage">
                    <div class="row sp-table">
                        <div class="col-lg-5 col-md-12 col-xs-12 col-sm-12 ms-item">
                            <div class="massage-hot sp-item ">
                                <a href="https://lifesport.vn/ghe-massage-lifesport-ls-999">
                                    <img class=" lazyloaded" alt="Ghế Massage LifeSport LS-999" src="https://lifesport.vn/uploads/products/banner/banner-ghe-massage-ls-999.jpg">
                                    <h3>Ghế Massage LifeSport LS-999</h3>
                                    <div class="price">
                                        <strong>155.000.000đ</strong>
                                        <span>330.000.000đ</span>
                                        <i>-53%</i>
                                    </div>
                                    <div class="promo noimage">
                                        <p class="rating-lst" style="padding: 0 0 10px 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.8</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">13 đánh giá</span></p>
                                        <p></p>
                                    </div>
                                    <label class="discount dis-mb">GIẢM 175.000.000đ</label>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-xs-12 col-sm-12 ">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 ms-item d-lg-none d-md-none d-block">
                                    <div class="sp-item ">
                                        <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                            <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                                        </label>
                                        <a href="#">
                                            <div class="box-image">
                                                <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">

                                                <label class="discount table-dis">GIẢM 23.500.000đ</label>
                                            </div>
                                            <h3>Ghế Massage LifeSport LS-500</h3>

                                            <div class="price">
                                                <strong>38.500.000đ</strong>
                                                <span>62.000.000đ</span>
                                                <i>-38%</i>
                                            </div>
                                            <div class="promo noimage">
                                                <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                                <p></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 d-lg-none d-md-noned-block text-center py-3 ">

                                    <a href="#" class="mobile ">Xem tất cả <b>24</b> <span style="text-transform:lowercase">Ghế massage</span></a>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>
            <div class="slide-pd">
                <div class="silder-product-1">
                    <div class="items">
                        <div class="sp-item">
                            <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                            </label>
                            <a href="#">
                                <div class="box-image">
                                    <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">
                                    <label class="discount">GIẢM 23.500.000đ</label>

                                </div>

                                <h3>Ghế Massage LifeSport LS-500</h3>
                                <div class="price">
                                    <strong>38.500.000đ</strong>
                                    <span>62.000.000đ</span>
                                    <i>-38%</i>
                                </div>
                                <div class="promo noimage">
                                    <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                    <p></p>
                                </div>

                            </a>
                        </div>
                        <div class="sp-item">
                            <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                            </label>
                            <a href="#">
                                <div class="box-image">
                                    <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">
                                    <label class="discount">GIẢM 23.500.000đ</label>

                                </div>

                                <h3>Ghế Massage LifeSport LS-500</h3>
                                <div class="price">
                                    <strong>38.500.000đ</strong>
                                    <span>62.000.000đ</span>
                                    <i>-38%</i>
                                </div>
                                <div class="promo noimage">
                                    <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                    <p></p>
                                </div>

                            </a>
                        </div>
                        <div class="sp-item">
                            <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                            </label>
                            <a href="#">
                                <div class="box-image">
                                    <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">
                                    <label class="discount">GIẢM 23.500.000đ</label>

                                </div>

                                <h3>Ghế Massage LifeSport LS-500</h3>
                                <div class="price">
                                    <strong>38.500.000đ</strong>
                                    <span>62.000.000đ</span>
                                    <i>-38%</i>
                                </div>
                                <div class="promo noimage">
                                    <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                    <p></p>
                                </div>

                            </a>
                        </div>
                        <div class="sp-item">
                            <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                            </label>
                            <a href="#">
                                <div class="box-image">
                                    <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">
                                    <label class="discount">GIẢM 23.500.000đ</label>

                                </div>

                                <h3>Ghế Massage LifeSport LS-500</h3>
                                <div class="price">
                                    <strong>38.500.000đ</strong>
                                    <span>62.000.000đ</span>
                                    <i>-38%</i>
                                </div>
                                <div class="promo noimage">
                                    <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                    <p></p>
                                </div>

                            </a>
                        </div>
                        <div class="sp-item">
                            <label class="install">Trả góp <b>0%</b> </label> <label class="hot">
                                <img src="https://lifesport.vn/uploads/otherimage/hot-icon.gif" width="40" height="40">
                            </label>
                            <a href="#">
                                <div class="box-image">
                                    <img src="https://lifesport.vn/uploads/products/ghe-massage-ls-500.jpg" alt="Ghế Massage LifeSport LS-500">
                                    <label class="discount">GIẢM 23.500.000đ</label>

                                </div>

                                <h3>Ghế Massage LifeSport LS-500</h3>
                                <div class="price">
                                    <strong>38.500.000đ</strong>
                                    <span>62.000.000đ</span>
                                    <i>-38%</i>
                                </div>
                                <div class="promo noimage">
                                    <p class="rating-lst" style="padding: 0 !important;"><span style="text-decoration: inherit; margin: 0;padding-bottom: 2px;"><b>4.9</b>/5<i class="fas fa-star"></i></span><span class="sl-rating" style="text-decoration: inherit; margin: 0;">11 đánh giá</span></p>
                                    <p></p>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="box-blog">
            <div class="row blog-tb">
                <div class="col-lg-9 col-md-12 col-12 blog-list1">
                    <div class="knh-homepage">
                        <h3 class="title-new">Kinh nghiệm hay<a href="/kinh-nghiem-hay">Xem tất cả <i class="fas fa-caret-right"></i></a></h3>
                        <div class="cate cnt">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-12 col-xs-12 col-sm-12">
                                    <div class="fl">
                                        <a href="#" title="Chạy bộ có làm to bắp chân không? Nên chạy thế nào mới đúng cách?">
                                            <div class="zone-youtube">
                                                <img class="lazy imgfryoutu" alt="Chạy bộ có làm to bắp chân không? Nên chạy thế nào mới đúng cách?" src="https://lifesport.vn/uploads/articles/chay-bo-co-lam-to-bap-chan-khong.JPG">
                                            </div>
                                            <p>Chạy bộ có làm to bắp chân không? Nên chạy thế nào mới đúng cách?</p>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-12 col-xs-12 col-sm-12list-blog">
                                    <div class="fr">
                                        <div class="group3">
                                            <a class="d-flex" href="#" title="Ghế massage LifeSport những câu hỏi thường gặp">
                                                <div class="zone-news">
                                                    <img class="lazy" alt="Ghế massage LifeSport những câu hỏi thường gặp" src="https://lifesport.vn/uploads/articles/ghe-mat-xa-toan-than-life-sport.jpg" style="display: inline; opacity: 1;">
                                                </div>
                                                <p>Ghế massage LifeSport những câu hỏi thường gặp</p>
                                            </a>
                                            <a class="d-flex" href="#" title="Hé lộ cách massage lưng cho người thoát vị đĩa đệm hiệu quả, xem ngay!">
                                                <div class="zone-news">
                                                    <img class="lazy" alt="Hé lộ cách massage lưng cho người thoát vị đĩa đệm hiệu quả, xem ngay!" src="https://lifesport.vn/uploads/articles/cach-massage-lung-cho-nguoi-thoat-vi-dia-dem.JPG" style="display: inline; opacity: 1;">
                                                </div>
                                                <p>Hé lộ cách massage lưng cho người thoát vị đĩa đệm hiệu quả, xem ngay!</p>
                                            </a>
                                            <a class="d-flex" href="#" title="Nên đạp xe vào lúc nào trong ngày giúp sức khỏe bạn được nâng cao?">
                                                <div class="zone-news">
                                                    <img class="lazy" alt="Nên đạp xe vào lúc nào trong ngày giúp sức khỏe bạn được nâng cao?" src="https://lifesport.vn/uploads/articles/nen-dap-xe-vao-luc-nao.JPG" style="display: inline; opacity: 1;">
                                                </div>
                                                <p>Nên đạp xe vào lúc nào trong ngày giúp sức khỏe bạn được nâng cao?</p>
                                            </a>
                                            <a class="d-flex" href="#" title="5 bài tập vật lý trị liệu thoát vị đĩa đệm dễ thực hiện, giảm đau nhức">
                                                <div class="zone-news">
                                                    <img class="lazy" alt="5 bài tập vật lý trị liệu thoát vị đĩa đệm dễ thực hiện, giảm đau nhức" src="https://lifesport.vn/uploads/articles/bai-tap-vat-ly-tri-lieu-thoat-vi-dia-dem.JPG" style="display: inline; opacity: 1;">
                                                </div>
                                                <p>5 bài tập vật lý trị liệu thoát vị đĩa đệm dễ thực hiện, giảm đau nhức</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12 mt-lg-0 mt-md-3 mt-3 blog-list2">
                    <div class="cate-cook">
                        <h3 class="title-new">Khuyến mãi<a href="/khuyen-mai">Xem tất cả <i class="fas fa-caret-right"></i></a></h3>

                        <ul>
                            <li>
                                <a href="#">
                                    <div class="imgdish">
                                        <img alt="LIFESPORT TỪNG BỪNG ƯU ĐÃI NHÂN NGÀY QUỐC TẾ PHỤ NỮ 8 THÁNG 3" class="lazy" src="https://lifesport.vn/uploads/articles/lifesport-tung-bung-uu-dai-nhan-ngay-quoc-te-phu-nu-8-thang-3-avar.jpg">
                                    </div>
                                    <strong>LIFESPORT TỪNG BỪNG ƯU ĐÃI NHÂN NGÀY QUỐC TẾ PHỤ NỮ 8 THÁNG 3</strong>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex" href="#">
                                    <div class="imgdish"><img alt="QUÀ TƯNG BỪNG - MỪNG ĐẠI LỄ 30/04 - 1/05" class="lazy" src="https://lifesport.vn/uploads/articles/qua-tung-bung-mung-dai-le-3004-105-01.jpg"></div>
                                    <strong>QUÀ TƯNG BỪNG - MỪNG ĐẠI LỄ 30/04 - 1/05</strong>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex" href="#">
                                    <div class="imgdish"><img alt="CHƯƠNG TRÌNH LIVESTREAM - GIỜ VÀNG - SĂN DEAL HOT CÙNG LIFESPORT" class="lazy" src="https://lifesport.vn/uploads/articles/chuong-trinh-livestream-gio-vang-san-deal-hot-cung-lifesport-avar.jpg"></div>
                                    <strong>CHƯƠNG TRÌNH LIVESTREAM - GIỜ VÀNG - SĂN DEAL HOT CÙNG LIFESPORT</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>

@endsection
<style>

</style>
<script type='text/javascript'>
    $(document).ready(function() {
        $('.slider-for').slick({
            arrows: false,
            asNavFor: '.slider-nav,.slider-x',
        });
        $('.slider-x').slick({
            arrows: true,
            asNavFor: '.slider-for,.slider-nav',
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
          
            responsive: [{
                    breakpoint: 800,
                    settings: {
                        dots: true,

                    }
                },
               


            ]
        });
        $('.slider-nav').slick({
            arrows: true,
            asNavFor: '.slider-for,.slider-x',
            centerMode: true,
            centerPadding: '60px',
          
            focusOnSelect: true,
            slidesToShow: 2,
            autoplay: true
        });

        $('.items').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,

                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },


            ]


        });
        $('.items-brand').slick({
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,



            responsive: [{
                breakpoint: 1024,
                settings: {
                    speed: 1000,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,

                }
            }]
        });
        $('.items-blog').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,



        });
    });
</script>
</body>

</html>