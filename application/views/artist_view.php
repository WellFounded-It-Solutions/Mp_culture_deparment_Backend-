<?php include("header.php");?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/select2/select2.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/back/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">

<!----------------->

  <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0">Artist Profile</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item">Users</li>
                                <li class="breadcrumb-item active">Artist Profile</li>
                            </ol>
                        </div>
 
                        <!-- Header -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-auto col-sm-12">
                                     
                                      <?php if(!empty($artist->artist_photo)) {?>
                                         <img src="http://jusmarktech.in/mpculturedept/public/uploads/<?php echo $artist->artist_photo; ?>" alt class="d-block ui-w-100 rounded-circle mb-3" width="80">
                                  <?php }else{ ?>
                                   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCDeKENI9q2DzfAGHWnhrtXE0e33qcKYE8_ts4NEu06z0VVziTC0fA4KE_yn3NSjk3mwc&usqp=CAU" alt class="d-block ui-w-100 rounded-circle mb-3" width="80">
                                   <?php }?>
                                    </div>
                                    <div class="col">
                                        <h4 class="font-weight-bold mb-4">Name:<?php echo $artist->artist_name; ?> <a style="float: right;" class="btn btn-primary btn-round" href="">For official use</a></h4>
                                    <!--    <div class="text-muted mb-4">
                                        Descrption
                                        </div>-->
                        
                                        <a href="javascript:void(0)" class="d-inline-block text-dark">
                                           <!-- <strong>234</strong>-->
                                            <span class="text-muted">Mobile No.<?php if(!empty($artist->artist_mobile)){
                                            echo $artist->artist_mobile; 
                                            }else{
                                            echo "Not Updated";
                                            }?></span>
                                        </a>
                                        <br>
                                         <a href="javascript:void(0)" class="d-inline-block text-dark">
                                           <!-- <strong>234</strong>-->
                                            <span class="text-muted"> Email ID:<?php  if(!empty($artist->artist_email)){
                                            echo $artist->artist_email; 
                                            }else{
                                            echo "Not Updated";
                                            }
                                            ?></span>
                                        </a>
                                      <!--  <a href="javascript:void(0)" class="d-inline-block text-dark ml-3">
                                            <strong>111</strong>
                                            <span class="text-muted">following</span>
                                        </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Header -->

                        <div class="row">
                            <div class="col">
                        <!-- Info Edits -->
                        <?php if($_GET['per']){ ?>
                                <div class="card mb-4">
                                    
                  <form action="<?php echo base_url();?>home/personal_artists" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <lable>Personal Details</lable>
                                        <hr>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Name:</div>
                                            <div class="col-md-9">
                                               <input  type="hidden" class="custom-select" name="id" value="<?php echo $artist->id; ?>">
                             
                                               <input  type="text" class="custom-select" name="artist_name" value="<?php echo $artist->artist_name; ?>">
                             
                                            </div>
                                        </div>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">MObile No.:</div>
                                            <div class="col-md-9">
                                              <input type="number" class="custom-select" name="artist_mobile" value="<?php echo $artist->artist_mobile; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Email ID:</div>
                                            <div class="col-md-9">
                                               <input type="email" name="artist_email" class="form-control" placeholder=" " value="<?php echo $artist->artist_email; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Gender:</div>
                                            <div class="col-md-9">
                                                <select class="custom-select" name="artist_gender" id="artist_gender">
                                                <option value="Male" <?php if($artist->artist_gender=='Male'){ echo "selected";} ?>>Male</option>
                                                <option value="Female" <?php if($artist->artist_gender=='Female'){ echo "selected";} ?>>Female</option>
                                                <option value="Other" <?php if($artist->artist_gender=='Other'){ echo "selected";} ?>>Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Fathers Name:</div>
                                            <div class="col-md-9">
                                                <input type="text" class="custom-select" name="artist_father" id="artist_father" value="<?php echo $artist->artist_father;?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Birth Date:</div>
                                            <div class="col-md-9">
                                                  <input type="date" class="custom-select" name="artist_dob" value="<?php echo $artist->artist_dob;?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Age:</div>
                                            <div class="col-md-9">
                                              <input type="number" name="artist_age" id="artist_age" class="form-control" value="<?php echo $artist->artist_age;?>" >
                                            </div>
                                        </div>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Work Experience in Years:</div>
                                            <div class="col-md-9">
                                               <input type="number" name="artist_expriance" id="artist_expriance" class="form-control" maxlength="100" value="<?php echo $artist->artist_expriance;?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Education Qualification:</div>
                                            <div class="col-md-9">
                                                <select class="form-control custom-select1" name="artist_education" placeholder="">
                            <option value="">--Select--</option>
                            <option value="10th"  <?php if($artist->artist_education=='10th'){ echo "selected";} ?>>10th</option>
                            <option value="12th" <?php if($artist->artist_education=='12th'){ echo "selected";} ?>>12th</option>
                            <option value="Bachelor"<?php if($artist->artist_education=='Bachelor'){ echo "selected";} ?>>Bachelor's </option>
                            <option value="Masters" <?php if($artist->artist_education=='Masters'){ echo "selected";} ?>>Master's </option>
                            <option <?php if($artist->artist_education=='Doctorate Ph.D.'){ echo "selected";} ?>>Doctorate Ph.D.</option>
                            <option <?php if($artist->artist_education=='Professional Certifications'){ echo "selected";} ?>>Professional Certifications</option>
                            <option <?php if($artist->artist_education=='Vocational Training'){ echo "selected";} ?>>Vocational Training</option>
                            <option <?php if($artist->artist_education=='Diploma Program'){ echo "selected";} ?>>Diploma Program</option>
                            <option <?php if($artist->artist_education=='Postgraduate Certificate'){ echo "selected";} ?>>Postgraduate Certificate</option>
                            <option <?php if($artist->artist_education=='Technical Degree'){ echo "selected";} ?>>Technical Degree</option>
                            <option <?php if($artist->artist_education=='Online Courses and Certifications'){ echo "selected";} ?>>Online Courses and Certifications</option>
                            <option <?php if($artist->artist_education=='Uneducated'){ echo "selected";} ?>>Uneducated</option>
                            <option <?php if($artist->artist_education=='Other'){ echo "selected";} ?>>Other</option>

                            </select>
                                            </div>
                                        </div>
                                     
                                    </div>
                                   <div class="form-row">
                                       <div class="form-group col-md-4"></div>
         <div class="form-group col-md-6">
         <input type="submit" name="submit" class="btn btn-primary" value="Update">
         <div class="clearfix"></div>
         </div>
         </div>
         </form>
                                </div>
                                <?php  }else{?>
                                <!-- Info -->
                                
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <lable>Personal Details</lable> <a style="float: right;" class="btn btn-primary btn-round" href="<?php echo base_url();?>home/artist_view/<?php echo $artist->id ?>?user&per=per">Edit</a>
                                        <hr>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Name:</div>
                                            <div class="col-md-9">
                                               <?php if(!empty($artist->artist_name)){
                                               echo $artist->artist_name;
                                               }else{
                                            echo "Not Updated";
                                            }
                                               ?>
                                            </div>
                                        </div>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">MObile No.:</div>
                                            <div class="col-md-9">
                                               <?php 
                                               if(!empty($artist->artist_mobile)){
                                               echo $artist->artist_mobile;
                                               }else{
                                            echo "Not Updated";
                                            }
                                               ?>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Email ID:</div>
                                            <div class="col-md-9">
                                               <?php    if(!empty($artist->artist_email)){
                                               echo $artist->artist_email;
                                                }else{
                                            echo "Not Updated";
                                            }
                                            ?>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Gender:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php 
                                                 if(!empty($artist->artist_gender)){
                                                echo $artist->artist_gender;
                                                 }else{
                                            echo "Not Updated";
                                            }
                                                ?></a>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Fathers Name:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                    <?php    if(!empty($artist->artist_father)){
                                                    echo $artist->artist_father;
                                                      }else{
                                            echo "Not Updated";
                                            }
                                            ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Birth Date:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                  if(!empty($artist->artist_dob)){
                                                echo $artist->artist_dob;
                                                 }else{
                                            echo "Not Updated";
                                            }
                                            ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Age:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                if(!empty($artist->artist_age)){
                                                echo $artist->artist_age;
                                                }else{
                                            echo "Not Updated";
                                            }
                                                ?></a>
                                            </div>
                                        </div>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Work Experience in Years:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                  if(!empty($artist->artist_expriance)){
                                                echo $artist->artist_expriance; 
                                                  }else{
                                            echo "Not Updated";
                                            }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Education Qualification:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                 if(!empty($artist->artist_education)){
                                                echo $artist->artist_education;
                                                 }else{
                                            echo "Not Updated";
                                            }
                                                ?></a>
                                            </div>
                                        </div>
                                     
                                    </div>
                                  
                                </div>
                               <?php } ?>
                                <!-- / Info -->
                                 <?php if($_GET['about']){ ?>
                                       <div class="card mb-4">
                                    
                  <form action="<?php echo base_url();?>home/aboutedit_artists" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                         <label>About</label>
                                     <hr>
                                        <textarea name="abouts" id="abouts" class="form-control"><?php echo $artist->abouts;?></textarea>
                                        <input  type="hidden" class="custom-select" name="id" value="<?php echo $artist->id; ?>">
                             
                                    </div>
                                     <div class="form-row">
                                         <div class="form-group col-md-4"></div>
         <div class="form-group col-md-6">
         <input type="submit" name="submit" class="btn btn-primary" value="Update">
         <div class="clearfix"></div>
         </div>
         </div>
                                 </form>
                                </div>
                                <!-- / Posts -->
         <?php  }else{?>
                    <div class="card mb-4">
                    
                    <div class="card-body">
                    <label>About</label> <a style="float: right;" class="btn btn-primary btn-round" href="<?php echo base_url();?>home/artist_view/<?php echo $artist->id ?>?user&about=about">Edit</a>
                    <hr>
                    <p>
                    <?php
                    if(!empty($artist->abouts)){
                    echo $artist->abouts; 
                    }else{
                    echo "Not Updated";
                    }
                    ?>
                    </p>
                    
                    </div>
                    <!--  <div class="card-footer">
                    <a href="javascript:void(0)" class="d-inline-block text-muted">
                    <small class="align-middle"><strong>123</strong> Likes</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                    <small class="align-middle"><strong>12</strong> Comments</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                    <i class="ion ion-md-share align-middle"></i>&nbsp;
                    <small class="align-middle">Repost</small>
                    </a>
                    </div>-->
                    </div>
                    <!-- / Posts -->
     <?php } ?>
       <?php if($_GET['address']){ ?>
                                      <div class="card mb-4">
                                      <form action="<?php echo base_url();?>home/addressedit_artists" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                     <lable>Address Details</lable>
                                    <hr>
                                       
                                        <div class="row mb-2">
                                             <input  type="hidden" class="custom-select" name="id" value="<?php echo $artist->id; ?>">
                             
                                            <div class="col-md-3 text-muted">Country:</div>
                                            <div class="col-md-9">
                                            <select class="form-control" name="artist_country" placeholder="">
                                            
                                            <option>	Andorra	</option>
                                            <option>	United Arab Emirates	</option>
                                            <option>	Afghanistan	</option>
                                            <option>	Antigua and Barbuda	</option>
                                            <option>	Anguilla	</option>
                                            <option>	Albania	</option>
                                            <option>	Armenia	</option>
                                            <option>	Netherlands Antilles	</option>
                                            <option>	Angola	</option>
                                            <option>	Asia/Pacific Region	</option>
                                            <option>	Antarctica	</option>
                                            <option>	Argentina	</option>
                                            <option>	American Samoa	</option>
                                            <option>	Austria	</option>
                                            <option>	Australia	</option>
                                            <option>	Aruba	</option>
                                            <option>	Aland Islands	</option>
                                            <option>	Azerbaijan	</option>
                                            <option>	Bosnia and Herzegovina	</option>
                                            <option>	Barbados	</option>
                                            <option>	Bangladesh	</option>
                                            <option>	Belgium	</option>
                                            <option>	Burkina Faso	</option>
                                            <option>	Bulgaria	</option>
                                            <option>	Bahrain	</option>
                                            <option>	Burundi	</option>
                                            <option>	Benin	</option>
                                            <option>	Saint Bartelemey	</option>
                                            <option>	Bermuda	</option>
                                            <option>	Brunei Darussalam	</option>
                                            <option>	Bolivia	</option>
                                            <option>	Bonaire, Saint Eustatius and Saba	</option>
                                            <option>	Brazil	</option>
                                            <option>	Bahamas	</option>
                                            <option>	Bhutan	</option>
                                            <option>	Bouvet Island	</option>
                                            <option>	Botswana	</option>
                                            <option>	Belarus	</option>
                                            <option>	Belize	</option>
                                            <option>	Canada	</option>
                                            <option>	Cocos (Keeling) Islands	</option>
                                            <option>	Congo, The Democratic Republic of the	</option>
                                            <option>	Central African Republic	</option>
                                            <option>	Congo	</option>
                                            <option>	Switzerland	</option>
                                            <option>	Cote d'Ivoire	</option>
                                            <option>	Cook Islands	</option>
                                            <option>	Chile	</option>
                                            <option>	Cameroon	</option>
                                            <option>	China	</option>
                                            <option>	Colombia	</option>
                                            <option>	Costa Rica	</option>
                                            <option>	Cuba	</option>
                                            <option>	Cape Verde	</option>
                                            <option>	Curacao	</option>
                                            <option>	Christmas Island	</option>
                                            <option>	Cyprus	</option>
                                            <option>	Czech Republic	</option>
                                            <option>	Germany	</option>
                                            <option>	Djibouti	</option>
                                            <option>	Denmark	</option>
                                            <option>	Dominica	</option>
                                            <option>	Dominican Republic	</option>
                                            <option>	Algeria	</option>
                                            <option>	Ecuador	</option>
                                            <option>	Estonia	</option>
                                            <option>	Egypt	</option>
                                            <option>	Western Sahara	</option>
                                            <option>	Eritrea	</option>
                                            <option>	Spain	</option>
                                            <option>	Ethiopia	</option>
                                            <option>	Europe	</option>
                                            <option>	Finland	</option>
                                            <option>	Fiji	</option>
                                            <option>	Falkland Islands (Malvinas)	</option>
                                            <option>	Micronesia, Federated States of	</option>
                                            <option>	Faroe Islands	</option>
                                            <option>	France	</option>
                                            <option>	Gabon	</option>
                                            <option>	United Kingdom	</option>
                                            <option>	Grenada	</option>
                                            <option>	Georgia	</option>
                                            <option>	French Guiana	</option>
                                            <option>	Guernsey	</option>
                                            <option>	Ghana	</option>
                                            <option>	Gibraltar	</option>
                                            <option>	Greenland	</option>
                                            <option>	Gambia	</option>
                                            <option>	Guinea	</option>
                                            <option>	Guadeloupe	</option>
                                            <option>	Equatorial Guinea	</option>
                                            <option>	Greece	</option>
                                            <option>	South Georgia and the South Sandwich Islands	</option>
                                            <option>	Guatemala	</option>
                                            <option>	Guam	</option>
                                            <option>	Guinea-Bissau	</option>
                                            <option>	Guyana	</option>
                                            <option>	Hong Kong	</option>
                                            <option>	Heard Island and McDonald Islands	</option>
                                            <option>	Honduras	</option>
                                            <option>	Croatia	</option>
                                            <option>	Haiti	</option>
                                            <option>	Hungary	</option>
                                            <option>	Indonesia	</option>
                                            <option>	Ireland	</option>
                                            <option>	Israel	</option>
                                            <option>	Isle of Man	</option>
                                            <option selected="">	India	</option>
                                            <option>	British Indian Ocean Territory	</option>
                                            <option>	Iraq	</option>
                                            <option>	Iran, Islamic Republic of	</option>
                                            <option>	Iceland	</option>
                                            <option>	Italy	</option>
                                            <option>	Jersey	</option>
                                            <option>	Jamaica	</option>
                                            <option>	Jordan	</option>
                                            <option>	Japan	</option>
                                            <option>	Kenya	</option>
                                            <option>	Kyrgyzstan	</option>
                                            <option>	Cambodia	</option>
                                            <option>	Kiribati	</option>
                                            <option>	Comoros	</option>
                                            <option>	Saint Kitts and Nevis	</option>
                                            <option>	Korea, Democratic People's Republic of	</option>
                                            <option>	Korea, Republic of	</option>
                                            <option>	Kuwait	</option>
                                            <option>	Cayman Islands	</option>
                                            <option>	Kazakhstan	</option>
                                            <option>	Lao People's Democratic Republic	</option>
                                            <option>	Lebanon	</option>
                                            <option>	Saint Lucia	</option>
                                            <option>	Liechtenstein	</option>
                                            <option>	Sri Lanka	</option>
                                            <option>	Liberia	</option>
                                            <option>	Lesotho	</option>
                                            <option>	Lithuania	</option>
                                            <option>	Luxembourg	</option>
                                            <option>	Latvia	</option>
                                            <option>	Libyan Arab Jamahiriya	</option>
                                            <option>	Morocco	</option>
                                            <option>	Monaco	</option>
                                            <option>	Moldova, Republic of	</option>
                                            <option>	Montenegro	</option>
                                            <option>	Saint Martin	</option>
                                            <option>	Madagascar	</option>
                                            <option>	Marshall Islands	</option>
                                            <option>	Macedonia	</option>
                                            <option>	Mali	</option>
                                            <option>	Myanmar	</option>
                                            <option>	Mongolia	</option>
                                            <option>	Macao	</option>
                                            <option>	Northern Mariana Islands	</option>
                                            <option>	Martinique	</option>
                                            <option>	Mauritania	</option>
                                            <option>	Montserrat	</option>
                                            <option>	Malta	</option>
                                            <option>	Mauritius	</option>
                                            <option>	Maldives	</option>
                                            <option>	Malawi	</option>
                                            <option>	Mexico	</option>
                                            <option>	Malaysia	</option>
                                            <option>	Mozambique	</option>
                                            <option>	Namibia	</option>
                                            <option>	New Caledonia	</option>
                                            <option>	Niger	</option>
                                            <option>	Norfolk Island	</option>
                                            <option>	Nigeria	</option>
                                            <option>	Nicaragua	</option>
                                            <option>	Netherlands	</option>
                                            <option>	Norway	</option>
                                            <option>	Nepal	</option>
                                            <option>	Nauru	</option>
                                            <option>	Niue	</option>
                                            <option>	New Zealand	</option>
                                            <option>	Other Country	</option>
                                            <option>	Oman	</option>
                                            <option>	Panama	</option>
                                            <option>	Peru	</option>
                                            <option>	French Polynesia	</option>
                                            <option>	Papua New Guinea	</option>
                                            <option>	Philippines	</option>
                                            <option>	Pakistan	</option>
                                            <option>	Poland	</option>
                                            <option>	Saint Pierre and Miquelon	</option>
                                            <option>	Pitcairn	</option>
                                            <option>	Puerto Rico	</option>
                                            <option>	Palestinian Territory	</option>
                                            <option>	Portugal	</option>
                                            <option>	Palau	</option>
                                            <option>	Paraguay	</option>
                                            <option>	Qatar	</option>
                                            <option>	Reunion	</option>
                                            <option>	Romania	</option>
                                            <option>	Serbia	</option>
                                            <option>	Russian Federation	</option>
                                            <option>	Rwanda	</option>
                                            <option>	Saudi Arabia	</option>
                                            <option>	Solomon Islands	</option>
                                            <option>	Seychelles	</option>
                                            <option>	Sudan	</option>
                                            <option>	Sweden	</option>
                                            <option>	Singapore	</option>
                                            <option>	Saint Helena	</option>
                                            <option>	Slovenia	</option>
                                            <option>	Svalbard and Jan Mayen	</option>
                                            <option>	Slovakia	</option>
                                            <option>	Sierra Leone	</option>
                                            <option>	San Marino	</option>
                                            <option>	Senegal	</option>
                                            <option>	Somalia	</option>
                                            <option>	Suriname	</option>
                                            <option>	Sao Tome and Principe	</option>
                                            <option>	El Salvador	</option>
                                            <option>	Sint Maarten	</option>
                                            <option>	Syrian Arab Republic	</option>
                                            <option>	Swaziland	</option>
                                            <option>	Turks and Caicos Islands	</option>
                                            <option>	Chad	</option>
                                            <option>	French Southern Territories	</option>
                                            <option>	Togo	</option>
                                            <option>	Thailand	</option>
                                            <option>	Tajikistan	</option>
                                            <option>	Tokelau	</option>
                                            <option>	Timor-Leste	</option>
                                            <option>	Turkmenistan	</option>
                                            <option>	Tunisia	</option>
                                            <option>	Tonga	</option>
                                            <option>	Turkey	</option>
                                            <option>	Trinidad and Tobago	</option>
                                            <option>	Tuvalu	</option>
                                            <option>	Taiwan	</option>
                                            <option>	Tanzania, United Republic of	</option>
                                            <option>	Ukraine	</option>
                                            <option>	Uganda	</option>
                                            <option>	United States Minor Outlying Islands	</option>
                                            <option>	United States	</option>
                                            <option>	Uruguay	</option>
                                            <option>	Uzbekistan	</option>
                                            <option>	Holy See (Vatican City State)	</option>
                                            <option>	Saint Vincent and the Grenadines	</option>
                                            <option>	Venezuela	</option>
                                            <option>	Virgin Islands, British	</option>
                                            <option>	Virgin Islands, U.S.	</option>
                                            <option>	Vietnam	</option>
                                            <option>	Vanuatu	</option>
                                            <option>	Wallis and Futuna	</option>
                                            <option>	Samoa	</option>
                                            <option>	Yemen	</option>
                                            <option>	Mayotte	</option>
                                            <option>	South Africa	</option>
                                            <option>	Zambia	</option>
                                            <option>	Zimbabwe	</option>
                                            
                                            
                                            
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">State:</div>
                                            <div class="col-md-9">
                                                                            <select class="form-control" name="artist_state" placeholder="">
                                            
                                            <option>	Andaman and Nicobar Islands	</option>
                                            <option>	Andhra Pradesh	</option>
                                            <option>	Arunachal Pradesh	</option>
                                            <option>	Assam	</option>
                                            <option>	Bihar	</option>
                                            <option>	Chandigarh	</option>
                                            <option>	Chhattisgarh	</option>
                                            <option>	Dadra and Nagar Haveli	</option>
                                            <option>	Daman &amp; Diu	</option>
                                            <option>	Delhi	</option>
                                            <option>	Goa	</option>
                                            <option>	Gujrat	</option>
                                            <option>	Haryana	</option>
                                            <option>	Himachal Pradesh	</option>
                                            <option>	Jammu &amp; Kashmir	</option>
                                            <option>	Jharkhand	</option>
                                            <option>	Karnataka	</option>
                                            <option>	Kerala	</option>
                                            <option>	Ladakh	</option>
                                            <option>	Lakshadweep	</option>
                                            <option selected="">	Madhya Pradesh	</option>
                                            <option>	Maharashtra	</option>
                                            <option>	Manipur	</option>
                                            <option>	Meghalaya	</option>
                                            <option>	Mizoram	</option>
                                            <option>	Nagaland	</option>
                                            <option>	Odisha	</option>
                                            <option>	Puducherry	</option>
                                            <option>	Punjab	</option>
                                            <option>	Rajasthan	</option>
                                            <option>	Sikkim	</option>
                                            <option>	Tamil Nadu	</option>
                                            <option>	Telangana	</option>
                                            <option>	Tripura	</option>
                                            <option>	Uttarakhand	</option>
                                            <option>	Utttar Pradesh	</option>
                                            <option>	West Bengal	</option>
                                            <option>Non Indian</option>
                                            
                                            
                                            
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">District:</div>
                                            <div class="col-md-9">
                                            <select class="form-control" name="artist_distric">
                                            <option value="">--Select-- </option>
                                            <option  value="Bhopal" <?php if($artist->artist_distric=='Bhopal'){ echo "selected";} ?>>Bhopal</option>
                                            
                                            <option  value="Indore" <?php if($artist->artist_distric=='Indore'){ echo "selected";} ?>>Indore</option>
                                            <option  value="Gwalior" <?php if($artist->artist_distric=='Gwalior'){ echo "selected";} ?>>Gwalior</option>
                                            <option  value="Sehore" <?php if($artist->artist_distric=='Sehore'){ echo "selected";} ?>>Sehore</option>
                                            <option  value="Itarsi" <?php if($artist->artist_distric=='Itarsi'){ echo "selected";} ?>>Itarsi</option>
                                            <option  value="Alirajpur" <?php if($artist->artist_distric=='Alirajpur'){ echo "selected";} ?>>Alirajpur</option>
                                            <option  value="Anuppur" <?php if($artist->artist_distric=='Anuppur'){ echo "selected";} ?>>Anuppur</option>
                                            
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Village/City:</div>
                                            <div class="col-md-9">
                                                 <textarea class="custom-select" name="artist_city" id="artist_city"><?php echo $artist->artist_city; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Pin Code:</div>
                                            <div class="col-md-9">
                                                  <input type="text" name="artist_pincode" id="artist_pincode" class="form-control" placeholder="pin code" value="<?php echo $artist->artist_pincode;?>" maxlength="10">
                                            </div>
                                        </div>
                                       
                                         <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Address:</div>
                                            <div class="col-md-9">
                                                  <textarea class="custom-select" name="artist_address" id="artist_address"><?php echo $artist->artist_address; ?></textarea>
                                            </div>
                                        </div>
                                      
                                      
                                    </div>
                                   <div class="form-row">
                                       <div class="form-group col-md-4"></div>
         <div class="form-group col-md-6">
         <input type="submit" name="submit" class="btn btn-primary" value="Update">
         <div class="clearfix"></div>
         </div>
         </div>
                                 </form>
                                </div>
                        <!-- / Info -->
                        <?php  }else{?>
                        <div class="card mb-4">
                        
                        <div class="card-body">
                        <lable>Address Details</lable><a style="float: right;" class="btn btn-primary btn-round" href="<?php echo base_url();?>home/artist_view/<?php echo $artist->id ?>?user&address=address">Edit</a>
                        <hr>
                        
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Country:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->artist_country)){
                        echo $artist->artist_country;
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">State:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->artist_state)){
                        echo $artist->artist_state; 
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">District:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark">
                        <?php  if(!empty($artist->artist_distric)){
                        echo $artist->artist_distric;
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Village/City:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->artist_city)){
                        echo $artist->artist_city;
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Pin Code:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->artist_pincode)){
                        echo $artist->artist_pincode; 
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>
                        
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Address:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->artist_address)){
                        echo $artist->artist_address; 
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>
                        
                        
                        </div>
                        
                        </div>
                        <?php } ?>
                        <!-- Info -->
                        <?php if($_GET['grade']){ ?>
                        <div class="card mb-4">
                           <form action="<?php echo base_url();?>home/gradeedit_artists" method="post" enctype="multipart/form-data">
                                   
                        <div class="card-body">
                        <lable>Artist Grade</lable>
                        <hr>
                        <label><u>Doordarshan Details</u></label>
                        <div class="row mb-2">
                             <input type="hidden" class="custom-select" name="id" id="id" value="<?php echo $artist->id; ?>">
                       
                        <div class="col-md-3 text-muted">Grade:</div>
                        <div class="col-md-9">
                            <select class="form-control custom-select1" name="artist_grade2" placeholder="" id="myDropdown">
                            
                            <option value="">Choose Grade</option>
                            
                            <option value="A+" <?php if($artist->artist_grade2=='A+'){ echo "selected";} ?>>A+</option>
                            
                            <option value="A" <?php if($artist->artist_grade2=='A'){ echo "selected";} ?>>A</option>
                            
                            <option value="B+" <?php if($artist->artist_grade2=='B+'){ echo "selected";} ?>>B+</option>
                            
                            <option value="B" <?php if($artist->artist_grade2=='B'){ echo "selected";} ?>>B</option>
                            
                            <option value="C+" <?php if($artist->artist_grade2=='C+'){ echo "selected";} ?>>C+</option>
                            
                            <option value="C" <?php if($artist->artist_grade2=='C'){ echo "selected";} ?>>C</option>
                            
                            </select>
                        </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Certificate:</div>
                        <div class="col-md-9">
                        <input type="file" class="custom-select" name="artist_grade3" id="artist_grade3">
                   <input type="hidden" class="custom-select" name="artist_grade3old" id="artist_grade3old" value="<?php echo $artist->artist_grade3; ?>">
                <img src="http://jusmarktech.in/mpculturedept/public/uploads/<?php echo $artist->artist_grade3; ?>" width="50">
                        </div>
                        </div>
                        
                        
                        <label><u>Aakashvani Details</u></label>
                        
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Grade:</div>
                        <div class="col-md-9">
                            <select class="form-control custom-select1" name="akash_grade" placeholder="">
                            
                            <option value="">Choose Grade</option>
                            
                            <option <?php if($artist->akash_grade=='A+'){ echo "selected";} ?>>A+</option>
                            
                            <option <?php if($artist->akash_grade=='A'){ echo "selected";} ?>>A</option>
                            
                            <option <?php if($artist->akash_grade=='B+'){ echo "selected";} ?>>B+</option>
                            
                            <option <?php if($artist->akash_grade=='B'){ echo "selected";} ?>>B</option>
                            
                            <option <?php if($artist->akash_grade=='C+'){ echo "selected";} ?>>C+</option>
                            
                            <option <?php if($artist->akash_grade=='C'){ echo "selected";} ?>>C</option>
                            
                            </select>
                        </div>
                        </div>
                        
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Certificate:</div>
                        <div class="col-md-9">
                                   <input type="file" class="custom-select" name="akash_grade_file" id="akash_grade_file">
                      <input type="hidden" class="custom-select" name="akash_grade_fileold" id="akash_grade_fileold" value="<?php echo $artist->akash_grade_file; ?>">
                       <img src="http://jusmarktech.in/mpculturedept/public/uploads/<?php echo $artist->akash_grade_file; ?>" width="50">
                                    </div>
                        </div>
                        <label><u>ICCR Details</u></label>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Grade:</div>
                        <div class="col-md-9">
                        <select class="form-control custom-select1" name="iccr_grade" placeholder="">

                    <option value="">Choose Grade</option>

                    <option <?php if($artist->iccr_grade=='A+'){ echo "selected";} ?>>A+</option>

                    <option <?php if($artist->iccr_grade=='A'){ echo "selected";} ?>>A</option>

                    <option <?php if($artist->iccr_grade=='B+'){ echo "selected";} ?>>B+</option>

                    <option <?php if($artist->iccr_grade=='B'){ echo "selected";} ?>>B</option>

                    <option <?php if($artist->iccr_grade=='C+'){ echo "selected";} ?>>C+</option>

                    <option <?php if($artist->iccr_grade=='C'){ echo "selected";} ?>>C</option>

                    </select>
                        </div>
                        </div>
                        
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Certificate:</div>
                        <div class="col-md-9">
                        <input type="file" class="custom-select" name="iccr_files" id="iccr_files">
                        <input type="hidden" class="custom-select" name="iccr_filesold" id="iccr_filesold" value="<?php echo $artist->iccr_files; ?>">
                        <img src="http://jusmarktech.in/mpculturedept/public/uploads/<?php echo $artist->iccr_files; ?>" width="50">
                        </div>
                        </div>
                        
                        <label><u>Other Details</u></label>
                        <div class="row mb-2">
                     <!--   <div class="col-md-3 text-muted">Grade:</div>-->
                        <div class="col-md-12">
                            <div class="form-group fieldGroupA">
                            <div class="input-group">
                            <label class="form-label">Grade</label>
                            <input class="form-control"  type="text" id="upload-btn" name="artist_other" value="<?php echo $artist->artist_other; ?>">
                            <label class="form-label">Award/Certificate Name</label>
                            <input class="form-control"  type="file" id="upload-btn" name="artist_other_certificate">
                            <input type="hidden" class="custom-select" name="artist_other_certificateold" id="artist_other_certificateold" value="<?php echo $artist->artist_other_certificate; ?>">
                           
                           
                            <div class="input-group-addon"> 
                            <a href="javascript:void(0)" class="btn btn-success addMoreA" style="margin-top: 10px;"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fa fa-plus fa-fw"></i></a>
                            </div>
                           
                            </div>
                             <br>
                             <img style="margin-left: 287px;" src="http://jusmarktech.in/mpculturedept/public/uploads/<?php echo $artist->artist_other_certificate; ?>" width="50">
                            </div>
                            <br>
                            <!-- copy of input fields group -->
                            <div class="form-group fieldGroupCopyA" style="display: none;">
                            <div class="input-group">
                            <label class="form-label">Grade</label>
                            <input class="form-control"  type="text" id="upload-btn" name="artist_other1">
                            <label class="form-label">Award/Certificate Name</label>
                            <input class="form-control"  type="file" id="upload-btn" name="artist_other_certificate1[]" accept="image/*" multiple >
                            
                            <div class="input-group-addon"> 
                            <a href="javascript:void(0)" class="btn btn-danger removeA"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> <i class="fa fa-minus fa-fw"></i></a>
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        
                        <!--<div class="row mb-2">
                        <div class="col-md-3 text-muted">Award/Certificate Name:</div>
                        <div class="col-md-9">
                        <!--  <a href="javascript:void(0)" class="text-dark"><?php echo $artist->artist_other_certificate; ?></a>--
                        <?php if(!empty($artist->artist_other_certificate)) {?>
                        <img src="http://jusmarktech.in/mpculturedept/public/uploads/<?php echo $artist->artist_other_certificate; ?>" alt class="d-block  rounded-circle mb-3" width="50">
                        <?php }else{ ?>
                        <img src="https://icon-library.com/images/na_moon-512.png" alt class="d-block  rounded-circle mb-3" width="50">
                        <?php }?>
                        </div>
                        </div>-->
                        
                        
                        
                        
                        
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4"></div>
                             <div class="form-group col-md-6">
                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                            <div class="clearfix"></div>
                            </div>
                        </div>
                        </form>
                        </div>
                        <?php  }else{?>
                        <div class="card mb-4">
                        
                        <div class="card-body">
                        <lable>Artist Grade</lable> <a style="float: right;" class="btn btn-primary btn-round" href="<?php echo base_url();?>home/artist_view/<?php echo $artist->id ?>?user&grade=grade">Edit</a>
                        <hr>
                        <label><u>Doordarshan Details</u></label>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Grade:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->artist_grade2)){ 
                        echo $artist->artist_grade2; 
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Certificate:</div>
                        <div class="col-md-9">
                        <!--  <a href="javascript:void(0)" class="text-dark"><?php echo $artist->artist_grade2; ?></a>-->
                        <?php if(!empty($artist->artist_grade3)) {?>
                        <img src="http://jusmarktech.in/mpculturedept/public/uploads/<?php echo $artist->artist_grade3; ?>" alt class="d-block rounded-circle mb-3" width="50">
                        <?php }else{ ?>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCDeKENI9q2DzfAGHWnhrtXE0e33qcKYE8_ts4NEu06z0VVziTC0fA4KE_yn3NSjk3mwc&usqp=CAU" alt class="d-block  rounded-circle mb-3" width="50">
                        <?php }?>
                        </div>
                        </div>
                        
                        
                        <label><u>Aakashvani Details</u></label>
                        
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Grade:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php  
                        if(!empty($artist->akash_grade)){ 
                        echo $artist->akash_grade;
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>
                        
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Certificate:</div>
                        <div class="col-md-9">
                        <?php if(!empty($artist->akash_grade_file)) {?>
                        <img src="http://jusmarktech.in/mpculturedept/public/uploads/<?php echo $artist->akash_grade_file; ?>" alt class="d-block rounded-circle mb-3" width="50">
                        <?php }else{ ?>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCDeKENI9q2DzfAGHWnhrtXE0e33qcKYE8_ts4NEu06z0VVziTC0fA4KE_yn3NSjk3mwc&usqp=CAU" alt class="d-block  rounded-circle mb-3" width="50">
                        <?php }?>
                        </div>
                        </div>
                        <label><u>ICCR Details</u></label>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Grade:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php
                        if(!empty($artist->iccr_grade)){ 
                        echo $artist->iccr_grade; 
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>
                        
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Certificate:</div>
                        <div class="col-md-9">
                        <?php if(!empty($artist->iccr_files)) {?>
                        <img src="http://jusmarktech.in/mpculturedept/public/uploads/<?php echo $artist->iccr_files; ?>" alt class="d-block  rounded-circle mb-3" width="50">
                        <?php }else{ ?>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCDeKENI9q2DzfAGHWnhrtXE0e33qcKYE8_ts4NEu06z0VVziTC0fA4KE_yn3NSjk3mwc&usqp=CAU" alt class="d-block  rounded-circle mb-3" width="50">
                        <?php }?>
                        </div>
                        </div>
                        
                        <label><u>Other Details</u></label>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Grade:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->artist_other)){  
                        echo $artist->artist_other; 
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>
                        
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Award/Certificate Name:</div>
                        <div class="col-md-9">
                        <!--  <a href="javascript:void(0)" class="text-dark"><?php echo $artist->artist_other_certificate; ?></a>-->
                        <?php if(!empty($artist->artist_other_certificate)) {?>
                        <img src="http://jusmarktech.in/mpculturedept/public/uploads/<?php echo $artist->artist_other_certificate; ?>" alt class="d-block  rounded-circle mb-3" width="50">
                        <?php }else{ ?>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCDeKENI9q2DzfAGHWnhrtXE0e33qcKYE8_ts4NEu06z0VVziTC0fA4KE_yn3NSjk3mwc&usqp=CAU" alt class="d-block  rounded-circle mb-3" width="50">
                        <?php }?>
                        </div>
                        </div>
                        
                        
                        
                        
                        
                        </div>
                        
                        </div>
                        <?php  }?>
                        <!-- / Info -->
                              <!-- Posts -->
                        <?php if($_GET['question']){ ?>
                        <!-- Info -->
                        <div class="card mb-4">
                         <form action="<?php echo base_url();?>home/quastionedit_artists" method="post" enctype="multipart/form-data">
                           
                        <div class="card-body">
                        <lable> Question Details</lable>
                        <hr>
                        <label>1) Have you participated in any program organised by M.P Culture Department ?</label>
                        <div class="row mb-2">
                        <input type="hidden" class="custom-select" name="id" id="id" value="<?php echo $artist->id; ?>">
                       
                        <div class="col-md-12">
                        <div class="form-group fieldGroupB">
	<div class="input-group">
    <label class="form-label">Program Name</label>
	<input class="form-control"  type="text" id="upload-btn" name="artist_program" value="<?php echo $artist->artist_program; ?>">
    <label class="form-label">Year</label>
	<input class="form-control"  type="text" id="upload-btn" name="artist_year" value="<?php echo $artist->artist_year; ?>">
	
    <div class="input-group-addon"> 
	<a href="javascript:void(0)" class="btn btn-success addMoreB" style="margin-top: 10px;"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fa fa-plus fa-fw"></i></a>
	</div>
	</div>
	</div>

<!-- copy of input fields group -->
	<div class="form-group fieldGroupCopyB" style="display: none;">
	<div class="input-group">
        
    <label class="form-label">Program Name</label>

    <input class="form-control"  type="text" id="upload-btn" name="artist_program1">
    <label class="form-label">Year</label>
	<input class="form-control"  type="text" id="upload-btn" name="artist_year11">
	
        <div class="input-group-addon"> 
        <a href="javascript:void(0)" class="btn btn-danger removeB"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> <i class="fa fa-minus fa-fw"></i></a>
        </div>
	</div>  
 </div>
                        </div>
                        </div>
                        
                      <!--  <div class="row mb-2">
                        <div class="col-md-3 text-muted">Year:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->artist_year)){
                        echo $artist->artist_year;
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        
                        </div>
                        </div>-->
                        
                        
                        <label>2) Have you received any Award/Certificate from M.P Culture Department<</label>
                        
                        <div class="row mb-2">
                      
                        <div class="col-md-12">
                         <div class="form-group fieldGroupC">
	<div class="input-group">
    <label class="form-label">Awards Name </label>
	<input class="form-control"  type="text" id="upload-btn" name="artist_award" value="<?php echo $artist->artist_award; ?>">
    <label class="form-label">Year</label>
	<input class="form-control"  type="text" id="upload-btn" name="artist_year1" value="<?php echo $artist->artist_year1; ?>">
	
    <div class="input-group-addon"> 
	<a href="javascript:void(0)" class="btn btn-success addMoreC" style="margin-top: 10px;"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fa fa-plus fa-fw"></i></a>
	</div>
	</div>
	</div>
    <br>
