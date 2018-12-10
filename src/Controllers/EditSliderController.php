<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 10/12/18
 * Time: 20:04
 */

namespace SliderPhp\Controllers;
use SliderPhp\Model\Slider;
use SliderPhp\Controllers\FileUploadController;
use DB;


class EditSliderController {

    public function invoke($data, $files) {

        $db = new DB('localhost', 'demo_slider','demo_slider_us','password');
        $slider = new Slider();
        $slider->setId($data['id']);
        $slider->setLink($data['url-slider']);
        $slider->setActive( $data['active']);
        $slider->setNewWindow($data['new_window']);
        $slider->setTypeVideo(1);
        $slider->setPosition(Slider::getPositionById($data['id']));

        $slider->update();
    }

}