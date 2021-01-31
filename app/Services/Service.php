<?php

namespace App\Services;


use Illuminate\Support\Facades\Storage;

class Service
{

    protected const DEFAULT_DISK='public';
    private const GALLERY_IMAGES_FOLDER = 'StudentProfileImages';

    /**
     * @param $file : Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]|array|null
     * @return string :relative file path & filename
     */
    protected function saveStudentFile($file)
    {
        return Storage::disk(Service::DEFAULT_DISK)->putFile(Service::GALLERY_IMAGES_FOLDER, $file);
    }

     /**
     * @param $filename : string
     */
    protected function deleteStudentFile(string $filename)
    {
        Storage::disk(Service::DEFAULT_DISK)->delete($filename);
    }


}

?>