<!-- copy of input fields group -->
	<div class="form-group fieldGroupCopyC" style="display: none;">
	<div class="input-group">
    <label class="form-label">Awards Name </label>
    <input class="form-control"  type="text" id="upload-btn" name="artist_program2">
    <label class="form-label">Year</label>
	<input class="form-control"  type="text" id="upload-btn" name="artist_year2[]" accept="image/*" multiple >
	
        <div class="input-group-addon"> 
        <a href="javascript:void(0)" class="btn btn-danger removeC"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> <i class="fa fa-minus fa-fw"></i></a>
        </div>
	</div>  
 </div>
                        </div>
                        </div>
                       <!-- <div class="row mb-2">
                        <div class="col-md-3 text-muted">Year:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->artist_year1)){
                        echo $artist->artist_year1;
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>-->
                        
                        
                        <label>3) Have you received any Award/Certificate from any Private or Other Government Department</label>
                        
                        
                        <div class="row mb-2">
                        
                        <div class="col-md-12">
                          <div class="form-group fieldGroupD">
	<div class="input-group">
    <label class="form-label">Company/Dept. Name</label>
         <input type="text" name="artist_company" id="artist_company" class="form-control" placeholder="artist_company"  value="<?php echo $artist->artist_company; ?>">
         

   <label class="form-label">Award/Certificate Name</label>
         <input type="text" name="artist_aword1" id="artist_aword1" class="form-control" placeholder="artist_aword1" value="<?php echo $artist->artist_aword1; ?>">
         
         <label class="form-label">Year</label>
	<input class="form-control"  type="text" id="upload-btn" name="artist_year2"  value="<?php echo $artist->artist_year2; ?>">
	
    <div class="input-group-addon"> 
	<a href="javascript:void(0)" class="btn btn-success addMoreD" style="margin-top: 10px;"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fa fa-plus fa-fw"></i></a>
	</div>
	</div>
	</div>
    <br>
