<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 6/12/18
 * Time: 9:59
 */


require '../vendor/autoload.php';

use SliderPhp\Controllers\CreateSliderController;
use SliderPhp\Model\Slider;
use SliderPhp\Controllers\ChangePositionController;
use SliderPhp\Controllers\ReorderSliderController;
use SliderPhp\Controllers\EditSliderController;


if(isset($_GET['delete'])){

    $position  = Slider::getPositionById($_GET['delete']);
    $image = Slider::getImageByID($_GET['delete']);
    unlink(dirname(__FILE__).'/Controllers/uploads/'.$image );
    $slider = new Slider($_GET['delete']);
    $slider->delete($slider->variables);
    $reOrderController = new ReorderSliderController();
    $reOrderController->invoke($position);
    header('Location: '.'../admin.php?save=1');

}

if(isset($_POST['action'])) {
    switch($_POST['action'])
    {

        case 'add':
            $createController = new CreateSliderController();
            $createController->invoke($_POST, $_FILES);
            break;

        case 'edit':
            $editController = new EditSliderController();
            $editController->invoke($_POST, $_GET);
            break;

        default:
            echo 'error';
    }
}

if(isset($_GET['move'])) {

    $changeController = new ChangePositionController();
    $changeController->invoke($_GET['id'], $_GET['move']);

}


