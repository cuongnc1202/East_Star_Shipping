<!-- Begin footer -->
<footer>
	<div class="container footer">
		<div class="row">
			<div class="footer--logo col-xl-6 col-md-12 col-sm-12">
				<?php
				the_custom_logo();
				?>
				<!-- <a href=""><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_header_new-svg.png" alt=""></a> -->
			</div>
			<div class="footer--content col-xl-6 col-md-12 col-sm-12">
				<div class="row">
					<div class="item col-xl-6 col-md-6 col-sm-12">
						<div class="row">
							<div class="item--icon col-xl-2 col-md-1 col-1">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-svg.png"
									alt="">
							</div>
							<div class="item--content col-xl-10 col-md-11 col-11">
								<p>Văn phòng: Số 29 đường số 4, khu đô thị ven sông Lạch Tray, Phường Vĩnh Niệm,
									Quận Lê
									Chân, Thành phố Hải Phòng</p>
								<a href="https://www.google.com/maps/place/East+Star+Shipping+Co.,+ltd./@20.825771,106.6901753,18z/data=!3m1!4b1!4m9!1m2!2m1!1zU-G7kSAyOSDEkcaw4budbmcgc-G7kSA0LCBraHUgxJHDtCB0aOG7iyB2ZW4gc8O0bmcgTOG6oWNoIFRyYXk!3m5!1s0x314a7117c125e137:0xd45bd23a1bc0380e!8m2!3d20.825771!4d106.6918244!16s%2Fg%2F11gyxm58sd?hl=vi-VN&entry=ttu">xem chi tiết</a>
							</div>
						</div>
					</div>
					<div class="item col-xl-6 col-md-6 col-sm-12">
						<div class="row">
							<div class="item--icon col-xl-2 col-md-1 col-1">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-svg.png"
									alt="">
							</div>
							<div class="item--content col-xl-10 col-md-11 col-11">
								<p>Chỗ ở học viên:
									Số 365 HK 7 khu đô thị ven sông Lạch Tray, phường Vĩnh Niệm, quận Lê Chân, thành
									phố
									Hải Phòng thuộc sở hữu của Công ty TNHH Lưu An Tín</p>
							</div>
						</div>
					</div>
					<div class="item col-xl-6 col-md-6 col-sm-12">
						<div class="row">
							<div class="item--icon col-xl-2 col-md-1 col-1">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/telephone-svg.png"
									alt="">
							</div>
							<div class="item--content col-xl-10 col-md-11 col-11">
								<p>Điện thoại: +84 225 3734698</p>
							</div>
						</div>
						<div class="row">
							<div class="item--icon col-xl-2 col-md-1 col-1">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotline-svg.png"
									alt="">
							</div>
							<div class="item--content col-xl-10 col-md-11 col-11">
								<p>Hot line: +84 904 248486</p>
							</div>
						</div>
						<div class="row">
							<div class="item--icon col-xl-2 col-md-1 col-1">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail-svg.png"
									alt="">
							</div>
							<div class="item--content col-xl-10 col-md-11 col-11">
								<p>E-mail: crew@eastar-shipping.com</p>
							</div>
						</div>
					</div>
					<div class="item col-xl-6 col-md-6 col-sm-12">
						<div class="row">
							<div class="item--icon col-xl-2 col-md-1 col-1">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/location-svg.png"
									alt="">
							</div>
							<div class="item--content col-xl-10 col-md-11 col-11">
								<p>Địa chỉ đăng ký kinh doanh:
									Thửa 352, Lô HK 6, Thuộc Dự Án Khu Đô Thị Ven Sông Lạch Tray, Phường Vĩnh
									Niệm, Quận Lê Chân, Thành phố Hải Phòng, Việt Nam</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer--copyright row">
			<div class="col-12">
				<p>© Copyrights 2022 East Star Shipping Co., Ltd.. All rights reserved</p>
			</div>
		</div>
	</div>
</footer>
<!-- End footer -->
<?php wp_footer(); ?>
<script>
	$(function () {
		let wow = new WOW({
			boxClass: 'wow',      // default
			animateClass: 'animated', // default
			offset: 0,          // default
			mobile: true,       // default
			live: true        // default
		})
		wow.init();
	});
</script>

</body>

</html>