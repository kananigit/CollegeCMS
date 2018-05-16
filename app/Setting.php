<?php

namespace oct;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
  protected $fillable = [
      'slug', 'value'
  ];

  public function scopeFetch($query, $slug)
  {
      return $query->whereSlug($slug);
  }

  public function image()
  {
      return $this->morphOne(Image::class, 'imageable');
  }
}
