<?php

namespace App\Controllers;

use App\Models\SliderModel;
use App\Models\RoomModel;
use App\Models\MenuModel;
use App\Models\GreenhouseModel;

class Home extends BaseController
{
    protected $sliderModel;
    protected $roomModel;
    protected $menuModel;
    protected $greenhouseModel;

    public function __construct()
    {
        $this->sliderModel = new SliderModel();
        $this->roomModel = new RoomModel();
        $this->menuModel = new MenuModel();
        $this->greenhouseModel = new GreenhouseModel();
    }

    public function index()
    {
        $slider = $this->sliderModel->findAll();
        $room = $this->roomModel->findAll();

        $data = [
            'title' => 'KJHotel',
            'slider' => $slider,
            'room' => $room,
        ];

        return view('pages/home', $data);
    }

    public function greenhouse()
    {
        // search
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $greenhouse = $this->greenhouseModel->search($keyword);
            $data = [
                'title' => 'Greenhouse',
                'greenhouse' => $greenhouse->paginate(6, 'greenhouse'),
                'pager' => $this->greenhouseModel->pager,
            ];
        } else {
            $greenhouse = $this->greenhouseModel->findAll();
            $data = [
                'title' => 'Greenhouse',
                'greenhouse' => $greenhouse,
            ];
        }

        return view('pages/greenhouse', $data);
    }

    public function menu()
    {
        $keyword = $this->request->getVar('keyword');
        $categories = $this->request->getVar('categories');

        if ($keyword) {
            $menu = $this->menuModel->search($keyword)->findAll();
        } elseif ($categories) {
            $menu = $this->menuModel->where('kategori', $categories)->findAll();
        } elseif ($keyword && $categories) {
            $menu = $this->menuModel->search($keyword)->where('kategori', $categories)->findAll();
        } else {
            $menu = $this->menuModel->findAll();
        }

        $data = [
            'title' => 'Menu',
            'menu' => $menu,
        ];

        return view('pages/menu', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
        ];

        return view('pages/contact', $data);
    }
}
