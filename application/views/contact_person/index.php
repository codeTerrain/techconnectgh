<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Contact Person Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('contact_person/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Person Id</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Address</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($contact_person as $c){ ?>
                    <tr>
						<td><?php echo $c['person_id']; ?></td>
						<td><?php echo $c['name']; ?></td>
						<td><?php echo $c['phone']; ?></td>
						<td><?php echo $c['email']; ?></td>
						<td><?php echo $c['address']; ?></td>
						<td>
                            <a href="<?php echo site_url('contact_person/edit/'.$c['person_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('contact_person/remove/'.$c['person_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
