            <div class="main-panel">

                <div class="content d-flex justify-content-center align-items-center">

                    <div class="page-inner py-3">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="card">

                                    <div class="card-header">

										<div class="d-flex align-items-center justify-content-center">

											<h4 class="card-title"><i class="mr-2 fas fa-gears"></i><b>WEBSITE SETTINGS</b></h4>
                                            
										</div>

									</div>

                                    <form action="/home/settings_update/" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="SettingID" value="<?php echo $settings ?>">

                                        <div class="card-body">

                                            <div class="row clearfix">
                                                
                                                <div class="col-md-12">

                                                    <div class="form-group">

                                                        <input class="form-control" type="text" name="title" id="title_input" placeholder="www.kitsumyuzu.store.id" maxlength="15" required>

                                                    </div>

                                                </div>

                                                <div class="col-md-12">

                                                    <div class="form-group">

                                                        <input class="form-control" type="file" name="favicon" id="favicon_input" accept=".ico">

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="card-footer d-flex justify-content-center">

                                            <button type="submit" class="btn btn-success btn-rounded btn-md"><i class="fas fa-check mr-2"></i>Submit</button>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>