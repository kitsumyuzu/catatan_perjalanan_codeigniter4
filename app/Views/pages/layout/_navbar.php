    <div class="wrapper">

        <div class="main-header">

			<!-- Logo Header -->

                <div class="logo-header" data-background-color="dark2">

					<a href="<?= base_url('/home/dashboard') ?>" class="logo">

						<p class="navbar-brand" alt="navbar brand" style="color: #fff;"><b><i class="fas fa-compass mr-3" style="color: yellow;"></i><?php echo strtoupper($setting -> app_name) ?></b></p>

					</a>

                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon">

                            <i class="fas fa-bars"></i>

                        </span>

                    </button>

                    <button class="topbar-toggler more">
                        
                        <i class="fa fa-gears"></i>
                    
                    </button>

                </div>

			<!-- End Logo Header -->

			<!-- Navbar Header -->

				<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
					
					<div class="container-fluid">
						
						<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

							<!-- Account -->
							
								<li class="nav-item dropdown hidden-caret">

									<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">

										<div class="avatar-sm">

											<img src="<?php echo base_url('assets/images/'.($user -> profile ? $user -> profile : 'default.png')) ?>" alt="..." class="avatar-img rounded-circle">

										</div>

									</a>

									<ul class="dropdown-menu dropdown-user animated fadeIn">

										<div class="dropdown-user-scroll scrollbar-outer">

											<li>

												<div class="user-box">

													<div class="avatar-lg">

														<img src="<?php echo base_url('assets/images/'.($user -> profile ? $user -> profile : 'default.png')) ?>" alt="image profile" class="avatar-img rounded-circle">

													</div>

													<div class="u-text">

														<?php if (in_array(session() -> get('level'), [1])) { ?>

															<h4><i class="fas fa-hammer mr-2"></i><?php echo ucwords(session() -> username) ?></h4>

														<?php } else if (in_array(session() -> get('level'), [2])) { ?>

															<h4><?php echo ucwords(session() -> username) ?></h4>
															
														<?php } ?>

														<p class="text-muted"><?php echo session() -> email ?></p>
														<a href="<?= base_url('/user/view_edit_user/'.session() -> get('id')) ?>" class="btn btn-xs btn-secondary btn-sm">View Profile</a>

													</div>

												</div>

											</li>

											<li>

												<div class="dropdown-divider"></div>

													<a class="dropdown-item" href="<?= base_url('/home/logout') ?>">

														<i class="col-2 fas fa-power-off" style="color: red;"></i>Logout

													</a>

											</li>

										</div>

									</ul>

								</li>

							<!-- End Account -->
							
						</ul>

					</div>

				</nav>

			<!-- End Navbar -->

		</div>