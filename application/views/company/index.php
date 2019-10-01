<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Company Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('company/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<!--<th>ID</th>-->
						<th>Industry</th>
						<th>Company Id</th>
						<th>Company Name</th>
						<th>Geolocation</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Website</th>
						<th>Physical Address</th>
						<th>Postal Address</th>
						<th>Company Type</th>
						<th>Profile</th>
						<th>Company Size</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($company as $c){ ?>
                    <tr>
						<!--<td><?php echo $c['id']; ?></td>-->
						<td><?php echo $c['industry']; ?></td>
						<td><?php echo $c['company_id']; ?></td>
						<td><?php echo $c['company_name']; ?></td>
						<td><?php echo $c['geolocation']; ?></td>
						<td><?php echo $c['email']; ?></td>
						<td><?php echo $c['phone']; ?></td>
						<td><?php echo $c['website']; ?></td>
						<td><?php echo $c['physical_address']; ?></td>
						<td><?php echo $c['postal_address']; ?></td>
						<td><?php echo $c['company_type']; ?></td>
						<td><?php echo $c['profile']; ?></td>
						<td><?php echo $c['company_size']; ?></td>
						<td>
                           <!-- <a href="<?php echo site_url('company/edit/'.$c['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('company/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
					--></td>
                    </tr>
                    <?php } ?>
                </table>
                                
			</div>
			
        </div>
    </div>
</div>
