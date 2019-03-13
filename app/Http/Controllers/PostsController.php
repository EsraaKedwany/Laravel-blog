<?php

namespace app\Http\Controllers;

class PostsController extends Controllers
{
    public function index()
    {
        return view(posts.index,[
            'posts'=>all()
        ]);
    }
}
?>