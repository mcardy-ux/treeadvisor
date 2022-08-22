<?php require('header.php');?>

<?php require('menu.php');?>
        <!-- page title -->
        <div class="page-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="inner-title">
                        <div class="overlay-image"></div>
                        <div class="banner-title">
                            <div class="page-title-heading">
                                Contact
                            </div>
                            <div class="page-title-content link-style6">
                                <span><a class="home" href="index.php">Home</a></span><span class="page-title-content-inner">Contact</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.page-title -->


        <!-- Contact -->
        <section class="flat-contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 wow fadeInUp">
                        <div class="contact-left">
                        <h3 class="section-subtitle">Ask a PRO</h3>
                            <h2 class="section-title">Talk to a certified specialist about your problem. </h2><br>
                            <div class="address-box mg-bottom30">
                                <div class="contact-location icon-map"></div>
                                <div class="info text-pri2-color">
                                <h3 class="section-heading-jost-size20">
                                            Our Address</h3>
                                    <p class="desc-box">United States <br> Panama City - Florida</p>
                                </div>
                            </div>
                            <div class="address-box mg-bottom30">
                                <div class="contact-phone icon-phone"></div>
                                <div class="info text-pri2-color">
                                <h3 class="section-heading-jost-size20">
                                            Our Phone</h3>
                                    <p class="desc-box">(800) 668-2181</p>
                                </div>
                            </div>
                            <div class="address-box">
                                <div class="contact-mail icon-mail"></div>
                                <div class="info text-pri2-color">
                                <a href="mailto:treeadvisor.org@gmail.com">
                                    <h3 class="section-heading-jost-size20">
                                            Our Email</h3>
                                    <p class="desc-box"><a href="mailto:thearborist@treeadvisor.org">thearborist@treeadvisor.org</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="30" data-smobile="30"></div>
                    </div>
                    <div class="col-md-7 wow fadeInUp">
                        <div class="contact-right">
                        <form method="post" class="form-contact-right" id="contactform"
                                action="./contact/contact-process.php" accept-charset="utf-8"
                                novalidate="novalidate">
                                <div class="input-row">
                                    <div class="input-name">
                                        <label for="name" class="heading-features">Name (required)</label>
                                        <input id="name" name="name" class="input-contact" type="text"
                                            placeholder="Full Name" required>
                                    </div>
                                    <div class="input-phone">
                                        <label for="phone" class="heading-features">Phone (optional)</label>
                                        <input id="phone" name="phone" class="input-contact" type="text"
                                            placeholder="Phone Number" required>
                                    </div>

                                </div>
                                <div class="input-row">
                                    <div class="input-email">
                                        <label id="email" class="heading-features">Email address (required)</label>
                                        <input type="email" name="email" class="input-contact"
                                            placeholder="Email Address" required>
                                    </div>
                                    <div class="input-services">
                                        <label for="services" class="heading-features">Services (required)</label>
                                        <select class="input-contact input-select" name="services" id="services">
                                            <option value="0">Choose services</option>
                                            <option value="1">Tree Care</option>
                                            <option value="2">Lawn Care</option>
                                            <option value="3">Pest Control</option>
                                            <option value="4">Weed Control</option>
                                            <option value="5">Landscaping</option>
                                            <option value="6">Irrigation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-message">
                                    <label for="message" class="heading-features">Your message*</label>
                                    <textarea name="message" class="input-contact-message" id="message"
                                        placeholder="Your Message"></textarea>
                                </div>
                                <div class="button">
                                    <button type="submit" class=" btn btn-left">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact -->

   

        <?php require('footer.php');?>