<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhamad",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis, impedit omnis consectetur in delectus cupiditate. Non pariatur corporis animi odio corrupti minus alias necessitatibus fugiat vel reiciendis ad voluptates quae saepe maxime, porro tempore, omnis at aspernatur repellendus consectetur cum facere provident suscipit. Cumque aliquam perferendis est architecto, quidem quae, totam mollitia eum numquam ratione id accusamus nesciunt nostrum? Vitae aliquid itaque quisquam, nemo saepe modi incidunt provident, repellat ducimus voluptate iure sequi cupiditate quas sunt nihil molestias qui?",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ali",
            "body" => "Lorem ipsum dolor sit amet consecte Lorem ipsum dolor sit amet consecte Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio facilis, impedit omnis consectetur in delectus cupiditate. Non pariatur corporis animi odio corrupti minus alias necessitatibus fugiat vel reiciendis ad voluptates quae saepe maxime, porro tempore, omnis at aspernatur repellendus consectetur cum facere provident suscipit. Cumque aliquam perferendis est architecto, quidem quae, totam mollitia eum numquam ratione id accusamus nesciunt nostrum? Vitae aliquid itaque quisquam, nemo saepe modi incidunt provident, repellat ducimus voluptate iure sequi cupiditate quas sunt nihil molestias qui?",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
