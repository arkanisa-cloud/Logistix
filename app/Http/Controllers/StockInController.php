<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\StockIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stockIns = StockIn::with('item')->get();
        return view('stock_ins.index', compact('stockIns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Item::all();
        return view('stock_ins.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'item_id' => 'required|integer|exists:items,id',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|date',
            'description' => 'nullable|string|max:255'
            ]);
            
        DB::transaction(function () use ($data) {
            $item = Item::findOrFail($data['item_id']);
            $item->increment('quantity', $data['quantity']);
            StockIn::create($data);
        });
        
        return redirect()->route('stock-ins.index');
    }
}