<!-- copy of input fields group -->
	<div class="form-group fieldGroupCopyD" style="display: none;">
	<div class="input-group">
    <label class="form-label">Company/Dept. Name</label>
         <input type="text" name="artist_company01" id="artist_company01" class="form-control" placeholder="artist_company" value="" maxlength="100">
         

   <label class="form-label">Award/Certificate Name</label>
         <input type="text" name="artist_aword11" id="artist_aword10" class="form-control" placeholder="artist_aword1" value="" maxlength="100">
         
    <label class="form-label">Year</label>
	<input class="form-control"  type="text" id="upload-btn" name="artist_year22[]" accept="image/*" multiple >
	
        <div class="input-group-addon"> 
        <a href="javascript:void(0)" class="btn btn-danger removeD"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> <i class="fa fa-minus fa-fw"></i></a>
        </div>
	</div>  
 </div>
                        </div>
                        </div>
                      <!--  <div class="row mb-2">
                        <div class="col-md-3 text-muted">Award/Certificate Name:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php
                        if(!empty($artist->artist_aword1)){
                        echo $artist->artist_aword1;
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Year:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php    if(!empty($artist->artist_year2)){
                        echo $artist->artist_year2;
                        }else{
                        echo "Not Updated";
                        }
                        ?></a>
                        </div>
                        </div>-->
                        
                        
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4"></div>
                             <div class="form-group col-md-6">
                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                            <div class="clearfix"></div>
                            </div>
                        </div>
                        </form>
                        </div>
                        <?php  }else{?>
                         <div class="card mb-4">
                                   
                                    <div class="card-body">
                                     <lable> Question Details</lable>  <a style="float: right;" class="btn btn-primary btn-round" href="<?php echo base_url();?>home/artist_view/<?php echo $artist->id ?>?user&question=question">Edit</a>
                                    <hr>
                                     <label>1) Have you participated in any program organised by M.P Culture Department ?</label>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Program :</div>
                                            <div class="col-md-9">
                                               <?php if(!empty($artist->artist_program)){
                                               echo $artist->artist_program;
                                               }else{
                                                   echo "Not Updated";
                                               }
                                               ?>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Year:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                if(!empty($artist->artist_year)){
                                                echo $artist->artist_year;
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                                
                                            </div>
                                        </div>

                                     
                                         <label>2) Have you received any Award/Certificate from M.P Culture Department<</label>
                                         
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Awards Name:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                if(!empty($artist->artist_award)){
                                                echo $artist->artist_award;
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Year:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                  if(!empty($artist->artist_year1)){
                                                echo $artist->artist_year1;
                                                  }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                       
                                        
                                         <label>3) Have you received any Award/Certificate from any Private or Other Government Department</label>
                                         
                                         
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Company/Dept. Name:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                 if(!empty($artist->artist_company)){
                                                echo $artist->artist_company;
                                                 }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Award/Certificate Name:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php
                                                  if(!empty($artist->artist_aword1)){
                                                echo $artist->artist_aword1;
                                                  }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Year:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php    if(!empty($artist->artist_year2)){
                                                echo $artist->artist_year2;
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                  
                                </div>     
                         <?php  }?> 
                         
                         <!------------------------------------------->
                          <!-- Posts -->
                          <?php   $p_id=$artist->id;
                        $query = "SELECT  *FROM  artist_register_step2 where artist_id='$p_id'";
                  
				   $sql=$this->db->query($query);
                    $artistArray=$sql->result_array();
                 $i=1;
				foreach ($artistArray as $data) ?>
                        <?php if($_GET['other']){ ?>
                        <!-- Info -->
                        
                         <div class="card mb-4">
                                   <form action="<?php echo base_url();?>home/other_edit_artists" method="post" enctype="multipart/form-data">
                          
                                    <div class="card-body">
                                     <lable> Other </lable> 
                                    <hr>
                                     <label><u><b>Other Qualification</b></u> </label>
                                        <div class="row mb-2">
                                             <input class="form-control" id="username" type="hidden" name="ids" placeholder="" value="<?php echo $artist->id; ?>">
                                            <input class="form-control" id="username" type="hidden" name="id" placeholder="" value="<?php echo  $data['id']; ?>">
                                           
                                            <div class="col-md-3 text-muted">Qualification :</div>
                                            <div class="col-md-9">
                                              <input class="form-control" id="username" type="text" name="step_qualification" placeholder="" value="<?php echo  $data['step_qualification']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">School/College/University/Institute:</div>
                                            <div class="col-md-9">
                                                 <input class="form-control" id="username" type="text" name="step_school" placeholder="" value="<?php echo  $data['step_school']; ?>">
                                                
                                            </div>
                                        </div>
                                         <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Location:</div>
                                            <div class="col-md-9">
                                                 <input class="form-control" id="username" type="text" name="step_location" placeholder="" value="<?php echo  $data['step_location']; ?>">
                                                
                                            </div>
                                        </div>
                                     
                                         <label><u><b>Professional Experience</b></u></label>
                                         
                                         
                                         <div class="form-group fieldGroup2">
        <div class="input-group">
          
           <div class="col-md-6">
          
            <div class="form-group text-left ">

               <label class="floating-label" for="Name"><b>Designation</b></label>

              
              <input class="form-control" id="username" type="text" name="step_desgination" placeholder="" value="<?php echo  $data['step_desgination']; ?>">
            </div></div>

             <div class="col-md-6">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Company/Organisation Name</b></label>

              <input class="form-control" id="username" type="text" name="step_company" placeholder="" value="<?php echo  $data['step_company']; ?>">

            </div></div>

            
            

              <div class="col-md-6">

            <div class="form-group text-left ">

        
              <label class="floating-label" for="Name"><b>Total Years</b></label>

              <input class="form-control" id="dob1" type="number" name="step__totalyear" placeholder="" value="<?php echo  $data['step__totalyear']; ?>">


              </div>

            </div>

            
            
 <div class="col-md-6">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Location</b> </label>

              <input class="form-control" id="email" type="text" name="step_location1" placeholder="" value="<?php echo  $data['step_location1']; ?>">

            </div></div>

             
           

            <div class="col-md-6">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Date From</b> </label>

              <input class="form-control" id="email" type="date" name="step_from" placeholder="" value="<?php echo  $data['step_from']; ?>">

            </div></div>

             

           

             <div class="col-md-6">

            <div class="form-group text-left mb-4">

               <label class="floating-label" for="Name"><b>TO </b> </label>
                <input class="form-control" id="email" type="date" name="step_to" placeholder="" value="<?php echo  $data['step_to']; ?>">

            </div></div>
            
              
            <div class="input-group-addon"> 
                <a href="javascript:void(0)" class="btn btn-success addMore2" style="margin-left: 20px; !important;"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Add more</a>
            </div>
        </div>
    </div>
    
<!-- copy of input fields group -->
<div class="form-group fieldGroupCopy2" style="display: none;">
    <div class="input-group">
      <div class="col-md-6">
          
            <div class="form-group text-left ">

               <label class="floating-label" for="Name"><b>Designation</b></label>

             
              <input class="form-control" id="username" type="text" name="step_desgination1" placeholder="" >

            </div></div>

             <div class="col-md-6">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Company/Organisation Name</b></label>

              <input class="form-control" id="username" type="text" name="step_company1" placeholder="">

            </div></div>

            
            

              <div class="col-md-6">

            <div class="form-group text-left ">

        
              <label class="floating-label" for="Name"><b>Total Years</b></label>

              <input class="form-control" id="dob1" type="number" name="step__totalyear1" placeholder="">


              </div>

            </div>

            
            
 <div class="col-md-6">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Location</b> </label>

              <input class="form-control" id="email" type="text" name="step_location01" placeholder="">

            </div></div>

             
           

            <div class="col-md-6">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Date From</b> </label>

              <input class="form-control" id="email" type="date" name="step_from1" placeholder="">

            </div></div>

             

           

             <div class="col-md-6">

            <div class="form-group text-left mb-4">

               <label class="floating-label" for="Name"><b>TO </b> </label>
                <input class="form-control" id="email" type="date" name="step_to1" placeholder="">

            </div></div>
              
        <div class="input-group-addon"> 
            <a href="javascript:void(0)" class="btn btn-danger remove2" style="margin-left: 20px; !important;"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Removed</a>
        </div>
    </div>
</div>

                                         
                                      <!---  <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Designation:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step_desgination" placeholder="" value="<?php echo  $artist->step_desgination; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Company/Organisation Name:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step_company" placeholder="" value="<?php echo  $artist->step_company; ?>">
                                            </div>
                                        </div>
                                         <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Total Years:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step__totalyear" placeholder="" value="<?php echo  $artist->step__totalyear; ?>">
                                            </div>
                                        </div>
                                         <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Location:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step_location1" placeholder="" value="<?php echo  $artist->step_location1; ?>">
                                            </div>
                                        </div>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Date From:</div>
                                            <div class="col-md-9">
                                              <input class="form-control" id="username" type="text" name="step_from" placeholder="" value="<?php echo  $artist->step_from; ?>">
                                            </div>
                                        </div>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">TO:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step_to" placeholder="" value="<?php echo  $artist->step_to; ?>">
                                            </div>
                                        </div>--->
                                        
                                         <label><u><b>Performance Details ( Upto Latest 10 Only)</b></u></label>
                                         
                                             <div class="form-group fieldGroup">
        <div class="input-group">
          
             <div class="col-md-6">

            <div class="form-group text-left mb-4">

               <label class="floating-label" for="Name"><b>Date </b> </label>

              <input class="form-control" id="email" type="date" name="step_date" placeholder="" value="<?php echo  $data['step_date']; ?>">
            </div></div>

            

           

           <div class="col-md-6">

            <div class="form-group text-left mb-4">

               <label class="floating-label" for="Name"><b>Performance Type </b> </label>

            
              <input class="form-control" id="email" type="text" name="step__types" placeholder="" value="<?php echo  $data['step__types']; ?>">
            </div></div>

            

            

            <div class="col-md-6">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Program Name</b></label>

              <input class="form-control" id="username" type="text" name="step_program" placeholder="" value="<?php echo  $data['step_program']; ?>">

            </div></div>

          

           <div class="col-md-6">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Location</b></label>

              <input class="form-control" id="username" type="text" name="step_location2" placeholder="" value="<?php echo  $data['step_location2']; ?>">

            </div></div>

            

            <div class="col-md-12">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Venue</b></label>

              <input class="form-control" id="username" type="text" name="step_venue" placeholder="" value="<?php echo  $data['step_venue']; ?>">

            </div></div>

              
            <div class="input-group-addon"> 
                <a href="javascript:void(0)" class="btn btn-success addMore" style="margin-left: 20px; !important;"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Add more</a>
            </div>
        </div>
    </div>
    
<!-- copy of input fields group -->
<div class="form-group fieldGroupCopy" style="display: none;">
    <div class="input-group">
      
 <div class="col-md-6">

            <div class="form-group text-left mb-4">

               <label class="floating-label" for="Name"><b>Date </b> </label>

              <input class="form-control" id="email" type="date" name="step_date1" placeholder="">
            </div></div>

            

           

           <div class="col-md-6">

            <div class="form-group text-left mb-4">

               <label class="floating-label" for="Name"><b>Performance Type </b> </label>

              <input class="form-control" id="email" type="types" name="step__types1" placeholder="">
              

            </div></div>

            

            

            <div class="col-md-6">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Program Name</b></label>

              <input class="form-control" id="username" type="text" name="step_program1" placeholder="">

            </div></div>

          

           <div class="col-md-6">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Location</b></label>

              <input class="form-control" id="username" type="text" name="step_location21" placeholder="">

            </div></div>

            

            <div class="col-md-12">

            <div class="form-group text-left ">

              <label class="floating-label" for="Name"><b>Venue</b></label>

              <input class="form-control" id="username" type="text" name="step_venue1" placeholder="">

            </div></div>

              
        <div class="input-group-addon"> 
            <a href="javascript:void(0)" class="btn btn-danger remove" style="margin-left: 20px; !important;"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Removed</a>
        </div>
    </div>
</div>
<!---
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Date:</div>
                                            <div class="col-md-9">
                                               <input class="form-control" id="username" type="text" name="step_date" placeholder="" value="<?php echo  $artist->step_date; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Performance Type:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step__types" placeholder="" value="<?php echo  $artist->step__types; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Program Name:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step_program" placeholder="" value="<?php echo  $artist->step_program; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Location:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step_location2" placeholder="" value="<?php echo  $artist->step_location2; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Venue:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step_venue" placeholder="" value="<?php echo  $artist->step_venue; ?>">
                                            </div>
                                        </div>--->
                                         <label><u><b>Banking Details</b></u></label>
                                         
                                         
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Upload Pancard Details:</div>
                                            <div class="col-md-9">
                                               <input class="form-control" id="username" type="file" name="step_pancord">
                                        <input class="form-control" id="username" type="hidden" name="step_pancordold" placeholder="" value="<?php echo  $data['step_pancord']; ?>">
                                        
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Enter Bank Name:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step_bankname" placeholder=""value="<?php echo  $data['step_bankname']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Enter Account Number:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step_account" placeholder="" value="<?php echo  $data['step_account']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Enter Bank IFSC Code:</div>
                                            <div class="col-md-9">
                                               <input class="form-control" id="username" type="text" name="step_ifsc" placeholder="" value="<?php echo  $data['step_ifsc']; ?>">
                                            </div>
                                        </div>
                                       
                                       <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Enter Branch Code:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step_branch" placeholder="" value="<?php echo  $data['step_branch']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Enter City:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="text" name="step_city" placeholder="" value="<?php echo  $data['step_city']; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Upload Cancelled Check Photo/Passbook Front Side Photo:</div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="username" type="file" name="step_check">
                                                 <input class="form-control" id="username" type="hidden" name="step_checkold" placeholder="" value="<?php echo  $data['step_check']; ?>">
                                            </div>
                                        </div>
                                       
                                    </div>
                                   <div class="form-row">
                            <div class="form-group col-md-4"></div>
                             <div class="form-group col-md-6">
                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                            <div class="clearfix"></div>
                            </div>
                        </div>
                        </form>
                                </div>    
                        <?php  }else{?>
                        <div class="card mb-4">
                                   
                                    <div class="card-body">
                                     <lable> Other </lable>  <a style="float: right;" class="btn btn-primary btn-round" href="<?php echo base_url();?>home/artist_view/<?php echo $artist->id ?>?user&other=other">Edit</a>
                                    <hr>
                                     <label><u><b>Other Qualification</b></u> </label>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Qualification :</div>
                                            <div class="col-md-9">
                                               
                                               <?php if(!empty($data['step_qualification'])){
                                               echo $data['step_qualification'];
                                               }else{
                                                   echo "Not Updated";
                                               }
                                               ?>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">School/College/University/Institute:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                if(!empty($data['step_school'])){
                                                echo $data['step_school'];
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                                
                                            </div>
                                        </div>
                                         <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Location:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                if(!empty($data['step_location'])){
                                                echo $data['step_location'];
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                                
                                            </div>
                                        </div>
                                     
                                         <label><u><b>Professional Experience</b></u></label>
                                         
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Designation:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                if(!empty($data['step_desgination'])){
                                                echo $data['step_desgination'];
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Company/Organisation Name:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                  if(!empty($data['step_company'])){
                                                echo $data['step_company'];
                                                  }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                         <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Total Years:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                  if(!empty($data['step__totalyear'])){
                                                echo $data['step__totalyear'];
                                                  }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                         <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Location:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                  if(!empty($artist->step_location1)){
                                                echo $data['step_location1'];
                                                  }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Date From:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                  if(!empty($data['step_from'])){
                                                echo $data['step_from'];
                                                  }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">TO:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                  if(!empty($data['step_to'])){
                                                echo $data['step_to'];
                                                  }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        
                                         <label><u><b>Performance Details ( Upto Latest 10 Only)</b></u></label>
                                         
                                         
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Date:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                 if(!empty($data['step_date'])){
                                                echo $data['step_date'];
                                                 }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Performance Type:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php
                                                  if(!empty($data['step__types'])){
                                                echo $data['step__types'];
                                                  }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Program Name:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php    if(!empty($data['step_program'])){
                                                echo $data['step_program'];
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Location:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php    if(!empty($data['step_location2'])){
                                                echo $data['step_location2'];
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Venue:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php    if(!empty($data['step_venue'])){
                                                echo $data['step_venue'];
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                         <label><u><b>Banking Details</b></u></label>
                                         
                                         
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Upload Pancard Details:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php    if(!empty($data['step_pancord'])){?>
                                                <img src="https://jusmarktech.in/mpculturedept/public/uploads/<?php echo $data['step_pancord'];?>" width="50">
                                               <?php  }else{
                                                   echo "Not Updated";
                                               }
                                                ?> </a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Enter Bank Name:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php    if(!empty($data['step_bankname'])){
                                                echo $data['step_bankname'];
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Enter Account Number:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php    if(!empty($data['step_account'])){
                                                echo $data['step_account'];
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Enter Bank IFSC Code:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php    if(!empty($data['step_ifsc'])){
                                                echo $data['step_ifsc'];
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                       
                                       <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Enter Branch Code:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php    if(!empty($data['step_branch'])){
                                                echo $data['step_branch'];
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Enter City:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php    if(!empty($data['step_city'])){
                                                echo $data['step_city'];
                                                }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Upload Cancelled Check Photo/Passbook Front Side Photo:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php    if(!empty($data['step_check'])){ ?>
                                               <img src="https://jusmarktech.in/mpculturedept/public/uploads/<?php echo  $data['step_check'];?>" width="50">
                                               <?php  }else{
                                                   echo "Not Updated";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                  
                                </div>   
                         <?php  }?> 
                            </div>
                           
                           
                            <div class="col-xl-4">
                      <?php if($_GET['category']){ ?>
                                <!-- Side info -->
                                <div class="card mb-4">
                                    <form action="<?php echo base_url();?>home/category_edit_artists" method="post" enctype="multipart/form-data">
                           
                                    <div class="card-body">
                                        <a href="javascript:void(0)" class="btn btn-primary btn-round"> Categories</a> 
                                        <a href="javascript:void(0)" class="btn icon-btn btn-default md-btn-flat btn-round">
                                            <span class="ion ion-md-mail"></span>
                                        </a>
                                    </div>
                                     <input type="hidden" class="custom-select" name="id" id="id" value="<?php echo $artist->id; ?>">
                       
                                    <hr class="border-light m-0">
                                    <div class="card-body">
                                        <p class="mb-2">
                                             <label class="form-label">Category</label>
                                        <select class="form-control custom-select1" name="artist_category" id="artist_category" placeholder=""  >
                                        <option>--Select--</option>
                                        <?php 
                                        $qqq="SELECT * FROM `category` WHERE status='1'";
                                        $sql=$this->db->query($qqq);
                                        $dows=$sql->result_array();
                                        foreach($dows as $resq){
                                        
                                        ?>
                                        <option value="<?php echo $resq['id']; ?>" <?php if($artist->artist_category==$resq['id']){echo "Selected";}?>><?php echo $resq['category']; ?></option>
                                        <?php } ?>
                                        
                                        </select>
                                     </p>
                                        <p class="mb-2">
                                           <label class="form-label">Sub Category</label>
                                            <?php
                                            $idsa= $artist->artist_subcategory; 
                                            $querya = "SELECT  *FROM  subcategory where id='$idsa'";
                                            
                                            $sqla=$this->db->query($querya);
                                            $dowsa=$sqla->result_array();
                                            
                                            ?>
                                            <select class="custom-select" name="artist_subcategory" id="artist_subcategory">
                                            <?php if(!empty($artist->artist_subcategory)) { ?>
                                            <option value="<?php echo $dowsa[0]['id']; ?>"><?php echo $dowsa[0]['subcategory']; ?></option>
                                            <?php }else{?>
                                            <option value="">--Select--</option>
                                            <?php } ?>
                                            
                                            </select>
</p>
                                              <p class="mb-2">
                                           <label class="form-label">Sub Category Type</label>
                                            
                                        <?php  $idt= $artist->artist_subtype; 
                                        
                                        $queryab = "SELECT  *FROM  subcategory_type where id='$idt'";
                                        
                                        $sqla=$this->db->query($queryab);
                                        $dowsab=$sqla->result_array();
                                        ?>
                                        <select class="custom-select" name="artist_subtype" id="artist_subtype">
                                        
                                        <?php if(!empty($artist->artist_subtype)) { ?>
                                        <option value="<?php  echo $dowsab[0]['id'];  ?>"><?php  echo $dowsab[0]['sb_type'];  ?></option>
                                        <?php }else{?>
                                        <option value="">--Select--</option>
                                        <?php } ?>
                                        
                                        </select>
                                          
                                          </p>
                                       
                                    </div>
                                    <hr class="border-light m-0">
                                    
                                    <div class="card-body">
                                        <label>Social Media Link</label>
                                     
                                      <label class="form-label">Facebook</label>
                            <input name="facebook" id="facebook" class="form-control" value="<?php echo $artist->facebook; ?>">   
                                         <label class="form-label">Instagram</label>
                            <input name="instagram" id="instagram" class="form-control" value="<?php echo $artist->instagram; ?>">  
                   <label class="form-label">Twitter</label>
                            <input name="twitter" id="twitter" class="form-control" value="<?php echo $artist->twitter; ?>">    
                                        
                                         <label class="form-label">Linkedin</label>
                            <input name="linkedin" id="linkedin" class="form-control" value="<?php echo $artist->linkedin; ?>">       
                            
                                          <label class="form-label">Youtube</label>
                            <input name="youtube" id="youtube" class="form-control" value="<?php echo $artist->youtube; ?>">     
                                       
                                        <p class="mb-0" style="margin-left: 6px;">
                                        <label class="form-label">Website</label>
                                 <input name="website" id="website" class="form-control" value="<?php echo $artist->website; ?>">      
                                        </p>
                                    </div>
                                     <div class="form-row">
                            
                             <div class="form-group col-md-6">
                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                            <div class="clearfix"></div>
                            </div>
                        </div>
                        </form>
                                </div>
                                <!-- / Side info -->
                                  <?php  }else{?>
                         <div class="card mb-4">
                                    <div class="card-body">
                                        <a href="javascript:void(0)" class="btn btn-primary btn-round"> Categories</a> 
                                        <a style="float: right;" class="btn btn-primary btn-round" href="<?php echo base_url();?>home/artist_view/<?php echo $artist->id ?>?user&category=category">Edit</a>
                                        <a href="javascript:void(0)" class="btn icon-btn btn-default md-btn-flat btn-round">
                                          
                                        </a>
                                    </div>
                                    <hr class="border-light m-0">
                                    <div class="card-body">
                                        <p class="mb-2">
                                            <i class="ion ion-md-desktop ui-w-30 text-center text-lighter"></i> Category: 
                                            <?php if(!empty($artist->artist_category)){
                                            $ids= $artist->artist_category;
                                             $query = "SELECT  *FROM  category where id='$ids'";
                  
				   $sql=$this->db->query($query);
                    $dows=$sql->result_array();
                echo $dows[0]['category'];
                                            }else{
                                                echo "Not Selected";
                                            }
                                            ?></p>
                                        <p class="mb-2">
                                            <i class="ion ion-ios-navigate ui-w-30 text-center text-lighter"></i> Sub Category: 
                                            <?php  if(!empty($artist->artist_subcategory)){
                                            $idsa= $artist->artist_subcategory; 
                                            $querya = "SELECT  *FROM  subcategory where id='$idsa'";
                  
				   $sqla=$this->db->query($querya);
                    $dowsa=$sqla->result_array();
                echo $dowsa[0]['subcategory'];
                                            }else{
                                                echo "Not Selected";
                                            }
                                            ?></p>
                                              <p class="mb-2">
                                            <i class="ion ion-ios-navigate ui-w-30 text-center text-lighter"></i> Sub Category Type:  
                                            
                                            <?php 
                                            if(!empty($artist->artist_subtype)){
                                            $idt= $artist->artist_subtype; 
                                            
                  $queryab = "SELECT  *FROM  subcategory_type where id='$idt'";
                  
				   $sqla=$this->db->query($queryab);
                    $dowsab=$sqla->result_array();
                echo $dowsab[0]['sb_type'];
                                     }else{
                                                echo "Not Selected";
                                            }
                                            ?></p>
                                       
                                    </div>
                                    <hr class="border-light m-0">
                                    
                                    <div class="card-body">
                                        <label>Social Media Link</label>
                                     
                                        <a href="<?php echo $artist->facebook; ?>" class="d-block text-dark mb-2">
                                            <i class="ion ion-logo-facebook ui-w-30 text-center text-facebook"></i>
                                            <?php if(!empty($artist->facebook)) { ?>
                                           <?php  echo $artist->facebook; ?>
                                            <?php }else{
                                            echo "Not Updated";
                                            }?>
                                        </a>
                                        
                                        <a href="<?php echo $artist->instagram; ?>" class="d-block text-dark mb-0">
                                            <i class="ion ion-logo-instagram ui-w-30 text-center text-instagram"></i> 
                                             <?php if(!empty($artist->instagram)) { ?>
                                           <?php echo $artist->instagram; ?>
                                            <?php }else{
                                            echo "Not Updated";
                                            }?>
                                        </a>
                                           <a href="<?php echo $artist->twitter; ?>" class="d-block text-dark mb-2">
                                            <i class="ion ion-logo-twitter ui-w-30 text-center text-twitter"></i> 
                                             <?php if(!empty($artist->twitter)) { ?>
                                         <?php echo $artist->twitter; ?>
                                            <?php }else{
                                            echo "Not Updated";
                                            }?>
                                            
                                        </a>
                                        
                                         <a href="<?php echo $artist->linkedin; ?>" class="d-block text-dark mb-0">
                                            <i class="ion ion-logo-linkedin ui-w-30 text-center text-linkedin"></i>
                                             <?php if(!empty($artist->linkedin)) { ?>
                                           <?php echo $artist->linkedin; ?>
                                            <?php }else{
                                            echo "Not Updated";
                                            }?>
                                            
                                        </a>
                                         <a href="<?php echo $artist->youtube; ?>" class="d-block text-dark mb-0">
                                            <i class="ion ion-logo-youtube ui-w-30 text-center text-youtube"></i>
                                             <?php if(!empty($artist->youtube)) { ?>
                                          <?php echo $artist->youtube; ?>
                                            <?php }else{
                                            echo "Not Updated";
                                           
                                            }?>
                                            
                                            
                                        </a>
                                        
                                       
                                        <p class="mb-0" style="margin-left: 6px;">
                                        <img src="https://fontawesomeicons.com/images/svg/globe-outline.svg" width="20">
                                            <a href=" <?php echo $artist->website; ?>" class="text-dark"> Website:<u>
                                            
                                              <?php if(!empty($artist->website)) { 
                                           echo $artist->website;
                                             }else{
                                            echo "Not Updated";
                                            }?>
                                            
                                          </u> </a>
                                        </p>
                                    </div>
                                </div>
                                <?php } ?>
 <?php if($_GET['photo']){ ?>
                                <!-- Photos -->
                                <div class="card mb-4">
                                    <form action="<?php echo base_url();?>home/photoedit_artists" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="custom-select" name="id" id="id" value="<?php echo $artist->id; ?>">
                       
                                <div class="card-header with-elements">
                                <span class="card-header-title">Photos</span>
                                <div class="card-header-elements ml-2">
                                <small class="text-muted"></small>
                                </div>
                                <div class="card-header-elements ml-md-auto">
                                <a href="javascript:void(0)" class="btn btn-default md-btn-flat btn-xs">Show More</a>
                                </div>
                                </div>
                                 <label class="form-label">picture Photo</label>
                           <!--<input type="file" name="artist_perf_pich" id="artist_perf_pich" class="form-control" placeholder="sdf">
                           <div class="col"><img class="img-radius img-fluid wid-80" src="<?php echo base_url();?>assets/img/product/<?php echo $product->artist_perf_pich;?>" ></div>
                           <div class="clearfix"></div>
-->    
                        <?php if(!empty($artist->artist_perf_pich)){?>
                        <div class="input-group">
                        <input class="form-control"  type="file" id="upload-btn" name="artist" accept="image/*" multiple >
                        <div class="input-group-addon"> 
                        <a href="javascript:void(0)" class="btn btn-danger remove-1"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> <i class="fa fa-minus fa-fw"></i></a>
                        </div>
                        </div>
                        <?php } ?>
                          <div class="form-group fieldGroup">
                    	<div class="input-group">
                    	<input class="form-control"  type="file" id="upload-btn" name="artist_perf_pich[]" accept="image/*" multiple >
                    	<div class="input-group-addon"> 
                    	<a href="javascript:void(0)" class="btn btn-success addMore" style="margin-top: 10px;"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fa fa-plus fa-fw"></i></a>
                    	</div>
                    	</div>
                    	</div>
                    <!-- copy of input fields group -->
                    	<div class="form-group fieldGroupCopy" style="display: none;">
                    	<div class="input-group">
                    	<input class="form-control"  type="file" id="upload-btn" name="artist_perf_pich[]" accept="image/*" multiple >
                    	<div class="input-group-addon"> 
                    	<a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> <i class="fa fa-minus fa-fw"></i></a>
                    	</div>
                    	</div>
                    	</div>
                    	   <div class="form-row">
                           
                             <div class="form-group col-md-6">
                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                            <div class="clearfix"></div>
                            </div>
                        </div>
                        </form>
                                </div>
                                <!-- / Photos -->
 <?php  }else{?>
 <div class="card mb-4">
                                <div class="card-header with-elements">
                                <span class="card-header-title">Photos</span>
                                <div class="card-header-elements ml-2">
                                <small class="text-muted"></small>
                                </div>
                                <div class="card-header-elements ml-md-auto">
                                <a style="float: right;" class="btn btn-primary btn-round" href="<?php echo base_url();?>home/artist_view/<?php echo $artist->id ?>?user&photo=photo">Edit</a>
                                </div>
                                </div>
                                <div class="row no-gutters align-items-start pt-1 pl-1">
                                <?php  //if(!empty($artist->artist_perf_pich)){
                                $query="SELECT * FROM `artist_picture`where artist_id='$artist->id'";
                                //	$qury = mysqli_query($link,$sql);
                                //	while($resArry = mysqli_fetch_array($qury)){
                                $sql1=$this->db->query($query);
                                $dows1=$sql1->result_array();
                                foreach($dows1 as $rows){
                                ?>
                                <a href="javascript:void(0)" class="d-block col-3 col-sm-2 col-lg-3 pr-1 pb-1">
                                <span class="d-block ui-square ui-bg-cover" style="background-image: url('http://jusmarktech.in/mpculturedept/public/uploads/<?php echo $rows['img']; ?>');"></span>
                                <img src="">
                                </a>
                                <?php } ?>
                                
                                
                                </div>
                                </div>
 <?php  } ?>
                            </div>
                        </div>

                    </div>
                  
                </div>
                <!-- [ Layout content ] Start -->
<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
   
$(document).ready(function(){
    //group add limit
    var maxGroup = 20;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});

$(document).ready(function(){
    //group add limit
    var maxGroupOth = 20;
    
    //add more fields group
    $(".addMoreA").click(function(){
        if($('body').find('.fieldGroupA').length < maxGroupOth){
            var fieldHTML = '<div class="form-group fieldGroupA">'+$(".fieldGroupCopyA").html()+'</div>';
            $('body').find('.fieldGroupA:last').after(fieldHTML);
        }else{

            alert('Maximum '+maxGroupOth+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".removeA",function(){ 
        $(this).parents(".fieldGroupA").remove();
    });
});

/*--------------------------- */
$(document).ready(function(){
    //group add limit
    var maxGroupB = 20;
    
    //add more fields group
    $(".addMoreB").click(function(){
        if($('body').find('.fieldGroupB').length < maxGroupB){
            var fieldHTML = '<div class="form-group fieldGroupB">'+$(".fieldGroupCopyB").html()+'</div>';
            $('body').find('.fieldGroupB:last').after(fieldHTML);
        }else{

            alert('Maximum '+maxGroupB+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".removeB",function(){ 
        $(this).parents(".fieldGroupB").remove();
    });
});
/*--------------------------- */
$(document).ready(function(){
    //group add limit
    var maxGroupC = 20;
    
    //add more fields group
    $(".addMoreC").click(function(){
        if($('body').find('.fieldGroupC').length < maxGroupC){
            var fieldHTML = '<div class="form-group fieldGroupC">'+$(".fieldGroupCopyC").html()+'</div>';
            $('body').find('.fieldGroupC:last').after(fieldHTML);
        }else{

            alert('Maximum '+maxGroupC+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".removeC",function(){ 
        $(this).parents(".fieldGroupC").remove();
    });
});

/*--------------------------- */
$(document).ready(function(){
    //group add limit
    var maxGroupD = 20;
    
    //add more fields group
    $(".addMoreD").click(function(){
        if($('body').find('.fieldGroupD').length < maxGroupD){
            var fieldHTML = '<div class="form-group fieldGroupD">'+$(".fieldGroupCopyD").html()+'</div>';
            $('body').find('.fieldGroupD:last').after(fieldHTML);
        }else{

            alert('Maximum '+maxGroupD+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".removeD",function(){ 
        $(this).parents(".fieldGroupD").remove();
    });
});
</script>
<script>
    $(document).ready(function() {
        $('#artist_category').on('change', function() {
            var c = this.value;
            $.ajax({
                url: "<?php echo base_url();?>/home/category_find",
                type: "POST",
                data: {
                    c: c
                },
                cache: false,
                success: function(result){
                    $("#artist_subcategory").html(result);
                }
            });
        });
    });
     $(document).ready(function() {
        $('#artist_subcategory').on('change', function() {
            var sc = this.value;
            $.ajax({
                url: "<?php echo base_url();?>/home/sub_category_find",
                type: "POST",
                data: {
                    sc: sc
                },
                cache: false,
                success: function(result){
                    $("#artist_subtype").html(result);
                }
            });
        });
    });
    </script>
<?php include("footer.php");?>