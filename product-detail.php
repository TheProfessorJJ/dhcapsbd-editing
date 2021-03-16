<?php
	include  ("header.php");
	$success=0;
	
	if($_POST['productEmailBody']){
		$product	=	$_POST['product'];
		$email		=	$_POST['email'];
		$msg		=	$_POST['msg'];
		
		$to = 'salim.rahman12@gmail.com'; 

		$subject = 'Product Query';

		$message = '
		<html>
		<head>
		  <title>Product Query</title>
		</head>
		<body>
		  <table>
			<tr>
			  <td>Email: </td><td>'.$email.'</td>
			</tr>
			<tr>
			  <td>Product: </td><td>'.$product.'</td>
			</tr>
			<tr>
			  <td>Message: </td><td>'.$msg.'</td>
			</tr>			
		  </table>
		</body>
		</html>
		';

		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';

		$headers[] = 'From: '.$email.' <'.$email.'>';

		if(mail($to, $subject, $message, implode("\r\n", $headers))){
			$success=1;
		}
	}
?>

	


	<!-- breadcrumb -->
	<br><br>
		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="">
								<div class="wrap-pic-w pos-relative">
									<img src="images/<?php echo $_REQUEST["prd"] ?>" alt="IMG-PRODUCT">

									
								</div>

							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
					<!--
						<h4>Descriptions</h4><br>
						<p class="stext-102 cl6">
							Description here.
						</p><br><br>
						
						<h4>Additional Information</h4><br>
						<p  class="stext-102 cl6">
							<ul class="">
								<li class="flex-w flex-t p-b-7">
									<span class="stext-102 cl3 size-205">
										Weight
									</span>

									<span class="stext-102 cl6 size-206">
										0.79 kg
									</span>
								</li>

								<li class="flex-w flex-t p-b-7">
									<span class="stext-102 cl3 size-205">
										Dimensions
									</span>

									<span class="stext-102 cl6 size-206">
										110 x 33 x 100 cm
									</span>
								</li>

								<li class="flex-w flex-t p-b-7">
									<span class="stext-102 cl3 size-205">
										Materials
									</span>

									<span class="stext-102 cl6 size-206">
										60% cotton
									</span>
								</li>

								<li class="flex-w flex-t p-b-7">
									<span class="stext-102 cl3 size-205">
										Color
									</span>

									<span class="stext-102 cl6 size-206">
										Black, Blue, Grey, Green, Red, White
									</span>
								</li>

								<li class="flex-w flex-t p-b-7">
									<span class="stext-102 cl3 size-205">
										Size
									</span>

									<span class="stext-102 cl6 size-206">
										XL, L, M, S
									</span>
								</li>
							</ul>
						</p><br>
						-->
						<div class="">
							<form method="post" action="" id="frm" name="frm">
							
								<h4>Submit your query</h4><br>
								
								<?php if($success==1){ ?>
								<p style="font-weight: bold;color: green;border: 1px solid #ddd;padding: 10px;margin-bottom: 25px;margin-top: 5px;text-align: center;">Success! Thank you for your query. Soon we will get back to you.</p>
								<?php } ?>
								<div class="bor8 m-b-20 how-pos4-parent">
									<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
									<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
								</div>
								<div class="bor8 m-b-20 how-pos4-parent">
									<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="product" value="<?php echo $_REQUEST["name"] ?>" readonly>
									<img class="how-pos4 pointer-none" src="images/icons/icon-cap.png" style="width:30px;padding-right:4px;">
								</div>

								<div class="bor8 m-b-30">
									<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="Give us your query for <?php echo $_REQUEST["name"] ?>"></textarea>
								</div>

								<input class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit" name="productEmailBody" value="Submit">
							</form>
						</div>
						
					</div>
				</div>
			</div>

		</div>

	</section>


	
		

<?php
	include  ("footer.php");
?>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
	jQuery(document).ready(function(){
		$(".mobileTopMenu").click(function(){
			$(".mobileSubMenu").slideToggle();
		});
	});
	</script>	

</body>
</html>