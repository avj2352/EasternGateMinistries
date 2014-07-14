<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Frontend_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('page_m');
        $this->load->model('gallery_m');
	}/*End of the constructor function*/

	public function index(){
    $this->data['page'] = $this->page_m->get_by(array('slug' => (string) $this->uri->segment(1)), TRUE);
    count($this->data['page']) || show_404(current_url());
        
        // echo '<pre>' . $this->db->last_query() . '</pre>';
        // dump($this->data['page']);

    /*If we have a template called - homepage, then it will call = $this->_homepage()*/
    $method = '_' .$this->data['page']->template;
    /*Lets check to see if the template exists*/
    if (method_exists($this, $method)) {
        // if method exists....
        $this->$method();
    }else{
        // If the method doesnt exists
        log_message('error', 'Could not load template: ' . $method . 'in file: ' . __FILE__ . 'at line: ' . __LINE__);
        show_error('Could not load template: ' . $method);
    }

        /*Load a view*/
        $this->data['subview'] = $this->data['page']->template;
        $this->data['content'] = $this->data['page']->body;
        // dump($this->data['subview']);
        $this->load->view('_main_layout', $this->data);

	}/*end of the index function*/

	/*WE need different data, for each template, therefore lets setup a method to access dynamic templates*/

    //1. Starting with the Homepage template
    private function _homepage(){
        /*Load the articles from the db*/
        $this->load->model('article_m');
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->db->limit(4);
        $this->data['articles'] = $this->article_m->get();
        
        /*Get the latest photo into gallery section*/
        $this->load->model('gallery_m');
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->db->where('category !=', 'media');
        $this->db->limit(1);
        $this->data['artworks'] = $this->gallery_m->get();

        /*Get the latest TV media photo into TV Media section*/
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->db->where('category', 'media');
        $this->db->limit(1);
        $this->data['media_photos'] = $this->gallery_m->get();
    }

    //2. _landing_page template
    private function _landing_page (){
        /*Load the articles from the db*/
        $this->load->model('article_m');
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->db->limit(4);
        $this->data['articles'] = $this->article_m->get();
        
        /*Get the latest photo into gallery section*/
        $this->load->model('gallery_m');
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->db->where('category !=', 'media');
        $this->db->limit(1);
        $this->data['artworks'] = $this->gallery_m->get();

        /*Get the latest TV media photo into TV Media section*/
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->db->where('category', 'media');
        $this->db->limit(1);
        $this->data['media_photos'] = $this->gallery_m->get();
        
    }/*end of the _landing_page template*/

    //3. _news_archive template
    private function _news_archive (){
        $this->load->model('article_m');
        $this->data['recent_news'] = $this->article_m->get_recent();
        
        $this->db->where('pubdate <=', date('Y-m-d'));
        $count = $this->db->count_all_results('articles');
        // dump($count);
        // Set up a pagination method
        $perpage = 4;
        if($count > $perpage){


            $this->load->library('pagination');
            $config['base_url'] = site_url($this->uri->segment(1) . '/');
            $config['total_rows'] = $count;
            $config['per_page'] = $perpage;
            $config['uri_segment'] = 2;
            
            /* This Application Must Be Used With BootStrap 3 *  */
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] ="</ul>";
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tagl_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tagl_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tagl_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tagl_close'] = "</li>";
            
            
            
            /* Setting up the Pagination and Initializing */
            $this->pagination->initialize($config);
            $this->data['pagination'] = $this->pagination->create_links();
            $offset = $this->uri->segment(2);

        }else{
            $this->data['pagination'] = '';
            $offset = 0;
        }
        // Dump the pagination
        // echo $this->data['pagination'];
 
        // Fetch the articles
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->db->limit($perpage, $offset);
        $this->data['articles'] = $this->article_m->get();
//      dump(count($this->data['articles']));
//      echo '<pre>'. $this->db->last_query() . '</pre>';
    }/*end of the _news_archive template*/

    //4. _contactus form template. This will also have a form validation section
    private function _contactus (){

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->data['recent_news'] = $this->article_m->get_recent();

        $rules = array(
        'name' => array(
            'field' => 'name', 
            'label' => 'Name', 
            'rules' =>'trim|required|max_length[100]|xss_clean',
            ),
        'email' => array(
            'field' => 'email', 
            'label' => 'Email', 
            'rules' =>'trim|required|email|xss_clean',
            ),
        'subject' => array(
            'field' => 'subject', 
            'label' => 'Subject', 
            'rules' =>'trim|max_length[100]|xss_clean', 
            ),
        'body' => array(
            'field' => 'body', 
            'label' => 'Body', 
            'rules' =>'trim|xss_clean',
            ),
        );

        $this->form_validation->set_rules($rules);

        if($this->form_validation->run() == TRUE){
            /*To setup a new method to set of values to be stored properly*/
            $name = $this->input->post('name');
            $email = $this->input->post('email');                                
            $subject = $this->input->post('subject');                                
            $body = $this->input->post('body');                                

            $message_string = "<h3>Hi Admin</h3>";
            $message_string .= "<p><strong>" . $name . "</strong> has sent a request. Please find the details below:</p>";
            $message_string .= "<hr>";
            $message_string .= "<p><strong>Name</strong>: " . $name . "</p>";
            $message_string .= "<p><strong>Email</strong>: " . $email . "</p>";
            $message_string .= "<p><strong>Subject</strong>: " . $subject . "</p>";
            $message_string .= "<p><strong>Description</strong>:</p><hr>";
            $message_string .= "<p>" . $body . "</p>";
            $message_string .= "<hr>";
            $message_string .= "<p>Please contact <strong>" . $name . "</strong></p>";

            $this->load->library('email');
            $this->email->set_newline("\r\n");
            $this->email->from($email, $name);
            
            $this->email->to('pramod@innovoskies.com');
            $this->email->cc(''); 
            $this->email->reply_to('pramod@innovoskies.com', 'Pramod Jingade');
            $this->email->subject('Eastern Gate Ministries - '. $name);
            $this->email->message($message_string);

            if($this->email->send()){
                $mail = true;
                $this->session->set_flashdata('mail', $mail);
                redirect('contactus');
            }else{
                show_error($this->email->print_debugger());
            }             
        }/*End of Form Validation*/

       

    }/*end of the _contactus template*/

    //5. _gallery template.
    private function _gallery (){
        /*Load the articles from the db*/
        $this->load->model('gallery_m');
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->data['artworks'] = $this->gallery_m->get();
    }/*end of the _gallery template method*/

}/* End of file page.php */
/* Location: ./application/controllers/page.php */
