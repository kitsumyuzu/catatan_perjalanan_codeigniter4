<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schema;

class User extends BaseController {

	// ====================================================================================================================================================== // - Index

        public function index() {

            if (session() -> get('id') == NULL) {

                return redirect() -> to('/home/');

            } else if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

                $Schema = new Schema();

					// Fetching data
					
                    $on = 'user.level = level.id_level';

                    $setting['setting'] = $Schema -> getWhere('settings', array('id_setting' => '1'));
					$profile['user'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));
                    $_fetch['userData'] = $Schema -> visual_table_join2('user', 'level', $on);

                echo view('pages/layout/_header', $setting);
                echo view('pages/layout/_navbar', $profile);
                echo view('pages/layout/_menu');
                echo view('pages/user/user_data', $_fetch);
                echo view('pages/layout/_footer');

            } else {

                return redirect() -> to('/home/');
                
            }

        }

        public function view_more_user_info($_id) {

            if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

                $Schema = new Schema();

                    // Fetching data

                    $on = 'pengguna._user = user.id_user';

                    $setting['setting'] = $Schema -> getWhere('settings', array('id_setting' => '1'));
                	$profile['user'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));
                    $_fetch['userData'] = $Schema -> getWhere_table_join_2('user', 'pengguna', $on, array('id_user' => $_id));
                    $_fetch['levelData'] = $Schema -> visual_table('level');

                echo view('pages/layout/_header', $setting);
                echo view('pages/layout/_navbar', $profile);
                echo view('pages/layout/_menu');
                echo view('pages/user/view_user_data', $_fetch);
                echo view('pages/layout/_footer');

            } else {

                return redirect() -> to('/user/'); // Redirect to user pages

            }

        }

    // ====================================================================================================================================================== // - Insert, Update, Delete

        public function view_insert_user() {

            if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

                $Schema = new Schema();

                    // Fetching data

                    $setting['setting'] = $Schema -> getWhere('settings', array('id_setting' => '1'));
                	$profile['user'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));
                    $_fetch['levelData'] = $Schema -> visual_table('level');

                echo view('pages/layout/_header', $setting);
                echo view('pages/layout/_navbar', $profile);
                echo view('pages/layout/_menu');
                echo view('pages/user/forms/insert_user_data', $_fetch);
                echo view('pages/layout/_footer');

            } else {

                return redirect() -> to('/user/'); // Redirect to user pages

            }

        }

        public function insert_user() {

            if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

                $Schema = new Schema();

                // User Data collection

                    $username = $this -> request -> getPost('username');
                    $email = $this -> request -> getPost('email');
                    $password = $this -> request -> getPost('password');
                    $level = $this -> request -> getPost('level');
                    $profile = $this -> request -> getFile('profile');

                // Pengguna Data Collection

                    $firstname = $this -> request -> getPost('first_name');
                    $lastname = $this -> request -> getPost('last_name');
                    $gender = $this -> request -> getPost('gender');
                    $birthdate = $this -> request -> getPost('birth_date');
                    $birthplace = $this -> request -> getPost('birth_place');
                    $phonenumber = $this -> request -> getPost('phone_number');
                    $address = $this -> request -> getPost('address');
                    $job = $this -> request -> getPost('job');
                    $description = $this -> request -> getPost('description');

                // Image validate

                    if ($profile && $profile -> isValid() && ! $profile -> hasMoved()) {

                        if ($profile == 'default.png' || NULL) {

                            $images = $profile -> getRandomName();
                            $profile -> move('assets/images/', $images);

                        } else {

                            $images = $profile -> getRandomName();
                            $profile -> move('assets/images/', $images);

                        }

                    } else {

                        $images = 'default.png';

                    }

                // Convert data into an array and insert to database table

                    $userData = array(
                        'username' => $username,
                        'email' => $email,
                        'password' => md5($password),
                        'level' => $level,
                        'profile' => $images
                    );

                    // Add data into databases

                        if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

                            $Schema -> add_data('user', $userData);

                        } else {

                            return redirect() -> to('/user/'); // Redirect to user pages

                        }

                        $where = $Schema -> getWhere2('user', array('username' => $username));
                        $id = $where['id_user'];

                // Convert data into an array and insert to databse table

                    $penggunaData = array(
                        'first_name' => $firstname,
                        'last_name' => $lastname,
                        'gender' => $gender,
                        'birth_date' => $birthdate,
                        'birth_place' => $birthplace,
                        'phone_number' => '+62 ' . $phonenumber,
                        'address' => $address,
                        'job' => $job,
                        'description' => $description,
                        '_user' => $id
                    );

                    // Add data into databases

                        if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

                            $Schema -> add_data('pengguna', $penggunaData);

                        } else {

                            return redirect() -> to('/user/'); // Redirect to user pages

                        }

                    return redirect() -> to('/user/'); // Redirect to user pages

            } else {

                return redirect() -> to('/user/');

            }

        }

        public function view_edit_user($_id) {

            if (session() -> get('id') > 0) {

                $Schema = new Schema();

                    // Fetching data

                    $on = 'pengguna._user = user.id_user';

                    $setting['setting'] = $Schema -> getWhere('settings', array('id_setting' => '1'));
                	$profile['user'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));
                    $_fetch['userData'] = $Schema -> getWhere_table_join_2('user', 'pengguna', $on, array('id_user' => $_id));
                    $_fetch['levelData'] = $Schema -> visual_table('level');

                echo view('pages/layout/_header', $setting);
                echo view('pages/layout/_navbar', $profile);
                echo view('pages/layout/_menu');
                echo view('pages/user/forms/edit_user_data', $_fetch);
                echo view('pages/layout/_footer');

            } else {

                return redirect() -> to('/user/'); // Redirect to user pages

            }

        }

        public function update_user() {

            $Schema = new Schema();

                // User Data collection

                    $username = $this -> request -> getPost('username');
                    $email = $this -> request -> getPost('email');
                    $level = $this -> request -> getPost('level');
                    $profile = $this -> request -> getFile('profile');
                    $userid = $this -> request -> getPost('UserID');
                    $userprofile = $this -> request -> getPost('UserProfile');

                // Pengguna Data Collection

                    $firstname = $this -> request -> getPost('first_name');
                    $lastname = $this -> request -> getPost('last_name');
                    $gender = $this -> request -> getPost('gender');
                    $birthdate = $this -> request -> getPost('birth_date');
                    $birthplace = $this -> request -> getPost('birth_place');
                    $phonenumber = $this -> request -> getPost('phone_number');
                    $address = $this -> request -> getPost('address');
                    $job = $this -> request -> getPost('job');
                    $description = $this -> request -> getPost('description');
                    $penggunaid = $this -> request -> getPost('PenggunaID');

                // Image validate

                    if ($profile && $profile -> isValid() && ! $profile -> hasMoved()) {

                        if ($userprofile == 'default.png' || NULL) {

                            $images = $profile -> getRandomName();
                            $profile -> move('assets/images/', $images);

                        } else {

                            if (file_exists('assets/images/'.$profile)) {

                                unlink('assets/images/'.$userprofile);

                            } else {

                                $images = $profile -> getRandomName();
                                $profile -> move('assets/images/', $images);

                            }

                        }

                    } else {

                        if ($userprofile == 'default.png' || NULL) {

                            $images = 'default.png';

                        } else {

                            $images = $userprofile;

                        }

                    }

                // Convert data into an array and insert to database table

                    // Add data into databases

                        if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

                            $userData = array(
                                'username' => $username,
                                'email' => $email,
                                'level' => $level,
                                'profile' => $images
                            );

                            $Schema -> edit_data('user', $userData, array('id_user' => $userid));

                        } else if (in_array(session() -> get('level'), [2]) && session() -> get('id') > 0) {

                            $userData = array(
                                'username' => $username,
                                'email' => $email,
                                'profile' => $images
                            );

                            $Schema -> edit_data('user', $userData, array('id_user' => $userid));

                        } else {

                            return redirect() -> to('/user/'); // Redirect to user pages

                        }

                // Convert data into an array and insert to databse table

                    $penggunaData = array(
                        'first_name' => $firstname,
                        'last_name' => $lastname,
                        'gender' => $gender,
                        'birth_date' => $birthdate,
                        'birth_place' => $birthplace,
                        'phone_number' => '+62 ' . $phonenumber,
                        'address' => $address,
                        'job' => $job,
                        'description' => $description,
                    );

                    // Add data into databases

                        if (in_array(session() -> get('level'), [1, 2]) && session() -> get('id') > 0) {

                            $Schema -> edit_data('pengguna', $penggunaData, array('_user' => $penggunaid));

                        } else {

                            return redirect() -> to('/user/'); // Redirect to user pages

                        }

                    return redirect() -> to('/user/'); // Redirect to user pages

        }

        public function delete_user($_id) {

            if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

                $Schema = new Schema();

                    // Delete data from database

                        $Schema -> delete_data('user', array('id_user' => $_id));
                        $Schema -> delete_data('pengguna', array('_user' => $_id));

                return redirect() -> to('/user/'); // Reidrect to user pages

            } else {

                return redirect() -> to('/user/'); // Redirect to user pages

            }

        }

}