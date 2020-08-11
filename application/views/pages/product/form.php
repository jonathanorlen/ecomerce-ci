<main role="main" class="container">
	<div class="row">
		<div class="col-md-10 mx-auto my-auto">
			<div class="card">
				<div class="card-header">
					<span>Tambah Produk</span>
				</div>
				<div class="card-body">
					<?= form_open_multipart($form_action, ['method' => 'POST'])?>
					<?= isset($input->id)?form_hidden('id', $input->id):''?>
					<div class="form-group">
						<label for="">Produk</label>
						<?= form_input('title',$input->title,['class'=>'form-control','id'=>'title',
                                        'onkeyup' =>'createSlug()', 'required' => 'true', 'autofocus' => 'true'])
                                   ?>
						<?= form_error('title')?>
					</div>
					<div class="form-group">
						<label for="">Deskripsi</label>
						<?= form_textarea('description', $input->description, ['rows' => '4', 'class' => 'form-control']);?>
						<?= form_error('description')?>
					</div>
					<div class="form-group">
						<label for="">Harga</label>
						<?= form_input(['name'=>'price','value'=>$input->price,'type'=>'number','class' => 'form-control','required' => 'true'])?>
						<?= form_error('price')?>
					</div>
					<div class="form-group">
						<label for="">Kategori</label>
						<?= form_dropdown('id_category',getDropdownList('category',['id','title']),$input->id_category,['class' => 'form-control'])?>
						<?= form_error('id_category')?>
					</div>
					<div class="form-group">
						<label for="">Stock Ready?</label>
						<br>
						<div class="form-check form-check-inline">
                                   <?= form_radio('is_available','1',
                                             ['checked' => $input->is_available == 1? True : False,
                                             'class' =>'form-check-input'])?>
							<label for="" class="form-check-label">Active</label>
						</div>
						<div class="form-check form-check-inline">
							<?= form_radio('is_available','0',
                                             ['checked' => $input->is_available == 0? True : False,
                                             'class' =>'form-check-input'])?>
							<label for="" class="form-check-label">Nonactive</label>
						</div>
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<br>
						<?= form_upload('image')?>
						<?php if($this->session->flashdata('image_error')):?>
						<small class="form-text text-danger">
							<?= $this->session->flashdata('image_error') ?>
						</small>
                              <?php endif?>
                              <?php if($input->image):?>
                                   <img src="<?= base_url('/upload/product/'.$input->image)?>" alt="" height="150">
                              <?php endif?>
					</div>
					<div class="form-group">
						<label for="">Slug</label>
						<?= form_input('slug',$input->slug,['class'=>'form-control','id'=>'slug',
                                    'required' => 'true'])
                                   ?>
						<?= form_error('slug')?>
					</div>
					<button class="btn btn-primary" type="submit">Simpan</button>
					<?= 
                         form_close();
                         ?>
				</div>
			</div>
		</div>
	</div>
</main>
