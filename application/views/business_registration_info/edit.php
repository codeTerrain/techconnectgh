<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Business Registration Info Edit</h3>
            </div>
			<?php echo form_open('business_registration_info/edit/'.$business_registration_info['bri_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="company_id" class="control-label"><span class="text-danger">*</span>Company Id</label>
						<div class="form-group">
							<input type="text" name="company_id" value="<?php echo ($this->input->post('company_id') ? $this->input->post('company_id') : $business_registration_info['company_id']); ?>" class="form-control" id="company_id" />
							<span class="text-danger"><?php echo form_error('company_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="path_of_file" class="control-label"><span class="text-danger">*</span>Path Of File</label>
						<div class="form-group">
							<input type="text" name="path_of_file" value="<?php echo ($this->input->post('path_of_file') ? $this->input->post('path_of_file') : $business_registration_info['path_of_file']); ?>" class="form-control" id="path_of_file" />
							<span class="text-danger"><?php echo form_error('path_of_file');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type_of_document" class="control-label"><span class="text-danger">*</span>Type Of Document</label>
						<div class="form-group">
							<input type="text" name="type_of_document" value="<?php echo ($this->input->post('type_of_document') ? $this->input->post('type_of_document') : $business_registration_info['type_of_document']); ?>" class="form-control" id="type_of_document" />
							<span class="text-danger"><?php echo form_error('type_of_document');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>