<?php

require 'functions.php';

require 'core/bootstrap.php';

/**
* Test class to demonstrate array functions
*/
class Post
{
	public $title;
	public $published;

	function __construct($title, $published)
	{
		$this->title = $title;
		$this->published = $published;
	}
}

$posts = [
	new Post('My first post', true),
	new Post('My second post', true),
	new Post('My third post', true),
	new Post('My fourth post', false)
];

// $publishedPosts = array_filter($posts, function ($post) {
// 	return $post->published;
// });
// dd($publishedPosts);

// $modified = array_map(function ($post) {
// 	return ['title' => $post->title];
// }, $posts);
// dd($modified);

$titles = array_column($posts, 'title');
dd($titles);

require Router::load('routes.php')
	->direct(Request::uri());