<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Expertise Edit</h3>
            </div>
			<?php echo form_open('expertise/edit/'.$expertise['expertise_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="expertise_area" class="control-label"><span class="text-danger">*</span>Expertise Area</label>
						<div class="form-group">
							<input type="text" name="expertise_area" value="<?php echo ($this->input->post('expertise_area') ? $this->input->post('expertise_area') : $expertise['expertise_area']); ?>" class="form-control" id="expertise_area" />
							<span class="text-danger"><?php echo form_error('expertise_area');?></span>
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