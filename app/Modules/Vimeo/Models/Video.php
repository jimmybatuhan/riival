<?php

namespace Modules\Vimeo\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;

    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];

    public function upload($filename, $title, $attr = [])
    {

        $video = new Video();

        $video->title = $title;
        $video->save();

        return $video;
    }

    public function get($id)
    {

        $video = Video::find($id);
        return $video;
    }
}
