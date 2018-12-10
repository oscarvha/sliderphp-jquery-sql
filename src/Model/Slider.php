<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 6/12/18
 * Time: 12:15
 */

namespace SliderPhp\Model;

use SliderPhp\Infrastructure\CrudClass;
use DB;

class Slider extends CrudClass{

    protected $table = 'slider';
    protected $pk	 = 'id';
    public $variables = [
        'id' => '',
        'active' => '',
        'new_window' => '',
        'image' => '',
        'link' => '',
        'order' => '',
        'typeVideo' => ''
    ];

    private $active;
    private $id;
    private $new_window;
    private $image;
    private $link;
    private $typeVideo;
    private $position;

    public function saveSlider(){

        $this->variables['image'] = $this->image;
        $this->variables['link'] = $this->link;
        $this->variables['active'] = $this->active;
        $this->variables['position'] = $this->position;
        $this->variables['typeVideo'] = $this->typeVideo;
        $this->variables['new_window'] = $this->new_window;
        parent::create();
    }

    public function update(){
        $this->variables['id'] = $this->id;

        $this->variables['link'] = $this->link;
        $this->variables['active'] = $this->active;
        $this->variables['typeVideo'] = $this->typeVideo;
        $this->variables['new_window'] = $this->new_window;
        parent::save($this->id);
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getNewWindow()
    {
        return $this->new_window;
    }

    /**
     * @param mixed $new_window
     */
    public function setNewWindow($new_window)
    {
        if(!isset($new_window))
            $this->new_window = 0;
        else
        $this->new_window = $new_window;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        if(!isset($active) || $active == '')
            $this->active = 0;
        else
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getTypeVideo()
    {
        return $this->typeVideo;
    }

    /**
     * @param mixed $typeVideo
     */
    public function setTypeVideo($typeVideo)
    {
        $this->typeVideo = $typeVideo;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     *
     */
    public static function getAllSliders() {

        $db = new DB('localhost', 'demo_slider','demo_slider_us','password');
        $sliders = $db->query('SELECT * FROM slider ORDER BY position');
        return $sliders;

    }

    public static function getPositionById($idSlider) {

        $db = new DB('localhost', 'demo_slider','demo_slider_us','password');
        $position = $db->row('SELECT position FROM slider WHERE id='.$idSlider);

        return $position['position'];
    }

    public static function changePositionSlider($position, $positionEnd) {

        $db = new DB('localhost', 'demo_slider','demo_slider_us','password');
        $db->query('UPDATE slider SET position = '.$positionEnd. ' WHERE position = '.$position);

        return true;

    }


    public static function changePosition($idSlide, $position) {

        $db = new DB('localhost', 'demo_slider','demo_slider_us','password');
        $db->query('UPDATE slider SET position = '.$position. ' WHERE id = '.$idSlide);

        return true;

    }

    public static function getLastPosition() {
        $db = new DB('localhost', 'demo_slider','demo_slider_us','password');
        $maxPosition = $db->row("SELECT MAX(position) FROM slider")['MAX(position)'];
        return $maxPosition;
    }

    public static function reorderSlders($position)
    {
        if($position == Slider::getLastPosition())
            return true;

        $products = Slider::getAllSliders();
        $db = new DB('localhost', 'demo_slider','demo_slider_us','password');

        foreach($products as $product){

            if($product['position'] > $position){
                $positionNew = $product['position'] - 1;
                $db->query('UPDATE slider SET position = '.$positionNew. ' WHERE id = '.$product['id']);
            }
        }

    }

    public static function getImageByID($idSlider){
        $db = new DB('localhost', 'demo_slider','demo_slider_us','password');
        $image = $db->row('SELECT image FROM slider WHERE id= '.$idSlider);
        return $image['image'];
    }


}