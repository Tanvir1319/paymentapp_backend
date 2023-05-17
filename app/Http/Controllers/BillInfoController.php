<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillInfo;

class BillInfoController extends Controller
{
    //
    public function index(){
        $info = BillInfo::get();
        return json_decode($info);
    }

    public function submitInfo(Request $request){
        $info = new BillInfo;
        $info->brand_name = $request->post('brand_name');
        $info->brand_id = $request->post('brand_id');
        $info->due= $request->post('due');
        $info->status= $request->post('status');
        $info->due_more = $request->post('due_more');
        
        if($info-> save()){
            return response()->json([
                'code' => 0,
                'msg' => 'success',
            ]);
        }
        return response()->json([
            'code' => 1,
            'msg' => 'failed',
        ]);
    }
}
