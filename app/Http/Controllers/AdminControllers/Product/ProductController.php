<?php

namespace App\Http\Controllers\AdminControllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use Hash;
use Str;
use Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $lang, $pagination = 10)
    {        
        if($request->pagination) {
            $pagination = (int)$request->pagination;
        }
        
        $products = Product::orderByDesc('id')->paginate($pagination);

        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));
                
                $requestData = ['name_tm', 'name_en', 'name_ru', 'sale_type', 'price', 'sale_price', 'discount'];
    
                $products = Product::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->orderByDesc('id')->paginate($pagination);
            }
            
            return view('admin-panel.product.product-table', compact('products', 'pagination'))->render();
        }

        return view('admin-panel.product.product', compact('products', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('admin-panel.product.product-form', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductUpdateRequest $request)
    {
        if($request->file('images')){
            $images = $request->file('images');
            
            $date = date("d-m-Y H-i-s");
            
            foreach($images as $image){
                
                $filerandname = Str::random(10);
                $fileext = $image->getClientOriginalExtension();

                $filename = $filerandname . '.' . $fileext;
                
                $path = 'assets/product/' . Str::slug($request->name_tm . '-' . $date ) . '/';

                $image->move($path, $filename);

                $imageFit = Image::make($path . $filename)->fit(650, 770);

                $imageFitName = $filerandname . '-650x770.' . $fileext;
            
                $imageFit->save($path . $imageFitName , 80);
                
                $original = $path . $filename;
                $thumb = $path . $imageFitName;

                $imagesArray[] = [
                    'thumb' => $thumb,
                    'original' => $original
                ];

            }

            $product = new Product;

            $product->name_tm = $request->name_tm;
            $product->name_en = $request->name_en;
            $product->name_ru = $request->name_ru;
            $product->images = $imagesArray;
            $product->price = $request->price;
            $product->sale_type = $request->sale_type;
            
            if($request->discount){
                $product->sale_price = ($request->price - ($request->price*$request->discount/100));
                $product->discount = $request->discount;
            }

            $product->save();
            
            return redirect()->route('product.index', app()->getlocale())->with('success-create', 'The resource was created!');
        }

        return back()->with('error-create', 'no image selected');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Product $product)
    {
        return view('admin-panel.product.product-show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Product $product)
    {
        return view('admin-panel.product.product-form', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($lang, ProductRequest $request, Product $product)
    {
        if($request->file('images')){

            $this->deleteFolder($product);

            $images = $request->file('images');
            
            $date = date("d-m-Y H-i-s");
            
            foreach($images as $key => $image){

                $filerandname = Str::random(10);
                $fileext = $image->getClientOriginalExtension();

                $filename = $filerandname . '.' . $fileext;
                
                $path = 'assets/product/' . Str::slug($request->name_tm . '-' . $date . '-updated' ) . '/';

                $image->move($path, $filename);

                $imageFit = Image::make($path . $filename)->fit(650, 770);

                $imageFitName = $filerandname . '-650x770.' . $fileext;
            
                $imageFit->save($path . $imageFitName , 80);
                
                $original = $path . $filename;
                $thumb = $path . $imageFitName;

                $imagesArray[] = [
                    'thumb' => $thumb,
                    'original' => $original
                ];

            }

            $product->name_tm = $request->name_tm;
            $product->name_en = $request->name_en;
            $product->name_ru = $request->name_ru;
            $product->images = $imagesArray;
            $product->price = $request->price;
            $product->sale_type = $request->sale_type;
            
            if($request->discount != 0){
                $product->sale_price = ($request->price - ($request->price*$request->discount/100));
                $product->discount = $request->discount;
            } else if($request->discount == 0) {
                $product->sale_price = null;
                $product->discount = 0;
            }

            $product->update();
            
            return redirect()->route('product.index', app()->getlocale())->with('success-update', 'The resource was updated!');

        } else {
            
            $product->name_tm = $request->name_tm;
            $product->name_en = $request->name_en;
            $product->name_ru = $request->name_ru;
            $product->price = $request->price;
            $product->sale_type = $request->sale_type;
            
            if($request->discount != 0){
                $product->sale_price = ($request->price - ($request->price*$request->discount/100));
                $product->discount = $request->discount;
            } else if($request->discount == 0) {
                $product->sale_price = null;
                $product->discount = 0;
            }

            $product->update();

            return redirect()->route('product.index', app()->getlocale())->with('success-update', 'The resource was updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Product $product)
    {
        $this->deleteFolder($product);
        $product->delete();

        return redirect()->route('product.index', app()->getlocale())->with('success-delete', 'The resource was deleted!');
    }

    public function deleteFolder($product)
    {
        foreach($product->images as $deleteFolder){
            $folder = explode('/', $deleteFolder->thumb);
            
            if($folder[2] != 'baychay'){
                \File::deleteDirectory($folder[0] . '/' . $folder[1] . '/' . $folder[2]);
            }

            break;
        }
    }
}
