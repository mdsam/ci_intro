<? include('public_header.php'); ?>

<div class="container">
<?php $attributes = array('class'=>'form-horizontal'); ?>
<?php echo form_open('login/admin_login',$attributes); ?>
  <fieldset align="center">
    <legend>Login</legend>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
      <?php 
      $data = array('name'=>'username', 'class'=>'form-control','placeholder'=>'username' );
      echo form_input($data);

      ?>
   
       
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div>
    </div>

  </div>
   <div class="col-lg-6"> <?php echo form_error('username'); ?> </div>
  </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">

      <?php 
      $data = array('name'=>'password', 'class'=>'form-control','placeholder'=>'password');
      echo form_password($data);

       ?>

        <!-- <input type="password" class="form-control" id="inputPassword" placeholder="Password"> -->
        
      </div>
    </div>
  </div>
    <div class="col-lg-6"> <?php echo form_error('password'); ?> </div>
  </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">

      <?php  $data = array('name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-default' );
      echo form_reset($data);?>

        <!-- <button type="reset" class="btn btn-default">Cancel</button> -->

        <?php 
        	$data = array('name'=>'submit', 'value'=>'Login', 'class'=>'btn btn-primary' );
        	echo form_submit($data); ?>

        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      </div>
          </div>
  </fieldset>
</form>

</div>


<? include('public_footer.php'); ?>