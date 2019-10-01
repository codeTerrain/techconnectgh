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
						
						<th>Company Id</th>
						<th>Company Name</th>
						<th>Company Type</th>
						<th>Industry</th>
						
						<th>Registered Members</th>
                    </tr>
                    <?php foreach($company as $c){ ?>
                    <tr>
						
						
						<td><?php echo $c['company_id']; ?></td>
						<td><?php echo $c['company_name']; ?></td>
						
						<td><?php echo $c['company_type']; ?></td>
                        <td><?php echo $c['industry']; ?></td>
                        <td><?php echo $this->db->where('associatedCompanyId', $value = $c['company_id'] )->count_all_results('company_person'); ?> &nbsp  <a href="<?php echo site_url('company/addMember/'.$c['company_id']); ?>" class="btn btn-success btn-xs"><span class="fa fa-plus"></span> Add Member</a></td>
                        
						
						<td>
                           <a href="<?php echo site_url('company/edit/'.$c['company_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            
                            <a href="<?php echo site_url('company/remove/'.$c['company_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
							<a href="<?php echo site_url('company/edit/'.$c['company_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil-square-o"></span> Open Dashhboard</a> 
                           
						</td>
                    </tr>
                    <?php } ?>
                </table>
                                
			</div>
			
        </div>
    </div>
</div>
