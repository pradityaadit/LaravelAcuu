<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-articel-1',
                'title' => 'Judul Articel 1',
                'author' => 'adit',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Odio ab, magnam, vero nemo voluptates nobis molestias consequatur 
                            distinctio, quo fugiat aspernatur veniam deserunt dolores nisi praesentium eaque commodi
                            natus dignissimos.',
            ],
            [
                'id' => 2,
                'slug' => 'judul-articel-2',
                'title' => 'Judul Articel 2',
                'author' => 'adit',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Odio ab, magnam, vero nemo voluptates nobis molestias consequatur 
                            distinctio, quo fugiat aspernatur veniam deserunt dolores nisi praesentium eaque commodi
                            natus dignissimos.',
            ]
        ];
    }

    public static function find($slug): array
    {

        // return Arr::first(static::all(), function ($post) use ($slug) {
        // return $post['slug'] === $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
