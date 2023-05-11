
<?php

use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Crypt;

$url_path = "http://fit.tdc.edu.vn/courses/cdw2/tai/code_module_1600_v2/blocks/1604";

?>



<div class="type-1604">
    <div class="container">
        <div class="product-collateral">
            <ul class="productabtitle nav-pills  ">
                <li class="active"><a   data-toggle="tab" title="tab_product" data-text="Latest" 
                    href="{{ route('product_detail') }}"  
                    ><span>
                    <?php echo $categories[0]->name; if (isset($id)){
                            echo $id;
                    } {
                        # code...
                    }?>
                    
                </span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts5"  data-text="Best Seller"><span>
                    <?php echo $categories[1]->name ?>
                </span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts6"  data-text="Special"><span>
                    <?php echo $categories[2]->name ?>
                </span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts7"  data-text="Special"><span>
                    <?php echo $categories[3]->name ?>
                </span></a></li>
            </ul>
            <br>
            <ul class="productabtitle nav-pills  ">
                <li class="active"><a   data-toggle="tab" title="tab_product" href="#home"  data-text="Latest"><span>
                    <?php echo $categories_detail[0]->name ?>
                </span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts5"  data-text="Best Seller"><span>
                    <?php echo $categories_detail[1]->name ?>
                </span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts6"  data-text="Special"><span>
                    <?php echo $categories_detail[2]->name ?>
                </span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts7"  data-text="Special"><span>
                    <?php echo $categories_detail[3]->name ?>
                </span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts7"  data-text="Special"><span>
                    <?php echo $categories_detail[4]->name ?>
                </span></a></li>
            </ul>
            <div class="tabs">
                <div class="tab-content" >
                    <div id="home" class="tab-pane fade in active ">
                        <div class="frameswiper">
                            <!-- Swiper -->
                            <div class="swiper-container s1">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/bn1.jpg" class="tpfclick" alt="null">
                                                    <span>5%</span>
                                                </a>

                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn1.jpg" class="tpfclick" alt="null"></a>

                                                <!--frame sub swiper-->
                                                <div class="framesubswiper">
                                                    <div class="swiper-container s11">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn1.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn2.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn5.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn3.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn4.jpg" alt="null" class="sclick">
                                                            </div>


                                                        </div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-button-next2"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                                        <div class="swiper-button-prev2"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn1.jpg" class="tpfclick" alt="null"></a>

                                                <!--frame sub swiper-->
                                                <div class="framesubswiper">
                                                    <div class="swiper-container s11">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn1.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn2.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn5.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn3.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn4.jpg" alt="null" class="sclick">
                                                            </div>


                                                        </div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-button-next2"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                                        <div class="swiper-button-prev2"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn1.jpg" class="tpfclick" alt="null"></a>

                                                <!--frame sub swiper-->
                                                <div class="framesubswiper">
                                                    <div class="swiper-container s11">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn1.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn2.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn5.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn3.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn4.jpg" alt="null" class="sclick">
                                                            </div>


                                                        </div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-button-next2"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                                        <div class="swiper-button-prev2"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn1.jpg" class="tpfclick" alt="null"></a>

                                                <!--frame sub swiper-->
                                                <div class="framesubswiper">
                                                    <div class="swiper-container s11">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn1.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn2.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn5.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn3.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn4.jpg" alt="null" class="sclick">
                                                            </div>


                                                        </div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-button-next2"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                                        <div class="swiper-button-prev2"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn1.jpg" class="tpfclick" alt="null"></a>

                                                <!--frame sub swiper-->
                                                <div class="framesubswiper">
                                                    <div class="swiper-container s11">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn1.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn2.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn5.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn3.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn4.jpg" alt="null" class="sclick">
                                                            </div>


                                                        </div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-button-next2"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                                        <div class="swiper-button-prev2"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id="newproducts5" class="tab-pane fade  ">
                        <div class="frameswiper">
                            <!-- Swiper -->
                            <div class="swiper-container s2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn2.jpg" class="tpfclick" alt="null"></a>
                                                <!--frame sub swiper-->
                                                <div class="framesubswiper">
                                                    <div class="swiper-container s22">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn1.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn2.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn5.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn3.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn4.jpg" alt="null" class="sclick">
                                                            </div>


                                                        </div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-button-next2"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                                        <div class="swiper-button-prev2"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn2.jpg" class="tpfclick" alt="null"></a>
                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn2.jpg" class="tpfclick" alt="null"></a>
                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn2.jpg" class="tpfclick" alt="null"></a>
                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn2.jpg" class="tpfclick" alt="null"></a>
                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id="newproducts6" class="tab-pane fade  ">
                        <div class="frameswiper">
                            <!-- Swiper -->
                            <div class="swiper-container s3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn2.jpg" class="tpfclick" alt="null"></a>
                                                <!--frame sub swiper-->
                                                <div class="framesubswiper">
                                                    <div class="swiper-container s33">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn1.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn2.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn5.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn3.jpg" alt="null" class="sclick">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $url_path ?>/images/bn4.jpg" alt="null" class="sclick">
                                                            </div>


                                                        </div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-button-next2"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                                        <div class="swiper-button-prev2"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn2.jpg" class="tpfclick" alt="null"></a>
                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn2.jpg" class="tpfclick" alt="null"></a>
                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn2.jpg" class="tpfclick" alt="null"></a>
                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">

                                        <div class="item">
                                            <div class="imageitem">
                                                <a href="#"><img src="<?php echo $url_path ?>/images/bn2.jpg" class="tpfclick" alt="null"></a>
                                            </div>
                                            <div class="infoitem">
                                                <div class="title">
                                                    <h3><a href="#">Pancakes</a></h3>
                                                </div>
                                                <div class="price">
                                                    <p>
                                                        <del><span>10.0 £</span></del>
                                                        <ins><span>7.0 £</span></ins>
                                                    </p>
                                                </div>
                                                <div class="starrating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="buttonit">
                                                    <a href="#">ADD TO CART</a>
                                                    <a href="#">MORE DETAIL</a>
                                                </div>
                                                <div class="buttonacount">
                                                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                    <div id="newproducts7" class="tab-pane fade  ">

                    </div>
                </div>
            </div>

            <a href="#" class="viewall">VIEW ALL</a>
        </div>
    </div>
</div>