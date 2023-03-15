<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    private static $blog_posts = [
        [
            'title' => 'Post satu',
            'slug' => 'post-satu',
            'author' => 'alif',
            'body' => 'Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Voluptates tempora dolorem quod 
        voluptatem quo asperiores incidunt quasi numquam nisi accusantium 
        excepturi aut, at fuga consequuntur maiores repudiandae, tenetur 
        tempore, quam obcaecati vel praesentium cum. Assumenda, eum! At fugiat 
        inventore ipsam quibusdam quas. Similique vel hic molestiae voluptates quo facilis impedit!
        '
        ],
        [
            'title' => 'Post dua',
            'slug' => 'post-dua',
            'author' => 'nur',
            'body' => 'Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Voluptates tempora dolorem quod 
        voluptatem quo asperiores incidunt quasi numquam nisi accusantium 
        excepturi aut, at fuga consequuntur maiores repudiandae, tenetur 
        tempore, quam obcaecati vel praesentium cum. Assumenda, eum! At fugiat 
        inventore ipsam quibusdam quas. Similique vel hic molestiae voluptates quo facilis impedit!
        '
        ]



    ];

    public static function getAll()
    {
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        $post = static::getAll();



        return $post->firstWhere('slug', $slug);
    }
}
