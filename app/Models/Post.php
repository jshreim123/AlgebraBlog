<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
						'title',
						'content',
						'user_id'];
						
						
						
	/**
     * Save new Post.
     *
     * @param array $post
	 * @return object Post
     */			
		
		public function savePost($post)
		{
			return $this->create($post);
		}
		
		/**
     * Update Post.
     *
     * @param array $post
	 * @return void
     */			
		
		public function updatePost($post)
		{
			$this->update($post);
		}
	use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }	
}