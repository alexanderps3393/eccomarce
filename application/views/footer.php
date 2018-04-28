<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>Nam libero tempore, cum soluta nobis est eligendi 
				optio cumque nihil impedit quo minus id quod maxime 
				placeat facere possimus.</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
                            <li><a href="<?=base_url();?>">Home</a></li>
				<?php
                                foreach ($category_list as $categ)
                                {
                                ?> 
                            <li><a href="<?=base_url();?>category/<?=$categ->id?>" style="text-transform: capitalize;"><?=$categ->category_name?></a></li>
                                <?php }?>
				<li><a href="<?=base_url();?>contact">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
                                <li><a href="<?=base_url()?>shipping">Shipping</a></li>
				<li><a href="<?=base_url()?>term">Terms & Conditions</a></li>
				<li><a href="<?=base_url()?>faqs">Faqs</a></li>
				<li><a href="<?=base_url()?>contact">Contact</a></li>
				<li><a href="<?=base_url()?>">Online Shopping</a></li>						 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
                                    <?php
                                    if(!empty($this->session->userdata('userid')))
                                    {?>
                                    <li><a style="cursor: pointer; text-transform: capitalize;"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $this->session->userdata('firstname');?></a></li>
                                        <li><a href="<?=base_url();?>login/logout" ><i class="fa fa-arrow-right" aria-hidden="true"></i> Logout</a></li>
                                    <?php }
                                    else {?>
                                        <li><a href="<?=base_url();?>login" ><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                                        <li><a href="<?=base_url();?>register" ><i class="fa fa-arrow-right" aria-hidden="true"></i> Register</a></li>
                                   <?php }
                                    
                                    ?>
				<li><i class="fa fa-heart" aria-hidden="true"></i> <a href="<?=base_url();?>wishlist">Wishlist</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
                            <h2 ><a href="<?=base_url();?>"><b>T<br>H<br>E</b>&nbsp;Developer<span>The Best Supermarket</span></a></h2>
				<p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>Surat, Gujarat, India</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+91 9979133538</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@bladephp.co"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@bladephp.co</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<!--<p>Copyright &copy;2016 by Developer</p>-->
			<p>Copyright @2016 by Developer</p>
		</div>
	</div>
</div>