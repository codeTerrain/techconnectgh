<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Expertise Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('expertise/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Expertise Id</th>
						<th>Expertise Area</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($expertise as $e){ ?>
                    <tr>
						<td><?php echo $e['expertise_id']; ?></td>
						<td><?php echo $e['expertise_area']; ?></td>
						<td>
                            <a href="<?php echo site_url('expertise/edit/'.$e['expertise_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('expertise/remove/'.$e['expertise_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
