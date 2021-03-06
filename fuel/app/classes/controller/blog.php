<?php
use helper\BlogHelper;

class Controller_Blog extends Controller_Template
{

	public function action_index()
	{
	    $blogs = Model_Blog::find('all', array('order_by' => array('id' => 'desc')));
	    $blogs = BlogHelper::getAuthorName($blogs);
	    $data = BlogHelper::generateGridFormatData($blogs);
	    
		$this->template->title = "Shitcoder";
		$this->template->content = View::forge('blog/index', $data, false);
	}
	
	public function action_view($id = null)
	{
	    is_null($id) and Response::redirect('blog');
	
	    if ( ! $data['blog'] = Model_Blog::find($id))
	    {
	        Session::set_flash('error', 'Could not find blog #'.$id);
	        Response::redirect('blog');
	    }
	
	    $this->template->title = $data['blog']['title'];
	    $this->template->description = $data['blog']['description'];
	    $this->template->keywords = $data['blog']['keywords'];
	    $this->template->content = View::forge('blog/view', $data, false);
	
	}
}
