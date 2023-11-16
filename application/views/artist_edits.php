<?php include("header.php");?>
<div class="layout-content">
   <div class="container-fluid flex-grow-1 container-p-y">
      <h4 class="font-weight-bold py-3 mb-0">Edit Artist</h4>
      <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Artist Profile</a></li>
            <li class="breadcrumb-item"><a href="#">Edit Artist</a></li>
         </ol>
      </div>
      <?php
     // print_r($artist);
      //foreach($artist as $rows) ?>
      <div id="accordion2">
         <div class="card mb-2">
            <div class="card-header">
               <a class="d-flex justify-content-between text-dark" data-toggle="collapse" aria-expanded="true" href="#accordion2-1">
                  Personal Details
                  <div class="collapse-icon"></div>
               </a>
            </div>
            <div id="accordion2-1" class="collapse hidden" data-parent="#accordion2">
               <div class="card-body">
                  <form action="<?php echo base_url();?>home/edit_artists" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="id" class="form-control" value="<?php echo $artist->id;?>">
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label class="form-label">Artist Name </label>
                           <input  type="text" class="custom-select" name="artist_name" value="<?php echo $artist->artist_name; ?>">
                             
                           <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label">Mobile Number</label>
                           <input type="number" class="custom-select" name="artist_mobile" value="<?php echo $artist->artist_mobile; ?>">
                              
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-4">
                           <label class="form-label">Email ID</label>
                           <input type="email" name="artist_email" class="form-control" placeholder=" " value="<?php echo $artist->artist_email; ?>">
                           <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-4">
                           <label class="form-label">Profile Photo</label>
                           <input type="file" name="artist_photo" id="artist_photo" class="form-control" placeholder="">
                           <input type="hidden" name="artist_photoold" id="artist_photoold" class="form-control" value="<?php echo $artist->artist_photo;?>">
                           <div class="col"><img class="img-radius img-fluid wid-80" src="http://jusmarktech.in/Culture/public/uploads/<?php echo $artist->artist_photo;?>"></div>
                          
                           <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-4">
                           <label class="form-label">Gender</label>
                           <select class="custom-select" name="artist_gender" id="artist_gender">
                              <option value="Male" <?php if($artist->artist_gender=='Male'){ echo "selected";} ?>>Male</option>
                              <option value="Female" <?php if($artist->artist_gender=='Female'){ echo "selected";} ?>>Female</option>
                              <option value="Other" <?php if($artist->artist_gender=='Other'){ echo "selected";} ?>>Other</option>
                           </select>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="clearfix"><br/></div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-4">
                           <label class="form-label">Fathers Name</label>
                           <input type="text" class="custom-select" name="artist_father" id="artist_father" value="<?php echo $artist->artist_father;?>">
                              
                           <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-4">
                           <label class="form-label">Birth Date</label>
                           <input type="date" class="custom-select" name="artist_dob" value="<?php echo $artist->artist_dob;?>">
                              
                           <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-4">
                           <label class="form-label">Age</label>
                           <input type="number" name="artist_age" id="artist_age" class="form-control" value="<?php echo $artist->artist_age;?>" >
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="clearfix"><br/></div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-4">
                           <label class="form-label">Work Experience in Years</label>
                           <input type="number" name="artist_expriance" id="artist_expriance" class="form-control" maxlength="100" value="<?php echo $artist->artist_expriance;?>">
                           <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-4">
                           <label class="form-label">Education Qualification</label>
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
            
            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-4">
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
                        </div>
                     </div>
                    
                    
               </div>
            </div>
         </div>
         <div class="card mb-2">
                <div class="card-header">
                <a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-2">About<div class="collapse-icon"></div></a>
                </div>
                <div id="accordion2-2" class="collapse hidden" data-parent="#accordion2">
                <div class="card-body">
                    <div class="form-row">
                            <div class="form-group col-md-12">
                            <label class="form-label">About</label>
                            <textarea name="abouts" id="abouts" class="form-control"><?php echo $artist->abouts;?></textarea>               
                            <div class="clearfix"></div>
                            </div>
                    </div>
               </div>
              </div>
         </div>

         <div class="card mb-2">
         <div class="card-header">
         <a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-3">Address Details<div class="collapse-icon"></div></a>
         </div>
         <div id="accordion2-3" class="collapse hidden" data-parent="#accordion2">
         <div class="card-body">
         <div class="form-row">
         <div class="form-group col-md-6">
         <label class="form-label">Country</label>
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

         <div class="clearfix"></div>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">State</label>
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
            <div class="clearfix"></div>
         </div>

         <div class="form-group col-md-6">
         <label class="form-label">District</label>
         <select class="form-control" name="artist_distric" placeholder="">
               <option value="">--Select-- </option>
               <option <?php if($artist->artist_distric=='Bhopal'){ echo "selected";} ?>>Bhopal</option>

		       <option <?php if($artist->artist_distric=='Indore'){ echo "selected";} ?>>Indore</option>
		       <option <?php if($artist->artist_distric=='Gwalior'){ echo "selected";} ?>>Gwalior</option>
		       <option <?php if($artist->artist_distric=='Sehore'){ echo "selected";} ?>>Sehore</option>
		       <option <?php if($artist->artist_distric=='Itarsi'){ echo "selected";} ?>>Itarsi</option>
		       <option <?php if($artist->artist_distric=='Alirajpur'){ echo "selected";} ?>>Alirajpur</option>
		       <option <?php if($artist->artist_distric=='Anuppur'){ echo "selected";} ?>>Anuppur</option>

               </select>
         <div class="clearfix"></div>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Village/City</label>
            <textarea class="custom-select" name="artist_city" id="artist_city"><?php echo $artist->artist_city; ?></textarea>
           
            <div class="clearfix"></div>
         </div>

         <div class="form-group col-md-6">
         <label class="form-label">Pin Code</label>
         <input type="text" name="artist_pincode" id="artist_pincode" class="form-control" placeholder="pin code" value="<?php echo $artist->artist_pincode;?>" maxlength="10">
         <div class="clearfix"></div>
         </div>
         <div class="form-group col-md-6">
            <label class="form-label">Address</label>
            <textarea class="custom-select" name="artist_address" id="artist_address"><?php echo $artist->artist_address; ?></textarea>
           
            <div class="clearfix"></div>
         </div>
         </div>
         
       
         </div>
         </div>
         </div>
      

         <div class="card mb-2">
         <div class="card-header">
         <a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-A">Category Detail<div class="collapse-icon"></div></a>
         </div>
         <div id="accordion2-A" class="collapse hidden" data-parent="#accordion2">
         <div class="card-body">
         <div class="form-row">
         <div class="form-group col-md-4">
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
                            <div class="clearfix"></div>
         </div>
         <div class="form-group col-md-4">
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
            <div class="clearfix"></div>
         </div>

         <div class="form-group col-md-4">
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
                           
                           <div class="clearfix"></div>
         </div>
         
         </div>
         </div>
         </div>
         </div>


         <div class="card mb-2">
         <div class="card-header">
         <a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-8">Artist Grade<div class="collapse-icon"></div></a>
         </div>
         <div id="accordion2-8" class="collapse hidden" data-parent="#accordion2">
         <div class="card-body">
         <label class="form-label"><u>Doordarshan Details</u></label><br>
         <div class="form-row">
         
         <div class="form-group col-md-6">
         <label class="form-label">Grade</label>
            <select class="form-control custom-select1" name="artist_grade2" placeholder="" id="myDropdown">

            <option value="">Choose Grade</option>

            <option value="A+" <?php if($artist->artist_grade2=='A+'){ echo "selected";} ?>>A+</option>

            <option value="A" <?php if($artist->artist_grade2=='A'){ echo "selected";} ?>>A</option>

            <option value="B+" <?php if($artist->artist_grade2=='B+'){ echo "selected";} ?>>B+</option>

            <option value="B" <?php if($artist->artist_grade2=='B'){ echo "selected";} ?>>B</option>

            <option value="C+" <?php if($artist->artist_grade2=='C+'){ echo "selected";} ?>>C+</option>

            <option value="C" <?php if($artist->artist_grade2=='C'){ echo "selected";} ?>>C</option>

            </select>
