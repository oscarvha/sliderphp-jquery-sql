<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 8/12/18
 * Time: 10:14
 */

namespace SliderPhp\Controllers;

class FileUploadController
{
    private $fileImagesExtension =  ['jpeg','jpg','png'];
    private $uploadFilesPath = '/uploads/';
    private $errors = [];
    private $fileName;
    private $fileSIze;
    private $fileTmpName;
    private $fileTpe;
    private $type;
    private $fileExtension;
    private $uploadPath;


    /**
     * FileUploadController constructor.
     * @param $files
     */
    public function __construct($files) {

        $this->fileName = $files['fileToUpload']['name'];
        $this->fileSIze = $files['fileToUpload']['size'];
        $this->fileTmpName  = $files['fileToUpload']['tmp_name'];
        $this->fileTpe= $files['fileToUpload']['type'];
        $this->fileExtension = strtolower(end(explode('.',$this->fileName)));
        $this->uploadPath =  dirname(__FILE__) . $this->uploadFilesPath . basename($this->fileName);

    }

    /**
     * @return bool|string
     */
    public function uploadFile() {

        if (! in_array($this->fileExtension,$this->fileImagesExtension)) {
            return false;
        }

        $didUpload = move_uploaded_file($this->fileTmpName, $this->uploadPath);

        if(!$didUpload){
            return false;
        }

        return $this->fileName;

    }

    /**
     * @return bool
     */
    public function isFileVideo() {
        if(preg_match('/video\/*/',$this->fileTpe)){
            return 1;
        }else{
            return 0;
        }
    }

}