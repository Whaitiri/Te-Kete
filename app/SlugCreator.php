<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class SlugCreator extends Model
{
    public static function createSlug($request, $id = 0)
    {
        $slug = str_slug($request->title);

        $allSlugs = SlugCreator::getRelatedSlugs($slug, $id);

        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }

        $slugNumber = false;
        $i = 0;

        while (!slugNumber) {
        	$i++;
            $newSlug = $slug.'-'.;
            if (! $allSlugs->contains('slug', $newSlug)) {
                $slugNumber = true;
            }
        }
        return $newSlug;
    }
    protected static function getRelatedSlugs($slug, $id = 0)
    {
        return Post::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }
}
