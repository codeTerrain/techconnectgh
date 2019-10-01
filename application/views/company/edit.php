<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Company Edit</h3>
            </div>
			<?php echo form_open('company/edit/'.$company['company_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="industry" class="control-label"><span class="text-danger">*</span>Industry</label>
						<div class="form-group">
							<select name="industry" class="form-control">
								<option value="">select</option>
								<?php 
								$industry_values = array(
									'BioTech'=>'Biotech',
									'FinTech'=>'FinTech',
									'Industries'=>'Industries',
									'Automotive'=>'Automotive',
									'Constructive'=>'Constructive',
									'Food'=>'Food',
									'Healthcare'=>'Healthcare',
									'InsurTech'=>'InsurTech',
									'Logistics'=>'Logistics',
									'Manufacture'=>'Manufacture',
									'Media'=>'Media',
									'Mobility'=>'Mobility',
									'Packaging'=>'Packaging',
									'Transprtation'=>'Transportation',
									'Retail'=>'Retail',
									'Shipbuilding'=>'Shipbuilding',
									'SmartCity'=>'SmartCity',
									'Telecommunication'=>'Telecommunication',
									'Entertainment'=>'Entertainment',
									'Travel'=>'Travel',
								);

								foreach($industry_values as $value => $display_text)
								{
									$selected = ($value == $company['industry']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('industry');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="company_name" class="control-label"><span class="text-danger">*</span>Company Name</label>
						<div class="form-group">
							<input type="text" name="company_name" value="<?php echo ($this->input->post('company_name') ? $this->input->post('company_name') : $company['company_name']); ?>" class="form-control" id="company_name" />
							<span class="text-danger"><?php echo form_error('company_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="geolocation" class="control-label"><span class="text-danger">*</span>Geolocation</label>
						<div class="form-group">
							<input type="text" name="geolocation" value="<?php echo ($this->input->post('geolocation') ? $this->input->post('geolocation') : $company['geolocation']); ?>" class="form-control" id="geolocation" />
							<span class="text-danger"><?php echo form_error('geolocation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $company['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone" class="control-label"><span class="text-danger">*</span>Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo ($this->input->post('phone') ? $this->input->post('phone') : $company['phone']); ?>" class="form-control" id="phone" />
							<span class="text-danger"><?php echo form_error('phone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="website" class="control-label"><span class="text-danger">*</span>Website</label>
						<div class="form-group">
							<input type="text" name="website" value="<?php echo ($this->input->post('website') ? $this->input->post('website') : $company['website']); ?>" class="form-control" id="website" />
							<span class="text-danger"><?php echo form_error('website');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="physical_address" class="control-label">Physical Address</label>
						<div class="form-group">
							<input type="text" name="physical_address" value="<?php echo ($this->input->post('physical_address') ? $this->input->post('physical_address') : $company['physical_address']); ?>" class="form-control" id="physical_address" />
							<span class="text-danger"><?php echo form_error('physical_address');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="postal_address" class="control-label"><span class="text-danger">*</span>Postal Address</label>
						<div class="form-group">
							<input type="text" name="postal_address" value="<?php echo ($this->input->post('postal_address') ? $this->input->post('postal_address') : $company['postal_address']); ?>" class="form-control" id="postal_address" />
							<span class="text-danger"><?php echo form_error('postal_address');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="company_type" class="control-label"><span class="text-danger">*</span>Company Type</label>
						<div class="form-group">
							<input type="text" name="company_type" value="<?php echo ($this->input->post('company_type') ? $this->input->post('company_type') : $company['company_type']); ?>" class="form-control" id="company_type" />
							<span class="text-danger"><?php echo form_error('company_type');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="profile" class="control-label"><span class="text-danger">*</span>Profile</label>
						<div class="form-group">
							<input type="text" name="profile" value="<?php echo ($this->input->post('profile') ? $this->input->post('profile') : $company['profile']); ?>" class="form-control" id="profile" />
							<span class="text-danger"><?php echo form_error('profile');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="company_size" class="control-label"><span class="text-danger">*</span>Company Size</label>
						<div class="form-group">
							<input type="text" name="company_size" value="<?php echo ($this->input->post('company_size') ? $this->input->post('company_size') : $company['company_size']); ?>" class="form-control" id="company_size" />
							<span class="text-danger"><?php echo form_error('company_size');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="spec" class="control-label"><span class="text-danger">*</span>Associated Company Id</label>
						<div class="form-group">
							<input type="text" name="spec" value="<?php echo ($this->input->post('spec') ? $this->input->post('spec') : $company['company_id']); ?>" class="form-control" id="spec"/>
							<span class="text-danger"><?php echo form_error('spec');?></span>
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