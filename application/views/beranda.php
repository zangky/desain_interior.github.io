<ul class='slideshow'>
		<li>
			<span>Summer</span>
		</li>
		<li>		
			<span>Fall</span>
		</li>
		<li>		
			<span>Winter</span>
		</li>
		<li>
			<span>Spring</span>
		</li>
	</ul>
	
    <div class="parallax first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm">
                    <div class="contact_form">
                        <h3><i class="fa fa-search grd1 global-radius"></i>Sesuaikan dengan anggaran anda</h3>
                        <form id="contactform1" class="row" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control">
                                        <option>Kategori</option>
                                        <option>1</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name1" id="last_name1" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" name="email1" id="email1" class="form-control" placeholder="Minimun Harga">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone1" id="phone1" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Time</label>
                                    <select name="select_service1" id="select_service1" class="selectpicker form-control" data-style="btn-white">
                                        <option value="selecttime">Select Time</option>
                                        <option value="Weekdays">Weekdays</option>
                                        <option value="Weekend">Weekend</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">What is max price?</label>
                                    <select name="select_price1" id="select_price1" class="selectpicker form-control" data-style="btn-white">
                                        <option value="$100 - $2000">$100 - $2000</option>
                                        <option value="$2000 - $4000">$2000 - $4000</option>
                                        <option value="$4000 - $10000">$4000 - $10000</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get an Appointment</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
				<div class="col-md-6 col-sm-12">
                    <div class="big-tagline clearfix">
                        <h2>Feb House Interior</h2>
                        <p class="lead">Gaya hidup masa kini minimalis,sederhana dan fungsional, namun tetap mengedepankan keindahan. </p>
                        <a data-scroll href="#gallery" class="btn btn-light btn-radius grd1 btn-brd">View Gallery</a>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	<div class="big-tagline clearfix">
        <h1 align="center" >Feb House Interior menyediakan solusi untuk anda</h1>
    </div>
	<div class="about-box">
		<div class="container">
			<div class="row">
				<div class="top-feature owl-carousel owl-theme">
					
					<div class="item">
                        <!-- bikin sesuai kategori  -->
                         <?php foreach ($kategori as $key ) {
                            
                          ?>
						<div class="single-feature">
							<div class="icon"><img src="<?=base_url()?>assets/uploads/<?=$key->gambar;?>" class="img-responsive" alt=""></div>
							<h4><a href="#"><?php echo $key->nama_kategori; ?></a></h4>
							<p><?php echo $key->deskripsi; ?></p>
						</div> 
					</div>
                <?php } ?>
					
					
				</div>
			</div>
			
			<hr class="hr1">
			
			<div class="row">
				<div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="<?php echo base_url();?>assets/uploads/about_bg.jpg" alt="" class="img-responsive">                        
                    </div><!-- end media -->
                </div>
				<div class="col-md-6">
					<div class="message-box right-ab">
                        <h4>Awards Winning Real Estate Company</h4>
                        <h2>Welcome to CITY Real Estate</h2>
                        <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
						<p>Aenean eleifend in felis id viverra. Vestibulum semper ex eu molestie pulvinar. Maecenas non efficitur metus, et semper sem. Mauris ligula sapien, gravida a scelerisque ut, vehicula sed mauris. Proin dapibus mi id vulputate euismod. Nam ullamcorper dui tellus, non lacinia lorem hendrerit eu. Donec at orci cursus, rutrum metus eget, cursus turpis.  </p>
						<a href="#" class="btn btn-light btn-radius grd1 btn-brd"> Read More </a>
                    </div>
				</div>
			</div>
			
		</div>
	</div>

    <div id="agent" class="parallax section db parallax-off" style="background-image:url('<?php echo base_url();?>assets/uploads/parallax_02.png');">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Agent Details</h3>
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                </div><!-- end col -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>The Agent</h4>
                        <h2>Jenny Martines</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

                        <a href="#contact" data-scroll class="btn btn-light global-radius btn-brd grd1 effect-1">Contact Me</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				<div class="col-md-3">
                    <div class="post-media wow fadeIn">
                        <img src="<?php echo base_url();?>assets/uploads/agent.jpg" alt="" class="img-responsive">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-3">
                    <div class="agencies_meta clearfix">
                        <span><i class="fa fa-envelope "></i> <a href="mailto:support@sitename.com">support@sitename.com</a></span>
                        <span><i class="fa fa-link "></i> <a href="#">www.sitename.com</a></span>
                        <span><i class="fa fa-phone-square "></i> +1 232 444 55 66</span>
                        <span><i class="fa fa-print "></i> +1 232 444 55 66</span>
                        <span><i class="fa fa-facebook-square "></i> <a href="#">facebook.com/tagline</a></span>
                        <span><i class="fa fa-twitter-square "></i> <a href="#">twitter.com/tagline</a></span>
                        <span><i class="fa fa-linkedin-square "></i> <a href="#">linkedin.com/tagline</a></span>
                    </div><!-- end agencies_meta -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div>

    <div id="testimonials" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>Happy Customers</h3>
                    <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                </div><!-- end col -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
								
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>assets/uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>assets/uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>assets/uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>assets/<?php echo base_url();?>assets/uploads/testi_01.png" alt="" class="img-responsive alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>assets/uploads/testi_02.png" alt="" class="img-responsive alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team! <i class="fa fa-quote-right"></i></h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="<?php echo base_url();?>assets/uploads/testi_03.png" alt="" class="img-responsive alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
