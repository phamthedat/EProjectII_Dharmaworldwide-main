<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
//$newProduct = Product::query()->orderBy('id', 'DESC')->take(6)->get();

    public function index(Request $request)
    {
        $queryBuilder = Product::query();
        $newProduct = Product::query()->orderBy('id', 'DESC')->take(6)->get();
        $search = $request->get('search');
        $price = $request->get('price');
        $labelName = $request->get('labelName');
        $category = $request->get('category');
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                -> orWhere('Tag', 'like', '%' . $search . '%')
                -> orWhere('labelTitle', 'like', '%' . $search . '%');
        }
        if ($price == 1) {
            $queryBuilder = $queryBuilder->whereBetween('price', [0, 20]);
        }
        if ($price == 2) {
            $queryBuilder = $queryBuilder->whereBetween('price', [20, 50]);
        }
        if ($price == 3) {
            $queryBuilder = $queryBuilder->whereBetween('price', [50, 100]);
        }
        if ($price == 4) {
            $queryBuilder = $queryBuilder->where('price', '>' ,100);
        }

        if ($labelName == 1) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Monstercat');
        }
        if ($labelName == 2) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Ultrasonic');
        }
        if ($labelName == 3) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Dharma Studio');
        }
        if ($labelName == 4) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Revealed');
        }

        if ($category == 1) {
            $queryBuilder = $queryBuilder->where('category', '=', 1);
        }
        if ($category == 2) {
            $queryBuilder = $queryBuilder->where('category', '=', 2);
        }
        if ($category == 3) {
            $queryBuilder = $queryBuilder->where('category', '=', 3);
        }
        $events = $queryBuilder->paginate(9)->appends(['search' => $search]);
        return view('client/products', [
            'list' => $events,
            'price' => $price,
            'labelName' => $labelName,
            'category' => $category,
            'newProduct' => $newProduct
        ]);
    }

    public function home(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        $labelName = $request->get('labelName');
        $rau = Product::query()->where('category', '=', 1)->limit(8)->get();
        $cu = Product::query()->where('category', '=', 2)->limit(8)->get();
        $qua = Product::query()->where('category', '=', 3)->limit(8)->get();
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                -> orWhere('Tag', 'like', '%' . $search . '%')
                -> orWhere('labelTitle', 'like', '%' . $search . '%');
        }

        if ($labelName == 1) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Monstercat');
        }
        if ($labelName == 2) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Ultrasonic');
        }
        if ($labelName == 3) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Dharma Studio');
        }
        if ($labelName == 4) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Revealed');
        }

        $events = $queryBuilder->paginate(9)->appends(['search' => $search]);
        $newProduct = Product::query()->orderBy('id', 'DESC')->take(200)->get();
        return view('client/home', [
            'list' => $events,
            'newProduct' => $newProduct,
            'labelName' => $labelName,
            'rau' => $rau,
            'cu' => $cu,
            'qua' => $qua,
        ]);
    }

    public function list(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        $price = $request->get('price');
        $labelName = $request->get('labelName');
        $category = $request->get('category');
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                -> orWhere('Tag', 'like', '%' . $search . '%')
                -> orWhere('labelTitle', 'like', '%' . $search . '%');
        }
        if ($price == 1) {
            $queryBuilder = $queryBuilder->whereBetween('price', [0, 20]);
        }
        if ($price == 2) {
            $queryBuilder = $queryBuilder->whereBetween('price', [20, 50]);
        }
        if ($price == 3) {
            $queryBuilder = $queryBuilder->whereBetween('price', [50, 100]);
        }
        if ($price == 4) {
            $queryBuilder = $queryBuilder->where('price', '>' ,100);
        }

        if ($labelName == 1) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Monstercat');
        }
        if ($labelName == 2) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Ultrasonic');
        }
        if ($labelName == 3) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Dharma Studio');
        }
        if ($labelName == 4) {
            $queryBuilder = $queryBuilder->where('labelName', 'like', 'Revealed');
        }
        if ($category == 1) {
            $queryBuilder = $queryBuilder->where('category', '=', 1);
        }
        if ($category == 2) {
            $queryBuilder = $queryBuilder->where('category', '=', 2);
        }
        if ($category == 3) {
            $queryBuilder = $queryBuilder->where('category', '=', 3);
        }
        $events = $queryBuilder->paginate(10)->appends(['search' => $search]);
        return view('/admin/products/list-products', [
            'list' => $events,
            'price' => $price,
            'labelName' => $labelName,
            'category' => $category
        ]);
    }



    public function show($id)
    {
        //
    }


    public function create()
    {
        return view('/admin/products/create-products');
    }


    public function store(FormProductRequest $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $request->validated();
        $product->save();
        return redirect()->route('list-product')->with('store','New successful product added');
    }

    public function edit($id)
    {
        $detail = Product::find($id);
        return view('/admin/products/edit-products', [
            'edit' => $detail
        ]);
    }

    public function update(FormProductRequest $request, $id)
    {

        $detail = Product::find($id);
        $request->validated();
        $detail->update($request->all());
        $detail->save();
        return redirect()->route('list-product')->with('update','Product update successful');
    }


    public function destroy($id)
    {
        $detail = Product::find($id);
        $detail->delete();
        return redirect()->route('list-product')->with('destroy','Delete product successfully');;
    }
}
