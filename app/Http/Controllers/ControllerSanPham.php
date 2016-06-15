<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SanPham;

class ControllerSanPham extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanpham = SanPham::all();
        return $sanpham;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanpham = new SanPham;
        $sanpham->TenSP = $request->input("TenSP");
        $sanpham->HinhSP = $request->input("HinhSP");
        $sanpham->Gia = $request->input("Gia");

        $sanpham->save();

        // trả về sản phẩm mới đc lưu có 2 cách
        // return $sanpham;
        return Response($sanpham,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sanpham = SanPham::find($id);
        return $sanpham;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sanpham = SanPham::find($id);
        $sanpham->TenSP = $request->input("TenSP");
        $sanpham->HinhSP = $request->input("HinhSP");
        $sanpham->Gia = $request->input("Gia");

        $sanpham->save();

        return Response($sanpham,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanpham = SanPham::find($id);
        $sanpham->delete();
    }
}
