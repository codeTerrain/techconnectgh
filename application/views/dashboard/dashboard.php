<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                <div id="profile">
<h1 id="welcome">WELCOME TO <i><?php echo strtoupper($this->input->post('username')); ?> 's</i> DASHBOARD</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
        <a href="<?php echo site_url('person/add'); ?>" class="btn btn-success btn-md">Add Person</a>
</div>
</div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
<a href="<?php echo site_url('company/add'); ?>" class="btn btn-success btn-md">Add Company</a>
</div>
</div>
</div>
<h3>There are <?php echo $this->db->count_all_results('company'); ?>    companies in techConnect's database!</h3> 
<div class="row">
    <div class="col-md-12">
        <div class="box">
        <a href="<?php echo site_url('dashboard/index'); ?>" class="btn btn-success btn-md">View Companies</a>
</div>
</div>
</div>



<b id="logout"><a href="logout.php">Log Out</a></b>
         </h3>
            </div>
        </div>
    </div>
</div>