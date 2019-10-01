<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Area Add</h3>
            </div>
            <?php echo form_open('area/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="level" class="control-label"><span class="text-danger">*</span>Person</label>
						<div class="form-group">
							<select name="level" class="form-control">
								<option value="">select person</option>
								<?php 
								foreach($all_person as $person)
								{
									$selected = ($person['person_id'] == $this->input->post('level')) ? ' selected="selected"' : "";

									echo '<option value="'.$person['person_id'].'" '.$selected.'>'.$person['person_id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('level');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="years" class="control-label"><span class="text-danger">*</span>Years</label>
						<div class="form-group">
							<input type="text" name="years" value="<?php echo $this->input->post('years'); ?>" class="form-control" id="years" />
							<span class="text-danger"><?php echo form_error('years');?></span>
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