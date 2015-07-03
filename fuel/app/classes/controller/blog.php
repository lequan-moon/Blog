<?php
use helper\BlogHelper;

class Controller_Blog extends Controller_Template
{

	public function action_index()
	{
	    $blogs = Model_Blog::find('all');
	    $blogs = BlogHelper::getAuthorName($blogs);
	    $data = BlogHelper::generateGridFormatData($blogs);
	    
		$this->template->title = "Blogs";
		$this->template->content = View::forge('blog/index', $data);
	}
	
	public function action_view($id = null)
	{
	    is_null($id) and Response::redirect('blog');
	
	    if ( ! $data['blog'] = Model_Blog::find($id))
	    {
	        Session::set_flash('error', 'Could not find blog #'.$id);
	        Response::redirect('blog');
	    }
	
	    $this->template->title = "Blog";
	    $this->template->content = View::forge('blog/view', $data);
	
	}
}
