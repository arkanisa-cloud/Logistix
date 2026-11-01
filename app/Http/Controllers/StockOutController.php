<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\StockOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class StockOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stockOuts = StockOut::with('item')->get();
        return view('stock_outs.index', compact('stockOuts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Item::all();
        return view('stock_outs.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'item_id' => 'required|integer|exists:items,id',
            'quantity' => 'required|integer|min:1',
            'recipent' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string|max:255'
        ]);

        DB::transaction(function () use ($data){
            $item = Item::lockForUpdate()->findOrFail($data['item_id']);
            if ($item->quantity < $data['quantity']){
                throw ValidationException::withMessages(['quantity' => 'Stok tidak mencukupi.']);
            }
            $item->decrement('quantity', $data['quantity']);
            StockOut::create($data);
        });

        return redirect()->route('stock-outs.index');
    }

 
}
