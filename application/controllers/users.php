<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		
	}

	public function index()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/		
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|strip_tags[name]');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]',
				array(
					'required' => 'Email field can not be empty',
					'is_unique' => 'This email is already registered')
			);
		$this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_dash|min_length[3]');
		$this->form_validation->set_rules('repassword', 'Confirm Password',
		'trim|required|alpha_dash|min_length[3]|matches[password]');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|strip_tags[address]');
		$this->form_validation->set_rules('city', 'City', 'trim|required|strip_tags[city]');
		$this->form_validation->set_rules('conditionBox', 'Check box', 'trim|required',
				array('required' => 'You have to check the box.')
		);


		if($this->form_validation->run() == FALSE)
		{
			/*=== LOAD DYNAMIC CATAGORY ===*/
			$this->load->model('admin_model');
			$view['category'] = $this->admin_model->get_category();
			/*==============================*/

			$view['user_view'] = "users/reg";
			$this->load->view('layouts/user_layout', $view);
		}
		else
		{
			$this->load->model('user_model');

			if($this->user_model->register_user())
			{
				$this->session->set_flashdata('reg_success', 'Your Registration is successfull.');
				redirect('users/login');
			}
			else
			{
				print $this->db->error();
			}

		}
	}


	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|alpha_dash');

		if($this->form_validation->run() == FALSE)
		{
			/*=== LOAD DYNAMIC CATAGORY ===*/
			$this->load->model('admin_model');
			$view['category'] = $this->admin_model->get_category();
			/*==============================*/

			$view['user_view'] = "users/login";
			$this->load->view('layouts/user_layout', $view);
		}
		else
		{
			$this->load->model('user_model');

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user_data = $this->user_model->login_user($email, $password);

			if($user_data)
			{
				$login_data = array(

					'user_data' => $user_data,
					'id'		=> $user_data->id,
					'email'		=> $email,
					'type'		=> $user_data->type,
					'name'		=> $user_data->name,
					'logged_in'	=> true

				); // Data keeps in SESSION
				
				$this->session->set_userdata($login_data);

				if ($user_data && ($user_data->type == 'A' || $user_data->type == 'SA')) {
    $this->session->set_flashdata('login_success', 'Logged in successfully. You have logged in as an admin.');
    redirect('admin/index');
}

				elseif ($user_data->type == 'U') // User
				{
					$this->session->set_flashdata('login_success', 'Welcome, <a href = "user-home" class = "text-primary">'.$this->session->userdata('name').'</a>. You have Logged in successfully');
					redirect('home');
				}
			
			}

			else
			{
				$this->session->set_flashdata('login_fail', '<i class="fas fa-exclamation-triangle"></i> Invalid login. The email or password that you have entered is incorrect. ');

				redirect($_SERVER['HTTP_REFERER']); // Redirect at same page.
			}

		}


	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');	
	}


	public function all_stories()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/
		
		#...Pagination code start
		$this->load->model('user_model');
		$this->load->library('pagination');
		$config = [

			'base_url' => base_url('users/all_stories'),
			'per_page' => 18,
			'total_rows'=>  $this->user_model->num_rows_stories(),
			'full_tag_open' => "<ul class='custom-pagination'>",
			'full_tag_close' => "</ul>", 
			'first_tag_open' => '<li>',
			'first_tag_close' => '</li>',
			'last_tag_open' => '<li>',
			'last_tag_close' => '</li>',
			'next_tag_open' => '<li>',
			'next_tag_close' => '</li>',
			'prev_tag_open' => '<li>',
			'prev_tag_close' => '</li>',
			'cur_tag_open' => "<li class = 'active'><a>",
			'cur_tag_close' => '</a></li>',
		];
		$this->pagination->initialize($config);

		$this->load->model('user_model');
		$view['stories'] = $this->user_model->get_stories($config['per_page'], $this->uri->segment(3));

		$view['user_view'] = "users/all_stories";
		$this->load->view('layouts/user_layout', $view);
	}

/*======== Book details info and all comments =======*/
public function stories_view($id)
{
	$this->load->model('admin_model');
	$view['category'] = $this->admin_model->get_category();
	$view['stories_detail'] = $this->admin_model->get_stories_detail($id);
	$view['user_view'] = "temp/404page";
	
	if ($view['stories_detail']) {
		$this->form_validation->set_rules('comments', 'Comment', 'trim|required|min_length[10]|html_escape');
		$this->load->model('user_model');
		$view['comments'] = $this->user_model->get_comments();
		
		if ($this->form_validation->run() == FALSE) {
			$view['user_view'] = "users/stories_detail";
		} else {
			$this->user_model->comments($id);
			redirect('users/stories_view/'.$id.'');
		}
	}

	$this->load->view('layouts/user_layout', $view);
}


	


	public function search()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/


		$this->form_validation->set_rules('search_stories', "Search",'trim|required|strip_tags[search_stories]');

		if($this->form_validation->run() == FALSE)
		{
			redirect('home');
		}
		else
		{
			$query = $this->input->post('search_stories');

			$this->load->model('user_model');
			$view['stories'] = $this->user_model->search($query);


			$view['user_view'] = "users/search_stories";
			$this->load->view('layouts/user_layout', $view);
		}
			
	}



}
