<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Programmes And Companies Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('programmes_and_company/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Programmes Id</th>
						<th>Companies Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($programmes_and_companies as $p){ ?>
                    <tr>
						<td><?php echo $p['programmes_id']; ?></td>
						<td><?php echo $p['companies_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('programmes_and_company/edit/'.$p['programmes_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('programmes_and_company/remove/'.$p['programmes_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
