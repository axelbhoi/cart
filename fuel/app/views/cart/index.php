<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('front-style.css'); ?>
    <!-- Custom CSS -->
    <?php echo Asset::css('dashboard/jasny-bootstrap.min.css'); ?>

    <!-- Custom Fonts -->
    <?php echo Asset::css('fonts/font-awesome/css/font-awesome.min.css'); ?>
    
	<?php echo Asset::js('dashboard/jquery.js'); ?>

	<?php echo Asset::js('dashboard/jquery.blockUI.js'); ?>

	<?php echo Asset::js('dashboard/jquery.dataTables.min.js'); ?>

	<?php echo Asset::js('dashboard/dataTables.bootstrap.js'); ?>

	<?php echo Asset::js('dashboard/bootstrap.min.js'); ?>

	<?php echo Asset::js('dashboard/jasny-bootstrap.min.js'); ?>

</head>
<body>

	<header id = "register-id">
    	<a href = "<?php echo Uri::base();?>">	
    		<span class = "header-the-text">Project</span>
            <span class = "header-urban-text">Shopping Cart</span>	
      	</a>	
	</header>

	<div class="container">

		<h3>Shopping Cart</h3>

		<div class="row">
            <?php foreach($items as $item):?>
                <div class="col-md-4 portfolio-item">
                    <h3 style  = "text-align:center"><?php echo $item['item_name'];?></h3>

                    <a href="#">
                        <?php echo Asset::img('items/'.$item['item_image'], array('id' => 'thumb','class'=>'img-responsive', 'style'=>'width:50%;margin: 0 auto;'));?>
                    </a>

                    <h4 ><?php echo $item['item_price'];?>0</h4>
                    <a href = ""  class = "cart-btn"><div class = "circle"><i class="fa fa-shopping-cart"></i></div></a>
                </div>                
            <?php endforeach;?>


        </div>

        <div class = "row" style = "text-align:right">
            <?php // fetch a previously forged instance, and render it
            echo Pagination::instance('mypagination')->render();?>
        </div>
<!--
        <div class = "row">
			<nav style = "text-align:right">
			  <ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
            </nav>        	
        </div>
-->
	</div>

</body>
</html>
