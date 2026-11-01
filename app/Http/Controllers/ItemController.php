<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Location;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Item::with(['category', 'location']);

        if ($request->filled('search')){
            $search = $request->input('search');
            $query->where(function ($q) use ($search){
                $q->where('name', 'like', "%{$search}%")
                ->orWhere('code', 'like', "%{$search}%");
            });
        }
        
        if($request->filled('category_id')){
            $categoryId = $request->input('category_id');
            $query->where('category_id', $categoryId);
        }

        if($request->filled('condition')){
            $condition = $request->input('condition');
            $query->where('condition', $condition);
        }

        $items = $query->get();
        $categories = Category::all();


        return view('items.index', compact('items', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();
        return view('items.create', compact('categories', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:items,code',
            'description' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'location_id' => 'required|exists:locations,id',
            'condition' => 'required|string|max:255|in:baik,rusak_ringan,rusak_berat'
        ]);

        Item::create($data);
        return redirect()->route('items.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $categories = Category::all();
        $locations = Location::all();
        return view('items.edit', compact('item', 'categories', 'locations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:items,code,' . $item->id,
            'description' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'location_id' => 'required|exists:locations,id',
            'condition' => 'required|string|max:255|in:baik,rusak_ringan,rusak_berat'
        ]);

        $item->update($data);
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        if($item->stockIns()->exists() || $item->stockOuts()->exists()){
            return redirect()->route('items.index')->withErrors(['error' => 'Barang tidak dapat dihapus karena memiliki riwayat stok.']);
        }

        $item->delete();
        return redirect()->route('items.index');
    }
}
