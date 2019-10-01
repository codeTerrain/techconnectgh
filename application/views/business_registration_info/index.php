<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Business Registration Info Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('business_registration_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Bri Id</th>
						<th>Company Id</th>
						<th>Path Of File</th>
						<th>Type Of Document</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($business_registration_info as $b){ ?>
                    <tr>
						<td><?php echo $b['bri_id']; ?></td>
						<td><?php echo $b['company_id']; ?></td>
						<td><?php echo $b['path_of_file']; ?></td>
						<td><?php echo $b['type_of_document']; ?></td>
						<td>
                            <a href="<?php echo site_url('business_registration_info/edit/'.$b['bri_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('business_registration_info/remove/'.$b['bri_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
