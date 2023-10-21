<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post 
{
    public static function all () 
    {
        $posts = [];
        
        $files = File::files(resource_path("posts/"));
        // array_map(function($file) {
        //     dump($file->getContents());
        //     return $file->getContents();
        // }, $files);

        foreach ($files as $file) {
            $posts[] = $file->getContents();
        }

        return $posts;
        //dd($texts);
    }
    
    public static function find (string $slug)
    {
        $path = resource_path("posts/{$slug}.html");

        if (!file_exists($path)) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}",1200, function () use ($path){
            file_get_contents($path);
        });

    }
}
