            <div class="main-panel">

                <div class="content">

                    <div class="page-inner py-3">

                        <div class="row">

                            <div class="col-md-4">

                                <div class="card card-profile">

                                    <div class="card-header" style="background-position: center; background-image: url('<?= base_url('assets') ?>/images/default-background.png')">
                                
                                        <div class="profile-picture">

                                            <div class="avatar avatar-xl">

                                                <img id="image_preview" src="<?= base_url('assets/images/'.($userData -> profile ? $userData -> profile : 'default.png')) ?>" alt="..." class="avatar-img rounded-circle">

                                            </div>

                                        </div>

                                    </div>

                                    <div class="card-body">

                                        <div class="user-profile text-center">

                                            <div class="name"><?php echo ucwords($userData -> first_name ? $userData -> first_name . " " . ucwords($userData -> last_name) : 'anonymous') ?></div>
                                            <div class="job"><?php echo ucwords($userData -> job ? $userData -> job : 'Jobless') ?></div>
                                            <div class="desc"><?php echo $userData -> description ? $userData -> description : 'no description' ?></div>

                                        </div>

                                    </div>

                                </div>

                                <a href="/user/">
                                    <button class="btn btn-lg btn-rounded btn-secondary col-12"><i class="fas fa-circle-left mr-2"></i>Back</button>
                                </a>

                            </div>

                            <div class="col-md-8">

                                <div class="card">

                                    <div class="card-header">

										<div class="d-flex align-items-center">

											<h4 class="card-title"><i class="mr-2 fas fa-archive"></i><b>UPDATE</b></h4>
                                            <ul class="breadcrumbs">

                                                <li class="nav-home">

                                                    <a href="/home/dashboard/" class="fas fa-home"></a>

                                                </li>

                                                <li class="separator">

                                                    <i class="fas fa-caret-right"></i>

                                                </li>

													<li class="nav-item">

														<a href="/user/">user</a>

													</li>

                                                <li class="separator">

                                                    <i class="fas fa-caret-right"></i>

                                                </li>

													<li class="nav-item">

														<a>edit_user</a>

													</li>

                                            </ul>

										</div>

									</div>

                                    <form action="/user/update_user/" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="UserID" value="<?php echo $userData -> id_user ?>">
                                        <input type="hidden" name="PenggunaID" value="<?php echo $userData -> _user ?>">
                                        <input type="hidden" name="UserProfile" value="<?php echo $userData -> profile ?>">

                                        <div class="card-body">

                                            <div class="row clearfix">

                                                <!-- Username input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="username_input" class="col-md-2 col-form-label">Username <span style="color: #ff0000"> *</span></label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="text" name="username" id="username_input" value="<?php echo $userData -> username ?>" placeholder="Username" required maxlength="32">

                                                        </div>

                                                    </div>

                                                <!-- End Username input -->

                                                <!-- E-mail input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="email_input" class="col-md-2 col-form-label">E-mail <span style="color: #ff0000"> *</span></label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="email" name="email" id="email_input" value="<?php echo $userData -> email ?>" placeholder="example@root.com" required maxlength="52">

                                                        </div>

                                                    </div>

                                                <!-- End E-mail input -->

                                                <?php if (in_array(session() -> get('level'), [1])) { ?>
                                                    
                                                    <!-- Level input -->

                                                        <div class="form-group form-inline col-md-12">

                                                            <label for="level_input" class="col-md-2 col-form-label">Level <span style="color: #ff0000"> *</span></label>

                                                            <div class="col-md-10 p-0">

                                                                <select class="form-control input-full" name="level" id="level_input" required>

                                                                    <option disabled selected>Select Level</option>
                                                                    <?php foreach ($levelData as $data) { ?>

                                                                        <option value="<?php echo $data -> id_level ?>" <?php echo ($userData -> level == $data -> id_level) ? 'selected' : '' ?>><?php echo ucwords($data -> nama_level) ?></option>

                                                                    <?php } ?>

                                                                </select>

                                                            </div>

                                                        </div>

                                                    <!-- End Level input -->

                                                <?php } ?>

                                                <!-- First Name input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="first_name_input" class="col-md-2 col-form-label">First Name <span style="color: #ff0000"> *</span></label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="text" name="first_name" id="first_name_input" value="<?php echo $userData -> first_name ?>" placeholder="First Name" required maxlength="20">

                                                        </div>

                                                    </div>

                                                <!-- End First Name input -->

                                                <!-- Last Name input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="last_name_input" class="col-md-2 col-form-label">Last Name</label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="text" name="last_name" id="last_name_input" value="<?php echo $userData -> last_name ?>" placeholder="Last Name" maxlength="80">

                                                        </div>

                                                    </div>

                                                <!-- End Last Name input -->

                                                <!-- Gender input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="gender_input" class="col-md-2 col-form-label">Gender</label>

                                                        <div class="col-md-10 p-0">

                                                            <select class="form-control input-full" name="gender" id="gender_input">

                                                                <option disabled selected>Select Gender</option>
                                                                <option value="perempuan" <?php echo ($userData -> gender == 'perempuan') ? 'selected' : '' ?>>Perempuan</option>
                                                                <option value="laki-laki" <?php echo ($userData -> gender == 'laki-laki') ? 'selected' : '' ?>>Laki-Laki</option>

                                                            </select>

                                                        </div>

                                                    </div>

                                                <!-- End Gender input -->

                                                <!-- Birthdate input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="birth_date_input" class="col-md-2 col-form-label">Birthdate</label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="date" name="birth_date" id="birth_date_input" value="<?php echo $userData -> birth_date ?>">

                                                        </div>

                                                    </div>

                                                <!-- End Birthdate input -->

                                                <!-- Birthpalce input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="birth_place_input" class="col-md-2 col-form-label">Birthplace</label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="text" name="birth_place" id="birth_place_input" value="<?php echo $userData -> birth_place ?>" placeholder="Birthplace" maxlength="225">

                                                        </div>

                                                    </div>

                                                <!-- End Birthpalce input -->

                                                <!-- Phone Number input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="phone_number_input" class="col-md-2 col-form-label">Phone Number</label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="text" name="phone_number" id="phone_number_input" value="<?php echo substr($userData -> phone_number, 4) ?>" placeholder="8XX-XXXX-XXXX" pattern="8[0-9]{2}-[0-9]{4}-[0-9]{4,5}" maxlength="16">

                                                        </div>

                                                    </div>

                                                <!-- End Phone Number input -->
                                                
                                                <!-- Address input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="address_input" class="col-md-2 col-form-label">Address </label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="text" name="address" id="address_input" value="<?php echo $userData -> address ?>" placeholder="Address" maxlength="225">

                                                        </div>

                                                    </div>

                                                <!-- End Address input -->

                                                <!-- Job input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="job_input" class="col-md-2 col-form-label">Job </label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="text" name="job" id="job_input" value="<?php echo $userData -> job ?>" placeholder="Job" maxlength="225">

                                                        </div>

                                                    </div>

                                                <!-- End Job input -->

                                                <!-- Description input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="description_input" class="col-md-2 col-form-label">Description </label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="text" name="description" id="description_input" value="<?php echo $userData -> description ?>" placeholder="Description" maxlength="225">

                                                        </div>

                                                    </div>

                                                <!-- End Description input -->

                                                <!-- Profile input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="profile_input" class="col-md-2 col-form-label">Profile </label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="file" name="profile" id="profile_input" value="<?php echo ($userData -> profile ? $userData -> profile : 'default.png') ?>" accept=".png, .jpeg, .svg, .jpg, .webp">

                                                        </div>

                                                    </div>

                                                <!-- End Profile input -->

                                            </div>

                                        </div>

                                        <div class="card-footer d-flex justify-content-center">

                                            <button type="submit" class="btn btn-success btn-rounded mr-2"><i class="fas fa-check mr-2"></i> Submit</button>
                                            <button type="reset" class="btn btn-danger btn-rounded"><i class="fas fa-rotate mr-2"></i>Reset</button>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>