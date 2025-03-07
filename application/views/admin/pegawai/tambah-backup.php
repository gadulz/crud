<!-- MATERIAL CSS -->
<link href="<?= base_url('assets/stepwizard/fonts/material-design-iconic-font/css/material-design-iconic-font.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/stepwizard/vendor/date-picker/css/datepicker.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/stepwizard/css/style.css'); ?>" rel="stylesheet" type="text/css">

<!-- MATERIAL JS -->
<script type="text/javascript" src="<?= base_url('assets/stepwizard/js/jquery-3.3.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/stepwizard/js/jquery.steps.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/stepwizard/vendor/date-picker/js/datepicker.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/stepwizard/vendor/date-picker/js/datepicker.en.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/stepwizard/js/main.js'); ?>"></script>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h5 class="panel-title"><i class="icon-users"></i> Data Pegawai</h5>
    </div>
    <!-- <?= form_open_multipart('Pegawai/tambah'); ?> -->
    <!-- <input type="hidden" value="<?= $getrow['id_admin']; ?>" name="id"> -->

    <div class="panel-body">

        <form action="" id="wizard">
        		<!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <h3>User profile</h3>
                	<div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Full Name
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Education Level
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-edit"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                	</div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Email ID
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Phone Number
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-smartphone-android"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Specialization
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-spellcheck"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Date of Birth
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-calendar"></i>
                                <input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" id="dp1">
                            </div>
                        </div>
                    </div>
                </section>
                
				<!-- SECTION 2 -->
                <h4></h4>
                <section>
                	<h3>Residential address</h3>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Country
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <select name="" id="" class="form-control">
                                    <option value="united states" class="option">United States</option>
                                    <option value="united kingdom" class="option">United Kingdom</option>
                                    <option value="viet nam" class="option">Viet Nam</option>
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Street Address
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-pin"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Apartment
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-home"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Town / City
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-pin-drop"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                County
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-pin"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Postcode / Zip
                            </label>
                            <div class="form-holder password">
                                <i class="zmdi zmdi-eye"></i>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION 3 -->
                <h4></h4>
                <section>
                    <h3 style="margin-bottom: 37px;">What are you doing?</h3>
                    <div class="grid">
                        <div class="grid-item active">
                            <div class="thumb">
                                <img src="images/programming.jpg" alt="">
                            </div>
                            <div class="heading">
                                Programming
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="thumb">
                                <img src="images/sports.jpg" alt="">
                            </div>
                            <div class="heading">
                                Sports
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="thumb">
                                <img src="images/business.jpg" alt="">
                            </div>
                            <div class="heading">
                                Business
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="thumb">
                                <img src="images/tour-guide.jpg" alt="">
                            </div>
                            <div class="heading">
                                Tour Guide
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="thumb">
                                <img src="images/art-design.jpg" alt="">
                            </div>
                            <div class="heading">
                                Art-Design
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="thumb">
                                <img src="images/doctor.jpg" alt="">
                            </div>
                            <div class="heading">
                                Doctor
                            </div>
                        </div>
                    </div>
                </section>
        </form>
        
    </div>
</div>

