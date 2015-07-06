<?php
use helper\Util;
use Fuel\Core\Response;
class Controller_Admin extends Controller_Template
{

	public function action_index()
	{
	    if (!Util::isLogin()) {
	        Response::redirect("login");
	    }
		$data['blogs'] = Model_Blog::find('all');
		$this->template->title = "Blogs";
		$this->template->content = View::forge('admin/index', $data);

	}

	public function action_view($id = null)
	{
	    if (!Util::isLogin()) {
	        Response::redirect("login");
	    }
		is_null($id) and Response::redirect('blog');

		if ( ! $data['blog'] = Model_Blog::find($id))
		{
			Session::set_flash('error', 'Could not find blog #'.$id);
			Response::redirect('blog');
		}

		$this->template->title = "Blog";
		$this->template->content = View::forge('admin/view', $data);

	}

	public function action_create()
	{
	    if (!Util::isLogin()) {
	        Response::redirect("login");
	    }
		if (Input::method() == 'POST')
		{
			$val = Model_Blog::validate('create');

			if ($val->run())
			{
				$blog = Model_Blog::forge(array(
					'title' => Input::post('title'),
					'description' => Input::post('description'),
					'content' => Input::post('content'),
				    'img' => Input::post('img'),
				));

				if ($blog and $blog->save())
				{
					Session::set_flash('success', 'Added blog #'.$blog->id.'.');

					Response::redirect('admin');
				}

				else
				{
					Session::set_flash('error', 'Could not save blog.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Blogs";
		$this->template->content = View::forge('blog/create');

	}

	public function action_edit($id = null)
	{
	    if (!Util::isLogin()) {
	        Response::redirect("login");
	    }
		is_null($id) and Response::redirect('blog');

		if ( ! $blog = Model_Blog::find($id))
		{
			Session::set_flash('error', 'Could not find blog #'.$id);
			Response::redirect('admin');
		}

		$val = Model_Blog::validate('edit');

		if ($val->run())
		{
			$blog->title = Input::post('title');
			$blog->description = Input::post('description');
			$blog->content = Input::post('content');
			$blog->img = Input::post('img');

			if ($blog->save())
			{
				Session::set_flash('success', 'Updated blog #' . $id);

				Response::redirect('blog');
			}

			else
			{
				Session::set_flash('error', 'Could not update blog #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$blog->title = $val->validated('title');
				$blog->description = $val->validated('description');
				$blog->content = $val->validated('content');
				$blog->img = $val->validated('img');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('blog', $blog, false);
		}

		$this->template->title = "Blogs";
		$this->template->content = View::forge('blog/edit');

	}

	public function action_delete($id = null)
	{
	    if (!Util::isLogin()) {
	        Response::redirect("login");
	    }
		is_null($id) and Response::redirect('blog');

		if ($blog = Model_Blog::find($id))
		{
			$blog->delete();

			Session::set_flash('success', 'Deleted blog #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete blog #'.$id);
		}

		Response::redirect('admin');

	}

}
