<?php

namespace Modules\Vimeo\Models;

use Illuminate\Support\Facades\Storage;
use Vimeo\Vimeo;

class Video
{

    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];

    public function __construct()
    {
        $this->client = new Vimeo(
            config('vimeo.client_id'),
            config('vimeo.client_secret'),
            config('vimeo.access_token')
        );
    }

    public function upload($file, $title, $attr = [])
    {

        $filename = Storage::path($file->store('uploads'));

        $uri = $this->client->upload($filename, array(
            "name" => $title
        ));

        return $uri;
    }

    public function get($uri)
    {

        $videoData = array();

        $resp = $this->client->request("/" . $uri, array(), 'GET');
        
        $videoData = [
            'status' => $resp['body']['status'],
            'embed_html' => $resp['body']['embed']['html'],
        ];

        return $resp;
    }
}
