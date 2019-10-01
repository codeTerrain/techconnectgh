<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Programme Edit</h3>
            </div>
			<?php echo form_open('programme/edit/'.$programme['programme_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="programme_type" class="control-label"><span class="text-danger">*</span>Programme Type</label>
						<div class="form-group">
							<input type="text" name="programme_type" value="<?php echo ($this->input->post('programme_type') ? $this->input->post('programme_type') : $programme['programme_type']); ?>" class="form-control" id="programme_type" />
							<span class="text-danger"><?php echo form_error('programme_type');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label"><span class="text-danger">*</span>Description</label>
						<div class="form-group">
							<input type="text" name="description" value="<?php echo ($this->input->post('description') ? $this->input->post('description') : $programme['description']); ?>" class="form-control" id="description" />
							<span class="text-danger"><?php echo form_error('description');?></span>
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