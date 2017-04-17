<?php
  class categories extends CI_Controller
  {

  	 public function index()
     {
		 $data['title'] = "All Categories";
		 $data['categories'] = $this->category_model->get_categories();
		 $data['page'] = 'categories';
		 $this->load->view('templates/header', $data);
		 $this->load->view('categories/index', $data);
		 $this->load->view('templates/footer');
     }

     public function create()
      {
		  if(!$this->session->userdata('logged_in')):
			  redirect('users/login');
		  endif;
        $data['title'] = "Create Category";
        $data['page'] = "category";

        $this->form_validation->set_rules('name', 'Name', 'required');
        if($this->form_validation->run() === FALSE):
            $this->load->view('templates/header', $data);
            $this->load->view('categories/create', $data);
            $this->load->view('templates/footer');
        else:
            $this->category_model->create_category();
            redirect('categories');
        endif;
      }

      public function posts($id)
	  {
	  	$data['title'] = $this->category_model->get_category($id)->name;
	  	$data['page'] = "category";
	  	$data['posts'] = $this->post_model->get_posts_by_category($id);
	  	$this->load->view('templates/header', $data);
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');

	  }



  }
 ?>
