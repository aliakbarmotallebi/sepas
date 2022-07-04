<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class PorductController extends DashboardController
{
    use ImageUpload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductRepository $repository)
    {
        $products = $repository->all();

        return view(
            $this->theme.'products.index',
            compact('products')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select([
            'id', 'label',
            ])->get();

        return view(
            $this->theme.'products.create',
            compact('categories')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:products,title|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $request->merge([
            'image_url' => $this->uploadImage(
                request()->file('image')
            ),
        ]);

        $product = $request
                ->user()
                ->products()
                ->create($request->all());

        if ($product instanceof Product) {
            alert()->success('با موفقیت ایجاد شد!');
        }

        return redirect()->route('dashboard.products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::select([
            'id', 'label',
            ])->get();

        return view(
            $this->theme.'products.edit',
            compact('product', 'categories')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        if ($request->has('image')) {
            $request->merge([
                'image_url' => $this->uploadImage(
                    request()->file('image')
                ),
            ]);
        }

        $saved = $product->update($request->all());

        if ($saved) {
            alert()->success('با موفقیت ویرایش شد!');
        }

        return redirect()->route('dashboard.products.index');
    }

    public function uploads(Product $product)
    {
        return view(
            $this->theme.'products.uploads',
            compact('product')
        );
    }
}
