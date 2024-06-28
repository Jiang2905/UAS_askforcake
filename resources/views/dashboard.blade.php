<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASKFORCAKE.iD</title>

    <!-- swiper link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- cdn icon link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file  -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>

<body>

    <!-- header section start here  -->
    <header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src="{{asset('LOGO.jpg')}}" alt=""></a>
            <h1 class="logoName">ASKFORCAKE.iD </h1>
        </div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#product">product</a>
            <a href="#blogs">blogs</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <form action="/login" method="get">
                <button  class="login"><i class="fas fa-sign-in-alt"></i> Login</button>
            </form>
        </nav>

        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <i class="fas fa-bars" id="menu-bar"></i>
        </div>

        <div class="search">
            <input type="search" placeholder="search...">
        </div>
    </header>
    <!-- header section end here  -->

    <!-- home section start here  -->
    <section class="home" id="home">
        <div class="homeContent">
            <h2>Delicious Cake for Everyone </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum excepturi doloribus, fuga quod deserunt
                recusandae?</p>
            <div class="home-btn">
                <a href="#"><button>see more</button></a>
            </div>
        </div>
    </section>

    <!-- home section end here  -->

    <!-- product section start here  -->
    <section class="product" id="product">
        <div class="heading">
            <h2>Our Exclusive Products</h2>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="{{asset('images/RED CAKE.jpg')}}" alt="">
                    </div>
                    <div class="product-content">
                        <h3>REDCake</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <form action="https://wa.me/+628979248688" method="GET">
                                <button >Order Now </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="{{asset('images/MIXCAKE.jpg')}}" alt="">
                    </div>
                    <div class="product-content">
                        <h3>MIXCAKE</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
            
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="{{asset('images/COUPLECAKE.jpg')}}" alt="">
                    </div>
                    <div class="product-content">
                        <h3>COUPLECAKE</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="{{asset('images/SHAPE.jpg')}}" alt="">
                    </div>
                    <div class="product-content">
                        <h3>List </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="{{asset('images/SHAPE2.jpg')}}" alt="">
                    </div>
                    <div class="product-content">
                        <h3>LIST 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="{{asset('images/DECORATION.jpg')}}" alt="">
                    </div>
                    <div class="product-content">
                        <h3>DECORATION</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                
            
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- product section end here  -->

    <!-- blogs section start here  -->
    <section class="blogs" id="blogs">

        <div class=" swiper blogs-row">
            <div class="swiper-wrapper">
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="{{asset('images/LOGO.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>Mirror Glaze cake & Enternet Cake </h3>
                        <p>dengan pembuatan Cake yang di buat kami membuat cake eskrim yang bervariasi warna</p>
                        <p>Permintaan dan kesenengan pelangaan adalah misi kita nomor 1.</p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="{{asset('images/blog-img2.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>Mirror Glaze cake & Enternet Cake </h3>
                        <p>dengan pembuatan Cake yang di buat kami membuat cake eskrim yang bervariasi warna</p>
                        <p>Permintaan dan kesenengan pelangaan adalah misi kita nomor 1.</p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="{{asset('images/blog-img2.png')}}" alt="">
                    </div>
                    <div class="content">
                        <h3>Mirror Glaze cake & Enternet Cake </h3>
                        <p>dengan pembuatan Cake yang di buat kami membuat cake eskrim yang bervariasi warna</p>
                        <p>Permintaan dan kesenengan pelangaan adalah misi kita nomor 1.</p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>


        </div>
    </section>

    <!-- blogs section ends here  -->

    <!-- newsletter section start here  -->

    <section class="newsletter">
        <form action="">
            <h3>subscribe for latest update</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="button" value="subscribe" class="box2">
        </form>
    </section>
    <!-- newsletter section ends here  -->

    <!-- review section start here  -->
    <section class="review" id="review">
        <div class="heading">
            <h2>client review</h2>
        </div>


        <div class=" swiper review-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto
                            quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="{{asset('images/client1.jpg')}}" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Hardy Devid</h3>
                            <p>UI / UX designer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto
                            quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="{{asset('images/client1.jpg')}}" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Hardy Devid</h3>
                            <p>UI / UX designer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto
                            quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="{{asset('images/client1.jpg')}}" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Hardy Devid</h3>
                            <p>UI / UX designer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, perferendis architecto
                            quasi eveniet aliquam sed?</p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="{{asset('images/client1.jpg')}}" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Hardy Devid</h3>
                            <p>UI / UX designer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>
    <!-- review section ends here  -->

    <!-- footer section start here  -->

    <footer class="footer" id="contact">
        <div class="box-container">
            <div class="mainBox">
                <div class="content">
                    <a href="#"><img src="images/logo.png" alt=""></a>
                    <h1 class="logoName"> ASKFORCAKE </h1>
                </div>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta accusamus maxime quod.</p>

            </div>
            <div class="box">
                <h3>Quick link</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>Home</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>product</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>blogs</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>review</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>contact</a>

            </div>
            <div class="box">
                <h3>Extra link</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>Account info</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>order item</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>payment method</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>our  services</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="https://wa.me/+628979248688"> <i class="fas fa-phone"></i>08979248688</a>
                <a href="https://msha.ke/askforcake"> <i class="fas fa-envelope"></i>msha.ke/askforcake</a>

            </div>

        </div>
        <div class="share">
            <a href="https://www.youtube.com/results?search_query=shanne+octavia" class="fab fa-youtube"></a>
            <a href="https://www.tiktok.com/@shanneoctavia?is_from_webapp=1&sender_device=pc" class="fab fa-tiktok"></a>
            <a href="https://www.instagram.com/askforcake.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="fab fa-instagram"></a>
            <a href="https://wa.me/+628979248688" class="fab fa-whatsapp"></a>
        </div>
        <div class="credit">
            created by <span>Ms. Shanne Designer </span> |all rights reserved ! 
        </div>
    </footer>










    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file  -->
    <script src="index.js"></script>


</body>

</html>