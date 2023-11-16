<div class="col-xl-3 col-md-6">
         <div class="card mb-4 bg-success">
            <div class="card-body text-white">
               <div class="row align-items-center">
                  <div class="col-8">
                     <h4 class="text-white">MAIN STOCK</h4>
                     <h6 class="text-white mb-0"></br></br></h6>
                  </div>
                  <div class="col-4 text-right">
                     <i class="lnr lnr-apartment display-4"></i>
                  </div>
               </div>
            </div>
            
            <?php foreach($condaccess as $acces) ?>
            <div class="card-footer pb-0 bg-white">
               <div class="p-3 mt-n3 rounded bg-white ui-bottom-data">
                  <div class="row align-items-center">
                      <?php if($acces['control_vi']=='N'){?>
                    <div class="col-9">
                    <p class="mb-0"><a href="#" class="btn btn-success btn-sm"> Stock Check</a></p>
                    </div>
                    <?php }elseif($acces['control_vi']=='2'){?>
                    <div class="col-9">
                    <p class="mb-0"><a href="<?php echo base_url();?>home/mainstock/<?php echo $gd['id'];?>" class="btn btn-success btn-sm"> Stock Check</a></p>
                    </div>
                    <?php }else{ ?>
                    <div class="col-9">
                    <p class="mb-0"><a href="<?php echo base_url();?>home/mainstock/<?php echo $gd['id'];?>" class="btn btn-success btn-sm"> Stock Check</a></p>
                    </div>
                    <?php } ?>
                    
                     <div class="col-3 text-right">
                        <i class="fas fa-shipping-fast text-success f-16"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php foreach ($godowns as $gd) { ?>
<div class="col-xl-3 col-md-6">
         <div class="card mb-4 bg-primary">
            <div class="card-body text-white">
               <div class="row align-items-center">
                  <div class="col-8">
                     <h4 class="text-white"><?php foreach($area as $ar)
                        {
                            if($gd['area']==$ar['id'])
                            {
                            echo $ar['area'];
                            }
                        }
                     ?></h4>
                     <h6 class="text-white mb-0"><?php echo $gd['godown'];?></h6>
                  </div>
                  <div class="col-4 text-right">
                     <i class="lnr lnr-apartment display-4"></i>
                  </div>
               </div>
            </div>
            
            <?php foreach($condaccess as $acces) ?>
            <div class="card-footer pb-0 bg-white">
               <div class="p-3 mt-n3 rounded bg-white ui-bottom-data">
                  <div class="row align-items-center">
                      <?php if($acces['control_vi']=='N'){?>
                    <div class="col-9">
                    <p class="mb-0"><a href="#" class="btn btn-primary btn-sm"> Stock Check</a></p>
                    </div>
                    <?php }elseif($acces['control_vi']=='2'){?>
                    <div class="col-9">
                    <p class="mb-0"><a href="<?php echo base_url();?>stock/<?php echo $gd['id'];?>" class="btn btn-primary btn-sm"> Stock Check</a></p>
                    </div>
                    <?php }else{ ?>
                    <div class="col-9">
                    <p class="mb-0"><a href="<?php echo base_url();?>stock/<?php echo $gd['id'];?>" class="btn btn-primary btn-sm"> Stock Check</a></p>
                    </div>
                    <?php } ?>
                    
                     <div class="col-3 text-right">
                        <i class="fas fa-shipping-fast text-primary f-16"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

<?php } ?>
      <!--<div class="col-xl-3 col-md-6">
         <div class="card mb-4 bg-success">
            <div class="card-body text-white">
               <div class="row align-items-center">
                  <div class="col-8">
                     <h4 class="text-white">Govindpura</h4>
                     <h6 class="text-white mb-0">Godown No. 01</h6>
                  </div>
                  <div class="col-4 text-right">
                     <i class="lnr lnr-store display-4"></i>
                  </div>
               </div>
            </div>
            <div class="card-footer pb-0 bg-white">
               <div class="p-3 mt-n3 rounded bg-white ui-bottom-data">
                  <div class="row align-items-center">
                     <div class="col-9">
                        <p class="mb-0"><a href="stock-godown-detail.php" ><button class="btn btn-success btn-sm"> Stock Check</button></a></p>
                     </div>
                     <div class="col-3 text-right">
                        <i class="fas fa-shipping-fast text-success f-16"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-md-6">
         <div class="card mb-4 bg-danger">
            <div class="card-body text-white">
               <div class="row align-items-center">
                  <div class="col-8">
                     <h4 class="text-white">MP Nagar</h4>
                     <h6 class="text-white mb-0">Godown No. 02</h6>
                  </div>
                  <div class="col-4 text-right">
                     <i class="lnr lnr-store display-4"></i>
                  </div>
               </div>
            </div>
            <div class="card-footer pb-0 bg-white">
               <div class="p-3 mt-n3 rounded bg-white ui-bottom-data">
                  <div class="row align-items-center">
                     <div class="col-9">
                        <p class="mb-0"><a href="stock-godown-detail.php" ><button class="btn btn-danger btn-sm"> Stock Check</button></a></p>
                     </div>
                     <div class="col-3 text-right">
                        <i class="fas fa-shipping-fast text-danger f-16"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-md-6">
         <div class="card mb-4 bg-warning">
            <div class="card-body text-white">
               <div class="row align-items-center">
                  <div class="col-8">
                     <h4 class="text-white">Hosangabad</h4>
                     <h6 class="text-white mb-0">Godown No. 03</h6>
                  </div>
                  <div class="col-4 text-right">
                     <i class="lnr lnr-store display-4"></i>
                  </div>
               </div>
            </div>
            <div class="card-footer pb-0 bg-white">
               <div class="p-3 mt-n3 rounded bg-white ui-bottom-data">
                  <div class="row align-items-center">
                     <div class="col-9">
                        <p class="mb-0"><a href="stock-godown-detail.php" ><button class="btn btn-warning btn-sm"> Stock Check</button></a></p>
                     </div>
                     <div class="col-3 text-right">
                        <i class="fas fa-shipping-fast text-warning f-16"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->



