
<br><br>
<br>
<br>
<br>
<br>
<?php if ($this->session->userdata('login')){ ?>
<a href="<?= base_url() ?>login/logout ">Cerrar sesion</a>
<?php }else {?>
<section class="form">
	<div class="container">
		<div class="row">
			<div class="col-md-12" >
				<form action="<?= base_url() ?>login" method="post" class="form-inline">
					<div class="form-group">
					<label for="exampleInputName2">Email</label>
					<input type="email" class="form-control" id="exampleInputName2" placeholder="Email" name="email">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail2">Password</label>
					<input type="password" class="form-control" id="exampleInputEmail2" placeholder="Password" name="password">
					</div>
					<button type="submit" class="btn btn-primary">Ingresar</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php  }?>

</body>
</html>
