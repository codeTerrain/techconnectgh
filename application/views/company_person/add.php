<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Company Person Add</h3>
            </div>
            <?php echo form_open('company_person/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="date_joined" class="control-label"><span class="text-danger">*</span>Date Joined</label>
						<div class="form-group">
							<input type="text" name="date_joined" value="<?php echo $this->input->post('date_joined'); ?>" class="has-datepicker form-control" id="date_joined" />
							<span class="text-danger"><?php echo form_error('date_joined');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="position" class="control-label"><span class="text-danger">*</span>Position</label>
						<div class="form-group">
							<input type="text" name="position" value="<?php echo $this->input->post('position'); ?>" class="form-control" id="position" />
							<span class="text-danger"><?php echo form_error('position');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="exit_year" class="control-label">Exit Year</label>
						<div class="form-group">
							<input type="text" name="exit_year" value="<?php echo $this->input->post('exit_year'); ?>" class="has-datepicker form-control" id="exit_year" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="job_description" class="control-label"><span class="text-danger">*</span>Job Description</label>
						<div class="form-group">
							<textarea name="job_description" class="form-control" id="job_description"><?php echo $this->input->post('job_description'); ?></textarea>
							<span class="text-danger"><?php echo form_error('job_description');?></span>
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