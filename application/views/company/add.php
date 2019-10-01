<style>
	.tab {
  display: none;
}
	button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

input.invalid {
  background-color: #ffdddd;
}

button:hover {
  opacity: 0.8;
}

.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>





<div class="row">

	<div class="tab">
    	<div class="col-md-12">
		
      		<div class="box box-info">
            	<div class="box-header with-border">
              	<h3 class="box-title">Company Add</h3>
            	</div>

			



			<?php echo form_open('company/add'); ?>
			
			<div class="col-md-12">
      	<div class="box box-info">
					<div><h3>Business Registration:</h3>
					
					
					<div class="col-md-6">
					<label for="path_of_file" class="control-label"><span class="text-danger">*</span>Path Of File</label>
					<div class="form-group">
						<form action = "../Upload/upload_file" method ="post" enctype="multipart/form-data">
						<input type="file" name="path_of_file" id="path_of_file"/>
					
			
				
			</div>
					</div>
					
					<div class="col-md-6">
						<label for="type_of_document" class="control-label"><span class="text-danger">*</span>Type Of Document</label>
						<div class="form-group">
							<input type="text" name="type_of_document" value="<?php echo $this->input->post('type_of_document'); ?>" class="form-control" id="type_of_document" />
							<span class="text-danger"><?php echo form_error('type_of_document');?></span>
						</div>
					</div>
					
						</div>
					</div>
					
					
					
			</div>


          	<div class="box-body">
          		<div class="row clearfix">
					
					
					<div class="col-md-6">
						<label  for="company_name" class="control-label"><span class="text-danger">*</span>Company Name</label>
						<div class="form-group">
							<input placeholder=" Enter name of Company" oninput="this.className = ''" type="text" name="company_name" value="<?php echo $this->input->post('company_name'); ?>" class="form-control" id="company_name" />
							<span class="text-danger"><?php echo form_error('company_name');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="geolocation" class="control-label"><span class="text-danger">*</span>Geolocation</label>
						<div class="form-group">
							<input placeholder=" Input your Geolocation" oninput="this.className = ''" type="text" name="geolocation" value="<?php echo $this->input->post('geolocation'); ?>" class="form-control" id="geolocation" />
							<span class="text-danger"><?php echo form_error('geolocation');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input placeholder="Enter a Valid Email address" oninput="this.className = ''" type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
			
					<div class="col-md-6">
						<label for="phone" class="control-label"><span class="text-danger">*</span>Phone</label>
						<div class="form-group">
							<input placeholder="Enter your Phone Number" oninput="this.className = ''" type="text" name="phone" value="<?php echo $this->input->post('phone'); ?>" class="form-control" id="phone" />
							<span class="text-danger"><?php echo form_error('phone');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="physical_address" class="control-label">Physical Address</label>
						<div class="form-group">
							<input placeholder="Physical address" oninput="this.className = ''"  type="text" name="physical_address" value="<?php echo $this->input->post('physical_address'); ?>" class="form-control" id="physical_address" />
							<span class="text-danger"><?php echo form_error('physical_address');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="company_type" class="control-label"><span class="text-danger">*</span>Company Type</label>
						<div class="form-group">
							<input type="text" name="company_type" value="<?php echo $this->input->post('company_type'); ?>" class="form-control" id="company_type" />
							<span class="text-danger"><?php echo form_error('company_type');?></span>
						</div>
					</div>


					<div class="col-md-6">
						<label for="postal_address" class="control-label"><span class="text-danger">*</span>Postal Address</label>
						<div class="form-group">
							<input placeholder="Postal Address..." oninput="this.className = ''" type="text" name="postal_address" value="<?php echo $this->input->post('postal_address'); ?>" class="form-control" id="postal_address" />
							<span class="text-danger"><?php echo form_error('postal_address');?></span>
						</div>
					</div>
					

					<div class="col-md-6">
						<label for="profile" class="control-label"><span class="text-danger">*</span>Profile</label>
						<div class="form-group">
							<input type="text" name="profile" value="<?php echo $this->input->post('profile'); ?>" class="form-control" id="profile" />
							<span class="text-danger"><?php echo form_error('profile');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="website" class="control-label"><span class="text-danger">*</span>Website</label>
						<div class="form-group">
							<input placeholder=" Company's Website" oninput="this.className = ''" type="text" name="website" value="<?php echo $this->input->post('website'); ?>" class="form-control" id="website" />
							<span class="text-danger"><?php echo form_error('website');?></span>
						</div>
					</div>
					
					
					
					<div class="col-md-6">
						<label for="company_size" class="control-label"><span class="text-danger">*</span>Company Size</label>
						<div class="form-group">
							<input placeholder="Number of Employees" oninput="this.className = ''" type="text" name="company_size" value="<?php echo $this->input->post('company_size'); ?>" class="form-control" id="company_size" />
							<span class="text-danger"><?php echo form_error('company_size');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label  for="industry" class="control-label"><span class="text-danger">*</span>Industry</label>
						<div class="form-group">
							<select name="industry" class="form-control">
								<option value="">select</option>
								<?php 
								$industry_values = array(
									'BioTech'=>'Biotech',
									'FinTech'=>'FinTech',
									'AgriTech'=>'AgriTech',
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
									$selected = ($value == $this->input->post('industry')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('industry');?></span>
						</div>
					</div> 
					
					
				
	
	
	
	
	</div>
					
		</div>
		
		<div class="box-footer">
			
		<input type="submit" name="submit" value = "upload" >
            
				</div>
				
				<?php echo form_close(); ?>
				
				</form>
			

		</div>
			
	</div>
	
</div>


<script>


var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  }

function checker() {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (!validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
	document.getElementById("regForm").submit();
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

</script>