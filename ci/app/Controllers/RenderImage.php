<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class RenderImage extends Controller
{
    public function index($imageName)
    {
        if(($image = file_get_contents(WRITEPATH.'uploads/students/'.$imageName)) === FALSE)
            echo "Not Found";

        // choose the right mime type
        $mimeType = 'image/jpg';

        return $this->response
            ->setStatusCode(200)
            ->setContentType($mimeType)
            ->setBody($image)
            ->send();

    }

}