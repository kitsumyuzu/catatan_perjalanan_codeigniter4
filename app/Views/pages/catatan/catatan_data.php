           <div class="main-panel">

                <div class="content">

                    <div class="page-inner py-3">

                        <div class="row d-flex justify-content-center">

                            <div class="col-md-12">

                                <div class="card">

                                    <div class="card-header">

										<div class="d-flex align-items-center">

											<h4 class="card-title"><i class="mr-2 fas fa-archive"></i><b>DATABASE</b></h4>
                                            <ul class="breadcrumbs">

                                                <li class="nav-home">

                                                    <a href="<?= base_url('/home/dashboard') ?>" class="fas fa-home"></a>

                                                </li>

                                                <li class="separator">

                                                    <i class="fas fa-caret-right"></i>

                                                </li>

													<li class="nav-item">

														<a>catatan</a>

													</li>

                                            </ul>

                                            <a href="/catatan/view_insert_catatan/" class="ml-auto">

                                                <button class="btn btn-md btn-rounded btn-success"><i class="fas fa-feather mr-2"></i>Wrote</button>

                                            </a>

										</div>

									</div>

                                    <div class="card-body">

                                        <div class="table-responsive">

                                            <table id="limit-data-10" class="table table-striped table-hover table-bordered-bg-light mt-4" style="overflow: scroll;">

                                                <thead>

                                                    <tr style="text-align: center;">

                                                        <th>#</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Location</th>
                                                        <th>Temp</th>
                                                        <th>Vehicle</th>
                                                        <th>Nickname</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>

                                                </thead>

                                                <tbody>

                                                    <?php

                                                        $no = 1; 
                                                        
                                                        foreach ($catatan as $data) { 
                                                            
                                                            $date = new DateTime($data -> date);

                                                            if (in_array(session() -> get('level'), [1])) {
                                                            
                                                    ?>

                                                        <tr style="text-align: center;">

                                                            <td width="10%"><?php echo $no++ ?></td>
                                                            <td width="20%"><?php echo $data -> date ? $date -> format('d M Y') : '-' ?></td>
                                                            <td width="20%"><?php echo $data -> time ?></td>
                                                            <td width="25%"><?php echo ucwords($data -> location) ?></td>
                                                            <td width="10%"><?php echo $data -> temp ?>⁰</td>
                                                            <td><?php echo ucwords($data -> vehicle) ?></td>
                                                            <td><?php echo ucwords($data -> first_name . " " . $data -> last_name) ?></td>

                                                            <td width="20%">

                                                                    <a href="<?= base_url('/catatan/view_edit_catatan/'.$data -> id_catatan) ?>">

                                                                        <button type="button" data-toggle="tooltip" class="btn btn-link btn-primary btn-sm" data-original-title="Edit Data"><i class="fas fa-file-pen fa-xl"></i></button>

                                                                    </a>

                                                                    <a href="<?= base_url('/catatan/delete_catatan/'.$data -> id_catatan) ?>">

                                                                        <button type="button" data-toggle="tooltip" class="btn btn-link btn-danger btn-sm" data-original-title="Delete Data"><i class="fas fa-trash-can fa-xl"></i></button>

                                                                    </a>

                                                                </td>
                                                            
                                                        </tr>

                                                    <?php 

                                                            } else if (in_array(session() -> get('level'), [2])) {

                                                                if ($data -> nickname == session() -> get('id')) {

                                                    ?>

                                                        <tr style="text-align: center;">

                                                            <td width="10%"><?php echo $no++ ?></td>
                                                            <td width="20%"><?php echo $data -> date ? $date -> format('d M Y') : '-' ?></td>
                                                            <td width="20%"><?php echo $data -> time ?></td>
                                                            <td width="25%"><?php echo ucwords($data -> location) ?></td>
                                                            <td width="10%"><?php echo $data -> temp ?>⁰</td>
                                                            <td><?php echo ucwords($data -> vehicle) ?></td>
                                                            <td><?php echo ucwords($data -> first_name . " " . $data -> last_name) ?></td>

                                                            <td width="20%">
                                                                
                                                                <a href="<?= base_url('/catatan/view_edit_catatan/'.$data -> id_catatan) ?>">

                                                                    <button type="button" data-toggle="tooltip" class="btn btn-link btn-primary btn-sm" data-original-title="Edit Data"><i class="fas fa-file-pen fa-xl"></i></button>

                                                                </a>

                                                                <a href="<?= base_url('/catatan/delete_catatan/'.$data -> id_catatan) ?>">

                                                                    <button type="button" data-toggle="tooltip" class="btn btn-link btn-danger btn-sm" data-original-title="Delete Data"><i class="fas fa-trash-can fa-xl"></i></button>

                                                                </a>

                                                            </td>
                                                            
                                                        </tr>

                                                    <?php

                                                                }

                                                            }
                                                    
                                                        } 
                                                    
                                                    ?>

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>