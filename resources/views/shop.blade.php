@extends('layouts.app')
@section('title')
Shop
@endsection

@section('style')
    <style>
        .position_class{
            max-width: 286px;
            margin-left: 85px;
            margin-top: 55px;
            overflow: auto;
        }
    </style>
@endsection

@section('content')






      <section class="shop-list section-padding">
         <div class="container">
            <div class="row">
               <div class="col-md-3" >
               <div id="fixSide" >
				   <div class="shop-filters" >
					  <div id="accordion">
						 <div class="card" >
							<div class="card-header" id="headingOne">
							   <h5 class="mb-0">
								  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      @if(Request::is('brands/*')) Category @else Sub-Category @endif <span class="mdi mdi-chevron-down float-right"></span>
								  </button>
							   </h5>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							   <div class="card-body card-shop-filters" style="max-height: 500px; overflow: auto">
								  <!--<form class="form-inline mb-3">-->
									 <!--<div class="form-group">-->
										<!--<input type="text" class="form-control" placeholder="Search By Category">-->
										<!--<button type="submit" class="pl-2 pr-2 btn btn-secondary btn-lg"><i class="mdi mdi-file-find"></i></button>-->
									 <!--</div>-->
								  <!--</form>-->

                          <?php $i=1;
                          foreach($subCatAll as $subCat) {   $idd="cb".$i; ?>

								 <div class="custom-control custom-checkbox">
                                     @if(Request::is('brands/*'))
                                         <a href="{{ route('shop_main',$subCat->slug)}}"  class="btn text-dark btn-outline-warning @if(Request::url() == route('shop',$subCat->slug)) active @endif"><?php echo $subCat->name; ?></a>

                                     @else
                                         <a href="{{ route('shop',$subCat->slug)}}"  class="btn text-dark btn-outline-warning @if(Request::url() == route('shop',$subCat->slug)) active @endif"><?php echo $subCat->name; ?></a>

                                         @endif


								  </div>
                          <?php $i++; } ?>

								  <!-- <div class="custom-control custom-checkbox"> -->
									 <!-- <input type="checkbox" class="custom-control-input" id="cb8">
									 <label class="custom-control-label" for="cb8">Fresh & Herbs <span class="badge badge-primary">5% OFF</span></label>
								  </div>  -->
								  <!-- <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb2">
									 <label class="custom-control-label" for="cb2">Seasonal Fruits <span class="badge badge-secondary">NEW</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb3">
									 <label class="custom-control-label" for="cb3">Imported Fruits <span class="badge badge-danger">10% OFF</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb4">
									 <label class="custom-control-label" for="cb4">Citrus <span class="badge badge-info">50% OFF</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb5">
									 <label class="custom-control-label" for="cb5">Cut Fresh & Herbs</label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb6">
									 <label class="custom-control-label" for="cb6">Seasonal Fruits <span class="badge badge-success">25% OFF</span></label>
								  </div>
								  <div class="custom-control custom-checkbox">
									 <input type="checkbox" class="custom-control-input" id="cb7">
									 <label class="custom-control-label" for="cb7">Fresh & Herbs <span class="badge badge-primary">5% OFF</span></label>
								  </div> -->
							   </div>
							</div>
						 </div>
						 <!--<div class="card">-->
							<!--<div class="card-header" id="headingTwo">-->
							<!--   <h5 class="mb-0">-->
							<!--	  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
							<!--	  Price <span class="mdi mdi-chevron-down float-right"></span>-->
							<!--	  </button>-->
							<!--   </h5>-->
							<!--</div>-->
							<!--<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">-->
							<!--   <div class="card-body card-shop-filters">-->
							<!--	  <div class="custom-control custom-checkbox">-->
							<!--		 <input type="checkbox" class="custom-control-input" id="1">-->
							<!--		 <label class="custom-control-label" for="1">$68 to $659 <span class="badge badge-warning">50% OFF</span></label>-->
							<!--	  </div>-->
							<!--	  <div class="custom-control custom-checkbox">-->
							<!--		 <input type="checkbox" class="custom-control-input" id="2">-->
							<!--		 <label class="custom-control-label" for="2">$660 to $1014</label>-->
							<!--	  </div>-->
							<!--	  <div class="custom-control custom-checkbox">-->
							<!--		 <input type="checkbox" class="custom-control-input" id="3">-->
							<!--		 <label class="custom-control-label" for="3">$1015 to $1679</label>-->
							<!--	  </div>-->
							<!--	  <div class="custom-control custom-checkbox">-->
							<!--		 <input type="checkbox" class="custom-control-input" id="4">-->
							<!--		 <label class="custom-control-label" for="4">$1680 to $1856</label>-->
							<!--	  </div>-->
							<!--   </div>-->
							<!--</div>-->
						 <!--</div>-->
{{--						 <div class="card">--}}
{{--							<div class="card-header" id="headingThree">--}}
{{--							   <h5 class="mb-0">--}}
{{--								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--								  Brand <span class="mdi mdi-chevron-down float-right"></span>--}}
{{--								  </button>--}}
{{--							   </h5>--}}
{{--							</div>--}}
{{--							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">--}}
{{--							   <div class="card-body card-shop-filters">--}}
{{--								  <!--<form class="form-inline mb-3">-->--}}
{{--									 <!--<div class="form-group">-->--}}
{{--										<!--<input type="text" class="form-control" placeholder="Search By Brand">-->--}}
{{--									 <!--</div>-->--}}
{{--									 <!--<button type="submit" class="btn btn-secondary ml-2">GO</button>-->--}}
{{--								  <!--</form>-->--}}
{{--								  <?php--}}
{{--								  $b=1;--}}
{{--								  foreach($brands as $brandd) { ?>--}}

{{--								  <div class="custom-control custom-checkbox">--}}
{{--									 <input type="checkbox" value="<?php echo $brandd->id ?>" class="custom-control-input bybrands" id="<?php echo "b".$b;?>">--}}
{{--									  <?php--}}
{{--								      if(is_null($brandd->slug))--}}
{{--								      { ?>--}}
{{--								         <a href="{{ $data['image_url'] }}../brands/7UP" >--}}
{{--								   <?php    }else {--}}
{{--								  ?>--}}
{{--								  <a href="{{ $data['image_url'] }}../shop/{{$brandd->slug}}" >--}}
{{--								      <?php } ?> <?php echo $brandd->name; ?></a>--}}

{{--									 <!--<span class="badge badge-warning">50% OFF</span>-->--}}

{{--								  </div>--}}
{{--								  <?php $b++; } ?>--}}
{{--								  <!--<div class="custom-control custom-checkbox">-->--}}
{{--									 <!--<input type="checkbox" class="custom-control-input" id="b2">-->--}}
{{--									 <!--<label class="custom-control-label" for="b2">Seasonal Fruits <span class="badge badge-secondary">NEW</span></label>-->--}}
{{--								  <!--</div>-->--}}

{{--							   </div>--}}
{{--							</div>--}}
{{--						 </div>--}}
{{--						 <div class="card">--}}
{{--							<div class="card-header" id="headingThree">--}}
{{--							   <h5 class="mb-0">--}}
{{--								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">--}}
{{--								  Category<span class="mdi mdi-chevron-down float-right"></span>--}}
{{--								  </button>--}}
{{--							   </h5>--}}
{{--							</div>--}}
{{--							<div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">--}}
{{--							   <div class="card-body" style="max-height: 500px; overflow: auto;">--}}
{{--								  <div class="list-group">--}}
{{--								      <?php foreach($randcat as $cat) {--}}
{{--								      ?>--}}
{{--									 <a href="{{ $data['image_url'] }}../shop-main/{{$cat->slug}}" class="list-group-item list-group-item-action"><?php echo $cat->name; ?></a>--}}
{{--									 <?php } ?>--}}

{{--								  </div>--}}
{{--							   </div>--}}
{{--							</div>--}}
{{--						 </div>--}}
					  </div>
				   </div>
				   <div class="left-ad mt-4">
					  <img class="img-fluid" src="http://via.placeholder.com/254x557" alt="">
				   </div>
				</div>
				</div>
               <div class="col-md-9">
{{--                  <a href="#"><img class="img-fluid mb-3" src="img/shop.jpg" alt=""></a>--}}
                  <div class="shop-head">
{{--                     <a href="#"><span class="mdi mdi-home"></span> Home</a> <span class="mdi mdi-chevron-right"></span> <a href="#"></a> <span class="mdi mdi-chevron-right"></span> <a href="#">Fruits</a>--}}
                     <!--<div class="btn-group float-right mt-2">-->
                     <!--   <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                     <!--   Sort by Products &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                     <!--   </button>-->
                        <!--<div class="dropdown-menu dropdown-menu-right">-->
                        <!--   <a class="dropdown-item" href="#">Relevance</a>-->
                        <!--   <a class="dropdown-item" href="#">Price (Low to High)</a>-->
                        <!--   <a class="dropdown-item" href="#">Price (High to Low)</a>-->
                        <!--   <a class="dropdown-item" href="#">Discount (High to Low)</a>-->
                        <!--   <a class="dropdown-item" href="#">Name (A to Z)</a>-->
                        <!--</div>-->
                     <!--</div>-->
                     <h5 class="mb-3"><?php echo $catdata[0]->name; ?></h5>
                  </div>
                  <div id="ajax12345" class="row no-gutters">
                       </div>
                   <div id="ajax1234" class="row no-gutters">
                       </div>
                  <div id="ajax123" class="row no-gutters">

                  <?php foreach($allProduct as $product)
                  {

                     // echo $product->quantity;
                     ?>
                     <div class="col-md-4">
                        <div class="product">
                           <a href="../single/<?php echo $product->slug; ?>">
                              <div class="product-header">
                                 <span class="badge badge-success"><?php  $discountinper=100*($product->cost-$product->price)/ $product->cost;  echo round($discountinper);?>% OFF</span>
                                 <img class="img-fluid" src="{{ $data['image_url'].'assets/uploads/thumbs/'.$product->image ?? asset('website/img/item/7.jpg') }}" alt="">
                                 <span class="veg text-success mdi mdi-circle"></span>
                              </div>
                              <div class="product-body">
                                 <h5><?php echo $product->name; ?></h5>
{{--                                 <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - <?php print_r($product->unit); ?></h6>--}}
                              </div>
                              <div class="product-footer">
                              <?php if($product->quantity>0) { ?>
                                 <button type="button" class="btn btn-secondary btn-sm float-right"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>
                                 <?php } else {?>
                                 <button disabled type="button" class="btn btn-secondary btn-sm float-right"><i class="mdi mdi-cart-outline"></i>Out of stock</button>
                                 <?php } ?>
                                 <p class="offer-price mb-0"><?php  print_r(number_format((float)$product->price, 2, '.', '')); ?> ₹<i class="mdi mdi-tag-outline"></i><br><span class="regular-price"><?php  print_r(number_format((float)$product->cost, 2, '.', '')); ?> ₹</span></p>
                              </div>
                           </a>
                        </div>
                     </div>
                  <?php } ?>

                  </div>

               </div>
            </div>
         </div>
      </section>
{{--      <section class="product-items-slider section-padding bg-white border-top">--}}
{{--         <div class="container">--}}
{{--            <div class="section-header">--}}
{{--               <h5 class="heading-design-h5">Best Offers View <span class="badge badge-primary">20% OFF</span>--}}
{{--                  <a class="float-right text-secondary" href="shop.html">View All</a>--}}
{{--               </h5>--}}
{{--            </div>--}}
{{--            <div class="owl-carousel owl-carousel-featured">--}}
{{--               <div class="item">--}}
{{--                  <div class="product">--}}
{{--                     <a href="single.html">--}}
{{--                        <div class="product-header">--}}
{{--                           <span class="badge badge-success">50% OFF</span>--}}
{{--                           <img class="img-fluid" src="img/item/7.jpg" alt="">--}}
{{--                           <span class="veg text-success mdi mdi-circle"></span>--}}
{{--                        </div>--}}
{{--                        <div class="product-body">--}}
{{--                           <h5>Product Title Here</h5>--}}
{{--                           <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>--}}
{{--                        </div>--}}
{{--                        <div class="product-footer">--}}
{{--                           <button type="button" class="btn btn-secondary btn-sm float-right"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>--}}
{{--                           <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i><br><span class="regular-price">$800.99</span></p>--}}
{{--                        </div>--}}
{{--                     </a>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <div class="item">--}}
{{--                  <div class="product">--}}
{{--                     <a href="single.html">--}}
{{--                        <div class="product-header">--}}
{{--                           <span class="badge badge-success">50% OFF</span>--}}
{{--                           <img class="img-fluid" src="img/item/8.jpg" alt="">--}}
{{--                           <span class="non-veg text-danger mdi mdi-circle"></span>--}}
{{--                        </div>--}}
{{--                        <div class="product-body">--}}
{{--                           <h5>Product Title Here</h5>--}}
{{--                           <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>--}}
{{--                        </div>--}}
{{--                        <div class="product-footer">--}}
{{--                           <button type="button" class="btn btn-secondary btn-sm float-right"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>--}}
{{--                           <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i><br><span class="regular-price">$800.99</span></p>--}}
{{--                        </div>--}}
{{--                     </a>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <div class="item">--}}
{{--                  <div class="product">--}}
{{--                     <a href="single.html">--}}
{{--                        <div class="product-header">--}}
{{--                           <span class="badge badge-success">50% OFF</span>--}}
{{--                           <img class="img-fluid" src="img/item/9.jpg" alt="">--}}
{{--                           <span class="non-veg text-danger mdi mdi-circle"></span>--}}
{{--                        </div>--}}
{{--                        <div class="product-body">--}}
{{--                           <h5>Product Title Here</h5>--}}
{{--                           <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>--}}
{{--                        </div>--}}
{{--                        <div class="product-footer">--}}
{{--                           <button type="button" class="btn btn-secondary btn-sm float-right"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>--}}
{{--                           <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i><br><span class="regular-price">$800.99</span></p>--}}
{{--                        </div>--}}
{{--                     </a>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <div class="item">--}}
{{--                  <div class="product">--}}
{{--                     <a href="single.html">--}}
{{--                        <div class="product-header">--}}
{{--                           <span class="badge badge-success">50% OFF</span>--}}
{{--                           <img class="img-fluid" src="img/item/10.jpg" alt="">--}}
{{--                           <span class="veg text-success mdi mdi-circle"></span>--}}
{{--                        </div>--}}
{{--                        <div class="product-body">--}}
{{--                           <h5>Product Title Here</h5>--}}
{{--                           <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>--}}
{{--                        </div>--}}
{{--                        <div class="product-footer">--}}
{{--                           <button type="button" class="btn btn-secondary btn-sm float-right"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>--}}
{{--                           <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i><br><span class="regular-price">$800.99</span></p>--}}
{{--                        </div>--}}
{{--                     </a>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <div class="item">--}}
{{--                  <div class="product">--}}
{{--                     <a href="single.html">--}}
{{--                        <div class="product-header">--}}
{{--                           <span class="badge badge-success">50% OFF</span>--}}
{{--                           <img class="img-fluid" src="img/item/11.jpg" alt="">--}}
{{--                           <span class="veg text-success mdi mdi-circle"></span>--}}
{{--                        </div>--}}
{{--                        <div class="product-body">--}}
{{--                           <h5>Product Title Here</h5>--}}
{{--                           <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>--}}
{{--                        </div>--}}
{{--                        <div class="product-footer">--}}
{{--                           <button type="button" class="btn btn-secondary btn-sm float-right"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>--}}
{{--                           <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i><br><span class="regular-price">$800.99</span></p>--}}
{{--                        </div>--}}
{{--                     </a>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--               <div class="item">--}}
{{--                  <div class="product">--}}
{{--                     <a href="single.html">--}}
{{--                        <div class="product-header">--}}
{{--                           <span class="badge badge-success">50% OFF</span>--}}
{{--                           <img class="img-fluid" src="img/item/12.jpg" alt="">--}}
{{--                           <span class="veg text-success mdi mdi-circle"></span>--}}
{{--                        </div>--}}
{{--                        <div class="product-body">--}}
{{--                           <h5>Product Title Here</h5>--}}
{{--                           <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>--}}
{{--                        </div>--}}
{{--                        <div class="product-footer">--}}
{{--                           <button type="button" class="btn btn-secondary btn-sm float-right"><i class="mdi mdi-cart-outline"></i> Add To Cart</button>--}}
{{--                           <p class="offer-price mb-0">$450.99 <i class="mdi mdi-tag-outline"></i><br><span class="regular-price">$800.99</span></p>--}}
{{--                        </div>--}}
{{--                     </a>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--      </section>--}}

      @endsection

@section('js')
    <script>
        $(window).scroll(function() {
            let topOfFooter = $('#footer').position().top;

            // Distance user has scrolled from top, adjusted to take in height of sidebar (570 pixels inc. padding).
            let scrollDistanceFromTopOfDoc = $(document).scrollTop() + 500;
            console.log(topOfFooter+' '+scrollDistanceFromTopOfDoc)
            // Difference between the two.
            let scrollDistanceFromTopOfFooter = scrollDistanceFromTopOfDoc - topOfFooter;
            // If user has scrolled further than footer,

            if ( $(window).scrollTop() >= 80  ) {
                $('#fixSide').addClass('fixed-top col-md-3 position_class')
                $('#collapseOne').addClass('show')

            }else {
                $('#fixSide').removeClass('fixed-top col-md-3 position_class')
                // $('.collapse').removeClass('show')
            }

            if(scrollDistanceFromTopOfDoc > topOfFooter){
                $('#fixSide').removeClass('fixed-top col-md-3 position_class')
                $('.collapse').removeClass('show')
            }
        });
    </script>
@endsection
