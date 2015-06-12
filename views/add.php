<div class="panel panel-default">
              <div class="panel-heading">Company</div>
              <div class="panel-body dbicons">
                  <?php if ($this->session->flashdata('message')): ?>
                   <div class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
                 <?php endif ?>
                  
                        <!-- Heading -->
                        
<!-- form open here -->
<?php $url = site_url(); ?>
<?php echo form_open($url.'company/store', ['method' => 'POST']); ?>
  <legend>Add Company</legend>

  <div class="form-group">
    <?php
          $title = array( 'name' => 'title', 'type' => 'text','class' => 'form-control','placeholder' => 'Title');
          echo form_input($title); 
     ?>               
  </div>
  <div class="form-group">
    <?php
          $description = array( 'name' => 'description', 'type' => 'text','class' => 'form-control','placeholder' => 'Description');
          echo form_input($description); 
     ?>               
  </div>
  <div class="form-group">
    <?php
          $email = array( 'name' => 'email', 'type' => 'email','class' => 'form-control','placeholder' => 'Email');
          echo form_input($email); 
     ?>               
  </div>
  <div class="form-group">
    <?php
          $phone = array( 'name' => 'phone', 'type' => 'text','class' => 'form-control','placeholder' => 'Phone');
          echo form_input($phone); 
     ?>               
  </div>
  <div class="form-group">
    <?php
          $mobile = array( 'name' => 'mobile', 'type' => 'text','class' => 'form-control','placeholder' => 'Mobile');
          echo form_input($mobile); 
     ?>               
  </div>
  <div class="form-group">
    <?php
          $website = array( 'name' => 'website', 'type' => 'text','class' => 'form-control','placeholder' => 'Website Url');
          echo form_input($website); 
     ?>               
  </div>
  <div class="form-group">
    <?php
          $address = array( 'name' => 'address', 'type' => 'text','class' => 'form-control','placeholder' => 'Address');
          echo form_input($address); 
     ?>               
  </div>
  <!-- submit button -->
   <?php 
      $button = array('type' => 'submit','content' => '<i class="fa fa-save"></i> Save','class'  => 'btn btn-primary pull-right');
      echo form_button($button);
    ?>
<?php echo form_close(); ?>
                          

 </div>

</div>