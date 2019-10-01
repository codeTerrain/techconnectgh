<head>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('jquery/jquery-ui.css'); ?>" />
</head>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Person Add</h3>
            </div>
            <?php echo form_open('person/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="salutation" class="control-label"><span class="text-danger">*</span>Salutation</label>
						<div class="form-group">
							<select name="salutation" class="form-control">
								<option value="">select</option>
								<?php 
								$salutation_values = array(
									'Mr.'=>'Mr.',
									'Mrs.'=>'Mrs.',
									'Miss'=>'Miss',
								);

								foreach($salutation_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('salutation')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('salutation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="educational_level" class="control-label"><span class="text-danger">*</span>Educational Level</label>
						<div class="form-group">
							<select name="educational_level" class="form-control">
								<option value="">select</option>
								<?php 
								$educational_level_values = array(
									'Basic'=>'Basic',
									'Secondary'=>'Secondary',
									'Tertiary'=>'Tertiary',
								);

								foreach($educational_level_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('educational_level')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('educational_level');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="marital_status" class="control-label"><span class="text-danger">*</span>Marital Status</label>
						<div class="form-group">
							<select name="marital_status" class="form-control">
								<option value="">select</option>
								<?php 
								$marital_status_values = array(
									'SINGLE'=>'SINGLE',
									'DIVORCED'=>'DIVORCED',
									'MARRIED'=>'MARRIED',
								);

								foreach($marital_status_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('marital_status')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('marital_status');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_of_birth" class="control-label"><span class="text-danger">*</span>Date Of Birth</label>
						<div class="form-group">
							<input type="text" name="date_of_birth" value="<?php echo $this->input->post('date_of_birth'); ?>" class="form-control" id="date_of_birth" />
							<span class="text-danger"><?php echo form_error('date_of_birth');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_name" class="control-label"><span class="text-danger">*</span>Last Name</label>
						<div class="form-group">
							<input type="text" name="last_name" value="<?php echo $this->input->post('last_name'); ?>" class="form-control" id="last_name" />
							<span class="text-danger"><?php echo form_error('last_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="first_name" class="control-label"><span class="text-danger">*</span>First Name</label>
						<div class="form-group">
							<input type="text" name="first_name" value="<?php echo $this->input->post('first_name'); ?>" class="form-control" id="first_name" />
							<span class="text-danger"><?php echo form_error('first_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="other_name" class="control-label">Other Name</label>
						<div class="form-group">
							<input type="text" name="other_name" value="<?php echo $this->input->post('other_name'); ?>" class="form-control" id="other_name" />
							<span class="text-danger"><?php echo form_error('other_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone" class="control-label"><span class="text-danger">*</span>Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo $this->input->post('phone'); ?>" class="form-control" id="phone" />
							<span class="text-danger"><?php echo form_error('phone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="postal_address" class="control-label"><span class="text-danger">*</span>Postal Address</label>
						<div class="form-group">
							<input type="text" name="postal_address" value="<?php echo $this->input->post('postal_address'); ?>" class="form-control" id="postal_address" />
							<span class="text-danger"><?php echo form_error('postal_address');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="website" class="control-label">Website</label>
						<div class="form-group">
							<input type="text" name="website" value="<?php echo $this->input->post('website'); ?>" class="form-control" id="website" />
							<span class="text-danger"><?php echo form_error('website');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="linkedIn" class="control-label">LinkedIn</label>
						<div class="form-group">
							<input type="text" name="linkedIn" value="<?php echo $this->input->post('linkedIn'); ?>" class="form-control" id="linkedIn" />
							<span class="text-danger"><?php echo form_error('linkedIn');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="facebook" class="control-label">Facebook</label>
						<div class="form-group">
							<input type="text" name="facebook" value="<?php echo $this->input->post('facebook'); ?>" class="form-control" id="facebook" />
							<span class="text-danger"><?php echo form_error('facebook');?></span>
						</div>
					</div>

					<div class="col-md-6" id = "blow">
						<label for="facebook" class="control-label">Associated Company</label>
						<div class="form-group">
						

					<?php echo form_dropdown('person_company', $person_companies, '', 'class="form-control"' );
					
					
					?>
					</div>
					
				</div>
				<div class="col-md-6" >
						<label for="specify" class="control-label">Specify Company</label>
						<div class="form-group">
							<input type="text" name="specify" value="<?php echo $this->input->post('specify'); ?>" class="form-control" id="specify" />
						
							<span class="text-danger"><?php echo form_error('specify');?></span>
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
<script>
function change(){
	var selectName = $person_companies.selected();
	if (selectName == "#"){
		$('#specify').show();
}
else
$('#specify').hide();



}

</script>