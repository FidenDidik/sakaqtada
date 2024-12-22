<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login | Sakaq Tada</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url()."dist_cbt" ?>/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet"  href="<?php echo base_url()."dist_cbt" ?>/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet"  href="<?php echo base_url()."dist_cbt" ?>/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet"  href="<?php echo base_url()."dist_cbt" ?>/vendor/animate/animate.css">

	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url()."dist_cbt" ?>/css/util.css">
	<link rel="stylesheet"  href="<?php echo base_url()."dist_cbt" ?>/css/main.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="<?php echo base_url()."dist_cbt" ?>/plugins/sweetalert2/dist/sweetalert2.min.css">
</head>

<!-- <body style="background: url('<?= $setting['bc'] ?>');background-size:cover;background-position: center;background-repeat: no-repeat;"> -->

	<div class="limiter">
		<div class="container-login100">
		<form class="login-form" method="post" action="<?php echo base_url(); ?>index.php/Login/cek_user_login" enctype="multipart/form-data">
			<div class="animated flipInX wrap-login100" style="padding-top:30px">
				<form id="formlogin" action="ceklogin.php" class="login100-form validate-form">
					<span class="animated infinite pulse delay-5s login100-form-title p-b-26 ">
						<!-- <img src="<?php echo $setting['logo']; ?>" style="max-height:50px" class="img-responsive" alt="Responsive image"> -->
                        <center><img src="<?php echo base_url(); ?>images/logokubar.png" style="max-height:70px" class="img-responsive" alt="Responsive image"></center>
                    </span>
					<span class=" login100-form-title p-b-26 ">
					SAKAQ TADA
						<!-- <?php echo $setting['sekolah']; ?> -->
					</span>
					<div class="animated flipInX delay-10s p-b-20">
						<span>Silahkan Login dengan username dan password yang anda miliki</span>
					</div>
					<?php 
                            if($this->session->flashdata('login') === 'bypass')  {
                                echo "<br><font color=red>You must login first before accessing the system.</font><br><br>";
                            }
                            echo form_open('Login/cek_user_login', 'role="form"');
                        ?>
                            <fieldset>
					<div class="wrap-input100 validate-input" data-validate="Enter Username" required>
						<?php echo form_error('username', '<font color=red>', '</font>'); ?>
						<input class="input100" type="text" name="username" autocomplete="off">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<?php echo form_error('password', '<font color=red>', '</font>'); ?>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<input type="submit" value="Login" class="btn btn-lg btn-primary btn-block"> 
					<!-- <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
                        </div> -->
                    
						<p><small> <a href="<?php echo base_url(); ?>index.php/home/index" >
                        Beranda || </a>&copy;2024 - Pemerintah Kampung Sakaq Tada</small></p>
						
					</div>
					</fieldset>
                        <?php echo form_close(); ?>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="<?php echo base_url()."dist_cbt" ?>/vendor/jquery/jquery-3.2.1.min.js"></script>

	<!--===============================================================================================-->
	<script src="<?php echo base_url()."dist_cbt" ?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()."dist_cbt" ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src='<?php echo $homeurl; ?>/plugins/sweetalert2/dist/sweetalert2.min.js'></script>
	<script src="<?php echo base_url()."dist_cbt" ?>/js/main.js"></script>
	<script>
		$(document).ready(function() {
			$('#formlogin').submit(function(e) {
				var homeurl;
				homeurl = '<?php echo $homeurl; ?>';
				e.preventDefault();
				$.ajax({
					type: 'POST',
					url: $(this).attr('action'),
					data: $(this).serialize(),
					success: function(data) {

						if (data == "ok") {
							console.log('sukses');
							window.location = homeurl;
						}
						if (data == "nopass") {
							swal({
								position: 'top-end',
								type: 'warning',
								title: 'Password Salah',
								showConfirmButton: false,
								timer: 1500
							});
						}
						if (data == "td") {
							swal({
								position: 'top-end',
								type: 'warning',
								title: 'Siswa tidak terdaftar',
								showConfirmButton: false,
								timer: 1500
							});
						}
						if (data == "nologin") {
							swal({
								position: 'top-end',
								type: 'warning',
								title: 'Siswa sudah aktif',
								showConfirmButton: false,
								timer: 1500
							});
						}
						if (data == "ta") {
							swal({
								position: 'top-end',
								type: 'warning',
								title: 'Akun belum diaktifkan silahkan hubungi panitia ujian',
								showConfirmButton: false,
								timer: 1500
							});
						}

					}
				})
				return false;
			});

		});

		function showpass() {
			var x = document.getElementById("pass");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>

</body>

</html>