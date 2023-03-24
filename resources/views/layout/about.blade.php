<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ellie</title>
  <link rel="shortcut icon" href="/assets/image/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/assets/css/base.css">
  <link rel="stylesheet" href="/assets/css/grid.css">
  <link rel="stylesheet" href="/assets/css/about.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/reponsive.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.theme.green.css" />
  <!-- Icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

</head>

<body>
  <div class="app">

    @include('livewire/header')
      
    <!-- Main -->
    <div class="grid">
        <!-- Container -->
        <div class="container-fluid">
      <a href=”#”>

                       <h1>

                                   Test 1

                                   <span> Test 2</span>

                       </h1>

                        <p>  Test 3 </p>

            </a>
            <!-- Slide -->
            <div class="grid hero">
                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item">
                                <div class="banner">
                                    <img class="banner__img" src="/assets/image/banner.png" alt="">
                                    <div class="banner__content">
                                        <h2 class="banner__content-subtext">Ellie Nguyen</h2>
                                        <h4 class="banner__content-heading">Trang điểm đẹp</h4>
                                        <p class="banner__content-descriptions  hide-on-mobile-tablet">nếu bạn muốn trang điểm đẹp, hãy đến với
                                            chúng
                                            tôi,
                                            chuyên
                                            trang điểm đám cưới, trang điểm sự kiện, trang điểm kỉ yêu, ...</p>
                                        <button class="btn btn-primary">Trang điểm</button>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="banner">
                                    <img class="banner__img" src="/assets/image/banner.png" alt="">
                                    <div class="banner__content">
                                        <h2 class="banner__content-subtext">Ellie Nguyen</h2>
                                        <h4 class="banner__content-heading">Trang điểm đẹp</h4>
                                        <p class="banner__content-descriptions  hide-on-mobile-tablet">nếu bạn muốn trang điểm đẹp, hãy đến với
                                            chúng
                                            tôi,
                                            chuyên
                                            trang điểm đám cưới, trang điểm sự kiện, trang điểm kỉ yêu, ...</p>
                                        <button class="btn btn-primary">Trang điểm</button>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="banner">
                                    <img class="banner__img" src="/assets/image/banner.png" alt="">
                                    <div class="banner__content">
                                        <h2 class="banner__content-subtext">Ellie Nguyen</h2>
                                        <h4 class="banner__content-heading">Trang điểm đẹp</h4>
                                        <p class="banner__content-descriptions  hide-on-mobile-tablet">nếu bạn muốn trang điểm đẹp, hãy đến với
                                            chúng
                                            tôi,
                                            chuyên
                                            trang điểm đám cưới, trang điểm sự kiện, trang điểm kỉ yêu, ...</p>
                                        <button class="btn btn-primary">Trang điểm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
            <!-- Slide -->
    
    
            <!-- Dịch vụ -->
            <div class="service grid wide">
                <div class="row">
                  <div class="col l-12 m-12 c-12">
                    <h1 class="heading-title">Dịch vụ trang điểm </h1>
                    <p class="heading-content">Pick your beauty products today. 50% OFF on the most popular GOOD4ME. Order all
                      classy products today!</p>
                  </div>
                  <div class="row">
                    <div class="col l-3 m-6 c-6">
                      <div class="service-item">
                        <div class="service-item__hover"> <img src="/assets/image/anh-1.png" alt="" class="service-item__img">
                        </div>
                        <h2 class="service-item__heading">Trang điểm đẹp</h2>
                      </div>
                    </div>
                    <div class="col l-3 m-6 c-6">
                      <div class="service-item">
                        <div class="service-item__hover"> <img src="/assets/image/anh-2.png" alt="" class="service-item__img">
                        </div>
                        <h2 class="service-item__heading">Trang điểm cô dâu</h2>
                      </div>
                    </div>
                    <div class="col l-3 m-6 c-6">
                      <div class="service-item">
                        <div class="service-item__hover"> <img src="/assets/image/anh-3.png" alt="" class="service-item__img">
                        </div>
                        <h2 class="service-item__heading">Trang điểm đám cưới</h2>
                      </div>
                    </div>
                    <div class="col l-3 m-6 c-6">
                      <div class="service-item">
                        <div class="service-item__hover"> <img src="/assets/image/anh-4.png" alt="" class="service-item__img">
                        </div>
                        <h2 class="service-item__heading">Trang điểm nhẹ nhàng</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- Dịch vụ -->
    
    
            <!-- Về chúng tôi-->
            <div class="service grid wide">
                <div class="row">
                    <div class="col l-12 m-12 c-12 ">
                        <h2 class="heading-title">Về chúng tôi</h2>
                    </div>
    
                    <div class="about">
                        <div class="col l-12 m-12 c-12 ">
                            <p class="about-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas
                                porttitor
                                congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero,
                                sit
                                amet
                                commodo magna eros quis urna.
                            </p>
                        </div>
    
                        <div class="about-center">
                            <div class="row">
                                <div class="col l-8 m-8 c-12 ">
                                    <div class="service-item">
                                        <h3 class="heading-title-3">Đào tạo trang điểm</h3>
    
                                        <p class="about-content-descriptions">Lorem ipsum dolor sit amet, consectetuer
                                            adipiscing
                                            elit.
                                            Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies,
                                            purus
                                            lectus malesuada
                                            libero, sit amet commodo magna eros quis urna.
                                        </p>
                                    </div>
                                </div>
    
                                <div class="col l-4 m-4 c-12 ">
                                    <div class="service-item">
                                        <img src="/assets/image/anh-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                        <div class="row about-bottom">
                            <div class="col l-12 m-12 c-12 ">
                                <h5 class="heading-title-5">Đào tạo trang điểm</h5>
                            </div>
    
                            <div class="col l-4 m-12 c-12 ">
                                <div class="service-item">
                                    <div class="service-item-icon"><i class="ri-award-fill"></i></div>
                                    <h6 class="heading-title-6">+10</h6>
                                    <h6 class="heading-title-6">Giải thưởng</h6>
                                </div>
                            </div>
    
                            <div class="col l-4 m-12 c-12 ">
                                <div class="service-item">
                                    <div class="service-item-icon"><i class="ri-user-3-fill"></i></div>
                                    <h6 class="heading-title-6">>200</h6>
                                    <h6 class="heading-title-6">Nhân sự</h6>
                                </div>
                            </div>
    
                            <div class="col l-4 m-12 c-12 ">
                                <div class="service-item">
                                    <div class="service-item-icon"><i class="ri-hearts-fill"></i></div>
                                    <h6 class="heading-title-6">1000</h6>
                                    <h6 class="heading-title-6">Sự quan tâm</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Về chúng tôi -->
    
    
            <!-- Đánh giá-->
            <div class="service grid wide">
                <div class="row">
                    <div class="col l-12 m-12 c-12 ">
                        <h3 class="heading-title">Đánh giá từ mọi người</h3>
                    </div>
    
                    <div class="row">
                        <div class="col l-4 m-12 c-12 ">
                            <div class="row">
                                <div class="col l-6 m-6 c-12 ">
                                    <div class="service-item">
                                        <div class="about-item__img">
                                            <img src="/assets/image/image-17.png" alt="" class="about-item__img">
                                        </div>
                                    </div>
    
                                </div>
                                <div class="col l-6 m-6 c-12 ">
                                    <div class="service-item">
                                        <p class="about-item__name">Quang Thông</p>
                                        <p class="about-item__time">21/11/2001</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="about-item">
                                <p class="about-content-descriptions">Lorem ipsum dolor sit amet, consectetuer
                                    adipiscing
                                    elit.
                                    Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus
                                    lectus malesuada
                                    libero, sit amet commodo magna eros quis urna.
                                </p>
                            </div>
                        </div>
    
                        <div class="col l-4 m-12 c-12 ">
                            <div class="row">
                                <div class="col l-6 m-6 c-12 ">
                                    <div class="service-item">
                                        <div class="about-item__img">
                                            <img src="/assets/image/image-17.png" alt="" class="about-item__img">
                                        </div>
                                    </div>
    
                                </div>
                                <div class="col l-6 m-6 c-12 ">
                                    <div class="service-item">
                                        <p class="about-item__name">Quang Thông</p>
                                        <p class="about-item__time">21/11/2001</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="about-item">
                                <p class="about-content-descriptions">Lorem ipsum dolor sit amet, consectetuer
                                    adipiscing
                                    elit.
                                    Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus
                                    lectus malesuada
                                    libero, sit amet commodo magna eros quis urna.
                                </p>
                            </div>
                        </div>
    
                        <div class="col l-4 m-12 c-12 ">
                            <div class="row">
                                <div class="col l-6 m-6 c-12 ">
                                    <div class="service-item">
                                        <div class="about-item__img">
                                            <img src="/assets/image/image-17.png" alt="" class="about-item__img">
                                        </div>
                                    </div>
    
                                </div>
                                <div class="col l-6 m-6 c-12 ">
                                    <div class="service-item">
                                        <p class="about-item__name">Quang Thông</p>
                                        <p class="about-item__time">21/11/2001</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="about-item">
                                <p class="about-content-descriptions">Lorem ipsum dolor sit amet, consectetuer
                                    adipiscing
                                    elit.
                                    Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus
                                    lectus malesuada
                                    libero, sit amet commodo magna eros quis urna.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Đánh giá-->
    
    
            <!-- Form liên hệ -->
            <div class="grid wide form-contact">
                <div class="row ">
                  <div class="col l-12 m-12 c-12">
                    <h2 class="form-heading">Để lại thông tin để được tư vấn</h2>
                    <p class="form-descriptions">Vui lòng điền thông tin dưới đây, chúng tôi sẽ liên hệ lại để tư vấn cho bạn </p>
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
            <!-- Form liên hệ -->
    
    
        </div>
        <!-- Container -->
        @include('livewire/footer')
    </div>
    <!-- Main -->


  <script src="/node_modules/jquery/dist/jquery.js"></script>
  <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="/assets/js/app.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
</body>

</html>