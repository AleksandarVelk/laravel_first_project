<?php

namespace App\Http\Controllers;
use App\Agriproducts as AGmodel;
use App\Http\Requests\CreateProductsRequest;
use Html;
use Carbon\Carbon;
use App\Http\Requests as Requests;
use App\Http\Controllers\Controller;

class AgriproductsController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth', ['expect' => ['index','show']]);
	}
	public function index()
    {
    	\Auth::User();
        $getProd = AGmodel::latest('published_at')->published()->get();
        return view('index')->with('getProd',$getProd);        
    }

    public function show($id)
    {
    	$exacId =AGmodel::findOrFail($id);

    	return view('product')->with('exacId',$exacId);
    }

    public function create()
    {
    	return view('create');
    }

    public function store(CreateProductsRequest $request)
    {
    	$product = new AGmodel($request->all());
    	\Auth::user()->products()->save($product);	
    	    	
    	return redirect('homepage');
    }

    public function edit($id)
    {
    	$product = AGmodel::FindOrFail($id);
    	return view('edit',compact('product'));	
    }

    public function update($id, CreateProductsRequest $request)
    {
    	$updProd = AGmodel::findOrFail($id);
    	$updProd->update($request->all());

    	return redirect('homepage');
 
    }
}
