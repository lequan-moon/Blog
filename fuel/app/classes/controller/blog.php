<?php
class Controller_Blog extends Controller_Template
{

	public function action_index()
	{
	    $data = array();
	    $blogs = Model_Blog::find('all');
	    if (count($blogs) > 4) {
	        while (count($blogs) > 4) {
	            $grid = array_splice($blogs, 0, 4);
	            $data['grid'][] = $grid;
	        }
	        $data['grid'][] = $blogs;
	    } else {
	        $data['grid'][] = $blogs;
	    }
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
