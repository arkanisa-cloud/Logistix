<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\StockIn;
use App\Models\StockOut;

class ReportController extends Controller
{
    public function index()
    {
        $totalItems = Item::count();
        $totalStock = Item::sum('quantity');
        $totalIn = StockIn::sum('quantity');
        $totalOut = StockOut::sum('quantity');
        $items = Item::with(['category', 'location'])->get();

        return view('reports.index', compact('totalItems', 'totalStock', 'totalIn', 'totalOut', 'items'));
    }
}
