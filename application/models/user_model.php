<?php 

class user_model extends CI_Model
{
	public function register_user()
	{

		$options = ['cost'=> 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(

		'name'	=> $this->input->post('name'),
		'contact'	=> $this->input->post('contact'),
		'email'	=> $this->input->post('email'),
		'address'	=> $this->input->post('address'),
		'city'	=> $this->input->post('city'),
		'password' => $encripted_pass

		);

		$insert_data = $this->db->insert('users', $data);
		return $insert_data;

	}

	public function login_user($email, $password)
	{
		$this->db->where('email', $email);
		$result = $this->db->get('users');

		$db_password = $result->row('password');

		if(password_verify($password, $db_password))
		{
			// return $result->row(0)->id;
			return $result->row();
		}
		else
		{
			return false;
		}
	}

	##...Get all stories and filter category wise stories
	public function get_stories($limit, $offset)
	{
		/*=== SQL join and Data filter ===*/
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('stories', 'stories.categoryId = category.id');
		if(isset($_GET['ctg']))
		{
			$a = $_GET['ctg'];
			$query = $this->db->where('category.tag', $a);
			$this->db->order_by('stories.id', 'DESC');
			$this->db->where('stories.status', 1);
			$this->db->limit($limit, $offset);
			$query = $this->db->get();
			return $query->result();
		}
		$this->db->order_by('stories.id', 'DESC');
		$this->db->where('stories.status', 1);
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	#...For pagination
	public function num_rows_stories()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('stories', 'stories.categoryId = category.id');
	
		$this->db->order_by('stories.id', 'DESC');
		$this->db->where('stories.status', 1);
		$query = $this->db->get();
		return $query->num_rows();
	}




	public function comments($id)
	{
		$data = array(
			'comments' => $this->input->post('comments'),
			'userId' => $this->session->userdata('id'),
			'storiesId' => $id
		);

		$insert_stories = $this->db->insert('comments', $data);
		return $insert_stories;
	}

	public function get_comments()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('comments', 'comments.userId = users.id');

		$this->db->where('comments.storiesId', $this->uri->segment(3));
		$this->db->order_by('comments.id', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	
	public function my_comments()
	{
		$this->db->order_by('id', 'DESC');
		$this->db->where('userId', $this->session->userdata('id'));
		$query = $this->db->get('comments');
		return $query->result();
	}



	public function search($query)
	{
		$this->db->order_by('id', 'DESC');
		$this->db->from('stories');

		$string = str_replace(" ","|", $query);
		$this->db->where("stories_name RLIKE '$string'");

		$this->db->where('status', 1);
		$q = $this->db->get();
		return $q->result();
	}

	public function get_user_details($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		return $query->row();
	}

	public function edit_profile($id, $data)
	{
		$options = ['cost'=> 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(
		'name'	=> $this->input->post('name'),
		'contact'	=> $this->input->post('contact'),
		'address'	=> $this->input->post('address'),
		'city'	=> $this->input->post('city'),
		'password' => $encripted_pass,

		);

		return $query = $this->db->where('id', $id)->update('users', $data);
	}


} 

?>