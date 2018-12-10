<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 9/12/18
 * Time: 11:01
 */

namespace SliderPhp\Controllers;


use SliderPhp\Model\Slider;

class ChangePositionController {

    public function invoke($idSlider, $direction) {

        if($direction === 'up'){
                $currentSliderPosition = Slider::getPositionById($idSlider);
                $endPosition = $currentSliderPosition - 1;

                if($endPosition == 0){
                    die(json_encode(array(
                        'result' => false,
                        'position' =>$getProductPosition
                    )));

                }
                Slider::changePositionSlider($endPosition, $currentSliderPosition);
                Slider::changePosition($idSlider, $endPosition);

        }else if($direction === 'down'){

            $currentSliderPosition = Slider::getPositionById($idSlider);
            $lastPosition = Slider::getLastPosition();

            $endPosition = $currentSliderPosition + 1;

            if($endPosition > $lastPosition){
                die(json_encode(array(
                    'result' => false,
                    'position' => $lastPosition
                )));

            }

            Slider::changePositionSlider($endPosition, $currentSliderPosition);
            Slider::changePosition($idSlider, $endPosition);

            $result = true;

//            die(json_encode(array(
//                'result' => $result,
//                'position' =>$getProductPosition
//            )));
        }

    }

}