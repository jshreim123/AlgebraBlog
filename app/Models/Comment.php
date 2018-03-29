<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
		'content',
		'user_id',
		'post_id',
		'status'	];


/**
     * Save new comment.
     *
     * @param array $comment
	 * @return object Comment
     */			
		
		public function saveComment($comment)
		{
			return $this->create($comment);
		}
		
		/**
     * Update comment.
     *
     * @param array $comment
	 * @return void
     */			
		
		public function updateComment($comment)
		{
			$this->update($comment);
		}
		
		
	// Get the comment user.
	
	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}	
	
	// Get the comment post.
	
	public function post()
	{
		return $this->belongsTo('App\Models\Post');
	}	
}