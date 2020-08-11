<main role="main" class="container">
	<div class="row">
		<div class="col-md-6 mx-auto my-auto">
			<div class="card">
				<div class="card-header">
					Login
				</div>
				<div class="card-body">
					<?= form_open('login',['method' => 'POST'])?>
						<div class="form-group">
							<label for="">Email</label>
							<?= form_input('email',$input->email, ['class' => 'form-control','required'=> true,'placeholder' => 'Masukan email valid']);?>
							<?= form_error('email');?>
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<?= form_password('password','',['class' => 'form-control','required'=> true,'placeholder' => 'Masukan password']);?>
							<?= form_error('password');?>
						</div>
						<button class="btn btn-primary" type="submit">Submit</button>
					<?= form_close()?>
				</div>
			</div>
		</div>
	</div>
</main>
