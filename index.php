<?php 
    define("Title","HOME");
?> 
<?php include('includes/header.php'); ?>

<section class="application_popup modal" id="ex1">
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter your full name">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="" placeholder="Enter your email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="email">Address</label>
                <input type="email" class="form-control" id="" placeholder="Enter your full address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fullname">Phone Number</label>
                <input type="text" class="form-control" id="" placeholder="Enter your phone number">
            </div>
        </div>
        <div class="form-row">
            <label for="message">Query</label>
            <textarea class="form-control" id="" rows="3" placeholder="Enter your query"></textarea>
        </div>
        <button type="submit" class="btn">SUBMIT</button>
    </form>
</section>

<section class="head_slider">
    <div class="slider">
        <div class="one">
            <div class="text"><h1>Study</h1></div>
            <div class="sub-text"><h2>Aboard program</h2></div>
            <a href="#">APPLY NOW</a>
        </div>
        <div class="two">
            <div class="text"><h1>Study</h1></div>
            <div class="sub-text"><h2>Aboard program</h2></div>
            <a href="#">APPLY NOW</a>
        </div>
        <div class="three">
            <div class="text"><h1>Study</h1></div>
            <div class="sub-text"><h2>Aboard program</h2></div>
            <a href="#">APPLY NOW</a>
        </div>
    </div>
</section>

<section class="top_intro">
    <div class="container">
        <div class="row d-flex justify-content-center box-1">
            <div class="col-sm-10 text-center">
                <h1>Who we are !</h1>
            </div>
            <div class="logo">
                <img src="assets_front/img/ilogo.png" alt="">
            </div>
        </div>
        <div class="row d-flex justify-content-center box-2">
            <div class="col-sm-8">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore totam at aliquid veniam minus ea ipsa maiores inventore reprehenderit dolores neque a repellendus dolor eum, labore, illo adipisci perferendis, libero explicabo porro tempora expedita similique. Ipsam molestiae numquam quisquam, pariatur similique suscipit accusantium soluta, dicta, praesentium deleniti alias. Maiores, at.</p>
            </div>
        </div>
    </div>
</section>

<section class="service">
    <div class="container">
        <div class="row">
            <div class="title col-sm-12 col-md-5 d-flex align-items-center flex-column justify-content-center">
                <h1>Our Service</h1>
                <p>THE SERVICE YOU EXPECT, THE QUALITY YOU DESERVE</p>
                <a href="#">Contact Us</a>
            </div>
            <div class="service_wrap col-sm-12 col-md-7">
                <div class="row">
                    <div class="service_box col-sm-5 img_wrapper" style="background: url('assets_front/img/welcome1.jpg');">
                        <div class="service_title">
                            <h6>COUNSELING</h6>
                        </div>
                        <div class="service_content">
                            <h6>COUNSELING</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, natus.</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                    <div class="service_box col-sm-5 img_wrapper" style="background: url('assets_front/img/welcome3.jpg');">
                        <div class="service_title">
                            <h6>VISA AND DOCUMENTATION</h6>
                        </div>
                        <div class="service_content">
                            <h6>VISA AND DOCUMENTATION</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, natus.</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                    <div class="service_box col-sm-5 img_wrapper" style="background: url('assets_front/img/welcome4.jpg');">
                        <div class="service_title">
                            <h6>INTERVIEW ASSISTANCE</h6>
                        </div>
                        <div class="service_content">
                            <h6>INTERVIEW ASSISTANCE</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, natus.</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                    <div class="service_box col-sm-5 img_wrapper" style="background: url('assets_front/img/welcome5.jpg');">
                        <div class="service_title">
                            <h6>PRE-DEPARTURE GUIDANCE</h6>
                        </div>
                        <div class="service_content">
                            <h6>PRE-DEPARTURE GUIDANCE</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, natus.</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="country">
    <div class="img_wrapper" style="background: url('assets_front/img/Tmap2.png');"></div>
    <div class="country_wrap container text-center">
        <div class="country_top">
            <div>
                <h1>STUDY ABROAD</h1>
                <p>Your Choice, Our Support</p>
            </div>
            <div class="logo">
                <img src="assets_front/img/Tilogo.png" alt="">
            </div>
        </div>
        <div class="country-slider owl-carousel owl-theme" id="country_carousel">
            <div class="box japan">
                <div class="country_name"><a href="">Japan</a></div>
            </div>
            <div class="box uk">
                <div class="country_name"><a href="">UK</a></div>
            </div>
            <div class="box usa">
                <div class="country_name"><a href="">USA</a></div>
            </div>
            <div class="box canada">
                <div class="country_name"><a href="">CANADA</a></div>
            </div>
            <div class="box aust">
                <div class="country_name"><a href="">AUSTRALIA</a></div>
            </div>
            <div class="box newz">
                <div class="country_name"><a href="">NEW ZEALAND</a></div>
            </div>
        </div>
    </div>
