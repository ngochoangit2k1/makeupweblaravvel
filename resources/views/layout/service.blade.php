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
  <link rel="stylesheet" href="/assets/css/service.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/reponsive.css">
  <link rel="stylesheet" href="/assets/css/header.css">



  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.theme.green.css" />

</head>

<body>


  <!-- Main -->
  <div class="app">
    <div class="grid">
      @include('livewire/header')
    </div>
    <div class="grid">
  
      <!-- Service -->
      <div class="container-fluid">
  
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
                      <h2 class="banner__content-heading">Trang điểm đẹp</h2>
                      <p class="banner__content-descriptions  hide-on-mobile-tablet">nếu bạn muốn trang điểm đẹp, hãy đến với chúng tôi, chuyên
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
                      <h2 class="banner__content-heading">Trang điểm đẹp</h2>
                      <p class="banner__content-descriptions  hide-on-mobile-tablet">nếu bạn muốn trang điểm đẹp, hãy đến với chúng tôi, chuyên
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
                      <h2 class="banner__content-heading">Trang điểm đẹp</h2>
                      <p class="banner__content-descriptions  hide-on-mobile-tablet">nếu bạn muốn trang điểm đẹp, hãy đến với chúng tôi, chuyên
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
            <div class="col l-12">
              <h1 class="heading-title">Dịch vụ trang điểm</h1>
            </div>
            <div class="row">
              <div class="col l-3">
                <div class="service-item">
                  <div class="service-item__hover"> <img src="/assets/image/image-17.png" alt=""
                      class="service-item__img"></div>
                  <h2 class="service-item__heading">trang điểm sự kiện</h2>
                </div>
              </div>
              <div class="col l-3">
                <div class="service-item">
                  <div class="service-item__hover"> <img src="/assets/image/anh-18.png" alt="" class="service-item__img">
                  </div>
                  <h2 class="service-item__heading">trang điểm sinh nhật</h2>
                </div>
              </div>
              <div class="col l-3">
                <div class="service-item">
                  <div class="service-item__hover"> <img src="/assets/image/anh-19.png" alt="" class="service-item__img">
                  </div>
                  <h2 class="service-item__heading">trang điểm chụp hình</h2>
                </div>
              </div>
              <div class="col l-3">
                <div class="service-item">
                  <div class="service-item__hover"> <img src="/assets/image/anh20.png" alt="" class="service-item__img">
                  </div>
                  <h2 class="service-item__heading">trang điểm kỉ yếu</h2>
                </div>
              </div>
  
            </div>
          </div>
        </div>
        <!-- Dịch vụ -->
  
  
        <!-- Về dịch vụ -->
        <div class="service grid wide">
          <div class="row">
            <div class="col l-12">
              <h2 class="heading-title">DỊCH VỤ TRANG ĐIỂM TRỌN GÓI CHO KHÁCH HÀNG TẠI ELLIE NGUYỄN</h2>
            </div>
  
            <div class="row">
              <div class="col l-4">
                <div class="service-item">
                  <img src="/assets/image/anh-1.png" alt="">
                </div>
              </div>
  
              <div class="col l-8">
                <div class="service-item">
                  <p class="service-slide__content-descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada
                    libero, sit amet commodo magna eros quis urna.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Về dịch vụ  -->
  

        <!-- Đánh giá KH -->
        <div class="service-slide">
          <div class="grid wide">
            <div class="row">
              <div class="col l-12">
                <h2 class="heading-title">KHÁCH HÀNG NÓI GÌ VỀ ELLIE NGUYỄN</h2>
              </div>
              
              <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                  <div class="owl-stage">
                    <div class="owl-item">
                      <div class="row">
                        <div class="col l-6">
                          <div class="service-slide__content">
                            <h2 class="service-slide__content-subtext">REAL REVIEWS</h2>
                            <h2 class="service-slide__content-heading text-primary">TRANG ĐIỂM SỰ KIỆN</h2>

                            <h3 class="service-slide__content-heading-3 text-primary">Trần quang thông</h3>
                            <p class="service-slide__content-descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing
                              elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus
                              malesuada libero, sit amet commodo magna eros quis urna.
                            </p>
                            </p>
                            <button class="btn btn-primary outline">Chi tiết</button>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="service-slide__img">
                            <img class="service-slide__img-thumb" src="/assets/image/anh-8.png" alt="">
        
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item">
                      <div class="row">
                        <div class="col l-6">
                          <div class="service-slide__content">
                            <h2 class="service-slide__content-subtext">REAL REVIEWS</h2>
                            <h2 class="service-slide__content-heading text-primary">TRANG ĐIỂM KỈ YẾU</h2>

                            <h3 class="service-slide__content-heading-3 text-primary">Trần quang thông</h3>
                            <p class="service-slide__content-descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing
                              elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus
                              malesuada libero, sit amet commodo magna eros quis urna.
                            </p>
                            </p>
                            <button class="btn btn-primary outline">Chi tiết</button>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="service-slide__img">
                            <img class="service-slide__img-thumb" src="/assets/image/anh-8.png" alt="">
        
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item">
                      <div class="row">
                        <div class="col l-6">
                          <div class="service-slide__content">
                            <h2 class="service-slide__content-subtext">REAL REVIEWS</h2>
                            <h2 class="service-slide__content-heading text-primary">TRANG ĐIỂM SINH NHẬT</h2>

                            <h3 class="service-slide__content-heading-3 text-primary">Trần quang thông</h3>
                            <p class="service-slide__content-descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing
                              elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus
                              malesuada libero, sit amet commodo magna eros quis urna.
                            </p>
                            </p>
                            <button class="btn btn-primary outline">Chi tiết</button>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="service-slide__img">
                            <img class="service-slide__img-thumb" src="/assets/image/anh-8.png" alt="">
        
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
        <!-- Đánh giá KH -->


        <!-- Cam kết Dịch vụ  -->
        <div class="service grid wide">
          <div class="row">
            <div class="col l-12">
              <h2 class="heading-title">ELLIE NGUYỄN CAM KẾT VỚI KHÁCH HÀNG</h2>
            </div>
  
            <div class="row">
              <div class="col l-4">
                <div class="service-item service-item-background">
                  <h3 class="heading-title-3">ELLIE NGUYỄN CAM KẾT VỚI KHÁCH HÀNG</h3>
  
                  <p class="service-item-descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas
                    porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero,
                    sit amet
                    commodo magna eros quis urna.
                  </p>
                </div>
              </div>
  
              <div class="col l-4">
                <div class="service-item service-item-background">
                  <h3 class="heading-title-3">ELLIE NGUYỄN CAM KẾT VỚI KHÁCH HÀNG</h3>
  
                  <p class="service-item-descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas
                    porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero,
                    sit amet
                    commodo magna eros quis urna.
                  </p>
                </div>
              </div>
  
              <div class="col l-4">
                <div class="service-item service-item-background">
                  <h3 class="heading-title-3">ELLIE NGUYỄN CAM KẾT VỚI KHÁCH HÀNG</h3>
  
                  <p class="service-item-descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas
                    porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero,
                    sit amet
                    commodo magna eros quis urna.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Cam kết Dịch vụ  -->
  
  
        <!-- Câu hỏi Dịch vụ -->
        <div class="service grid wide">
          <div class="row">
            <div class="col l-12">
              <h2 class="heading-title">CÁC CÂU HỎI THƯỜNG GẶP KHI SỬ DỤNG DỊCH VỤ TẠI ELLIE NGUYỄN</h2>
            </div>
  
            <div class="row">
              <div class="col l-6">
                <div class="service-item">
                  <div class="row">
  
                    <div class="faq__accordion">
                      <button class="faq__accordion-button ">Section 1</button>
                      <div class="faq__accordion-panel">
                        <p class="faq__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor
                          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>
                    </div>
                    <div class="faq__accordion">
                      <button class="faq__accordion-button">Section 1</button>
                      <div class="faq__accordion-panel">
                        <p class="faq__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor
                          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>
                    </div>
                    <div class="faq__accordion">
                      <button class="faq__accordion-button">Section 1</button>
                      <div class="faq__accordion-panel">
                        <p class="faq__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor
                          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>
                    </div>
                    <div class="faq__accordion">
                      <button class="faq__accordion-button">Section 1</button>
                      <div class="faq__accordion-panel">
                        <p class="faq__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor
                          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
  
              <div class="col l-6">
                <div class="service-item">
                  <img src="/assets/image/anh-1.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Câu hỏi Dịch vụ  -->
        
      </div>
      <!-- Service -->
      <!-- Service -->
  
  
    </div>
    @include('livewire/footer')
  </div>
  <!-- Main -->


  <script src="/node_modules/jquery/dist/jquery.js"></script>
  <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="/assets/js/app.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
</body>

</html>