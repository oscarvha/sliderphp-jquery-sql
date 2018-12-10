<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 9/12/18
 * Time: 12:05
 */

namespace SliderPhp\Controllers;
use SliderPhp\Model\Slider;

class ReorderSliderController
{
    public function invoke($position) {

        Slider::reorderSlders($position);

    }

}