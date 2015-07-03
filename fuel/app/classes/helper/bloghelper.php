<?php
namespace helper;

class BlogHelper {
    public static function generateGridFormatData($blogs) {
	    $data = array();
	    if (count($blogs) > 4) {
	        while (count($blogs) > 4) {
	            $grid = array_splice($blogs, 0, 4);
	            $data['grid'][] = $grid;
	        }
	        $data['grid'][] = $blogs;
	    } else {
	        $data['grid'][] = $blogs;
	    }
	    return $data;
	}
	
	public static function getAuthorName($blogs) {
	    foreach ($blogs as $blog) {
	        $author = \Model_User::find($blog->author);
	        $blog->authorName = $author->username;
	    }
	    return $blogs;
	}
}