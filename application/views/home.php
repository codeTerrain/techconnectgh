<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                <h1>Register Company</h1>
                <form action="company/add">
    <input type="submit" value="Register Company" />
</form>
              <h1>LOGIN</h1>
</form>
<?php echo form_open('home/logins'); ?>
<form action="" method="post" disabled ="true">
    <input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" placeholder="Enter your username" required>
    <input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" placeholder="Enter your password" required>
    
    <input type="submit" value="Submit">
    
    <?php echo form_close(); ?>
</form>
         </h3>
            </div>
        </div>
    </div>
</div>