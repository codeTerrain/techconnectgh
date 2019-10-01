<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Person Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('person/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Person Id</th>
						<th>Salutation</th>
						<th>Educational Level</th>
						<th>Marital Status</th>
						<th>Date Of Birth</th>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Other Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Postal Address</th>
						<th>Website</th>
						<th>LinkedIn</th>
						<th>Facebook</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($person as $p){ ?>
                    <tr>
						<td><?php echo $p['person_id']; ?></td>
						<td><?php echo $p['salutation']; ?></td>
						<td><?php echo $p['educational_level']; ?></td>
						<td><?php echo $p['marital_status']; ?></td>
						<td><?php echo $p['date_of_birth']; ?></td>
						<td><?php echo $p['last_name']; ?></td>
						<td><?php echo $p['first_name']; ?></td>
						<td><?php echo $p['other_name']; ?></td>
						<td><?php echo $p['phone']; ?></td>
						<td><?php echo $p['email']; ?></td>
						<td><?php echo $p['postal_address']; ?></td>
						<td><?php echo $p['website']; ?></td>
						<td><?php echo $p['linkedIn']; ?></td>
						<td><?php echo $p['facebook']; ?></td>
						<td>
                            <a href="<?php echo site_url('person/edit/'.$p['person_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('person/remove/'.$p['person_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
