<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumb = [
          [
            'href' => '',
            'name' => config('consts.category.CATEGORY_NAME')
          ]
        ];
          $items = DB::table('category')->get();
          return view('category.index', [
            'breadcrumb' => $breadcrumb,
            'items'      => $items
          ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumb = [
          [
            'href' => config('consts.category.CATEGORY_PATH'),
            'name' => config('consts.category.CATEGORY_NAME')
          ],
          [
              'href' => '',
              'name' => '新規登録'
          ]
        ];
          return view('category.create', [
            'breadcrumb' => $breadcrumb
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate_rule = [
            'name' => 'required| max:20',
            'kana' => 'required| max:50'
        ];
        $this->validate($request, $validate_rule);
        $param = [
            'name' => $request->name,
            'kana' => $request->kana
        ];

        DB::table('category')->insert($param);
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $breadcrumb = [
          [
            'href' => config('consts.category.CATEGORY_PATH'),
            'name' => config('consts.category.CATEGORY_NAME')
          ],
          [
              'href' => '',
              'name' => '編集'
          ]
        ];
        $item = DB::table('category')->where('category_id', $id)->first();
          return view('category.show', [
            'breadcrumb' => $breadcrumb,
            'item'       => $item
          ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $breadcrumb = [
          [
            'href' => config('consts.category.CATEGORY_PATH'),
            'name' => config('consts.category.CATEGORY_NAME')
          ],
          [
              'href' => '',
              'name' => '編集'
          ]
        ];
        $item = DB::table('category')->where('category_id', $id)->first();
          return view('category.edit', [
            'breadcrumb' => $breadcrumb,
            'item'       => $item
          ]);
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('category')->where('category_id', $id)->delete();
        return redirect('/category');
    }
}
