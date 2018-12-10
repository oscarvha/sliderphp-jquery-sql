<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 6/12/18
 * Time: 9:57
 */

namespace SliderPhp\Controllers;
use DB;
use SliderPhp\Model\Slider;


class CreateSliderController
{

    public function invoke($data, $files){


        $db = new DB('localhost', 'demo_slider','demo_slider_us','password');
        $slider = new Slider();
        $slider->setLink($data['url-slider']);
        $slider->setActive( $data['active']);
        $slider->setNewWindow($data['new_window']);
        $fileUploadController = new FileUploadController($files);
        $slider->setTypeVideo($fileUploadController->isFileVideo());
        $maxPosition = $db->row("SELECT MAX(position) FROM slider")['MAX(position)'];

        if(isset($maxPosition)){
            $slider->setPosition($maxPosition + 1);
        }else{
            $slider->setPosition(1);
        }
        $slider->setImage($fileUploadController->uploadFile());
        $slider->saveSlider();
        header('Location: '.'../admin.php?save=1');

    }


}