<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LabelNameController extends Controller
{
    public function label1(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        $price = $request->get('price');
        $category = $request->get('category');
        $events = $queryBuilder->paginate(9)->appends(['search' => $search]);
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                ->orWhere('Tag', 'like', '%' . $search . '%')
                ->orWhere('labelTitle', 'like', '%' . $search . '%');

        }
        $labelName = Product::query()->where('labelName', 'like', 'Monstercat')->limit(20)->get();

        if ($price == 1) {
            $queryBuilder = $queryBuilder->whereBetween('price', [0, 20]);
        }
        if ($price == 2) {
            $queryBuilder = $queryBuilder->whereBetween('price', [20, 5]);
        }
        if ($price == 3) {
            $queryBuilder = $queryBuilder->whereBetween('price', [50, 100]);
        }
        if ($price == 4) {
            $queryBuilder = $queryBuilder->where('price', '>', 100);
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
        $newProduct = Product::query()->orderBy('id', 'DESC')->take(6)->get();
        return view('client/labelName/labelName1', [
            'list' => $events,
            'newProduct' => $newProduct,
            'price' => $price,
            'labelName' => $labelName,
            'category' => $category
        ]);
    }

    public function label2(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        $price = $request->get('price');
        $category = $request->get('category');
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                ->orWhere('Tag', 'like', '%' . $search . '%')
                ->orWhere('labelTitle', 'like', '%' . $search . '%');
        }
        $labelName = Product::query()->where('labelName', 'like', 'UltraSonic')->limit(21)->get();

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
            $queryBuilder = $queryBuilder->where('price', '>', 100);
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
        $newProduct = Product::query()->orderBy('id', 'DESC')->take(6)->get();
        return view('client/labelName/labelName2', [
            'list' => $events,
            'newProduct' => $newProduct,
            'price' => $price,
            'labelName' => $labelName,
            'category' => $category
        ]);
    }

    public function label3(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        $price = $request->get('price');
        $labelName = $request->get('labelName');
        $category = $request->get('category');
        $label = Product::query()->where('labelName', 'like', 'Dharma Studio')->limit(21)->get();
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                ->orWhere('Tag', 'like', '%' . $search . '%')
                ->orWhere('labelTitle', 'like', '%' . $search . '%');
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
            $queryBuilder = $queryBuilder->where('price', '>', 100);
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
        $newProduct = Product::query()->orderBy('id', 'DESC')->take(6)->get();
        return view('client/labelName/labelName3', [
            'list' => $events,
            'newProduct' => $newProduct,
            'price' => $price,
            'labelName' => $labelName,
            'label' => $label,
            'category' => $category
        ]);
    }

    public function label4(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        $price = $request->get('price');
        $labelName = $request->get('labelName');
        $category = $request->get('category');
        $label = Product::query()->where('labelName', 'like', 'Revealed')->limit(21)->get();
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                ->orWhere('Tag', 'like', '%' . $search . '%')
                ->orWhere('labelTitle', 'like', '%' . $search . '%');
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
        $newProduct = Product::query()->orderBy('id', 'DESC')->take(6)->get();
        return view('client/labelName/labelName4', [
            'list' => $events,
            'newProduct' => $newProduct,
            'price' => $price,
            'labelName' => $labelName,
            'label' => $label,
            'category' => $category
        ]);
    }


}



