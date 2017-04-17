<?php
  class Posts extends CI_Controller{

    public function index()
    {

        $data['title'] = 'Lasted Posts';

        $data['posts'] = $this->post_model->get_posts();
        $data['page'] = 'posts';
        $this->load->view('templates/header', $data);
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');

    }

    public function view($slug = NULL)
    {
      $data['post'] = $this->post_model->get_posts($slug);
      $post_id  = $data['post']['id'];
      $data['comments'] = $this->comment_model->get_comments($post_id);

      if(empty($data['post'])):
          show_404();
      endif;

      $data['title'] = $data['post']['title'];
      $data['page'] = 'posts';

      $this->load->view('templates/header', $data);
      $this->load->view('posts/view', $data);
      $this->load->view('templates/footer');
    }

    public function create()
    {

      if(!$this->session->userdata('logged_in')):
		  	redirect('users/login');
      endif;

      $data['title'] = 'Create Post';
      $data['page'] = 'create';

      $data['categories'] = $this->post_model->get_categories();

      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('body', 'Body', 'required');

      if($this->form_validation->run() === FALSE):
        $this->load->view('templates/header', $data);
        $this->load->view('posts/create', $data);
        $this->load->view('templates/footer');
      else:
        //upload image
        $config['upload_path'] = './assets/images/posts';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '500';
        $config['max_height'] = '500';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload()):
            $errors = array('error' => $this->upload->display_errors());
            $post_image = 'noimage.png';
        else:
          $data = array('upload_data' => $this->upload->data());
          $post_image =   $_FILES['userfile']['name'];
        endif;

        $this->post_model->create_post($post_image);
		$this->session->set_flashdata('post_created', 'Your post has been created');
        redirect('posts');
      endif;
    }

    public function delete($id)
    {
		if(!$this->session->userdata('logged_in')):
			redirect('users/login');
		endif;
      $this->post_model->delete_post($id);
      redirect('posts');
    }


    public function edit($slug)
    {
		if(!$this->session->userdata('logged_in')):
			redirect('users/login');
		endif;

      $data['post'] = $this->post_model->get_posts($slug);

      //checkuser
	  if($this-> session->userdata('user_id') != $this->post_model->get_posts($slug)['user_id']):
		  	redirect('posts');
	  endif;

      $data['categories'] = $this->post_model->get_categories();
      if(empty($data['post'])):
          show_404();
      endif;

      $data['title'] = 'Edit Post';
      $data['page'] = 'posts';
      $this->load->view('templates/header', $data);
      $this->load->view('posts/edit', $data);
      $this->load->view('templates/footer');
    }

    public function update()
    {
		if(!$this->session->userdata('logged_in')):
			redirect('users/login');
		endif;
    	$this->post_model->update_post();
      redirect('posts');
    }
  }
