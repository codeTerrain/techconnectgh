<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Programmes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('programme/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Programme Id</th>
						<th>Programme Type</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($programmes as $p){ ?>
                    <tr>
						<td><?php echo $p['programme_id']; ?></td>
						<td><?php echo $p['programme_type']; ?></td>
						<td><?php echo $p['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('programme/edit/'.$p['programme_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('programme/remove/'.$p['programme_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
