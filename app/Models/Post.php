<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
<<<<<<< HEAD
    use Sluggable;
    /**
=======
	use Sluggable;
	
     /**
>>>>>>> 05ef1a9da8996592e5b038c73eddc83c07cbd3df
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
						'title',
						'content',
						'user_id'];
						
						
						
	/**
=======
					'title',
					'content',
					'user_id'];
					
	 /**
>>>>>>> 05ef1a9da8996592e5b038c73eddc83c07cbd3df
     * Save new Post.
     *
     * @param array $post
	 * @return object Post
<<<<<<< HEAD
     */			
		
		public function savePost($post)
		{
			return $this->create($post);
		}
		
		/**
=======
     */
	 
	public function savePost($post)
	{
		return $this->create($post);
	}
	
	/**
>>>>>>> 05ef1a9da8996592e5b038c73eddc83c07cbd3df
     * Update Post.
     *
     * @param array $post
	 * @return void
<<<<<<< HEAD
     */			
		
		public function updatePost($post)
		{
			$this->update($post);
		}
	use Sluggable;
=======
     */
	 
	public function updatePost($post)
	{
		$this->update($post);
	}
>>>>>>> 05ef1a9da8996592e5b038c73eddc83c07cbd3df

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
<<<<<<< HEAD
    }	
=======
    }
>>>>>>> 05ef1a9da8996592e5b038c73eddc83c07cbd3df
}
