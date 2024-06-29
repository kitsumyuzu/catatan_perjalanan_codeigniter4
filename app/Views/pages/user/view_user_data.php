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

														<a>view_more_user_data</a>

													</li>

                                            </ul>

										</div>

									</div>

                                    <div class="card-body">

                                        <div class="table-responsive">

                                            <table class="table table-striped table-hover table-bordered-bg-light mt-4">

                                                <thead>

                                                    <tr style="text-align: center;">

                                                        <th>Gender</th>
                                                        <th>Birhdate & place</th>
                                                        <th>Phon Number</th>
                                                        <th>Address</th>

                                                    </tr>

                                                </thead>

                                                <tbody>
                                                    
                                                    <tr style="text-align: center;">

                                                        <?php $birth_date = new DateTime($userData -> birth_date) ?>
                                                    
                                                        <td><?php echo ucwords($userData -> gender ? $userData -> gender : '-') ?></td>
                                                        <td><?php echo ucwords($userData -> birth_place ? $userData -> birth_place . ", " . $birth_date -> format('d M Y') : '-') ?></td>
                                                        <td><?php echo ($userData -> phone_number ? $userData -> phone_number : '-') ?></td>
                                                        <td><?php echo ucwords($userData -> address) ?></td>

                                                    </tr>
                                                    
                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>