</section>

<section class="counter">
    <div class="container">
        <!-- <div class="counter_top_wrap">
            <div class="counter_top">
                <p>We have satisfied clients in different parts of the world. We are partnered with different universities and have numerous students studying and achieving their goals.</p>
            </div>
            <div class="logo">
                <img src="assets_front/img/ilogo.png" alt="">
            </div>
        </div> -->
        <div class="row">
            <div class="count_wrap col-sm-3">
                <div class="count_box"><div class="count">100</div></div>
                <div class="rightborder"><h6>Country</h6></div>
            </div>
            <div class="count_wrap col-sm-3">
                <div class="count_box"><div class="count">100</div></div>
                <div class="rightborder"><h6>Students</h6></div>
            </div>
            <div class="count_wrap col-sm-3">
                <div class="count_box"><div class="count">100</div></div>
                <div class="rightborder"><h6>Teachers</h6></div>
            </div>
            <div class="count_wrap col-sm-3">
                <div class="count_box"><div class="count">100</div></div>
                <div><h6>Courses</h6></div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row">
            <!-- <div class="mb-auto testimonials_top">
                <h1>Trusted by many people</h1>
            </div> -->
            <div class="comment_bg d-flex align-items-end ">
                <i class="fas fa-comments"></i>
            </div>
            <div class="col-sm-6 owl-carousel owl-theme d-flex align-items-end" id="testimonial_carousel">
                <div class="item">
                    <div class="intro d-flex align-items-center">
                        <div class="image"><img src="assets_front/img/client-4.jpg" alt=""></div>
                        <div class="info">
                            <h5>Name</h5>
                            <p>Country</p>
                            <p>University</p>
                        </div>
                    </div>
                    <div class="words">
                        <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo commodi tenetur labore fuga! Corporis error ullam quas, saepe tempore facilis. <i class="fas fa-quote-right"></i></p>
                    </div>
                </div>
                <div class="item">
                    <div class="intro d-flex align-items-center">
                        <div class="image"><img src="assets_front/img/client-3.jpg" alt=""></div>
                        <div class="info">
                            <h5>Name</h5>
                            <p>Country</p>
                            <p>University</p>
                        </div>
                    </div>
                    <div class="words">
                        <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo commodi tenetur labore fuga! Corporis error ullam quas, saepe tempore facilis. <i class="fas fa-quote-right"></i></p>
                    </div>
                </div>
                <div class="item">
                    <div class="intro d-flex align-items-center">
                        <div class="image"><img src="assets_front/img/client-5.jpg" alt=""></div>
                        <div class="info">
                            <h5>Name</h5>
                            <p>Country</p>
                            <p>University</p>
                        </div>
                    </div>
                    <div class="words">
                        <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo commodi tenetur labore fuga! Corporis error ullam quas, saepe tempore facilis. <i class="fas fa-quote-right"></i></p>
                    </div>
                </div>
                <div class="item">
                    <div class="intro d-flex align-items-center">
                        <div class="image"><img src="assets_front/img/client-2.jpg" alt=""></div>
                        <div class="info">
                            <h5>Name</h5>
                            <p>Country</p>
                            <p>University</p>
                        </div>
                    </div>
                    <div class="words">
                        <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo commodi tenetur labore fuga! Corporis error ullam quas, saepe tempore facilis. <i class="fas fa-quote-right"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <div class="news_top">
            <h1>NEWS & EVENTS</h1>
            <p>Keep yourself update</p>
        </div>
        <div class="news_wrapper owl-carousel owl-theme" id="news_carousel">
            <div class="news_item">
                <div class="new_image img_wrapper" style="background: url('assets_front/img/news1.jpg');" ></div>
                <div class="date"><span>15 MAY</span></div>
                <div class="new_content">
                    <h4>Title for news</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odio repellendus dignissimos voluptatum fuga magni harum veritatis dolor reiciendis quasi.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <div class="news_item">
                <div class="news_image img_wrapper" style="background: url('assets_front/img/news2.jpg');" ></div>
                <div class="date"><span>20 JAN</span></div>
                <div class="new_content">
                    <h4>Title for news</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odio repellendus dignissimos voluptatum fuga magni harum veritatis dolor reiciendis quasi.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <div class="news_item">
                <div class="new_image img_wrapper" style="background: url('assets_front/img/news3.jpg');" ></div>
                <div class="date"><span>30 OCT</span></div>
                <div class="new_content">
                    <h4>Title for news</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odio repellendus dignissimos voluptatum fuga magni harum veritatis dolor reiciendis quasi.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <div class="news_item">
                <div class="new_image img_wrapper" style="background: url('assets_front/img/news2.jpg');" ></div>
                <div class="date"><span>10 NOV</span></div>
                <div class="new_content">
                    <h4>Title for news</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odio repellendus dignissimos voluptatum fuga magni harum veritatis dolor reiciendis quasi.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="university_partners">
    <div class="container">
        <div class="university_top">
            <div class="text-center">
                <h1>PARTNERING UNIVERSITIES</h1>
            </div>
            <div class="logo">
                <img src="assets_front/img/ilogo.png" alt="">
            </div>
            <div class="text-center">
                <p>Partnering with More Than 100 Universities Globally</p>
            </div>
        </div>
        <div class="owl-carousel owl-theme" id="university_carousel">
            <div class="item img_wrapper" style="background: url('assets_front/img/university6.jpg');"></div>
            <div class="item img_wrapper" style="background: url('assets_front/img/university5.jpg');"></div>
            <div class="item img_wrapper" style="background: url('assets_front/img/university3.jpg');"></div>
            <div class="item img_wrapper" style="background: url('assets_front/img/university7.jpg');"></div>
            <div class="item img_wrapper" style="background: url('assets_front/img/university2.jpg');"></div>
            <div class="item img_wrapper" style="background: url('assets_front/img/university6.jpg');"></div>
            <div class="item img_wrapper" style="background: url('assets_front/img/university4.jpg');"></div>
        </div>
    </div>
