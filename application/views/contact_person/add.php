<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Contact Person Add</h3>
            </div>
            <?php echo form_open('contact_person/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact_phone" class="control-label"><span class="text-danger">*</span>contact phone</label>
						<div class="form-group">
							<input type="text" name="contact_phone" value="<?php echo $this->input->post('contact_phone'); ?>" class="form-control" id="contact_phone" />
							<span class="text-danger"><?php echo form_error('contact_phone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact_email" class="control-label"><span class="text-danger">*</span>contact_email</label>
						<div class="form-group">
							<input type="text" name="contact_email" value="<?php echo $this->input->post('contact_email'); ?>" class="form-control" id="contact_email" />
							<span class="text-danger"><?php echo form_error('contact_email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="address" class="control-label"><span class="text-danger">*</span>Address</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo $this->input->post('address'); ?>" class="form-control" id="address" />
							<span class="text-danger"><?php echo form_error('address');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
			  
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
				</button>
				<a href="<?php echo site_url('company/index'); ?>" class="btn btn-success btn-md">Cancel</a>
				<?php echo form_close(); ?>
					</div>
            
      	</div>
    </div>
</div>