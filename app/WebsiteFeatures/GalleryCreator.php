<?php

namespace App\WebsiteFeatures;

class GalleryCreator
{
    public function renderGallery($imagesPath)
    {
        $files = scandir(public_path().'/img/'.$imagesPath);
        $images = [];

        foreach ($files as $key => $file) {
            if ($file == "." || $file == "..") {
                continue;
            }
            $extension = $this->getExtension($file);
            if ($extension == 'jpg' || $extension == "webp" || $extension == "png" || $extension == "PNG" || $extension == "jpeg" || $extension == "JPEG") {
                $images[] = 'img/'.$imagesPath.'/'.$file;
            }
        }

        return $images;
    }

    public function getExtension($file)
    {
        $n = strrpos($file,"."); if($n===false) return "";return substr($file,$n+1);
    }
}
