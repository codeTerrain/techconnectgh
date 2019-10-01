<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Areas Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('area/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Person Id</th>
						<th>Expertise Id</th>
						<th>Level</th>
						<th>Years</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($areas as $a){ ?>
                    <tr>
						<td><?php echo $a['person_id']; ?></td>
						<td><?php echo $a['expertise_id']; ?></td>
						<td><?php echo $a['level']; ?></td>
						<td><?php echo $a['years']; ?></td>
						<td>
                            <a href="<?php echo site_url('area/edit/'.$a['person_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('area/remove/'.$a['person_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
