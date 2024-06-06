<?php

namespace App\Traits;

trait UploadFile
{
    public function upload($imgfile,$path){
        $imgExt =$imgfile->getClientOriginalExtension();
        $fileName=time().'.'.$imgExt;
       $imgfile->move($path,$fileName);
       return $fileName;
    }
}
