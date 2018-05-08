<?php

namespace App\Controllers;
use App\Models\BlogPost;

class DetailController extends BaseController {

    public function getIndex($id) {        
        $blogPosts = BlogPost::where('id', $id) -> get();        
        return $this -> render('details.twig', [
            'blogPosts' => $blogPosts
        ]);    
    }	

}