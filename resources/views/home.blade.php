<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css') }}"/>

    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css') }}" />

    <!-- file css link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" /> 
</head>
<body>
    <!-- header section start -->
    <section class="header">
        <a href="{{ url('/') }}" class="logo">Hieu Travel</a>

        <nav class="navbar">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/package') }}">Packages</a>
            <a href="{{ url('/book') }}">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section end -->

    <!-- home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url({{ asset('images/cho-noi.jpg') }}) no-repeat">
                    <div class="content">
                        <span>
                            Khám phá, Du lịch
                        </span>
                            <h3>Du lịch Cần Thơ và nhiều hơn nữa</h3>
                                <a href="package.php" class="btn">Khám phá nhiều hơn</a>
                    </div>
                </div>


                <div class="swiper-slide slide" style="background: url({{ asset('images/home_slider_1.2.jpg') }}) no-repeat">
                    <div class="content">
                        <span>
                            Khám phá, Du lịch
                        </span>
                            <h3>Khám phá những danh lam thắng cảnh đặc trưng</h3>
                                <a href="package.php" class="btn">Khám phá nhiều hơn</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url({{ asset('images/home_slider_1.3.jpg') }}) no-repeat">
                    <div class="content">
                        <span>
                            Khám phá, Du lịch
                        </span>
                            <h3>Làm cho chuyến tham quan của bạn đáng giá</h3>
                                <a href="package.php" class="btn">Khám phá nhiều hơn</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section end -->

    <!-- service start -->
    <section class="services">
        <h1 class="heading-title">Dịch vụ của chúng tôi</h1>

        <div class="box-container">
            <div class="box">
                <img src="images/tour-guide.png" alt="">
                <h3>Hướng dẫn viên du lịch</h3>
            </div>

            <div class="box-container">
            <div class="box">
                <img src="images/conference-room.png" alt="">
                <h3>Du lịch hội nghị</h3>
            </div>

            <div class="box-container">
            <div class="box">
                <img src="images/kayak.png" alt="">
                <h3>Du lịch sông nước-miệt vườn</h3>
            </div>

            <div class="box-container">
            <div class="box">
                <img src="images/castle.png" alt="">
                <h3>Du lịch văn hóa-lịch sử</h3>
            </div>

            <div class="box-container">
            <div class="box">
                <img src="images/ecotourism.png" alt="">
                <h3>Du lịch sinh thái</h3>
            </div>

            <div class="box-container">
            <div class="box">
                <img src="images/backpacker.png" alt="">
                <h3>Du lịch tự túc</h3>
            </div>

        </div>

    </section>    
     <!-- service end -->

    <!-- about start  -->
     <section class="home-about">
        <div class="image">
            <img src="images/sheraton.jpg" alt="">
        </div>

        <div class="content">
            <h3>Về chúng tôi</h3>
            <p>Hieu Travel là một công ty du lịch hàng đầu tại thành phố Cần Thơ, mang đến các chương trình du lịch độc đáo và chuyên nghiệp, giúp bạn khám phá vẻ đẹp và văn hóa đặc sắc của miền Tây Nam Bộ Việt Nam.</p>
            <a href="/about" class="btn">đọc thêm</a>
        </div>
     </section>
    <!-- about end -->

    <!-- package start -->
     <section class="home-packages">
        <h1 class="heading-title">GÓI DỊCH VỤ CỦA CHÚNG TÔI</h1>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/floating.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Tour tham quan chợ nổi, khu sinh thái</h3>
                    <p>Lịch trình: 2 ngày 1 đêm</p>
                    <p>Khởi hành: 17/8/2024</p>
                    <a href="{{ url('/book') }}" class="btn">Đặt bây giờ</a>
                </div>
            </div>
            


            <div class="box">
                <div class="image">
                    <img src="images/cho-dem.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Tour tham quan Bến Ninh Kiều</h3>
                    <p>Lịch trình: 3 ngày 2 đêm</p>
                    <p>Khởi hành: 21/8/2024</p>
                    <a href="{{ url('/book') }}" class="btn">Đặt bây giờ</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/con-son.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Tour tham quan Cồn Sơn</h3>
                    <p>Lịch trình: 3 ngày 2 đêm</p>
                    <p>Khởi hành: 27/8/2024</p>
                    <a href="{{ url('/book') }}" class="btn">Đặt bây giờ</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="{{ url('/package') }}" class="btn">Tải thêm</a></div>

     </section>
    <!-- package end -->

    <!-- offer start -->
     <section class="home-offer">
        <div class="content">
            <h3>LÊN TỚI 25%</h3>
            <p>Duy nhất hôm nay! Khám phá các gói tour với Hieu Travel và nhận ngay ưu đãi hấp dẫn cho nhóm tour đông khách khi trải nghiệm thành phố Cần Thơ -  cơ hội du lịch tiết kiệm và trải nghiệm không giới hạn!</p>
            <a href="book.php" class="btn">Đặt ngay</a>
        </div>
     </section>
    <!-- offer end -->  
     
    <!-- footer start -->
     <section class="footer">
         <div class="box-container">

            <div class="box">
                <h3>Đường dẫn</h3>
                <a href="{{ url('/') }}"><i class="fas fa-angle-right"></i>home</a>
                <a href="{{ url('/about') }}"><i class="fas fa-angle-right"></i>about</a>
                <a href="{{ url('/package') }}"><i class="fas fa-angle-right"></i>package</a>
                <a href="{{ url('/book') }}"><i class="fas fa-angle-right"></i>book</a>
            </div>


            <div class="box">
                <h3>Liên kết phụ</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Đặt câu hỏi</a>
                <a href="#"><i class="fas fa-angle-right"></i>Về chúng tôi</a>
                <a href="#"><i class="fas fa-angle-right"></i>Chính sách bảo mật</a>
                <a href="#"><i class="fas fa-angle-right"></i>Điều khoản sử dụng</a>
            </div>


            <div class="box">
                <h3>Thông tin liên lạc</h3>
                <a href="#"><i class="fas fa-phone"></i>0911-60-10-55</a>
                <a href="#"><i class="fas fa-phone"></i>02923-11-86-86</a>
                <a href="#"><i class="fas fa-envelope"></i>hieutravel@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Can Tho, Viet Nam</a>
            </div>
            
            <div class="box">
                <h3>Theo dõi chúng tôi</h3>
                <a href="https://www.facebook.com/profile.php?id=61561010112968&mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="https://www.instagram.com/_katotravel?igsh=Z2NqN3NhcXgzNG95&utm_source=qr" target="_blank"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
            </div>         
            
         </div>

         <div class="credit"> Created by <span>hieuTravel</span></div>

     </section>
    <!-- footer end -->    
     

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- file js -->
     <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
