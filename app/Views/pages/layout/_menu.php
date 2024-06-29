            <div class="sidebar sidebar-style-2" data-background-color="dark2">

				<div class="sidebar-wrapper scrollbar scrollbar-inner">

					<div class="sidebar-content">

						<ul class="nav nav-primary">

							<li class="nav-item active">

								<a href="<?= base_url('/home/dashboard') ?>">

									<i class="fas fa-home"></i>
									<p>Dashboard</p>
									
								</a>

							</li>

							<?php if (in_array(session() -> get('level'), [1])) { ?>

								<li class="nav-item">
									
									<a href="/user/">

										<i class="fas fa-user"></i>
										<p>User Data</p>

									</a>

								</li>

								<li class="nav-item">

									<a href="/catatan/">

										<i class="fa fa-book-atlas"></i>
										<p>Catatan Perjalanan</p>

									</a>
									
								</li>

								<li class="nav-item">

									<a href="/home/activity_logs">

										<i class="fa fa-note-sticky"></i>
										<p>Activity Logs</p>

									</a>
									
								</li>

								<li class="nav-item">

									<a href="/home/settings">

										<i class="fa fa-gear"></i>
										<p>Settings</p>

									</a>
									
								</li>

							<?php } else if (in_array(session() -> get('level'), [2])) { ?>

								<li class="nav-item">

									<a href="/catatan/">

										<i class="fa fa-book-atlas"></i>
										<p>Catatan Perjalanan</p>

									</a>
									
								</li>
							
							<?php } ?>
								
						</ul>

					</div>

				</div>

			</div>