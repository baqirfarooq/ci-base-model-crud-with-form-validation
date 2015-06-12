<div class="panel panel-default">
              <div class="panel-heading">Company</div>
              <div class="panel-body">
                
                 <?php if ($this->session->flashdata('message')): ?>
                   <div class="alert alert-success"><?php echo $this->session->flashdata('message');?></div>
                 <?php endif ?>
                
                  
                        <!-- Heading -->
                      

                          <table class="table table-bordered table-responsive">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Mobile</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Manage</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $i=0; ?>
                            <?php foreach ($companies as $company): ?>
                              <tr>
                                <td><?php echo ++$i ?></td>
                                <td><?php echo $company->title ?></td>
                                <td><?php echo $company->email ?></td>
                                <td><?php echo $company->phone ?></td>
                                <td><?php echo $company->mobile ?></td>
                                <td class="text-center">
                                  
                                <?php if ($company->status == 0): ?>
                                    <a href="<?php echo site_url() ?>company/status/<?php echo $company->id ?>" class="linkStatus">
                                       <i class='fa fa-times fa-yellow fa-border fa-lg'></i>
                                    </a>
                                  <?php else: ?>
                                    <a href="<?php echo site_url() ?>company/status/<?php echo $company->id ?>" class="linkStatus">
                                       <i class='fa fa-check fa-black fa-border fa-lg'> </i>
                                    </a>
                                  <?php endif; ?>    
                                  
                                </td>
                            
                                <td class="text-center">
                                  <a href="<?php echo site_url() ?>company/edit/<?php echo $company->id ?>" class="">
                                       <i class='fa fa-pencil fa-black fa-border fa-lg'> </i>
                                  </a>
                                  <a href="<?php echo site_url() ?>company/delete/<?php echo $company->id ?>" class="singleDelete">
                                       <i class='fa fa-trash fa-black fa-border fa-lg'> </i>
                                  </a>
                                </td>
                              
                              </tr> 
                            <?php endforeach ?>
                          
                            </tbody>
                          </table>

           </div>
                 
  </div>