<!--<a href="offer.html"><img src="<?=base_url();?>images/download.png" class="img-head" alt=""></a>-->
<div class="header">
            <div class="container">
			
			<div class="logo">
                            <h1 ><a href="<?=base_url();?>"><b>T<br>H<br>E</b>&nbsp;Developer<span>The Best Supermarket</span></a></h1>
			</div>
			<div class="head-t">
                            <ul class="card">
                                    <li><a href="<?=base_url();?>wishlist" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
                                    <?php
                                    if(!empty($this->session->userdata('userid')))
                                    {?>
                                    <li><a style="cursor: pointer; text-transform: capitalize;"><i class="fa fa-user" aria-hidden="true"></i><?php echo $this->session->userdata('firstname');?></a></li>
                                        <li><a href="<?=base_url();?>login/logout" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Logout</a></li>
                                    <?php }
                                    else {?>
                                        <li><a href="<?=base_url();?>login" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                                        <li><a href="<?=base_url();?>register" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
                                   <?php }
                                    
                                    ?>
                                    <li><a href="<?=base_url();?>shipping" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
                            </ul>	
			</div>
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
                                                    <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard' ? 'active' : '';?>"><a href="<?=base_url();?>dashboard" class="hyper "><span>Home</span></a></li>	
                                                    <?php
                                                    foreach ($category_list as $category)
                                                    {
                                                    ?>
                                                    <li  class="dropdown">
                                                        <a href="#" style="text-transform: capitalize;" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span><?=$category->category_name?><b class="caret"></b></span></a>
                                                              <ul class="dropdown-menu multi">
									<div class="row">
                                                                            <?php 
                                                                foreach ($subcate as $sub){
                                                                    if($category->id==$sub->parent_category_id)
                                                                    {
                                                                    ?>
                                                                            <div class="col-sm-3">
                                                                                    <ul class="multi-column-dropdown">
                                                                                        <li><a href="<?php echo base_url()?>ProductList/<?php echo $category->id.'/'.$sub->subcat_id;?>" style="text-transform: capitalize;"><i class="fa fa-angle-right" aria-hidden="true"></i><?= $sub->subcategory_name;?></a></li>
                                                                                    </ul>
                                                                            </div>
                                                                    <?php } }?>
                                                                            
									</div>	
								</ul>
                                                                
							</li>
                                                   	
                                                    <?php }?>
                                                        <li><a href="<?=base_url();?>contact" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
					</nav>
					 <div class="cart" >
					
                                             <a href="<?=base_url();?>cart">
                                                <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge">
                                                     <?php if(!empty($this->cart->contents()))
                                                            {
                                                                echo $this->cart->total_items();
                                                            }
                                                            else
                                                            {
                                                                echo "0";
                                                            }
                                                    ?>  
                                                 </span>
                                                </span>
                                        </a>
					</div>
					
				</div>
					
				</div>			
</div>