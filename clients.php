<?php
	include  ("header.php");
?>

<style>
	.tabs tr td 
	{
		border:1px solid #ccc;padding:5px;

</style>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Client
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-6">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Client List
						</h3><br>
						<table class="stext-113 cl6 p-b-26 tabs" width="100%">					
							<tr class="tabs" style="color:#000;">
								<td style="width:5%">SL</td>
								<td style="width:65%">Name</td>
								<td style="width:30%">Country</td>
							</tr>					
							<tr class="tabs">
								<td>1</td>
								<td>LAGOApparels</td>
								<td>Canada</td>
							</tr>					
							<tr class="tabs">
								<td>2</td>
								<td>GaryGurmukhSales Ltd</td>
								<td>Canada</td>
							</tr>					
							<tr class="tabs">
								<td>3</td>
								<td>KarlAlley Sweden AB</td>
								<td>Sweden</td>
							</tr>					
							<tr class="tabs">
								<td>4</td>
								<td>FrontplayswedenAB</td>
								<td>Sweden</td>
							</tr>					
							<tr class="tabs">
								<td>5</td>
								<td>The SwagerSalon</td>
								<td>Malayasia</td>
							</tr>					
							<tr class="tabs">
								<td>6</td>
								<td>KHAN BerufsbekleidungGMBH</td>
								<td>Austria</td>
							</tr>					
							<tr class="tabs">
								<td>7</td>
								<td>STEALTH CLOTHING LIMITE</td>
								<td>United Kingdom</td>
							</tr>					
							<tr class="tabs">
								<td>8</td>
								<td>Global Sports US Limite</td>
								<td>United Kingdom</td>
							</tr>					
							<tr class="tabs">
								<td>9</td>
								<td>EI BarbasBeard Co</td>
								<td>Texas, USA</td>
							</tr>					
							<tr class="tabs">
								<td>10</td>
								<td>Snapback Planet</td>
								<td>USA</td>
							</tr>				
							<tr class="tabs">
								<td>11</td>
								<td>ShubraGar. & Lux. Tr. Co. LLC</td>
								<td>Sharjah,UAE</td>
							</tr>				
							<tr class="tabs">
								<td>12</td>
								<td>TL RETAIL GMBH & CO. KG</td>
								<td>Barlin,Germany</td>
							</tr>				
							<tr class="tabs">
								<td>13</td>
								<td>Kasel(Pvt) Limited</td>
								<td>Rawalpindi, Pakistan</td>
							</tr>				
							<tr class="tabs">
								<td>14</td>
								<td>SAINT-P Sports</td>
								<td>Saint Pitursburg, Russia</td>
							</tr>				
							<tr class="tabs">
								<td>15</td>
								<td>PT. SejakSalamanya( Ageless Galaxy )</td>
								<td>Jakarta, Indoneshia</td>
							</tr>				
							<tr class="tabs">
								<td>16</td>
								<td>TRAPSTAR</td>
								<td>United Kingdom</td>
							</tr>				
							<tr class="tabs">
								<td>17</td>
								<td>Soccer Supporters International</td>
								<td>Ireland</td>
							</tr>				
							<tr class="tabs">
								<td>18</td>
								<td>CODEWORDLLC</td>
								<td>TN,USA</td>
							</tr>
							
						</table><br>
						
						
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
	<script>
	jQuery(document).ready(function(){
		$(".mobileTopMenu").click(function(){
			$(".mobileSubMenu").slideToggle();
		});
	});
	</script>	
	
</body>
</html>