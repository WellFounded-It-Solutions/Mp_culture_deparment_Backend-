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
                        <h4 class="font-weight-bold py-3 mb-0">Program Details</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item">Users</li>
                                <li class="breadcrumb-item active">Programs</li>
                            </ol>
                        </div>
 
                        <!-- Header --
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-auto col-sm-12">
                                     
                                      <?php if(!empty($artist->artist_photo)) {?>
                                         <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $artist->artist_photo; ?>" alt class="d-block ui-w-100 rounded-circle mb-3" width="80">
                                  <?php }else{ ?>
                                   <img src="https://icon-library.com/images/na_moon-512.png" alt class="d-block ui-w-100 rounded-circle mb-3" width="80">
                                   <?php }?>
                                    </div>
                                    <div class="col">
                                        <h4 class="font-weight-bold mb-4">Name:<?php echo $artist->artist_name; ?> <a style="float: right;" class="btn btn-primary btn-round" href="">For official use</a></h4>
                                    <!--    <div class="text-muted mb-4">
                                        Descrption
                                        </div>--
                        
                                        <a href="javascript:void(0)" class="d-inline-block text-dark">
                                           <!-- <strong>234</strong>--
                                            <span class="text-muted">Mobile No.<?php if(!empty($artist->artist_mobile)){
                                            echo $artist->artist_mobile; 
                                            }else{
                                            echo "N/A";
                                            }?></span>
                                        </a>
                                        <br>
                                         <a href="javascript:void(0)" class="d-inline-block text-dark">
                                           <!-- <strong>234</strong>--
                                            <span class="text-muted"> Email ID:<?php  if(!empty($artist->artist_email)){
                                            echo $artist->artist_email; 
                                            }else{
                                            echo "N/A";
                                            }
                                            ?></span>
                                        </a>
                                      <!--  <a href="javascript:void(0)" class="d-inline-block text-dark ml-3">
                                            <strong>111</strong>
                                            <span class="text-muted">following</span>
                                        </a>--
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
                                        <lable>Program Details</lable>
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
                                        <lable>Program Details</lable> <a style="float: right;" class="btn btn-primary btn-round" href="<?php echo base_url();?>home/editprogram/<?php echo $artist->id ?>?user&per=per">Edit</a>
                                        <hr>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Program Name:</div>
                                            <div class="col-md-9">
                                               <?php if(!empty($artist->program_name)){
                                               echo $artist->program_name;
                                               }else{
                                            echo "N/A";
                                            }
                                               ?>
                                            </div>
                                        </div>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Category:</div>
                                            <div class="col-md-9">
                                               <?php 
                                               if(!empty($artist->program_category)){
                                               echo $artist->program_category;
                                               }else{
                                            echo "N/A";
                                            }
                                               ?>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Program Type:</div>
                                            <div class="col-md-9">
                                               <?php    if(!empty($artist->program_type)){
                                               echo $artist->program_type;
                                                }else{
                                            echo "N/A";
                                            }
                                            ?>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Live Link:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php 
                                                 if(!empty($artist->program_link)){
                                                echo $artist->program_link;
                                                 }else{
                                            echo "N/A";
                                            }
                                                ?></a>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Starting Date:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                    <?php    if(!empty($artist->starting_date)){
                                                    echo $artist->starting_date;
                                                      }else{
                                            echo "N/A";
                                            }
                                            ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">End Date:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                  if(!empty($artist->end_date)){
                                                echo $artist->end_date;
                                                 }else{
                                            echo "N/A";
                                            }
                                            ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Starting Time:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                if(!empty($artist->starting_time)){
                                                echo $artist->starting_time;
                                                }else{
                                            echo "N/A";
                                            }
                                                ?></a>
                                            </div>
                                        </div>
                                          <div class="row mb-2">
                                            <div class="col-md-3 text-muted">End Time:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                  if(!empty($artist->end_time)){
                                                echo $artist->end_time; 
                                                  }else{
                                            echo "N/A";
                                            }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Entry Type:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                 if(!empty($artist->entry_type)){
                                                echo $artist->entry_type;
                                                 }else{
                                            echo "N/A";
                                            }
                                                ?></a>
                                            </div>
                                        </div>
                                     
                                      <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Chief Guest:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark"><?php 
                                                 if(!empty($artist->chief_guest)){
                                                echo $artist->chief_guest;
                                                 }else{
                                            echo "N/A";
                                            }
                                                ?></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                  
                                </div>
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
                        <lable>Address Details</lable>
                        <hr>
                        
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Venue:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->venu)){
                        echo $artist->venu;
                        }else{
                        echo "N/A";
                        }
                        ?></a>
                        </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Address:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->address)){
                        echo $artist->address; 
                        }else{
                        echo "N/A";
                        }
                        ?></a>
                        </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">State:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark">
                        <?php  if(!empty($artist->state)){
                        echo $artist->state;
                        }else{
                        echo "N/A";
                        }
                        ?></a>
                        </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">District:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->district)){
                        echo $artist->district;
                        }else{
                        echo "N/A";
                        }
                        ?></a>
                        </div>
                        </div>
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">City:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->city)){
                        echo $artist->city; 
                        }else{
                        echo "N/A";
                        }
                        ?></a>
                        </div>
                        </div>
                        
                        <div class="row mb-2">
                        <div class="col-md-3 text-muted">Pin Code:</div>
                        <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-dark"><?php 
                        if(!empty($artist->pincode)){
                        echo $artist->pincode; 
                        }else{
                        echo "N/A";
                        }
                        ?></a>
                        </div>
                        </div>
                        
                        
                        </div>
                        
                        </div>
                        <?php } ?>
                      
                         
                         <!------------------------------------------->
                          <!-- Posts -->
                          <?php   $p_id=$artist->id;
                        $query = "SELECT  *FROM  programlist where progId='$p_id'";
                  
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
                        <?php  }else{ ?>
                        <div class="card mb-4">
                          
<table id="report-table" class="table table-striped table-hover">
<thead>
<tr>
<th>SNO.</th>

<th>Artist Name</th>
<th>Category</th>
<th>Date and Time</th>
<th>Description</th>


</tr>
</thead>
<tbody>
<?php 
$i=1;
foreach($artistArray as $cust)
{
?>
<tr>
<td><?php echo $i;?></td>

<td><a href="#<?php echo base_url();?>"><?php echo $cust['artist_name'];?></a>

</td>
<td><?php echo $cust['artist_category'];?></td>
<td><?php echo $cust['artist_datetime'];?></td>
<td><?php echo $cust['artist_description'];?></td>



</tr>
<?php $i++; } ?>


</tbody>
</table>

                                   <!----
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                <img src="https://jusmarktech.in/Culture/public/uploads/<?php echo $data['step_pancord'];?>" width="50">
                                               <?php  }else{
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
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
                                                   echo "N/A";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Upload Cancelled Check Photo/Passbook Front Side Photo:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">
                                                <?php    if(!empty($data['step_check'])){ ?>
                                               <img src="https://jusmarktech.in/Culture/public/uploads/<?php echo  $data['step_check'];?>" width="50">
                                               <?php  }else{
                                                   echo "N/A";
                                               }
                                                ?></a>
                                            </div>
                                        </div>
                                       
                                    </div>-->
                                  
                                </div>   
                         <?php  }?> 
                            </div>
                           
                           
                            <div class="col-xl-4">
                      <?php /*if($_GET['category']){ ?>
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
                                            echo "N/A";
                                            }?>
                                        </a>
                                        
                                        <a href="<?php echo $artist->instagram; ?>" class="d-block text-dark mb-0">
                                            <i class="ion ion-logo-instagram ui-w-30 text-center text-instagram"></i> 
                                             <?php if(!empty($artist->instagram)) { ?>
                                           <?php echo $artist->instagram; ?>
                                            <?php }else{
                                            echo "N/A";
                                            }?>
                                        </a>
                                           <a href="<?php echo $artist->twitter; ?>" class="d-block text-dark mb-2">
                                            <i class="ion ion-logo-twitter ui-w-30 text-center text-twitter"></i> 
                                             <?php if(!empty($artist->twitter)) { ?>
                                         <?php echo $artist->twitter; ?>
                                            <?php }else{
                                            echo "N/A";
                                            }?>
                                            
                                        </a>
                                        
                                         <a href="<?php echo $artist->linkedin; ?>" class="d-block text-dark mb-0">
                                            <i class="ion ion-logo-linkedin ui-w-30 text-center text-linkedin"></i>
                                             <?php if(!empty($artist->linkedin)) { ?>
                                           <?php echo $artist->linkedin; ?>
                                            <?php }else{
                                            echo "N/A";
                                            }?>
                                            
                                        </a>
                                         <a href="<?php echo $artist->youtube; ?>" class="d-block text-dark mb-0">
                                            <i class="ion ion-logo-youtube ui-w-30 text-center text-youtube"></i>
                                             <?php if(!empty($artist->youtube)) { ?>
                                          <?php echo $artist->youtube; ?>
                                            <?php }else{
                                            echo "N/A";
                                           
                                            }?>
                                            
                                            
                                        </a>
                                        
                                       
                                        <p class="mb-0" style="margin-left: 6px;">
                                        <img src="https://fontawesomeicons.com/images/svg/globe-outline.svg" width="20">
                                            <a href=" <?php echo $artist->website; ?>" class="text-dark"> Website:<u>
                                            
                                              <?php if(!empty($artist->website)) { 
                                           echo $artist->website;
                                             }else{
                                            echo "N/A";
                                            }?>
                                            
                                          </u> </a>
                                        </p>
                                    </div>
                                </div>
                                <?php }*/ ?>
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
                               <!-- <div class="card-header-elements ml-md-auto">
                                <a style="float: right;" class="btn btn-primary btn-round" href="<?php echo base_url();?>home/artist_view/<?php echo $artist->id ?>?user&photo=photo">Edit</a>
                                </div>-->
                                </div>
                                <div class="row no-gutters align-items-start pt-1 pl-1">
                               
                              
                                <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $artist->profile_img1; ?>" width="100">
                              <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $artist->profile_img2; ?>" width="100">
                                <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $artist->profile_img3; ?>" width="100">
                                  <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $artist->profile_img4; ?>" width="100">
                               
                                
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