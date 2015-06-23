<?php require_once('header.php') ?>
<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1>Banoful<span>&</span>Co <h3>(বনফুল এন্ড কোং)</h3></h1>
									<h2>বিশুদ্ধ খাবারের বিশ্বস্ত নাম</h2>
									<p>Like all other creation Banoful & Co. Ltd., has been established with a view to full fill some objectives. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/blackberry.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1>Banoful<span>&</span>Co <h3>(বনফুল এন্ড কোং)</h3></h1>
									<h2>বিশুদ্ধ খাবারের বিশ্বস্ত নাম</h2>
									<p>Like all other creation Banoful & Co. Ltd., has been established with a view to full fill some objectives. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/biscuits.jpeg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1>Banoful<span>&</span>Co <h3>(বনফুল এন্ড কোং)</h3></h1>
									<h2>বিশুদ্ধ খাবারের বিশ্বস্ত নাম</h2>
									<p>Like all other creation Banoful & Co. Ltd., has been established with a view to full fill some objectives. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/burgers.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="index.php#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="index.php#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
            						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
<div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/admin/connection.php');
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong><br> <a href="cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><br><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span></ol>';
}else{
    echo 'Your Cart is empty';
}
?>
</div>          
 
						</div>
            <!--/category-products-->
            
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="index.php#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										Category
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											
                      <?php
  $sql = "SELECT * FROM `category`";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
<select name="category">
  <?php
    while($row = $result->fetch_assoc()) { ?>
  <option value='<?php echo $row["id"]?>'><?php echo $row["name"]?></option>
  <?php
    } ?>
  </select>
  <?php
} else {
    echo "0 results";
}
  ?>
						
										</ul>
									</div>
								</div>
							</div>
							
						</div><!--/category-products-->
					
									
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">Tk.0</b> <b class="pull-right">Tk. 6000</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
        
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

              <?php
   
	$results = $conn->query("SELECT * FROM products ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
          ?>
            <form action="cart_update.php" method="post" >
        			<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/<?php echo $obj->product_img_name ?>" alt="" />
										<h2><?php echo $obj->product_name ?></h2>
										<p><?php echo $obj->price ?></p>
										<button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$56</h2>
											<p><?php echo $obj->product_name ?></p>
                      
     <p><?php echo 'Qty <input type="text" name="product_qty" value="1" size="3" />'; ?></p>
											<button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="index.php#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="index.php#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>  
 <?php 
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
echo '<input type="hidden" name="type" value="add" />';
                echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
              ?>
              </form>
        <?php  
        }
    
    }
    ?>  
</div><!--features_items-->
					

					
				<div class="features_items"><!--recommended items-->
						<h2 class="title text-center">Recommended Items</h2>

              <?php
   
	$results = $conn->query("SELECT * FROM products WHERE category_id='1' ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
          ?>
            <form action="cart_update.php" method="post" >
        			<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/<?php echo $obj->product_img_name ?>" alt="" />
										<h2><?php echo $obj->product_name ?></h2>
										<p><?php echo $obj->price ?></p>
										<button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$56</h2>
											<p><?php echo $obj->product_name ?></p>
                      
     <p><?php echo 'Qty <input type="text" name="product_qty" value="1" size="3" />'; ?></p>
											<button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="index.php#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="index.php#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>  
 <?php 
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
echo '<input type="hidden" name="type" value="add" />';
                echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
              ?>
              </form>
        <?php  
        }
    
    }
    ?>  
</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
<?php require_once('footer.php') ?>