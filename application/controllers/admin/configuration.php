<?php
	class Configuration extends Access_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			$row = $this->m_configuration->getConfiguration()->row();
			
			$data['system_logo'] = $row->system_logo;
			$data['frontend_theme'] = $row->frontend_theme;
			$data['system_name'] = $row->system_name;
			$data['frontend_address'] = $row->frontend_address;
			$data['frontend_telp'] = $row->frontend_telp;
			$data['frontend_email'] = $row->frontend_email;
			$data['frontend_fax'] = $row->frontend_fax;
			$data['about_us'] = $row->about_us;

			$this->load->view('admin/configuration',$data);
		}

		function saveConfiguration()
		{
			$row = $this->m_configuration->getConfiguration()->row();

			if($_FILES['system_logo']['size'] == 0)
			{
				$data['system_logo'] = $row->system_logo;
			}
			else
			{
				unlink('./assets_frontend/logo_utama/'.$row->system_logo);

				$config['upload_path'] = './assets_frontend/logo_utama';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '500';
				$config['max_width']  = '128';
				$config['max_height']  = '32';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('system_logo')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('error_alert', 'Kesalahan dalam mengunggah gambar. Gambar yang anda pilih melebihi ukuran maksimum yang diizinkan');
					redirect("admin/configuration");
				}
				else{
					$upload = $this->upload->data();
					$data['system_logo'] = $upload['file_name'];
				}
			}

			$data['system_name']      = $this->input->post('system_name');
			$data['frontend_name']    = '1';
			$data['frontend_address'] = $this->input->post('frontend_address');
			$data['frontend_telp']    = $this->input->post('frontend_telp');
			$data['frontend_email']   = $this->input->post('frontend_email');
			$data['frontend_fax']     = $this->input->post('frontend_fax');
			$data['about_us']		  = $this->input->post('about_us');
			$data["frontend_theme"]   = $this->input->post("frontend_theme");
			
			$this->m_configuration->saveConfiguration($data);

			$this->session->set_flashdata('success_alert', 'Pengaturan telah disimpan');

			redirect("admin/configuration");
		}

		function changePassword()
		{
			$page = $this->input->post('page');

			$data['id'] = $this->session->userdata('id');
			$data['password'] = md5($this->input->post('new_password'));
			
			$password_conf = md5($this->input->post('new_password_conf'));

			$row = $this->m_configuration->getAdmin($data['id'])->row();

			$old_password = $this->input->post('old_password');


			if(md5($old_password) == $row->password)
			{
				if($data['password'] == $password_conf)
				{
					$this->m_configuration->changePassword($data);
					$this->session->set_flashdata('warning_alert', 'Password berhasil diubah');
				}
				else
				{
					$this->session->set_flashdata('error_alert', 'Konfirmasi password tidak sesuai');
				}
			}
			else
			{
				$this->session->set_flashdata('error_alert', 'Password lama anda tidak sesuai');
			}

			redirect($page2."/".$page);
		}
	}
?>