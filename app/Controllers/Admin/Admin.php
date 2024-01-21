<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SliderModel;
use App\Models\RoomModel;
use App\Models\MenuModel;
use App\Models\GreenhouseModel;

class Admin extends BaseController
{
    protected $sliderModel;
    protected $roomModel;
    protected $menuModel;
    protected $greenhouseModel;

    public function __construct(){
        $this->sliderModel = new SliderModel();
        $this->roomModel = new RoomModel();
        $this->menuModel = new MenuModel();
        $this->greenhouseModel = new GreenhouseModel();
    }

    public function index()
    {
        $slider = $this->sliderModel->countAll();
        $room = $this->roomModel->countAll();
        $menu = $this->menuModel->countAll();
        $greenhouse = $this->greenhouseModel->countAll();

        $data = [
            'title' => 'KJHotel',
            'slider' => $slider,
            'room' => $room,
            'menu' => $menu,
            'greenhouse' => $greenhouse,
        ];

        return view('admin/index', $data);
    }
}
