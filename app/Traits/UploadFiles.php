<?php

namespace App\Traits;

trait UploadFiles
{
    public function UploadFile($file, $path)
    {
        //get file name with extention
        $filenameWithExt =str_replace(' ', '_', $file->getClientOriginalName());
        //get just file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //GET EXTENTION
        $extention = $file->getClientOriginalExtension();
        //file name to store
        $fileNameToStore = $path.'/'.$filename.'_'.time().'.'.$extention;
        //upload image
        $path = $file->storeAs($path, $filename.'_'.time().'.'.$extention, ['disk' => 'public']);

        return $fileNameToStore;
    }

    // Update file function
    public function Updatefile($file, $path, $oldFile)
    {
        if(isset($oldFile)){
        //Remove old image
       // unlink(public_path('storage/'.$oldFile));
        }
        //Upload new image
        $new_path = $this->UploadFile($file, $path);

        return $new_path;
    }
}
