@extends('frontend.inc.layouts')
@section('title','Home Page')

<div id="contact-section">
    <div class="container">
        <h2 class="contact_title">
            Contact Us
        </h2>

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="contact_area_text">
                    <h6>56/8 Panthapath, Dhanmondi, Dhaka</h6>
                    <br>
                    <div class="contact-text-elements">
                        <h6><a href="javascript:void (0)">+8801841136251 </a>(Whatsapp)</h6>
                        <p>Mon to Fri 9 am to 6 pm</p>
                    </div>
                    <br>
                    <div class="contact-text-elements">
                        <h6>support@spondonit.com</h6>
                        <p>Mon to Fri 9 am to 6 pm</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="contact-box">
                    <form action="" method="POST">
                        <div class="mb-4">
                            <input type="text" name="name" placeholder="Enter your name *" class="form-control" >
                        </div>
                        <div class="mb-4">
                            <input type="email" name="email" placeholder="Enter your email *" class="form-control" >
                        </div>
                        <div class="mb-4">
                            <input type="text" name="subject" placeholder="Enter your subject *" class="form-control" >
                        </div>
                        <div class="mb-4">
                            <textarea name="message" class="form-control" id="" cols="10" rows="5" placeholder="Enter Your Message *"></textarea>
                        </div>
                        <div class="mb-4">
                            <input class="btn_send_message" type="submit" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
