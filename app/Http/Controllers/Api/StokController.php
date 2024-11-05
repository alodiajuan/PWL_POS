<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\StokModel;
use Illuminate\Http\Request;
class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return StokModel::all();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stok = StokModel::create($request->all());
        return response()->json($stok,201);
    }
    /**
     * Display the specified resource.
     */
    public function show(StokModel $stok)
    {
        return StokModel::find($stok);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StokModel $stok)
    {
        $stok->update($request->all());
        return StokModel::find($stok);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StokModel $stok)
    {
        $stok->delete();
        return response()->json([
            'success'   => true,
            'message'   => 'Data Terhapus',
        ]);
    }
}