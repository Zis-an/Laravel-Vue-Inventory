<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index() {
        return Inertia::render('Admin/Slider/Index');
    }

    public function create() {
        return Inertia::render('Admin/Slider/Create');
    }

    public function store(Request $request) {
        $request->validate([
            'slider_position' => 'required|numeric|max:2',
            'slider_image' => '|required|file|mimes:jpg,jpeg,png',
        ]);

        $model = new Slider();

        if($request->slider_image) {
            $model->image = $request->file('slider_image')->store('images/slider', 'public');
        }

        $model->position = $request->slider_position;

        $model->save();

        return redirect()->route('slider.index');
    }

}