<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Godowns Summary</h5>
</div>
<div class="card-body text-center">

<div class="row">
    
<div class="col-md-3 col-xs-6">
    <?php if($acces['control_vi']=='N'){?>
    <h3 class="text-info"><a href="#" class="text-info"><?php if(isset($countgodowntoday)){echo $countgodowntoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Godowns</span>
  <?php }elseif($acces['control_vi']=='2'){?>
  <h3 class="text-info"><a href="<?php echo base_url();?>godowntoday" class="text-info"><?php if(isset($countgodowntoday)){echo $countgodowntoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Godowns</span>
<?php }else{ ?>
<h3 class="text-info"><a href="<?php echo base_url();?>godowntoday" class="text-info"><?php if(isset($countgodowntoday)){echo $countgodowntoday;} else { echo "";}?></a></h3>
<span class="text-info">Today Godowns</span>
   <?php } ?>

</div>
<div class="col-md-3 col-xs-6">
    <?php if($acces['control_vi']=='N'){?>
    
<h3 class="text-success"><a href="#" class="text-success"><?php if(isset($countgodownactive)){echo $countgodownactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Godowns</span>
  <?php }elseif($acces['control_vi']=='2'){?>
  
<h3 class="text-success"><a href="<?php echo base_url();?>godownactive" class="text-success"><?php if(isset($countgodownactive)){echo $countgodownactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Godowns</span>
<?php }else{ ?>

<h3 class="text-success"><a href="<?php echo base_url();?>godownactive" class="text-success"><?php if(isset($countgodownactive)){echo $countgodownactive;} else { echo "";}?></a></h3>
<span class="text-success">Active Godowns</span>
   <?php } ?>
</div>
<div class="col-md-3 col-xs-6">
    <?php if($acces['control_vi']=='N'){?>
    
<h3 class="text-danger"><a href="#" class="text-danger"><?php if(isset($countgodowninactive)){echo $countgodowninactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Godowns</span>
  <?php }elseif($acces['control_vi']=='2'){?>
  
<h3 class="text-danger"><a href="<?php echo base_url();?>godowninactive" class="text-danger"><?php if(isset($countgodowninactive)){echo $countgodowninactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Godowns</span>
<?php }else{ ?>

<h3 class="text-danger"><a href="<?php echo base_url();?>godowninactive" class="text-danger"><?php if(isset($countgodowninactive)){echo $countgodowninactive;} else { echo "";}?></a></h3>
<span class="text-danger">Inactive Godowns</span>
   <?php } ?>
</div>
<div class="col-md-3 col-xs-6">
    <?php if($acces['control_vi']=='N'){?>
    
<h3 class="text-dark"><a href="#" class="text-dark"><?php if(isset($countgodown)){echo $countgodown;} else { echo "";}?></a></h3>
<span class="text-dark">Total Godowns</span>
  <?php }elseif($acces['control_vi']=='2'){?>
  
<h3 class="text-dark"><a href="<?php echo base_url();?>godown" class="text-dark"><?php if(isset($countgodown)){echo $countgodown;} else { echo "";}?></a></h3>
<span class="text-dark">Total Godowns</span>
<?php }else{ ?>

<h3 class="text-dark"><a href="<?php echo base_url();?>godown" class="text-dark"><?php if(isset($countgodown)){echo $countgodown;} else { echo "";}?></a></h3>
<span class="text-dark">Total Godowns</span>
   <?php } ?>
</div>

</div>
</div>
</div> 
</div>