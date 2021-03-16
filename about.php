<?php
	include  ("header.php");
?>




	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			About
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-6">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							We are a Custom design Hats & Caps factory...
						</h3>

						<p class="stext-113 cl6 p-b-26" style="text-align:justify;">
							We are a Hats & Caps  manufacturing factory. We are specialized in custom designing of private label hats and caps.
						</p>

						<p class="stext-113 cl6 p-b-26" style="text-align:justify;">
							Our objectives are to assist the small entrepreneurs those who wants to make their own brand hats  with their dream LOGO, label and tags as well as the customers who want caps for promotional campaign for their corporations. Many entrepreneurs cherish the dreams of making their own designed LOGO with some specific slogans or messages to the society or some peoples, citizens, nationals  or the whole world.  We just help them to make their dreams real on to a visible & attractive human wears. Yes, those are sports caps like SNAPBACK, Size Fitted, fashion caps, Bucket hats knitted beanie, bandanas, Sun visors. We make any quantity of hats for our customers. 
						</p>

						<p class="stext-113 cl6 p-b-26" style="text-align:justify;">
							Our daily production capacity of hats are 6,000 pieces. We have in house embroidery facility comprising with Japan made automatic 20 heads Barudan and Tajima brand embroidery machine. We make the embroidery in 3D, normal 2D, on felt  and sequence styles. We have facilities of any type print on caps.
						</p>
						<p class="stext-113 cl6 p-b-26" style="text-align:justify;">
							We make the custom design woven brand  labels, paper tags, shiny stickers and bar codes for our customers.  We can assure the short time manufacturing and shipping. We never compromise with quality.
						</p>
						<p class="stext-113 cl6 p-b-26" style="text-align:justify;">
							We always welcome the new and small entrepreneurs. We make any quantity and we ship anywhere of the world. 
						</p>
						<p class="stext-113 cl6 p-b-26" style="text-align:justify;">
							Any question ? Let us know at House-18, Road-33, Sector -7, Uttara, Dhaka-1230, Bangladesh or call us to +8801711525227
						</p>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-6 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/Factory Inside Pictures/2013-09-21 12.32.32.jpg" alt="IMG">
						</div>
					</div>
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/Factory Inside Pictures/2013-09-21 12.33.09.jpg" alt="IMG">
						</div>
					</div>
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/Factory Inside Pictures/2013-09-21 12.35.16.jpg" alt="IMG">
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
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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
	
</body>
</html>