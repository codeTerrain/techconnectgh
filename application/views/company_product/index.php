<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Company Product Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('company_product/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Company Product Id</th>
						<th>Product Id</th>
						<th>Company Id</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($company_product as $c){ ?>
                    <tr>
						<td><?php echo $c['company_product_id']; ?></td>
						<td><?php echo $c['product_id']; ?></td>
						<td><?php echo $c['company_id']; ?></td>
						<td><?php echo $c['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('company_product/edit/'.$c['company_product_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('company_product/remove/'.$c['company_product_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
