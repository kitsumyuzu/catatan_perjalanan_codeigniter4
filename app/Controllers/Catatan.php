<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schema;

class Catatan extends BaseController {

    // ====================================================================================================================================================== // - Index

        public function index() {

            if (session() -> get('id') == NULL) {

                return redirect() -> to('/home/');

            } else if (session() -> get('id') > 0) {

                $Schema = new Schema();

					// Fetching data
				
                    $on = 'catatan.nickname = pengguna._user';

                    $setting['setting'] = $Schema -> getWhere('settings', array('id_setting' => '1'));
					$data['user'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));
                    $_fetch['catatan'] = $Schema -> visual_table_join2('catatan', 'pengguna', $on);

                echo view('pages/layout/_header', $setting);
                echo view('pages/layout/_navbar', $data);
                echo view('pages/layout/_menu');
                echo view('pages/catatan/catatan_data', $_fetch);
                echo view('pages/layout/_footer');

            }

        }

    // ====================================================================================================================================================== // - Insert, Update, Delete

        public function view_insert_catatan() {

            if (session() -> get('id') > 0) {

                $Schema = new Schema();

                    // Fetching data

                    $setting['setting'] = $Schema -> getWhere('settings', array('id_setting' => '1'));
                	$profile['user'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));
                    $_fetch['penggunaData'] = $Schema -> visual_table('pengguna');

                echo view('pages/layout/_header', $setting);
                echo view('pages/layout/_navbar', $profile);
                echo view('pages/layout/_menu');
                echo view('pages/catatan/forms/insert_catatan_data', $_fetch);
                echo view('pages/layout/_footer');

            } else {

                return redirect() -> to('/user/'); // Redirect to user pages

            }

        }

        public function insert_catatan() {

            if (session() -> get('id') > 0) {

                $Schema = new Schema();

                // Catatan Data Collection

                    $date = $this -> request -> getPost('date');
                    $time = $this -> request -> getPost('time');
                    $location = $this -> request -> getPost('location');
                    $temp = $this -> request -> getPost('temp');
                    $vehicle = $this -> request -> getPost('vehicle');
                    $nickname = $this -> request -> getPost('pengguna');

                // Convert data into an array and insert to database table

                    if (in_array(session() -> get('level'), [1])) {

                        $catatanData = array(
                            'date' => $date,
                            'time' => $time,
                            'location' => $location,
                            'temp' => $temp,
                            'vehicle' => $vehicle,
                            'nickname' => $nickname
                        );

                        $Schema -> add_data('catatan', $catatanData);

                    } else if (in_array(session() -> get('level'), [2])) {

                        $catatanData = array(
                            'date' => $date,
                            'time' => $time,
                            'location' => $location,
                            'temp' => $temp,
                            'vehicle' => $vehicle,
                            'nickname' => session() -> get('id')
                        );

                        $Schema -> add_data('catatan', $catatanData);

                    } else {

                        return redirect() -> to('/catatan/'); // Redirect to catatan pages

                    }

                return redirect() -> to('/catatan/'); // Redirect to catatan pages

            }

        }

        public function view_edit_catatan($_id) {

            if (session() -> get('id') > 0) {

                $Schema = new Schema();

                    // Fetching data

                    $setting['setting'] = $Schema -> getWhere('settings', array('id_setting' => '1'));
                	$profile['user'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));
                    $_fetch['catatanData'] = $Schema -> getWhere('catatan', array('id_catatan' => $_id));
                    $_fetch['penggunaData'] = $Schema -> visual_table('pengguna');

                echo view('pages/layout/_header', $setting);
                echo view('pages/layout/_navbar', $profile);
                echo view('pages/layout/_menu');
                echo view('pages/catatan/forms/edit_catatan_data', $_fetch);
                echo view('pages/layout/_footer');

            } else {

                return redirect() -> to('/user/'); // Redirect to user pages

            }

        }

        public function edit_catatan() {

            if (session() -> get('id') > 0) {

                $Schema = new Schema();

                // Catatan Data Collection

                    $date = $this -> request -> getPost('date');
                    $time = $this -> request -> getPost('time');
                    $location = $this -> request -> getPost('location');
                    $temp = $this -> request -> getPost('temp');
                    $vehicle = $this -> request -> getPost('vehicle');
                    $nickname = $this -> request -> getPost('pengguna');
                    $catatanid = $this -> request -> getPost('CatatanID');

                // Convert data into an array and insert to database table

                    if (in_array(session() -> get('level'), [1])) {

                        $catatanData = array(
                            'date' => $date,
                            'time' => $time,
                            'location' => $location,
                            'temp' => $temp,
                            'vehicle' => $vehicle,
                            'nickname' => $nickname
                        );

                        $Schema -> edit_data('catatan', $catatanData, array('id_catatan' => $catatanid));

                    } else if (in_array(session() -> get('level'), [2])) {

                        $catatanData = array(
                            'date' => $date,
                            'time' => $time,
                            'location' => $location,
                            'temp' => $temp,
                            'vehicle' => $vehicle,
                        );

                        $Schema -> edit_data('catatan', $catatanData, array('id_catatan' => $catatanid));

                    } else {

                        return redirect() -> to('/catatan/'); // Redirect to catatan pages

                    }

                return redirect() -> to('/catatan/'); // Redirect to catatan pages

            }

        }

        public function delete_catatan($_id) {

            if (session() -> get('id') > 0) {

                $Schema = new Schema();

                    // Delete data from database

                    $Schema -> delete_data('catatan', array('id_catatan' => $_id));

                return redirect() -> to('/catatan/'); // Redirect to catatan pages
                
            } else {

                return redirect() -> to('/catatan/'); // Redirect to catatan pages

            }


        }

}