@include('tamplete.partains.header')




    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->



    <section class="">
    <div class="banner">
      <div class="main-banner">
        <div class="banner-1"> <img src="{!!asset('assets/images/banner1.jpg')!!}" alt="Stylexpo">
          <div class="banner-detail">
            <div class="container">
              <div class="row">
                <div class="col-4"></div>
                <div class="co-8" style="direction: rtl;">
                  <div class="banner-detail-inner"> 
                    <span class="slogan">خصومات تصل ل %25</span>
                    <h1 class="banner-title">احدث الاصدارات  </h1>
                    <span class="offer">افضل مستحضرات تجميل وعناية بالبشرة .</span>
                  </div>
                  <a class="btn btn-color" href="{{route('shop')}}">تسوق الان !</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="banner-2"> <img src="{!!asset('assets/images/banner2.jpg')!!}" alt="Stylexpo">
          <div class="banner-detail">
            <div class="container">
              <div class="row">
                <div class="col-8" >
                  <div class="banner-detail-inner"> 
                    <span class="slogan">نيولوك جديد </span>
                    <h1 class="banner-title">غيري شكلك للي بتحبيه <br><span> من خلال منتجات روفانا </span></h1>
                    <span class="offer">اسعار تنافسية </span> 
                  </div> 
                    <a class="btn btn-color" href="{{route('shop')}}">تسوق الان !</a>
                </div>
                <div class="col-4"></div>              
              </div>
            </div>
          </div>
        </div>
        <div class="banner-3"> <img src="{!!asset('assets/images/banner3.jpg')!!}" alt="Stylexpo">
          <div class="banner-detail">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-4 col-4"></div>
                <div class="col-lg-7 col-md-8 col-8">
                  <div class="banner-detail-inner"> 
                    <span class="slogan">شكل جديد</span>
                    <h1 class="banner-title">بسعر جميل </h1>
                    <span class="offer">وخدمة متميزة</span> 
                  </div>
                    <a class="btn btn-color" href="{{route('shop')}}">تسوق الان!</a>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- BANNER END --> 
  
  <!-- CONTAIN START -->

    <!-- SUB-BANNER START -->
    <div class="sub-banner-block ">
      <div class="">
        <div class=" center-sm">
          <div class="row m-0">
            <div class="col-md-4 mt-xs-30 p-0">
              <div class="sub-banner sub-banner1" >
                <img alt="Stylexpo" src="{!!asset('assets/images/sub-banner1.jpg')!!}">
                <div class="sub-banner-detail">
                  <div class="sub-banner-title sub-banner-title-color">Most Popular Sunglasses</div>
                  <div class="sub-banner-subtitle">Latest, Stylish and Trendy Collection</div>
                  <a class="btn btn-color" href="{{route('shop')}}">Shop Now!</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-xs-30 p-0">
              <div class="">
                <div class="sub-banner sub-banner2">
                  <img alt="Stylexpo" src="{!!asset('assets/images/sub-banner2.jpg')!!}">
                  <div class="sub-banner-detail">
                    <div class="sub-banner-title sub-banner-title-color">Shoes & Footwear</div>
                    <div class="sub-banner-subtitle"> range of footwea & shoes for men & women</div>
                    <a class="btn btn-color " href="{{route('shop')}}">Shop Now!</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-xs-30 p-0">
              <div class="sub-banner sub-banner3" >
                <img alt="Stylexpo" src="{!!asset('assets/images/sub-banner3.jpg')!!}">
                <div class="sub-banner-detail">
                  <div class="sub-banner-title sub-banner-title-color">Shop Watches Online</div>
                  <div class="sub-banner-subtitle">Latest range of Digital & Analog Watches</div>
                  <a class="btn btn-color " href="{{route('shop')}}">Shop Now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SUB-BANNER END -->
    
    <!--  New arrivals Products Slider Block Start  -->
    <section class="pt-70">
      <div class="container">
        <div class="product-listing">
          <div class="row">
            <div class="col-12">
              <div class="heading-part mb-30 mb-xs-15">
                <h2 class="main_title heading"><span>New Arrivals</span></h2>
              </div>
            </div>
          </div>
          <div class="pro_cat">
            <div class="row">
              <div class="owl-carousel pro-cat-slider ">
                <div class="item">
                  <div class="product-item mb-30">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/1.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/12.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item sold-out mb-30">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/2.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/9.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item mb-30">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/3.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/10.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item mb-30">
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/4.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                  <div class="product-item sold-out">
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/7.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item mb-30">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/8.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/12.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item mb-30">
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/6.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/11.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item mb-30">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/13.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/4.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item mb-30">
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/12.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="main-label sale-label"><span>Sale</span></div>
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/15.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item mb-30">
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/16.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/2.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item mb-30">
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/10.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="main-label new-label"><span>New</span></div>
                    <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/1.jpg')!!}" alt="Stylexpo"> </a>
                      <div class="product-detail-inner">
                        <div class="detail-inner-left align-center">
                          <ul>
                            <li class="pro-cart-icon">
                              <form>
                                <button title="Add to Cart"><span></span>Add to Cart</button>
                              </form>
                            </li>
                            <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                            <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="product-item-details">
                      <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                      <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  New arrivals Products Slider Block End  -->

    <!-- Top Categories Start-->
    <section class=" ptb-70">
      <div class="top-cate-bg ptb-70">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="heading-part mb-30 mb-xs-15">
                <h2 class="main_title heading"><span>Top Categories</span></h2>
              </div>
            </div>
          </div>
          <div class="pro_cat">
            <div class="row">
              <div id="top-cat-pro" class="owl-carousel sell-pro align-center">
                <div class="item ">
                  <a href="{{route('shop')}}">
                    <div class="item-inner">
                        <img src="{!!asset('assets/images/cate_1.jpg')!!}" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Women tops</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item ">
                  <a href="{{route('shop')}}">
                    <div class="item-inner">
                        <img src="{!!asset('assets/images/cate_2.jpg')!!}" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Men’s jackets</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item ">
                  <a href="{{route('shop')}}">
                    <div class="item-inner">
                        <img src="{!!asset('assets/images/cate_3.jpg')!!}" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>watches</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item ">
                  <a href="{{route('shop')}}">
                    <div class="item-inner">
                        <img src="{!!asset('assets/images/cate_4.jpg')!!}" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>shoes</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item ">
                  <a href="{{route('shop')}}">
                    <div class="item-inner">
                        <img src="{!!asset('assets/images/cate_5.jpg')!!}" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>sunglasses</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item ">
                  <a href="{{route('shop')}}">
                    <div class="item-inner">
                        <img src="{!!asset('assets/images/cate_6.jpg')!!}" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>kid's wear</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item ">
                  <a href="{{route('shop')}}">
                    <div class="item-inner">
                        <img src="{!!asset('assets/images/cate_7.jpg')!!}" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Women t-shirt</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item ">
                  <a href="{{route('shop')}}">
                    <div class="item-inner">
                        <img src="{!!asset('assets/images/cate_2.jpg')!!}" alt="Stylexpo">
                      <div class="cate-detail">
                        <span>Men’s jackets</span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Top Categories End-->

    <!-- perellex-banner Start -->
    <section>
      <div class="perellex-banner">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 offset-xl-2 ptb-70 client-box">
              <div class="perellex-delail align-center">
                <div class="perellex-offer"><span class="line-bottom">Up to 50% Off on Electronics</span></div>
                <div class="perellex-title ">New computer models are releasing </div> 
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>         
                <a class="btn btn-color">Shop Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- perellex-banner End -->

    <!-- Daily Deals Start -->
    <section class=" ptb-70">
      <div class="container">
        <div class="daily-deals">
          <div class="row m-0">
            <div class="col-12 p-0">
              <div class="heading-part mb-30 mb-xs-15">
                <h2 class="main_title heading"><span>Daily Deals</span></h2>
              </div>
            </div>
          </div>
          <div class="pro_cat">
            <div class="row">
              <div id="daily_deals" class="owl-carousel ">
                <div class="item">
                  <div class="product-item">
                    <div class="row ">
                      <div class="col-md-6 col-12 deals-img ">
                        <div class="product-image"> 
                          <a href="{{route('product_page')}}"> 
                            <img src="{!!asset('assets/images/2.jpg')!!}" alt="Stylexpo"> 
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-12 mt-xs-30">
                        <div class="product-item-details">
                          <div class="product-item-name"> 
                            <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> 
                          </div>
                          <div class="price-box"> 
                            <span class="price">$80.00</span> 
                            <del class="price old-price">$100.00</del> 
                          </div>
                          <p>Lorem ipsum dolor consectetuer adipiscing elit. Donec eros, scelerisque nec, rhoncus eget.</p>
                        </div>
                        <div class="product-detail-inner">
                          <div class="detail-inner-left">
                            <ul>
                              <li class="pro-cart-icon">
                                <form>
                                  <button title="Add to Cart"><span></span>Add to Cart</button>
                                </form>
                              </li>
                              <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                              <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                            </ul>
                          </div>
                        </div>
                        <div class="item-offer-clock">
                          <ul class="countdown-clock">
                            <li>
                              <span class="days">00</span>
                              <p class="days_ref">days</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="hours">00</span>
                              <p class="hours_ref">hrs</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="minutes">00</span>
                              <p class="minutes_ref">min</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="seconds">00</span>
                              <p class="seconds_ref">sec</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="row ">
                      <div class="col-md-6 col-12 deals-img ">
                        <div class="product-image"> 
                          <a href="{{route('product_page')}}"> 
                            <img src="{!!asset('assets/images/12.jpg')!!}" alt="Stylexpo"> 
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-12 mt-xs-30">
                        <div class="product-item-details">
                          <div class="product-item-name"> 
                            <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> 
                          </div>
                          <div class="price-box"> 
                            <span class="price">$80.00</span> 
                            <del class="price old-price">$100.00</del> 
                          </div>
                          <p>Lorem ipsum dolor consectetuer adipiscing elit. Donec eros, scelerisque nec, rhoncus eget.</p>
                        </div>
                        <div class="product-detail-inner">
                          <div class="detail-inner-left">
                            <ul>
                              <li class="pro-cart-icon">
                                <form>
                                  <button title="Add to Cart"><span></span>Add to Cart</button>
                                </form>
                              </li>
                              <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                              <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                            </ul>
                          </div>
                        </div>
                        <div class="item-offer-clock">
                          <ul class="countdown-clock" data-end-date="06/29/2018 12:00:00">
                            <li>
                              <span class="days">00</span>
                              <p class="days_ref">days</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="hours">00</span>
                              <p class="hours_ref">hrs</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="minutes">00</span>
                              <p class="minutes_ref">min</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="seconds">00</span>
                              <p class="seconds_ref">sec</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="row ">
                      <div class="col-md-6 col-12 deals-img ">
                        <div class="product-image"> 
                          <a href="{{route('product_page')}}"> 
                            <img src="{!!asset('assets/images/10.jpg')!!}" alt="Stylexpo"> 
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-12 mt-xs-30">
                        <div class="product-item-details">
                          <div class="product-item-name"> 
                            <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> 
                          </div>
                          <div class="price-box"> 
                            <span class="price">$80.00</span> 
                            <del class="price old-price">$100.00</del> 
                          </div>
                          <p>Lorem ipsum dolor consectetuer adipiscing elit. Donec eros, scelerisque nec, rhoncus eget.</p>
                        </div>
                        <div class="product-detail-inner">
                          <div class="detail-inner-left">
                            <ul>
                              <li class="pro-cart-icon">
                                <form>
                                  <button title="Add to Cart"><span></span>Add to Cart</button>
                                </form>
                              </li>
                              <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                              <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                            </ul>
                          </div>
                        </div>
                        <div class="item-offer-clock">
                          <ul class="countdown-clock" data-end-date="06/29/2018 12:00:00">
                            <li>
                              <span class="days">00</span>
                              <p class="days_ref">days</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="hours">00</span>
                              <p class="hours_ref">hrs</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="minutes">00</span>
                              <p class="minutes_ref">min</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="seconds">00</span>
                              <p class="seconds_ref">sec</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="row ">
                      <div class="col-md-6 col-12 deals-img ">
                        <div class="product-image"> 
                          <a href="{{route('product_page')}}"> 
                            <img src="{!!asset('assets/images/1.jpg')!!}" alt="Stylexpo"> 
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-12 mt-xs-30">
                        <div class="product-item-details">
                          <div class="product-item-name"> 
                            <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> 
                          </div>
                          <div class="price-box"> 
                            <span class="price">$80.00</span> 
                            <del class="price old-price">$100.00</del> 
                          </div>
                          <p>Lorem ipsum dolor consectetuer adipiscing elit. Donec eros, scelerisque nec, rhoncus eget.</p>
                        </div>
                        <div class="product-detail-inner">
                          <div class="detail-inner-left">
                            <ul>
                              <li class="pro-cart-icon">
                                <form>
                                  <button title="Add to Cart"><span></span>Add to Cart</button>
                                </form>
                              </li>
                              <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                              <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                            </ul>
                          </div>
                        </div>
                        <div class="item-offer-clock">
                          <ul class="countdown-clock" data-end-date="06/29/2018 12:00:00">
                            <li>
                              <span class="days">00</span>
                              <p class="days_ref">days</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="hours">00</span>
                              <p class="hours_ref">hrs</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="minutes">00</span>
                              <p class="minutes_ref">min</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="seconds">00</span>
                              <p class="seconds_ref">sec</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="row ">
                      <div class="col-md-6 col-12 deals-img ">
                        <div class="product-image"> 
                          <a href="{{route('product_page')}}"> 
                            <img src="{!!asset('assets/images/3.jpg')!!}" alt="Stylexpo"> 
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-12 mt-xs-30">
                        <div class="product-item-details">
                          <div class="product-item-name"> 
                            <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> 
                          </div>
                          <div class="price-box"> 
                            <span class="price">$80.00</span> 
                            <del class="price old-price">$100.00</del> 
                          </div>
                          <p>Lorem ipsum dolor consectetuer adipiscing elit. Donec eros, scelerisque nec, rhoncus eget.</p>
                        </div>
                        <div class="product-detail-inner">
                          <div class="detail-inner-left">
                            <ul>
                              <li class="pro-cart-icon">
                                <form>
                                  <button title="Add to Cart"><span></span>Add to Cart</button>
                                </form>
                              </li>
                              <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                              <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                            </ul>
                          </div>
                        </div>
                        <div class="item-offer-clock">
                          <ul class="countdown-clock" data-end-date="06/29/2018 12:00:00">
                            <li>
                              <span class="days">00</span>
                              <p class="days_ref">days</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="hours">00</span>
                              <p class="hours_ref">hrs</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="minutes">00</span>
                              <p class="minutes_ref">min</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="seconds">00</span>
                              <p class="seconds_ref">sec</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="row ">
                      <div class="col-md-6 col-12 deals-img ">
                        <div class="product-image"> 
                          <a href="{{route('product_page')}}"> 
                            <img src="{!!asset('assets/images/4.jpg')!!}" alt="Stylexpo"> 
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6 col-12 mt-xs-30">
                        <div class="product-item-details">
                          <div class="product-item-name"> 
                            <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> 
                          </div>
                          <div class="price-box"> 
                            <span class="price">$80.00</span> 
                            <del class="price old-price">$100.00</del> 
                          </div>
                          <p>Lorem ipsum dolor consectetuer adipiscing elit. Donec eros, scelerisque nec, rhoncus eget.</p>
                        </div>
                        <div class="product-detail-inner">
                          <div class="detail-inner-left">
                            <ul>
                              <li class="pro-cart-icon">
                                <form>
                                  <button title="Add to Cart"><span></span>Add to Cart</button>
                                </form>
                              </li>
                              <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                              <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                            </ul>
                          </div>
                        </div>
                        <div class="item-offer-clock">
                          <ul class="countdown-clock" data-end-date="06/29/2018 12:00:00">
                            <li>
                              <span class="days">00</span>
                              <p class="days_ref">days</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="hours">00</span>
                              <p class="hours_ref">hrs</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="minutes">00</span>
                              <p class="minutes_ref">min</p>
                            </li>
                            <li class="seperator">:</li>
                            <li>
                              <span class="seconds">00</span>
                              <p class="seconds_ref">sec</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Daily Deals End -->

    <!--  Site Services Features Block Start  -->
    <div class="ser-feature-block">
      <div class="container">
        <div class="center-xs">
          <div class="row">
            <div class="col-xl-3 col-md-6 service-box">
              <div class="feature-box ">
                <div class="feature-icon feature1"></div>
                <div class="feature-detail">
                  <div class="ser-title">Free Delivery</div>
                  <div class="ser-subtitle">From $59.89</div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 service-box">
              <div class="feature-box">
                <div class="feature-icon feature2"></div>
                <div class="feature-detail">
                  <div class="ser-title">Support 24/7</div>
                  <div class="ser-subtitle">Online 24 hours</div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 service-box">
              <div class="feature-box ">
                <div class="feature-icon feature3"></div>
                <div class="feature-detail">
                  <div class="ser-title">Free return</div>
                  <div class="ser-subtitle">365 a day</div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 service-box">
              <div class="feature-box ">
                <div class="feature-icon feature4"></div>
                <div class="feature-detail">
                  <div class="ser-title">Big Saving</div>
                  <div class="ser-subtitle">Weeken Sales</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  Site Services Features Block End  -->

    <!--small banner Block Start-->
    <section class="pt-70"> 
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="sub-banner small-banner small-banner1">
              <a href="#">
                <img src="{!!asset('assets/images/small-banner1.jpg')!!}" alt="Stylexpo">
              </a>
            </div>
          </div>
          <div class="col-lg-6 mt-sm-30">
            <div class="sub-banner small-banner small-banner2">
              <a href="#">
                <img src="{!!asset('assets/images/small-banner2.jpg')!!}" alt="Stylexpo">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--small banner Block Start-->

    <!--  Special products Products Slider Block Start  -->
    <section class="ptb-70">
      <div class="container">
        <div class="product-listing">
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="row">
                <div class="col-12">
                  <div class="heading-part mb-30 mb-xs-15">
                    <h2 class="main_title heading"><span>Best seller</span></h2>
                  </div>
                </div>
              </div>
              <div class="pro_cat">
                <div class="row">
                  <div class="owl-carousel best-seller-pro">
                    <div class="item">
                      <div class="product-item">
                        <div class="main-label new-label"><span>New</span></div>
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/1.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="main-label new-label"><span>New</span></div>
                        <div class="main-label sale-label"><span>Sale</span></div>
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/2.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/3.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item sold-out">
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/4.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="main-label sale-label"><span>Sale</span></div>
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/5.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/6.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="main-label new-label"><span>New</span></div>
                        <div class="main-label sale-label"><span>Sale</span></div>
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/7.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/8.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="main-label sale-label"><span>Sale</span></div>
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/9.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/10.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 mt-xs-30">
              <div class="row">
                <div class="col-12">
                  <div class="heading-part mb-30 mb-xs-15">
                    <h2 class="main_title heading"><span>New products </span></h2>
                  </div>
                </div>
              </div>
              <div class="pro_cat">
                <div class="row">
                  <div class="owl-carousel best-seller-pro">
                    <div class="item">
                      <div class="product-item">
                        <div class="main-label new-label"><span>New</span></div>
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/12.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/11.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="main-label new-label"><span>New</span></div>
                        <div class="main-label sale-label"><span>Sale</span></div>
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/10.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item sold-out">
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/9.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="main-label sale-label"><span>Sale</span></div>
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/8.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/7.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="main-label new-label"><span>New</span></div>
                        <div class="main-label sale-label"><span>Sale</span></div>
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/6.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/5.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="main-label sale-label"><span>Sale</span></div>
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/4.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="product-item">
                        <div class="product-image"> <a href="{{route('product_page')}}"> <img src="{!!asset('assets/images/3.jpg')!!}" alt="Stylexpo"> </a>
                          <div class="product-detail-inner">
                            <div class="detail-inner-left align-center">
                              <ul>
                                <li class="pro-cart-icon">
                                  <form>
                                    <button title="Add to Cart"><span></span>Add to Cart</button>
                                  </form>
                                </li>
                                <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                <!-- <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="product-item-details">
                          <div class="product-item-name"> <a href="{{route('product_page')}}">Defyant Reversible Dot Shorts</a> </div>
                          <div class="price-box"> <span class="price">$80.00</span> <del class="price old-price">$100.00</del> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  Special products Products Slider Block End  -->

    <!--Blog Block Start -->
    <section class="pb-70">
      <div class="container">
        <div class="row">
          <div class="col-12 ">
            <div class="heading-part mb-30 mb-xs-15">
              <h2 class="main_title heading"><span>Latest News</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div id="blog" class="owl-carousel">
            <div class="item mb-md-30">
              <div class="blog-item">
                <div class="">
                <div class="blog-media"> 
                  <img src="{!!asset('assets/images/blog_img1.jpg')!!}" alt="Stylexpo">
                  <div class="blog-effect"></div> 
                  <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a> 
                </div>
                </div>
                <div class="mt-30">
                  <div class="blog-detail"> 
                    <div class="blog-title"><a href="single-blog.html">MAURIS LACINIA LECTUS</a></div>
                    <div class="post-info">
                      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.</p>
                      <ul>
                        <li>
                          <a href="#">0 comment(s)</a>
                        </li>
                        <li>
                          <a href="single-blog.html">Read more 
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item mb-md-30">
              <div class="blog-item">
                <div class="blog-media"> 
                  <img src="{!!asset('assets/images/blog_img2.jpg')!!}" alt="Stylexpo"> 
                  <div class="blog-effect"></div>
                  <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a>
                </div>
                <div class="mt-30">
                  <div class="blog-detail"> 
                    <div class="blog-title"><a href="single-blog.html">MAURIS LACINIA LECTUS</a></div>
                    <div class="post-info">
                      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.</p>
                      <ul>
                        <li>
                          <a href="#">0 comment(s)</a>
                        </li>
                        <li>
                          <a href="single-blog.html">Read more 
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-item">
                <div class="blog-media"> 
                  <img src="{!!asset('assets/images/blog_img3.jpg')!!}" alt="Stylexpo">
                  <div class="blog-effect"></div>  
                  <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a>
                </div>
                <div class="mt-30">
                  <div class="blog-detail"> 
                    <div class="blog-title"><a href="single-blog.html">MAURIS LACINIA LECTUS</a></div>
                    <div class="post-info">
                      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.</p>
                      <ul>
                        <li>
                          <a href="#">0 comment(s)</a>
                        </li>
                        <li>
                          <a href="single-blog.html">Read more 
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-item">
                <div class="blog-media"> 
                  <img src="{!!asset('assets/images/blog_img4.jpg')!!}" alt="Stylexpo"> 
                  <div class="blog-effect"></div>
                  <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a>
                </div>
                <div class="mt-30">
                  <div class="blog-detail"> 
                    <div class="blog-title"><a href="single-blog.html">MAURIS LACINIA LECTUS</a></div>
                    <div class="post-info">
                      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.</p>
                      <ul>
                        <li>
                          <a href="#">0 comment(s)</a>
                        </li>
                        <li>
                          <a href="single-blog.html">Read more 
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-item">
                <div class="blog-media"> 
                  <img src="{!!asset('assets/images/blog_img5.jpg')!!}" alt="Stylexpo">
                  <div class="blog-effect"></div>  
                  <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a>
                </div>
                <div class="mt-30">
                  <div class="blog-detail"> 
                    <div class="blog-title"><a href="single-blog.html">MAURIS LACINIA LECTUS</a></div>
                    <div class="post-info">
                      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.</p>
                      <ul>
                        <li>
                          <a href="#">0 comment(s)</a>
                        </li>
                        <li>
                          <a href="single-blog.html">Read more 
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-item">
                <div class="blog-media"> 
                  <img src="{!!asset('assets/images/blog_img6.jpg')!!}" alt="Stylexpo"> 
                  <div class="blog-effect"></div>
                  <a href="single-blog.html" title="Click For Read More" class="read">&nbsp;</a>
                </div>
                <div class="mt-30">
                  <div class="blog-detail"> 
                    <div class="blog-title"><a href="single-blog.html">MAURIS LACINIA LECTUS</a></div>
                    <div class="post-info">
                      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet.</p>
                      <ul>
                        <li>
                          <a href="#">0 comment(s)</a>
                        </li>
                        <li>
                          <a href="single-blog.html">Read more 
                            <i class="fa fa-angle-double-right"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Blog Block End -->

    <!-- Brand logo block Start  -->
    <div class="brand-logo">
      <div class="container">
        <div class="row">
          <div class="col-12 ">
            <div class="heading-part mb-30 mb-xs-15">
              <h2 class="main_title heading"><span>Our Brands</span></h2>
            </div>
          </div>
        </div>
        <div class="row brand">
          <div class="col-md-12">
            <div id="brand-logo" class="owl-carousel align_center">
              <div class="item"><a href="#"><img src="{!!asset('assets/images/brand1.png')!!}" alt="Stylexpo"></a></div>
              <div class="item"><a href="#"><img src="{!!asset('assets/images/brand2.png')!!}" alt="Stylexpo"></a></div>
              <div class="item"><a href="#"><img src="{!!asset('assets/images/brand3.png')!!}" alt="Stylexpo"></a></div>
              <div class="item"><a href="#"><img src="{!!asset('assets/images/brand4.png')!!}" alt="Stylexpo"></a></div>
              <div class="item"><a href="#"><img src="{!!asset('assets/images/brand5.png')!!}" alt="Stylexpo"></a></div>
              <div class="item"><a href="#"><img src="{!!asset('assets/images/brand6.png')!!}" alt="Stylexpo"></a></div>
              <div class="item"><a href="#"><img src="{!!asset('assets/images/brand7.png')!!}" alt="Stylexpo"></a></div>
              <div class="item"><a href="#"><img src="{!!asset('assets/images/brand8.png')!!}" alt="Stylexpo"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Brand logo block End  -->
  <!-- CONTAINER END -->

@include('tamplete.partains.footer')