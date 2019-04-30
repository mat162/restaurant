<form action="" method="post">
    <label for="FirstName">FirstName</label>
    <input type="text" name="FirstName"><br>
    <label for="LastName">LastName</label>
    <input type="text" name="LastName"><br>
    <label for="Email">Email</label>
    <input type="mail" name="Email"><br>
    <label for="Password">Password</label>
    <input type="password" name="Password"><br>
    <label for="BirthDate">BirthDate</label>
    <input type="date" name="BirthDate"><br>
    <label for="Address">Address</label>
    <input type="text" name="Address"><br>
    <label for="City">City</label>
    <input type="text" name="City"><br>
    <label for="ZipCode">ZipCode</label>
    <input type="text" name="ZipCode"><br>
    <label for="Country">Country</label>
    <input type="text" name="Country"><br>
    <label for="Phone">Phone</label>
    <input type="text" name="Phone"><br>
    <input type="submit" name="submit" value="Enregistrer">
</form>

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Binghamton, New York</h5>
                        <p>
                            4343 Hinkle Deegan Lake Road
                        </p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>00 (958) 9865 562</h5>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="8dfef8fdfde2fff9cdeee2e1e2ffe1e4efa3eee2e0">[email&#160;protected]</a>
                        </h5>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="form-area contact-form text-right" id="myForm"
                    action="https://colorlib.com/preview/theme/marco/mail.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Enter your name"
                                onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''"
                                onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter your name'"
                                class="common-input mb-20 form-control" required="" type="text"
                                data-cf-modified-46d31feb61899b78581f8bfc-="">

                            <input name="email" placeholder="Enter email address"
                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''"
                                onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter email address'"
                                class="common-input mb-20 form-control" required="" type="email"
                                data-cf-modified-46d31feb61899b78581f8bfc-="">

                            <input name="subject" placeholder="Enter subject"
                                onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''"
                                onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter subject'"
                                class="common-input mb-20 form-control" required="" type="text"
                                data-cf-modified-46d31feb61899b78581f8bfc-="">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Enter Message"
                                onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''"
                                onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Enter Message'"
                                required="" data-cf-modified-46d31feb61899b78581f8bfc-=""></textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button class="genric-btn primary" style="float: right;">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End contact-page Area -->