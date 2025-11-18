<?php

function getBlogs()
{
	return t('t.blogs');
}

function getCurrentBlog()
{
	$blogSlug = $_GET['article'] ?? null;

	$blogs = getBlogs();

	$filtered = array_filter($blogs, fn($blogItem) => $blogItem['slug'] === $blogSlug);

	$blog = reset($filtered) ?: null;

	if (!$blog) {
		header("Location: /404.php");
		exit;
	}

	return $blog;
}

function getSeeAlsoBlogs($limit = 4)
{
	$blogSlug = $_GET['article'] ?? null;

	$blogs = getBlogs();

	$blogs = array_filter($blogs, fn($blogItem) => $blogItem['slug'] !== $blogSlug);

	shuffle($blogs);

	$blogs = array_slice($blogs, 0, $limit);

	return $blogs;
}
