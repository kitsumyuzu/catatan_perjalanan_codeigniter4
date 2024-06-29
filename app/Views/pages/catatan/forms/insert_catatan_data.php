            <div class="main-panel">

                <div class="content">

                    <div class="page-inner py-3">

                        <div class="row">

                            <div class="col-md-4">

                                <div class="card">
                                    
                                    <div class="card-body p-3 text-center">

                                        <div class="h1 m-0">
                                            <i class="fas fa-check-to-slot fa-xl" style="color: green;"></i>
                                        </div>

                                        <div class="text-muted mt-3">Input data perjalanan sesuai dengan catatan perjalanan yang telah dilakukan.</div>
                                        
                                    </div>

                                </div>

                                <div class="card">
                                    
                                    <div class="card-body p-3 text-center">

                                        <div class="h1 m-0">
                                            <i class="fas fa-check-to-slot fa-xl" style="color: green;"></i>
                                        </div>

                                        <div class="text-muted mt-3">Input travel data according to travel records that have been made.</div>
                                        
                                    </div>

                                </div>

                                <div class="card">
                                    
                                    <div class="card-body p-3 text-center">

                                        <div class="h1 m-0">
                                            <i class="fas fa-check-to-slot fa-xl" style="color: green;"></i>
                                        </div>

                                        <div class="text-muted mt-3">これまでに作成された旅行記録に基づいて旅行データを入力します。</div>
                                        
                                    </div>

                                </div>

                                <a href="/catatan/">
    
                                    <button class="btn btn-lg btn-rounded btn-secondary col-12"><i class="fas fa-circle-left mr-2"></i>Back</button>
    
                                </a>

                            </div>

                            <div class="col-md-8">

                                <div class="card">

                                    <div class="card-header">

										<div class="d-flex align-items-center">

											<h4 class="card-title"><i class="mr-2 fas fa-archive"></i><b>INSERT</b></h4>
                                            <ul class="breadcrumbs">

                                                <li class="nav-home">

                                                    <a href="/home/dashboard/" class="fas fa-home"></a>

                                                </li>

                                                <li class="separator">

                                                    <i class="fas fa-caret-right"></i>

                                                </li>

													<li class="nav-item">

														<a href="/catatan/">catatan</a>

													</li>

                                                <li class="separator">

                                                    <i class="fas fa-caret-right"></i>

                                                </li>

													<li class="nav-item">

														<a>insert_catatan</a>

													</li>

                                            </ul>

										</div>

									</div>

                                    <form action="/catatan/insert_catatan/" method="post" enctype="multipart/form-data">

                                        <div class="card-body">

                                            <div class="row clearfix">

                                                <!-- Birthdate input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="date_input" class="col-md-2 col-form-label">Date</label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="date" name="date" id="date_input" required>

                                                        </div>

                                                    </div>

                                                <!-- End Birthdate input -->

                                                <!-- Birthpalce input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="time_input" class="col-md-2 col-form-label">Time</label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="time" name="time" id="time_input" required>

                                                        </div>

                                                    </div>

                                                <!-- End Birthpalce input -->
                                                
                                                <!-- Address input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="location_input" class="col-md-2 col-form-label">Location</label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="text" name="location" id="location_input" placeholder="Location" maxlength="225" required>

                                                        </div>

                                                    </div>

                                                <!-- End Address input -->

                                                <!-- Job input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="temp_input" class="col-md-2 col-form-label">Temperature</label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="text" name="temp" id="temp_input" placeholder="30.0⁰" required>

                                                        </div>

                                                    </div>

                                                <!-- End Job input -->

                                                <!-- Description input -->

                                                    <div class="form-group form-inline col-md-12">

                                                        <label for="vehicle_input" class="col-md-2 col-form-label">Vehicle </label>

                                                        <div class="col-md-10 p-0">

                                                            <input class="form-control input-full" type="text" name="vehicle" id="vehicle_input" placeholder="Vehicle" maxlength="225" required>

                                                        </div>

                                                    </div>

                                                <!-- End Description input -->

                                                <!-- Level input -->

                                                    <?php if (in_array(session() -> get('level'), [1])) { ?>

                                                        <div class="form-group form-inline col-md-12">

                                                            <label for="pengguna_input" class="col-md-2 col-form-label">Nickname</label>

                                                            <div class="col-md-10 p-0">

                                                                <select class="form-control input-full" name="pengguna" id="pengguna_input" required>

                                                                    <option disabled selected>Select Person</option>
                                                                    <?php foreach ($penggunaData as $data) { ?>

                                                                        <option value="<?php echo $data -> _user ?>"><?php echo ucwords($data -> first_name . " " . $data -> last_name) ?></option>

                                                                    <?php } ?>

                                                                </select>

                                                            </div>

                                                        </div>

                                                    <?php } ?>

                                                <!-- End Level input -->

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