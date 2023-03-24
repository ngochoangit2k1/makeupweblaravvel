<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ellie</title>
  <base href="{{asset('')}}">
  <link rel="shortcut icon" href="/assets/image/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/assets/css/base.css">
  <link rel="stylesheet" href="/assets/css/grid.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/reponsive.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/customer.css">

  

  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.theme.green.css" />

</head>

<body>
  <div class="app">


    <!-- header  -->
    @include('livewire/header')
    
    <!-- end header  -->


    <!-- Main -->
        <!-- Khách hàng -->
        <div class="grid wide customer">
            <div class="row">
                <!-- Main blog-details -->
                <div class="col l-9">
                    <div class="row">
                        <div class=" tree col l-8 m-8 c-6">
                            <p>Trang chủ <span>/</span> Khách hàng</p>
                        </div>

                        <div class=" col l-4 m-4 c-6">
                            <div class="dropdown">
                                <div class="select">
                                <span>Chọn danh mục lọc</span>
                                <i class="fa fa-chevron-left"></i>
                                </div>
                                <input type="hidden" name="gender">
                                <ul class="dropdown-menu">
                                <li>Trang điểm sinh nhật</li>
                                <li>Trang điểm tiệc cưới</li>
                                <li>Trang điểm kỉ yếu</li>
                                <li>Trang điểm sự kiện</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    
                        <div class="row">

                            <div class="col l-12 m-12 c-12">
                                <!-- Post -->

                                <!-- Post 1 -->
                                <div class="row">
                                    <div class="col l-6 m-12 c-12">
                                        <div class="blog-post">
                                            <div class="blog-post__item">

                                                <div class="blog-post__item-thumb">
                                                    <a href="/bai-viet-chi-tiet"><img src="/assets/image/anh-19.png" alt=""
                                                            class="blog-post__item-img"></a>
                                                </div>

                                                <div class="blog-post__item-content">
                                                    <a href="/bai-viet-chi-tiet">
                                                        <h3 class="blog-post__item-content__title">Trang điểm sinh nhật</h3>
                                                    </a>

                                                    <p class="blog-post__item-content__description">Aenean et tempor eros, vitae
                                                        sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex
                                                        ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean
                                                        nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                        Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                        iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis
                                                        quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula
                                                        nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                                        molestie magna at risus consectetur, placerat suscipit justo dignissim.
                                                        Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col l-6 m-12 c-12">
                                        <div class="blog-post">
                                            <div class="blog-post__item">

                                                <div class="blog-post__item-thumb">
                                                    <a href="/bai-viet-chi-tiet"><img src="/assets/image/anh-19.png" alt=""
                                                            class="blog-post__item-img"></a>
                                                </div>

                                                <div class="blog-post__item-content">
                                                    <a href="/bai-viet-chi-tiet">
                                                        <h3 class="blog-post__item-content__title">Trang điểm sinh nhật</h3>
                                                    </a>

                                                    <p class="blog-post__item-content__description">Aenean et tempor eros, vitae
                                                        sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex
                                                        ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean
                                                        nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                        Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                        iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis
                                                        quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula
                                                        nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                                        molestie magna at risus consectetur, placerat suscipit justo dignissim.
                                                        Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Post 2 -->
                                <div class="row">
                                    <div class="col l-6 m-12 c-12">
                                        <div class="blog-post">
                                            <div class="blog-post__item">

                                                <div class="blog-post__item-thumb">
                                                    <a href="/bai-viet-chi-tiet"><img src="/assets/image/anh-19.png" alt=""
                                                            class="blog-post__item-img"></a>
                                                </div>

                                                <div class="blog-post__item-content">
                                                    <a href="/bai-viet-chi-tiet">
                                                        <h3 class="blog-post__item-content__title">Trang điểm sinh nhật</h3>
                                                    </a>

                                                    <p class="blog-post__item-content__description">Aenean et tempor eros, vitae
                                                        sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex
                                                        ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean
                                                        nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                        Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                        iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis
                                                        quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula
                                                        nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                                        molestie magna at risus consectetur, placerat suscipit justo dignissim.
                                                        Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col l-6 m-12 c-12">
                                        <div class="blog-post">
                                            <div class="blog-post__item">

                                                <div class="blog-post__item-thumb">
                                                    <a href="/bai-viet-chi-tiet"><img src="/assets/image/anh-19.png" alt=""
                                                            class="blog-post__item-img"></a>
                                                </div>

                                                <div class="blog-post__item-content">
                                                    <a href="/bai-viet-chi-tiet">
                                                        <h3 class="blog-post__item-content__title">Trang điểm sinh nhật</h3>
                                                    </a>

                                                    <p class="blog-post__item-content__description">Aenean et tempor eros, vitae
                                                        sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex
                                                        ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean
                                                        nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                        Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                        iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis
                                                        quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula
                                                        nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                                        molestie magna at risus consectetur, placerat suscipit justo dignissim.
                                                        Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Post 3 -->
                                <div class="row">
                                    <div class="col l-6 m-12 c-12">
                                        <div class="blog-post">
                                            <div class="blog-post__item">

                                                <div class="blog-post__item-thumb">
                                                    <a href="/bai-viet-chi-tiet"><img src="/assets/image/anh-19.png" alt=""
                                                            class="blog-post__item-img"></a>
                                                </div>

                                                <div class="blog-post__item-content">
                                                    <a href="/bai-viet-chi-tiet">
                                                        <h3 class="blog-post__item-content__title">Trang điểm sinh nhật</h3>
                                                    </a>

                                                    <p class="blog-post__item-content__description">Aenean et tempor eros, vitae
                                                        sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex
                                                        ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean
                                                        nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                        Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                        iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis
                                                        quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula
                                                        nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                                        molestie magna at risus consectetur, placerat suscipit justo dignissim.
                                                        Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col l-6 m-12 c-12">
                                        <div class="blog-post">
                                            <div class="blog-post__item">

                                                <div class="blog-post__item-thumb">
                                                    <a href="/bai-viet-chi-tiet"><img src="/assets/image/anh-19.png" alt=""
                                                            class="blog-post__item-img"></a>
                                                </div>

                                                <div class="blog-post__item-content">
                                                    <a href="/bai-viet-chi-tiet">
                                                        <h3 class="blog-post__item-content__title">Trang điểm sinh nhật</h3>
                                                    </a>

                                                    <p class="blog-post__item-content__description">Aenean et tempor eros, vitae
                                                        sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex
                                                        ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean
                                                        nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum.
                                                        Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                                        iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis
                                                        quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula
                                                        nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                                        molestie magna at risus consectetur, placerat suscipit justo dignissim.
                                                        Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Post -->


                                <!-- Chuyển trang -->
                                <div class="shop-toolbar shop-pagination">
                                    <ul class="shop-pagination__list">
                                        <li class="disabled"><a href="#">Prev</a></li>
                                        <li class="current"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                                <!-- Chuyển trang -->
                            </div>
                        </div>
                  
                </div>
                <!-- Main blog-details -->

                
                <!-- Category right -->
                <div class="col l-3 hide-on-mobile-tablet ">
                    <div class="row">
                    <div class=" col l-12">
                        <a href="index.html" class="list-group-item">Trang chủ</a>
                        <a href="blog.html" class="list-group-item">Tin tức</a>
                        <a href="service.html" class="list-group-item">Dịch vụ</a>
                        <a href="customer.html" class="list-group-item">Khách hàng</a>
                    </div>

                    <div class=" col l-12">
                        <div class="col l-12 m-12 c-12">
                            <p class="category-details__heading">Dịch vụ trang điểm</p>
                        </div>
                        <a href="#!" class="list-group-makeup">Trang điểm sinh nhật</a>
                        <a href="#!" class="list-group-makeup">Trang điểm kỉ yếu</a>
                        <a href="#!" class="list-group-makeup">Trang điểm tiệc cưới</a>
                        <a href="#!" class="list-group-makeup">Trang điểm theo nhu cầu</a>
                    </div>
                </div>
                </div>
                <!-- Category right -->
            </div>
        </div>
        <!-- Khách hàng -->


        <!-- Thư mục ảnh -->
        <div class="grid">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <h2 class="heading-title">hình ảnh từ khách hàng</h2>
                </div>
                
                <div class="col l-12 m-12 c-12">
                <!-- Gallery Images -->
                    <div class="container-galerry">
                        <nav>
                            <div class="items">
                                <span class="item acitve" data-target="all">Tất cả</span>
                                <span class="item" data-target="sinhnhat">Trang điểm sinh nhật</span>
                                <span class="item" data-target="kiyeu">Trang điểm kỉ yếu</span>
                                <span class="item" data-target="tieccuoi">Trang điểm tiệc cưới</span>
                                <span class="item" data-target="dichvu">Trang điểm dịch vụ</span>
                            </div>
                        </nav>
    
                        <!-- Lọc ảnh -->
                        <div class="filter-gallery">
                            <div class="image" data-item="sinhnhat"><span><img src="/assets/image/anh-19.png" alt=""></span></div>
                            <div class="image" data-item="sinhnhat"><span><img src="/assets/image/anh-19.png" alt=""></span></div>
                            <div class="image" data-item="sinhnhat"><span><img src="/assets/image/anh-19.png" alt=""></span></div>
                            <div class="image" data-item="kiyeu"><span><img src="/assets/image/anh-19.png" alt=""></span></div>
                            <div class="image" data-item="kiyeu"><span><img src="/assets/image/anh-19.png" alt=""></span></div>
                            <div class="image" data-item="tieccuoi"><span><img src="/assets/image/anh-19.png" alt=""></span></div>
                            <div class="image" data-item="dichvu"><span><img src="/assets/image/anh-19.png" alt=""></span></div>
                            <div class="image" data-item="dichvu"><span><img src="/assets/image/anh-19.png" alt=""></span></div>
                        </div>
                    </div>
                <!-- End Gallery Images -->
                </div>
            </div>
        </div>
        <!-- Thư mục ảnh -->


        <!-- Form contact -->
        <div class="grid wide form-contact">
            <div class="row ">
                <div class="col l-12 m-12 c-12">
                    <h2 class="form-heading">Để lại thông tin để được tư vấn</h2>
                    <p class="form-descriptions">Vui lòng điền thông tin dưới đây, chúng tôi sẽ liên hệ lại để tư vấn cho
                        bạn
                    </p>
                    <form action="" class="row">
                        <div class="col l-6 m-6 c-12">
                            <input type="text" placeholder="Họ và tên">
                        </div>
                        <div class="col l-6 m-6 c-12">
                            <input type="text" placeholder="Số điện thoại">
                        </div>
                        <div class="col l-12 m-12 c-12">
                            <input type="text" placeholder="Email/Facebook nếu có ">
                        </div>
                        <div class="col l-12 m-12 c-12">
                            <input type="text" placeholder="Nội dung">
                        </div>
                        <div class="col l-12 m-12 c-12">
                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Form contact -->
    <!-- Main -->


    <!-- Footer -->
    @include('livewire/footer')
    <!-- Footer -->


  </div>
  <script src="/node_modules/jquery/dist/jquery.js"></script>
  <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="/assets/js/app.js"></script>
  <script src="/assets/js/droplist.js"></script>
  <script src="/assets/js/customer.js"></script>
</body>

</html>