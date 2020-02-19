<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\models\Property;
class PropertiesController extends Controller
{
    /**
     * Metodo del controlador donde se carga la pagina de todas las propediades listadas con su paginación
     */
    public function index(){
        $order = 'desc';
        $properties = Property::with(['feature' => function ($query) use ($order) {
            $query->orderBy('price', $order);
        }])->paginate(20);
        return view('vendor.rw-real-estate.properties', compact('properties'));
    }
    /**
     * Metodo donde se carga la vista de una propiedad
     */
    public function property($id){
        $property = Property::findOrFail($id);
        return view('vendor.rw-real-estate.property', compact('property'));
    }
}
