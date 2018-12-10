<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 8/12/18
 * Time: 19:04
 */


namespace SliderPhp;

use SliderPhp\Model\Slider;
class FrontController {

    public function getSlider(){

        return Slider::getAllSliders();

    }
}