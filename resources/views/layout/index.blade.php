<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ellie</title> 
   <base href="{{asset('')}}">

  <link rel="shortcut icon" href="/assets/image/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/assets/css/home.css">
  <link rel="stylesheet" href="/assets/css/base.css">
  <link rel="stylesheet" href="/assets/css/grid.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/reponsive.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/animationtext.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


  <link rel="stylesheet" href="/assets/css/animation.css">

  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.theme.green.css" />

</head>

<body>
  <div class="app">
    <!-- header  -->


      <div class="grid">
        @include('livewire/header')
      </div>
    
      <!-- end header  -->
      <div class="container-fluid">

        <div class="grid hero">
          <div class="owl-carousel owl-theme owl-loaded">
            <div class="owl-stage-outer">
              <div class="owl-stage">
                <div class="owl-item">
                  <div class="banner">

                    <img class=" banner__img" src="/assets/image/banner.png" alt="" loading="lazy">  

                    

                    <div class="banner__content">
                      <h2 class="banner__content-subtext tracking-in-expand">Ellie Nguyen</h2>
                      <h2 class="banner__content-heading tracking-in-contract-bck">Trang điểm đẹp</h2>
                      <p class="banner__content-descriptions focus-in-expand ">nếu bạn muốn trang điểm đẹp, hãy đến với chúng tôi, chuyên
                        trang điểm đám cưới, trang điểm sự kiện, trang điểm kỉ yêu, ...</p>
                      <button class="btn btn-primary">Trang điểm</button>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="banner">
                    <img class="banner__img flip-in-hor-bottom" src="/assets/image/banner.png" alt="">
                    <div class="banner__content">
                      <h2 class="banner__content-subtext tracking-in-expand">Ellie Nguyen</h2>
                      <h2 class="banner__content-heading tracking-in-contract-bck">Trang điểm đẹp</h2>
                      <p class="banner__content-descriptions focus-in-expand ">nếu bạn muốn trang điểm đẹp, hãy đến với chúng tôi, chuyên
                        trang điểm đám cưới, trang điểm sự kiện, trang điểm kỉ yêu, ...</p>
                      <button class="btn btn-primary">Trang điểm</button>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="banner">
                    <img class="banner__img flip-in-hor-bottom" src="/assets/image/banner.png" alt="">
                    <div class="banner__content">
                      <h2 class="banner__content-subtext tracking-in-expand">Ellie Nguyen</h2>
                      <h2 class="banner__content-heading tracking-in-contract-bck">Trang điểm đẹp</h2>
                      <p class="banner__content-descriptions focus-in-expand ">nếu bạn muốn trang điểm đẹp, hãy đến với chúng tôi, chuyên
                        trang điểm đám cưới, trang điểm sự kiện, trang điểm kỉ yêu, ...</p>
                      <button class="btn btn-primary">Trang điểm</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div id="service" class="service grid wide">
          <div class="row">
            <div class="col l-12 m-12 c-12">

              <h1 class="heading-title focus-in-contract" data-aos="flip-right"     data-aos-duration="1000"
              >TRANG ĐIỂM ĐẸP</h1>
              
              <!-- <p class="heading-content slide-in-fwd-center">Pick your beauty products today. 50% OFF on the most popular GOOD4ME. Order all
                classy products today!</p> -->

            </div>
            <div class="row">
              <div class="col l-3 m-6 c-6" data-aos="fade-right"  data-aos-duration="1500">
               <a href="/pages/blog-details.html">
                <div class="service-item">
                  <div class="service-item__hover"> <img src="/assets/image/anh-1.png" alt="" class="service-item__img swing-in-top-fwd">
                  </div>
                  <h2 class="service-item__heading">Trang điểm đẹp</h2>
                </div>
               </a>
              </div>
              <div class="col l-3 m-6 c-6" data-aos="fade-up" data-aos-duration="1500">
                <a href="/pages/blog-details.html">
                  <div class="service-item">
                    <div class="service-item__hover"> <img src="/assets/image/anh-2.png" alt="" class="service-item__img swing-in-top-fwd">
                    </div>
                    <h2 class="service-item__heading" >Trang điểm cô dâu</h2>
                  </div>
                </a>
              </div>
              <div class="col l-3 m-6 c-6" data-aos="fade-down" data-aos-duration="1500">
                <a href="/pages/blog-details.html">
                  <div class="service-item">
                    <div class="service-item__hover"> <img src="/assets/image/anh-3.png" alt="" class="service-item__img swing-in-top-fwd">
                    </div>
                    <h2 class="service-item__heading">Trang điểm đám cưới</h2>
                  </div>
                </a>
              </div>
              <div class="col l-3 m-6 c-6" data-aos="fade-left" data-aos-duration="1500">
                <a href="/pages/blog-details.html">
                  <div class="service-item">
                    <div class="service-item__hover"> <img src="/assets/image/anh-4.png" alt="" class="service-item__img swing-in-top-fwd">
                    </div>
                    <h2 class="service-item__heading">Trang điểm nhẹ nhàng</h2>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="about" class="service  wide">
          <div class="grid wide">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                  <h2 class="service-about__heading about__heading"  data-aos="fade-up"     data-aos-duration="1000">Giới thiệu</h2>
                  <p class="service-about_descriptions focus-in-expand " data-aos="zoom-out"  data-aos-duration="1000" style="color: white;">Hằng Thu Makeup Academy - Học viện thương hiệu Make Up chuyên nghiệp được thành lập trên sự Uy Tín và Kinh Nghiệm đào tạo nhiều năm của Ms Hằng Thu. Chúng tôi kiến tạo nên nguồn đam mê học hỏi và phá bỏ giới hạn sáng tạo trong nghệ thuật trang điểm tới các học viên. Sau 10 năm không ngừng nỗ lực mang cái đẹp đi muôn phương, thương hiệu Hằng Thu đã trở thành sự lựa chọn hàng đầu và là cái tên đóng góp không nhỏ trong sự phát triển chung của ngành makeup Việt Nam.
                  </p>
                <div class="background-button" >
                    <button id="video-btn" data-aos="zoom-in"  data-aos-duration="1000"><i class="bi bi-play-circle"></i></button>

                </div>  
                  <!-- Modal -->
                  <div id="video-modal" class="modal" data-aos="zoom-in-up">
                    <div class="modal-content">
                      <span class="close">&times;</span>
                      <iframe class="video-about" src="https://vinacen.vn/frontend/images/video.mp4"></iframe>
                    </div>
                  </div>
                </div>
               
               
                
              
            </div>
          </div >
        </div>
      
        <div class="service-slide grid wide">
          <div class="owl-carousel owl-theme owl-loaded">
            <div class="owl-stage-outer">
              <div class="owl-stage">
                <div class="owl-item">

                  <div class="row">
                    <div class="col l-6 m-6 c-12" data-aos="zoom-in-right"  data-aos-duration="1000">
                      <div class="service-slide__content">
                        <h2 class="service-slide__content-heading" id="service">Chuyên trang điểm cô dâu</h2>
                        <p class="service-slide__content-descriptions">The Good4Me range has been formulated based on
                          scientific & traditional evidence.
                          <br />
                          Our vitamins are here and ready to boost your mood, immunity and overall well-being!
                          <br>
                          Made in New Zealand from local and imported ingredients.
                        </p>
                        </p>
                        <button class="btn btn-primary outline">Trang điểm cô dâu </button>
                      </div>
                    </div>
                    
                    <div class="col l-6 m-6 c-12">
                      <div class="service-slide__img">
                        <img class="service-slide__img-thumb grid-1" src="/assets/image/anh-6.png" alt="" data-aos="fade-down" data-aos-duration="1000">
                        <img class="service-slide__img-thumb grid-2" src="/assets/image/anh-5.png" alt="" data-aos="fade-up-right" data-aos-duration="1000">
                        <img class="service-slide__img-thumb grid-3" src="/assets/image/anh-7.png" alt="" data-aos="fade-left" data-aos-duration="1000">

                      </div>
                    </div>
                  </div>




                </div>
                <div class="owl-item">

                  <div class="row" >
                    <div class="col l-6 m-6 c-12" data-aos="zoom-in-right"  data-aos-duration="1000">
                      <div class="service-slide__content" data-aos="fade-up-left">
                        <h2 class="service-slide__content-heading">Chuyên trang điểm cô dâu</h2>
                        <p class="service-slide__content-descriptions">The Good4Me range has been formulated based on
                          scientific & traditional evidence.
                          <br />
                          Our vitamins are here and ready to boost your mood, immunity and overall well-being!
                          <br/>
                          Made in New Zealand from local and imported ingredients.
                        </p>
                        </p>
                        <button class="btn btn-primary outline">Trang điểm cô dâu </button>
                      </div>
                    </div>
                    <div class="col l-6 m-6 c-12">
                      <div class="service-slide__img">
                        <img class="service-slide__img-thumb grid-1" src="/assets/image/anh-6.png" alt="">
                        <img class="service-slide__img-thumb grid-2" src="/assets/image/anh-5.png" alt="">
                        <img class="service-slide__img-thumb grid-3" src="/assets/image/anh-7.png" alt="">

                      </div>
                    </div>
                  </div>




                </div>
                <div class="owl-item">

                  <div class="row">
                    <div class="col l-6 m-6 c-12" data-aos="zoom-in-right"  data-aos-duration="1000">
                      <div class="service-slide__content">
                        <h2 class="service-slide__content-heading">Chuyên trang điểm cô dâu</h2>
                        <p class="service-slide__content-descriptions">The Good4Me range has been formulated based on
                          scientific & traditional evidence.
                          <br />
                          Our vitamins are here and ready to boost your mood, immunity and overall well-being!
                          <br>
                          Made in New Zealand from local and imported ingredients.
                        </p>
                        </p>
                        <button class="btn btn-primary outline">Trang điểm cô dâu </button>
                      </div>
                    </div>
                    <div class="col l-6 m-6 c-12">
                      <div class="service-slide__img">
                        <img class="service-slide__img-thumb grid-1" src="/assets/image/anh-6.png" alt="">
                        <img class="service-slide__img-thumb grid-2" src="/assets/image/anh-5.png" alt="">
                        <img class="service-slide__img-thumb grid-3" src="/assets/image/anh-7.png" alt="">

                      </div>
                    </div>
                  </div>




                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Khóa học -->
        <div class="service grid wide">
          <div class="row">
            <div class="col l-12 m-12 c-12">
              <h2 class="heading-title" data-aos="flip-right" data-aos-duration="1000">Khóa học Makeup</h2>
            </div>
            <div class="row">
              <div class="col l-3 m-6 c-6" data-aos="fade-right"  data-aos-duration="1500">
                <a href="pages/product.html">
                  <div class="service-item">
                    <div class="service-item__hover"> <img src="/assets/image/image-17.png" alt=""
                        class="service-item__img"></div>
                    <h2 class="service-item__heading">Makeup sự kiện</h2>
                    <div class="service-item__price">
                      <h3 class="service-item__price-new">$ 39</h3>
                      <h3 class="service-item__price-old">$ 49</h3>
  
                    </div>
                    <span class="service-item__price-sale">On sale</span>
                  </div>
                </a>
               
              </div>
              <div class="col l-3 m-6 c-6" data-aos="fade-up" data-aos-duration="1500">
                <a href="pages/product.html">

                  <div class="service-item">
                    <div class="service-item__hover"> <img src="/assets/image/anh-18.png" alt=""
                        class="service-item__img"></div>
                    <h2 class="service-item__heading">Makeup sinh nhật</h2>
                    <div class="service-item__price">
                      <h3 class="service-item__price-new">$ 39</h3>
                      <h3 class="service-item__price-old">$ 49</h3>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col l-3 m-6 c-6" data-aos="fade-down" data-aos-duration="1500">
                <a href="pages/product.html">

                  <div class="service-item">
                    <div class="service-item__hover"> <img src="/assets/image/anh-19.png" alt=""
                        class="service-item__img"></div>
                    <h2 class="service-item__heading">Makeup chụp hình</h2>
                    <div class="service-item__price">
                      <h3 class="service-item__price-new">$ 39</h3>
                      <h3 class="service-item__price-old">$ 49</h3>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col l-3 m-6 c-6" data-aos="fade-left" data-aos-duration="1500">
                <a href="pages/product.html">
                  
                  <div class="service-item">
                    <div class="service-item__hover"> <img src="/assets/image/anh20.png" alt="" class="service-item__img">
                    </div>
                    <h2 class="service-item__heading">Makeup kỉ yếu</h2>
                    <div class="service-item__price">
                      <h3 class="service-item__price-new">$ 39</h3>
                      <h3 class="service-item__price-old">$ 49</h3>
                    </div>
                  </div>
                </a>
              </div>

            </div>
           
          </div>
        </div>

        <!-- Đào tạo -->
        <div class="service-slide">
          <div class="grid wide">
            <div class="owl-carousel owl-theme owl-loaded">
              <div class="owl-stage-outer">
                <div class="owl-stage">
                  <div class="owl-item">
                    <div class="row">
                      <div class="col l-6 m-7 c-12"  data-aos="fade-right"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine">
                        <div class="service-slide__content">
                          <a href="/pages/blog-details.html">
                          <h2 class="service-slide__content-subtext">REAL REVIEWS</h2>
                          <h2 class="service-slide__content-heading text-primary">Đào tạo trang điểm</h2>
                          <p class="service-slide__content-descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                          </p>
                            <button class="btn btn-primary outline">Trang điểm cô dâu </button>
                          </a>
                        </div>
                      </div>
                      <div class="col l-4 m-5 c-12" data-aos="fade-left"
                      data-aos-anchor="#example-anchor"
                      data-aos-offset="500"
                      data-aos-duration="500">
                        <div class="service-slide__img">
                          <a href="/pages/blog-details.html">
                            <img class="service-slide__img-thumb" src="/assets/image/anh-8.png" alt="">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="owl-item">
                    <div class="row">
                      <div class="col l-6 m-7 c-12"  data-aos="fade-right"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine">
                        <div class="service-slide__content">
                          <a href="/pages/blog-details.html">
                          <h2 class="service-slide__content-subtext">REAL REVIEWS</h2>
                          <h2 class="service-slide__content-heading text-primary" id="learn" >Đào tạo trang điểm</h2>
                          <p class="service-slide__content-descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                          </p>
                            <button class="btn btn-primary outline">Trang điểm cô dâu </button>
                          </a>
                        </div>
                      </div>
                      <div class="col l-4 m-5 c-12" data-aos="fade-left"
                      data-aos-anchor="#example-anchor"
                      data-aos-offset="500"
                      data-aos-duration="500">
                        <div class="service-slide__img">
                          <a href="/pages/blog-details.html">
                            <img class="service-slide__img-thumb" src="/assets/image/anh-8.png" alt="">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="row">
                      <div class="col l-6 m-7 c-12"  data-aos="fade-right"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine">
                        <div class="service-slide__content">
                          <a href="/pages/blog-details.html">
                          <h2 class="service-slide__content-subtext">REAL REVIEWS</h2>
                          <h2 class="service-slide__content-heading text-primary">Đào tạo trang điểm</h2>
                          <p class="service-slide__content-descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                          </p>
                            <button class="btn btn-primary outline">Trang điểm cô dâu </button>
                          </a>
                        </div>
                      </div>
                      <div class="col l-4 m-5 c-12" data-aos="fade-left"
                      data-aos-anchor="#example-anchor"
                      data-aos-offset="500"
                      data-aos-duration="500">
                        <div class="service-slide__img">
                          <a href="/pages/blog-details.html">
                            <img class="service-slide__img-thumb" src="/assets/image/anh-8.png" alt="">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
            </div>
          </div >
        </div>


        <div class="service grid wide">
          <div class="row">
            <div class="col l-12 m-12 c-12">
              <h2 class="heading-title" data-aos="flip-right" data-aos-duration="2000">Đào tạo trang điểm Đà nẵng</h2>
            </div>
            <div class="row">
              <div class="col l-3 m-6 c-6" data-aos="fade-left">
                <a href="/pages/blog-details.html">
                  <div class="service-item">
                    <div class="service-item__hover"> <img src="/assets/image/anh-21.png" alt="" class="service-item__img">
                    </div>
                    <h2 class="service-item__heading">Makeup kỉ yếu </h2>
                    <div class="service-item__price">
                      <h3 class="service-item__price-new">$ 39</h3>
                      <h3 class="service-item__price-old">$ 49</h3>
                    </div>
                    <span class="service-item__price-sale">On sale</span>
                  </div>
                </a>
              </div>
        
        
              <div class="col l-3 m-6 c-6" data-aos="fade-left">
                <a href="/pages/blog-details.html">
                  <div class="service-item">
                    <div class="service-item__hover"> <img src="/assets/image/anh-22.png" alt="" class="service-item__img">
                    </div>
                    <h2 class="service-item__heading">Makeup cá nhân</h2>
                    <div class="service-item__price">
                      <h3 class="service-item__price-new">$ 39</h3>
                      <h3 class="service-item__price-old">$ 49</h3>
                    </div>
                  </div>
                </a>
              </div>
        
              <div class="col l-3 m-6 c-6" data-aos="fade-left">
                <a href="/pages/blog-details.html">
                  <div class="service-item">
                    <div class="service-item__hover"> <img src="/assets/image/anh-23.png" alt="" class="service-item__img">
                    </div>
                    <h2 class="service-item__heading">Makeup sự kiện, sinh nhật </h2>
                    <div class="service-item__price">
                      <h3 class="service-item__price-new">$ 39</h3>
                      <h3 class="service-item__price-old">$ 49</h3>
                    </div>
                  </div>
                </a>
              </div>
        
              <div class="col l-3 m-6 c-6">
                <div class="service-item" data-aos="flip-left" data-aos-duration="1000">
                  <a href="/pages/blog-details.html">
                    <div class="service-item__hover"> <img src="/assets/image/anh-24.png" alt="" class="service-item__img">
                    </div>
                    <h2 class="service-item__heading">Makeup đám cưới</h2>
                    <div class="service-item__price">
                      <h3 class="service-item__price-new">$ 39</h3>
                      <h3 class="service-item__price-old">$ 49</h3>
                    </div>
                </div>
                </a>
        
              </div>
            </div>
            <div class="row">
              <div class="col l-12 m-12 c-12">
                <a href="/pages/blog-details.html">
                  <button class="service-btn btn btn-primary outline">Học Trang điểm</button>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Bí quyết -->
        <div class="service" >
          <div class="grid wide">
            <div class="row">
              <div class="col l-12 m-12 c-12"  data-aos="fade-up">
                <h2 class="heading-title focus-in-contract-bck" data-aos="fade-up" data-aos-duration="1000"
                data-aos-anchor-placement="top-bottom" id="blog">BÍ QUYẾT TRANG ĐIỂM</h2>
              </div>
            </div>
            <div class="row">
              <div class="col l-12 m-12 c-12">
                <div id="blog-post" class="owl-carousel owl-theme owl-loaded">
                  <div class="owl-stage-outer">
                    <div class="owl-stage">
                      <div class="owl-item">
                        <a href="pages/blog-details.html">
                  
                          <div class="service-item">
                            <div class="service-item__hover"> <img src="/assets/image/anh-21.png" alt=""
                                class="service-item__img"></div>
                                <span class="date">August 26, 2020</span>
                            <h2 class="service-item__heading">Blog post 1</h2>
                              <p class="service-item__descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere,</p>
                            <button class="btn btn-primary read-more">Read more </button>
                          </div>
                        </a>
                      </div>
                      <div class="owl-item">
                        <a href="pages/blog-details.html">
                  
                          <div class="service-item">
                            <div class="service-item__hover"> <img src="/assets/image/anh-21.png" alt=""
                                class="service-item__img"></div>
                                <span class="date">August 26, 2020</span>
                            <h2 class="service-item__heading">Blog post 1</h2>
                              <p class="service-item__descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere,</p>
                            <button class="btn btn-primary read-more">Read more </button>
                          </div>
                        </a>
                      </div>
                      <div class="owl-item">
                        <a href="pages/blog-details.html">
                  
                          <div class="service-item">
                            <div class="service-item__hover"> <img src="/assets/image/anh-21.png" alt="" loading="lazy"
                                class="service-item__img"></div>
                                <span class="date">August 26, 2020</span>
                            <h2 class="service-item__heading">Blog post 1</h2>
                              <p class="service-item__descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere,</p>
                            <button class="btn btn-primary read-more">Read more </button>
                          </div>
                        </a>
                      </div>
                      <div class="owl-item">
                        <a href="pages/blog-details.html">
                  
                          <div class="service-item">
                            <div class="service-item__hover"> <img src="/assets/image/anh-21.png" alt="" loading="lazy"
                                class="service-item__img"></div>
                                <span class="date">August 26, 2020</span>
                            <h2 class="service-item__heading">Blog post 1</h2>
                              <p class="service-item__descriptions">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere,</p>
                            <button class="btn btn-primary read-more">Read more </button>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
      
                </div>
              </div>
            </div>
            
          </div >
        </div>
        
        <!-- Tư vấn -->
        <div id="contact" class="grid wide form-contact">
          <div class="row ">
            <div class="col l-12 m-12 c-12">
              <h2 class="form-heading" id="contact">Để lại thông tin để được tư vấn</h2>
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
      </div>

      @include('livewire/footer')
    </div>
  </div>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="/node_modules/jquery/dist/jquery.js"></script>
  <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="/assets/js/app.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
  <script src="/assets/js/lazyloadingscoll.js"></script>
 

</body>

</html>