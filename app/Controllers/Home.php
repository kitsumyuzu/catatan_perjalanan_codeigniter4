<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schema;

class Home extends BaseController {

	// ====================================================================================================================================================== // - Index

		public function index() {

			if (session() -> get('id') == NULL) {

				return view('pages/login');

			} else if (session() -> get('id') > 0) {

				return redirect() -> to('/home/dashboard');

			}

		}
		
	// ====================================================================================================================================================== // - Login function
	

		public function authentication_login() {

			$Schema = new Schema();

				$username = $this -> request -> getPost('username_input');
				$password = $this -> request -> getPost('password_input');

			$data = array(	
				'username' => $username,
				'password' => md5($password)
			);

				$session = $Schema -> getWhere2('user', $data);

			if ($session > 0) {

				session() -> set('id', $session['id_user']);
				session() -> set('username', $session['username']);
				session() -> set('email', $session['email']);
				session() -> set('profile', $session['profile']);
				session() -> set('level', $session['level']);

				return redirect() -> to('/home/dashboard'); // Redirect to dashboard pages

			} else {

				return redirect() -> to('/home/'); // Redirect to home function

			}

		}

		public function reset_password($id) {

			if (in_array(session() -> get('level'), [1])) {

				$Schema = new Schema();

					$where = array('id_user' => $id);
					$new_password = array('password' => md5('yohumiru'));
					
					$Schema -> edit_data('user', $new_password, $where);

				return redirect()->to('/home/user'); // Redirect to user pages

			} else {
				
				return redirect()->to('/home/'); // Redirect to home function

			}

		}

		public function logout() {

			session() -> destroy(); // Destroy a valid session

			return redirect() -> to('/home/'); // Redirect to home function

		}

	// ====================================================================================================================================================== // - Main pages
	
		public function dashboard() {

			if (session() -> get('id') > 0) {

				$Schema = new Schema();

					// Fetching data
					
					$setting['setting'] = $Schema -> getWhere('settings', array('id_setting' => '1'));
					$profile['user'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));
					
				echo view('pages/layout/_header', $setting);
				echo view('pages/layout/_navbar', $profile);
				echo view('pages/layout/_menu');
				echo view('pages/dashboard');
				echo view('pages/layout/_footer');

			} else {

				return redirect() -> to('/home/'); // Redirect to home function

			}

		}

	// ====================================================================================================================================================== // - Settings

		public function settings() {

			if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				$Schema = new Schema();

					// Fetching data

					$setting['setting'] = $Schema -> getWhere('settings', array('id_setting' => '1'));
					$profile['user'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));

				echo view('pages/layout/_header', $setting);
				echo view('pages/layout/_navbar', $profile);
				echo view('pages/layout/_menu');
				echo view('pages/settings');
				echo view('pages/layout/_footer');

			} else {

				return redirect() -> to('/home/');

			}

		}

		public function settings_update() {

			if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				$Schema = new Schema();

				// Data collection

					$title = $this -> request -> getPost('title');
					$favicon = $this -> request -> getFile('favicon');

				// Image validate

					if ($favicon && $favicon -> isValid() && ! $favicon -> hasMoved()) {

						if ($favicon -> getName() != 'favicon.ico') {

							$images = 'favicon.ico';
							
							$existingFilePath = 'assets/icon/' . $images;

							if (file_exists($existingFilePath)) {

								unlink($existingFilePath);

							}
							
							$favicon -> move('assets/icon/', $images);

						} else {

							$images = $favicon -> getName();
							
							$existingFilePath = 'assets/icon/' . $images;

							if (file_exists($existingFilePath)) {

								unlink($existingFilePath);
								
							}
							
							$favicon -> move('assets/icon/', $images);

						}

					} else {

						$images = 'favicon.ico';

					}

				// Convert data into an array and insert to database table

					$settingData = array(
						'app_name' => $title,
						'app_photo' => $images
					);

					// Config data

						$data = $Schema -> getWhere2('settings', array('id_setting' => '1'));

						if ($data) {

							$Schema -> edit_data('settings', $settingData, array('id_setting' => '1'));

						} else {

							$Schema -> add_data('settings', $settingData);

						}


					return redirect() -> to('/home/settings');

			} else {

				return redirect() -> to('/home/');

			}

		}

}