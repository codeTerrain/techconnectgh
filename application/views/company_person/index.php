<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Company Person Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('company_person/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Company Id</th>
						<th>Person Id</th>
						<th>Date Joined</th>
						<th>Position</th>
						<th>Exit Year</th>
						<th>Job Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($company_person as $c){ ?>
                    <tr>
						<td><?php echo $c['company_id']; ?></td>
						<td><?php echo $c['person_id']; ?></td>
						<td><?php echo $c['date_joined']; ?></td>
						<td><?php echo $c['position']; ?></td>
						<td><?php echo $c['exit_year']; ?></td>
						<td><?php echo $c['job_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('company_person/edit/'.$c['company_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('company_person/remove/'.$c['company_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
