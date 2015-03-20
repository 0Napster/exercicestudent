<?php namespace bloglaravel5\Http\ViewComposers;

use bloglaravel5\Comment;
use bloglaravel5\Post;
use bloglaravel5\Taxonomy;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;


class DashboardComposer
{
    protected $post;
    protected $comment;

    public function __construct(Post $post, Comment $comment)
    {
        $this->post = $post;
        $this->comment = $comment;

    }

    public function stat(View $view)
    {
        // thumbnail
        $stat = [];
        $stat ['thumbnail']['percentage'] = 10;
        $stat ['thumbnail']['max'] = 200;
        $stat ['thumbnail']['num'] = 10;

        // num post
        $numP = $this->post->type('post')->count();
        $stat ['post']['num'] = $numP;
        $stat ['post']['max'] = 500;
        $stat ['post']['percentage'] = round($numP / 500, 2) * 100;

        // num archive
        $stat['archive']['num'] = $this->post->type('archive')->count();
        $stat ['archive']['max'] = 500;
        $stat ['archive']['percentage'] = round($numP / 500, 2) * 100;

        $stat['comment'] = $this->comment;

        $view->with('stat', $stat);
        $view->with('archive', $stat);

    }

    public function sidebar(View $view)
    {
        $active = '';
        $view->with('active', $active);

        $countPost = $this->post->type('post')->count();

        $view->with('countPost', $countPost);

        $countArchive = $this->post->type('archive')->count();

        $view->with('countArchive', $countArchive);

        $countComment = $this->post->type('comment')->count();

        $view->with('countComment', $countComment);

        $countCategory = $this->post->type('category')->count();

        $view->with('countCategory', $countCategory);


    }

}