</section>

<!-- <section class="class">
    <div class="container">
        <div class="row class_title d-flex justify-content-center box-1">
            <div class="col-sm-8 text-center">
                <h1>Test Preparation</h1>
            </div>
            <div class="logo">
                <img src="assets_front/img/ilogo.png" alt="">
            </div>
        </div>
        <div class="owl-carousel" id="class_carousel">
            <div class="item">
                <div class="class_title img_wrapper d-flex align-items-end"><h3>GMAT</h3></div>
                <div class="class_text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, sapiente.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <div class="item">
                <div class="class_title img_wrapper d-flex align-items-end"><h3>GRE</h3></div>
                <div class="class_text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, sapiente.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <div class="item">
                <div class="class_title img_wrapper d-flex align-items-end"><h3>ILETS</h3></div>
                <div class="class_text">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisis! Animi provident ducimus odio!</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <div class="item">
                <div class="class_title img_wrapper d-flex align-items-end"><h3>TOFEL</h3></div>
                <div class="class_text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, sapiente.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <div class="item">
                <div class="class_title img_wrapper d-flex align-items-end"><h3>SAT</h3></div>
                <div class="class_text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, adipisci.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <div class="item">
                <div class="class_title img_wrapper d-flex align-items-end"><h3>ACT</h3></div>
                <div class="class_text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, illo.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php include('includes/footer.php'); ?>