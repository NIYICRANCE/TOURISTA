<?php 

class admin_model extends CI_Model
{
	#...Create category
	public function create_category()
	{
		$data = array(

		'category' => $this->input->post('category'),
		'description' => $this->input->post('description'),
		'tag' => $this->input->post('tag')

		);

		$insert_ctg = $this->db->insert('category', $data);
		return $insert_ctg;
	}

	#...Display all category
	public function get_category()
	{
		$query = $this->db->get('category');
		return $query->result();
	}

	#...Display category details
	public function get_ctg_detail($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('category');
		return $query->row();
	}

	#...Edit category
	public function edit_category($id, $data)
	{
		$data = array(

		'category' => $this->input->post('category'),
		'description' => $this->input->post('description'),
		'tag' => $this->input->post('tag')

		);

		return $query = $this->db->where('id', $id)->update('category', $data);
	}

	#...Delete category
	public function delete_category($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('category');
		
	}

	#...Display all user
	public function get_users()
	{
		$query = $this->db->get('users');
		return $query->result();
	}

	#...Add user
	public function add_user()
	{

		$options = ['cost'=> 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(

		'name'	=> $this->input->post('name'),
		'contact'	=> $this->input->post('contact'),
		'email'	=> $this->input->post('email'),
		'address'	=> $this->input->post('address'),
		'city'	=> $this->input->post('city'),
		'password' => $encripted_pass,
		'type' => $this->input->post('type')

		);

		$insert_user = $this->db->insert('users', $data);
		return $insert_user;

	}

	#...Delete User
	public function delete_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
		
	}

	#...Add stories
	public function add_stories()
	{
		$data = $this->upload->data();
		$image_path = base_url("uploads/image/".$data['raw_name'].$data['file_ext']);
		
		$data = array(
			'stories_name' => $this->input->post('stories_name'),
			'description' => $this->input->post('description'),
			'flight' => $this->input->post('flight'),
			'price' => $this->input->post('price'),
			'categoryId' => $this->input->post('categoryId'),
			'stories_image' => $image_path,
			'userId' => $this->session->userdata('id'),
			'status' => $this->input->post('status')
		);

		$insert_stories = $this->db->insert('stories', $data);
		return $insert_stories;
	}

	#...Display all stories
	public function get_stories($limit, $offset)
	{	
		/*=== SQL join ===*/
		$this->db->select('stories.id, stories.stories_name, stories.description, stories.flight, stories.price, stories.stories_image, category.category, users.name');

		$this->db->from('stories');
		$this->db->join('category', 'stories.categoryId = category.id');
		$this->db->join('users', 'stories.userId = users.id'); // Join 3rd table

		$this->db->order_by('stories.id', 'DESC');
		$this->db->where('stories.status', '1');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	#...For pagination
	public function num_rows_admin_stories()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('stories', 'stories.categoryId = category.id');

		$this->db->order_by('stories.id', 'DESC');
		$this->db->where('stories.status', '1');
		$query = $this->db->get();
		return $query->num_rows();
	}
	#...For count total stories
	public function count_total_stories()
	{
		$this->db->where('status', '1');
		$query = $this->db->get('stories');
		return $query->result();
	}

	#...Display stories details
	public function get_stories_detail($id)
	{
		/*=== SQL join ===*/
		$this->db->select('stories.*, users.name, category.category');
		$this->db->from('stories');
		$this->db->join('category', 'stories.categoryId = category.id');
		$this->db->join('users', 'stories.userId = users.id'); // Join 3rd table

		$this->db->where('stories.id', $id);
		$query = $this->db->get();
		return $query->row();		
	}

	#...Edit stories info
	public function edit_stories($id, $data)
	{
		$data = $this->upload->data();
		$image_path = base_url("uploads/image/".$data['raw_name'].$data['file_ext']);
		
		$data = array(
			'stories_name' => $this->input->post('stories_name'),
			'description' => $this->input->post('description'),
			'flight' => $this->input->post('flight'),
			'price' => $this->input->post('price'),
			'categoryId' => $this->input->post('categoryId'),
			'stories_image' => $image_path,
			'userId' => $this->session->userdata('id'),
			'status' => $this->input->post('status')
		);

		return $query = $this->db->where('id', $id)->update('stories', $data);
	}

	#...Delete stories
	public function delete_stories($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('stories');
	}


	#...Get pending stories
	public function pending_stories()
	{	
		/*=== SQL join ===*/
		$this->db->select('stories.*, users.name, category.category');
		$this->db->from('stories');
		$this->db->join('category', 'stories.categoryId = category.id');
		$this->db->join('users', 'stories.userId = users.id'); //Join 3rd table

		$this->db->order_by('stories.id', 'DESC');
		$this->db->where('stories.status', '0');
		$query = $this->db->get();
		return $query->result();
	}

	#...Published stories
	public function published_stories($id, $data)
	{
		
		$data = array(
			'status' => 1
		);

		return $query = $this->db->where('id', $id)->update('stories', $data);
	}




}