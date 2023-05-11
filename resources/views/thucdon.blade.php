
<!DOCTYPE HTML>
<?php

	

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    }
?>
<html lang="en">

    <head>
        <title>Home</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <script src="../js/jquery-2.1.4.min.js" ></script>
        <script src="../js/bootstrap.min.js" ></script>
        <script src="../js/swiper.min.js"></script>

        <link href="../css/1604.css" rel="stylesheet" type="text/css" />
        <link href="../css/1608.css" rel="stylesheet" type="text/css" />
        
        
        <script src="../js/1604.js" ></script>
        <script src="../js/1608.js" ></script>

        <link rel="stylesheet" href="../css/app.css">

    </head>

    <body>
        
       
        <div class="type-1604">
            <div class="container">
                <div class="product-collateral">
                    <ul class="productabtitle nav-pills  ">
                            {{-- <li class="active "><a  
                            href="{{ route('product_detail', ['id' => 1]) }}"  
                            ><span>
                                <?php //echo $categories_lv_1[0]->name; ?>
                            </span></a></li> --}}
                            @foreach ($categories_lv_1 as $item)
                                <li><a  href="{{ route('product_detail', ['id' => $item->id]) }}" ><span>
                                    <?php echo $item->name ?>
                                </span></a></li>
                            @endforeach
                       
                        
                    </ul>
                    <br>
                    <ul class="productabtitle nav-pills  ">
                        @foreach ($categories_lv_2 as $item)
                            <li ><a   data-toggle="tab" title="tab_product" href="#home"  data-text="Latest"><span>
                                <?php echo $item->name ?>
                            </span></a></li>
                        
                        @endforeach
                        
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
                                                            <img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null">
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
        
                                                       
        
        
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
        
                                                       
        
        
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
        
                                                       
        
        
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
        
                                                       
        
        
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
        
                                                     
        
        
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
                                                       
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
                                                        
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
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
                                                        <a href="#"><img src="{{asset('images/banh-mi-pho-mai.jpg')}}" class="tpfclick" alt="null"></a>
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
        <div class="type-1605">
            <!--content-->
                <div class="content">
                    <div class="container">
                        <div class="row">
            
                            <div class="col-sm-12">
                                <div class="context">
                                    <div class="contextcontent">
                                        <h2>HOT DEALS</h2>
            
                                        <p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, consectetuer adipiscing</p>
                                    </div>
                                  <div id="clockdiv">
                                        <div class="textDiv_Days">
                                            <span class="days"></span>
                                            <span class="text">Days</span>
                                        </div>
                                        <div class="textDiv_Hours">
                                            <span class="hours"></span>
                                            <span class="text">Hour</span>
                                        </div>
                                        <div class="textDiv_Minutes">
                                            <span class="minutes"></span>
                                            <span class="text">Mins</span>
                                        </div>
                                        <div class="textDiv_Seconds">
                                            <span class="seconds"></span>
                                            <span class="text">Secs</span>
                                        </div>
                                    </div>
            
                                    <a class="shop-button" href="#/">Daily Deals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

    </body>

</html>