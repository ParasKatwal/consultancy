<?php 
    define("Title","CONTACT US");
?> 
<?php include('includes/header.php'); ?>

<section class="contact_us">
    <div class="inner_page_background img_wrapper d-flex align-items-end">
        <div class="m-5">
            <h1>CONTACT US</h1>
            <p><a href="index.php">Home</a> >> Contact</p>
        </div>
    </div>
    <div class="container p-4">
        <div class="row">
            <div class="logo_notch_wrap col-sm-12 d-flex flex-column justify-content-center align-items-center p-5">
                <div><h1>HAVE SOME QUESTIONS?</h1></div>
                <div class="logo text-center">
                   <img src="assets_front/img/U.svg" alt="">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center form_wrapper">
            <div class="col-sm-6">
                <img src="assets_front/img/chat.png" alt="">
            </div>
            <div class="col-sm-6">
                <form class="text-center">
                    <div class="form-row">
                         <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="" placeholder="Enter your full name">
                        </div>  
                    </div>
                    <div class="form-row">  
                        <div class="form-group col-md-10">
                            <input type="email" class="form-control" id="" placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="" placeholder="Enter your address">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control" id="" placeholder="Enter your phone no.">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <textarea class="form-control" id="" rows="3" placeholder="Enter your message"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>


        </div>
    </div>
    
</section>

<?php include('includes/footer.php'); ?>