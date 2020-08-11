<main role="main" class="container">
     <?php $this->load->view('layouts/_alert')?>
	<div class="row">
		<div class="col-md-10 mx-auto my-auto">
			<div class="card">
				<div class="card-header">
					<span>Pengguna</span>
					<a href="<?= base_url('user/create')?>" class="btn btn-sm btn-secondary">Tambah</a>

					<div class="float-right">
						<form action="<?= base_url("user/search")?>" method="POST">
							<div class="input-group">
								<input type="text" name="keyword" id=""
									class="form-control form-control-sm text-center" value="<?= $this->session->userdata('keyword')?>">
								<div class="input-group-append">
									<button class="btn btn-info btn-sm" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<a href="<?= base_url('user/reset')?>" class="btn btn-info btn-sm">
										<i class="fas fa-eraser"></i>
									</a>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Pengguna</th>
								<th scope="col">Email</th>
								<th scope="col">Role</th>
								<th scope="col">Status</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
                                   <?php $no=1;foreach($content as $row):$no++;?>
							<tr>
								<td><?= $no?></td>
								<td>
                                             <p>
										<img src="<?= $row->image ? base_url("upload/user/$row->image"):base_url("assets/image/avatar.png")?>"
											alt="" height="60">
										<?= $row->name?>
									</p>
								</td>
								<td><?= $row->email?></td>
								<td><?= $row->role?></td>
								<td><?= $row->is_active? 'Aktif': 'Nonaktif'?></td></td>
								<td>
									<form action="<?= base_url('user/delete/'.$row->id)?>" method="POST">
										<input type="hidden" name="id" value="<?=$row->id?>">
										<a href="<?= base_url('user/edit/'.$row->id)?>">
										<i class="fas fa-trash text-danger"></i>
										</a>

										<button class="btn btn-sm" type="submit"
											onclick="return confirm('Are You Sure?')">
											<i class="fas fa-trash text-danger"></i>
										</button>
									</form>
								</td>
                                   </tr>
                                   <?php endforeach?>
						</tbody>
					</table>
					<nav aria-label="Page navigation example">
						<?= $pagination?>
					</nav>
				</div>
			</div>
		</div>
	</div>
</main>