<div class="clearfix"></div>
         </div>
         <div class="form-group col-md-6">
         <label class="form-label">Certificate</label>
         <input type="file" class="custom-select" name="artist_grade3" id="artist_grade3">
          <input type="hidden" class="custom-select" name="artist_grade3old" id="artist_grade3old" value="<?php echo $artist->artist_grade3; ?>">
          
         <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $artist->artist_grade3; ?>" width="50">
         <div class="clearfix"></div>
         </div>
         </div>
         <div class="form-row">
         <div class="clearfix"><br/></div>
         </div>
         <label class="form-label"><u>Aakashvani Details</u></label>
         <br>
         <div class="form-row">
         
         <div class="form-group col-md-6">
         <label class="form-label">Grade</label>
         <select class="form-control custom-select1" name="akash_grade" placeholder="">

                <option value="">Choose Grade</option>

                <option <?php if($artist->akash_grade=='A+'){ echo "selected";} ?>>A+</option>

                <option <?php if($artist->akash_grade=='A'){ echo "selected";} ?>>A</option>

                <option <?php if($artist->akash_grade=='B+'){ echo "selected";} ?>>B+</option>

                <option <?php if($artist->akash_grade=='B'){ echo "selected";} ?>>B</option>

                <option <?php if($artist->akash_grade=='C+'){ echo "selected";} ?>>C+</option>

                <option <?php if($artist->akash_grade=='C'){ echo "selected";} ?>>C</option>

             </select>
         <div class="clearfix"></div>
         </div>
         <div class="form-group col-md-6">
         <label class="form-label">Certificate</label>
         <input type="file" class="custom-select" name="akash_grade_file" id="akash_grade_file">
          <input type="hidden" class="custom-select" name="akash_grade_fileold" id="akash_grade_fileold" value="<?php echo $artist->akash_grade_file; ?>">
           <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $artist->akash_grade_file; ?>" width="50">
         <div class="clearfix"></div>
         </div>
         </div>
         <label class="form-label"><u>ICCR Details</u></label><br>
         <div class="form-row">
        
         <div class="form-group col-md-6">
         <label class="form-label">Grade</label>
                    <select class="form-control custom-select1" name="iccr_grade" placeholder="">

                    <option value="">Choose Grade</option>

                    <option <?php if($artist->iccr_grade=='A+'){ echo "selected";} ?>>A+</option>

                    <option <?php if($artist->iccr_grade=='A'){ echo "selected";} ?>>A</option>

                    <option <?php if($artist->iccr_grade=='B+'){ echo "selected";} ?>>B+</option>

                    <option <?php if($artist->iccr_grade=='B'){ echo "selected";} ?>>B</option>

                    <option <?php if($artist->iccr_grade=='C+'){ echo "selected";} ?>>C+</option>

                    <option <?php if($artist->iccr_grade=='C'){ echo "selected";} ?>>C</option>

                    </select>
         <div class="clearfix"></div>
         </div>
         <div class="form-group col-md-6">
         <label class="form-label">Certificate</label>
         <input type="file" class="custom-select" name="iccr_files" id="iccr_files">
          <input type="hidden" class="custom-select" name="iccr_filesold" id="iccr_filesold" value="<?php echo $artist->iccr_files; ?>">
         <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $artist->iccr_files; ?>" width="50">
         <div class="clearfix"></div>
         </div>
         </div>
         <label class="form-label"><u>Other Details </u></label>  <br>
         <div class="form-row">
        <!---
         <div class="form-group col-md-6">
         <label class="form-label">Grade</label>
         <input type="text" name="artist_other" id="artist_other" class="form-control" placeholder="" value="<?php echo $product->incentive;?>" maxlength="10">
         <div class="clearfix"></div>
         </div>
         <div class="form-group col-md-6">
         <label class="form-label">Award/Certificate Name</label>
         <input type=text class="custom-select" name="artist_other_certificate" id="artist_other_certificate">
         
         <div class="clearfix"></div>
         </div>--->
         
         <div class="form-group fieldGroupA">
	<div class="input-group">
    <label class="form-label">Grade</label>
	<input class="form-control"  type="text" id="upload-btn" name="artist_other" value="<?php echo $artist->artist_other; ?>">
    <label class="form-label">Award/Certificate Name</label>
    <input class="form-control"  type="file" id="upload-btn" name="artist_other_certificate">
	<input type="hidden" class="custom-select" name="artist_other_certificateold" id="artist_other_certificateold" value="<?php echo $artist->artist_other_certificate; ?>">
         <img src="http://jusmarktech.in/Culture/public/uploads/<?php echo $artist->artist_other_certificate; ?>" width="50">
    <div class="input-group-addon"> 
	<a href="javascript:void(0)" class="btn btn-success addMoreA" style="margin-top: 10px;"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fa fa-plus fa-fw"></i></a>
	</div>
	</div>
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
         </div>
         </div>

         <div class="card mb-2">
                <div class="card-header">
                <a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-2A">Social Media And Website<div class="collapse-icon"></div></a>
                </div>
                <div id="accordion2-2A" class="collapse hidden" data-parent="#accordion2">
                <div class="card-body">
                    <div class="form-row">
                            <div class="form-group col-md-4">
                            <label class="form-label">Facebook</label>
                            <input name="facebook" id="facebook" class="form-control" value="<?php echo $artist->facebook; ?>">          
                            <div class="clearfix"></div>
                            </div>

                            <div class="form-group col-md-4">
                            <label class="form-label">Instagram</label>
                            <input name="instagram" id="instagram" class="form-control" value="<?php echo $artist->instagram; ?>">          
                            <div class="clearfix"></div>
                            </div>

                            <div class="form-group col-md-4">
                            <label class="form-label">Twitter</label>
                            <input name="twitter" id="twitter" class="form-control" value="<?php echo $artist->twitter; ?>">          
                            <div class="clearfix"></div>
                            </div>

                            <div class="form-group col-md-4">
                            <label class="form-label">Linkedin</label>
                            <input name="linkedin" id="linkedin" class="form-control" value="<?php echo $artist->linkedin; ?>">          
                            <div class="clearfix"></div>
                            </div>

                            <div class="form-group col-md-4">
                            <label class="form-label">Youtube</label>
                            <input name="youtube" id="youtube" class="form-control" value="<?php echo $artist->youtube; ?>">          
                            <div class="clearfix"></div>
                            </div>
                            <div class="form-group col-md-4">
                            <label class="form-label">Website</label>
                            <input name="website" id="website" class="form-control" value="<?php echo $artist->website; ?>">          
                            <div class="clearfix"></div>
                            </div>

                    </div>
               </div>
              </div>
         </div>

         <div class="card mb-2">
         <div class="card-header">
         <a class="collapsed d-flex justify-content-between text-dark" data-toggle="collapse" href="#accordion2-4">Question Details<div class="collapse-icon"></div></a>
         </div>
         <div id="accordion2-4" class="collapse hidden" data-parent="#accordion2">
         <div class="card-body">
            <label>1) Have you participated in any program organised by M.P Culture Department ?</label>
         <div class="form-row">
              <!--  <div class="form-group col-md-6">
                <label class="form-label">Program</label>
                <input type="text" name="artist_program" id="artist_program" class="form-control" placeholder="" value="<?php echo $product->size;?>" maxlength="100">
                <div class="clearfix"></div>
                </div>
                <div class="form-group col-md-6">
                <label class="form-label">Year</label>
                <input type="text" name="artist_year" id="artist_year" class="form-control" placeholder="artist_year" value="<?php echo $product->series;?>" maxlength="100">
                <div class="clearfix"></div>
                </div>-->
                   
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
    
        <label>2) Have you received any Award/Certificate from M.P Culture Department</label>
         <div class="form-row">
         <!---<div class="form-group col-md-6">
         <label class="form-label">Awards Name </label>
         <input type="text" name="artist_award" id="artist_award" class="form-control" placeholder="artist_award" value="<?php echo $product->quality;?>" maxlength="100">
         <div class="clearfix"></div>
         </div>
         <div class="form-group col-md-6">
         <label class="form-label">Year</label>
         <input type="text" name="artist_year1" id="artist_year1" class="form-control" placeholder="artist_year1" value="<?php echo $product->color;?>" maxlength="100">
         <div class="clearfix"></div>
         </div>-->
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
        
        
         <label>3) Have you received any Award/Certificate from any Private or Other Government Department</label>
        
         <div class="form-row">
       <!---  <div class="form-group col-md-4">
         <label class="form-label">Company/Dept. Name</label>
         <input type="text" name="artist_company" id="artist_company" class="form-control" placeholder="artist_company" value="<?php echo $product->make;?>" maxlength="100">
         <div class="clearfix"></div>
         </div>
         <div class="form-group col-md-4">
         <label class="form-label">Award/Certificate Name</label>
         <input type="text" name="artist_aword1" id="artist_aword1" class="form-control" placeholder="artist_aword1" value="<?php echo $product->make;?>" maxlength="100">
         <div class="clearfix"></div>
         </div>
         <div class="form-group col-md-4">
         <label class="form-label">Year</label>
         <input type="text" name="artist_year2" id="artist_year2" class="form-control" placeholder="artist_year2" value="<?php echo $product->model;?>" maxlength="100">
         <div class="clearfix"></div>
         </div>-->
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
         <input type="text" name="artist_company01" id="artist_company" class="form-control" placeholder="artist_company" value="" maxlength="100">
         

   <label class="form-label">Award/Certificate Name</label>
         <input type="text" name="artist_aword11" id="artist_aword1" class="form-control" placeholder="artist_aword1" value="" maxlength="100">
         
    <label class="form-label">Year</label>
	<input class="form-control"  type="text" id="upload-btn" name="artist_year22[]" accept="image/*" multiple >
	
        <div class="input-group-addon"> 
        <a href="javascript:void(0)" class="btn btn-danger removeD"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> <i class="fa fa-minus fa-fw"></i></a>
        </div>
	</div>  
 </div>
         </div>

         
      
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
</div>
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