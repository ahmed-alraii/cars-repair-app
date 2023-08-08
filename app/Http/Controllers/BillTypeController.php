<?php

namespace App\Http\Controllers;

use App\Common\Common;
use App\Http\Requests\BillTypeRequest;
use App\Models\BillType;
use Illuminate\Http\Request;

class BillTypeController extends Controller
{
    use Common;
    public function index()
    {

        $records = BillType::orderBy('created_at')->paginate(5);
        $data = request()->only(['search' , 'searchById']);

        if(request()->has('search')){

            $records = BillType::orderBy('created_at')
                ->orWhere('name_ar' , 'like' , '%'  . $data['search'] . '%' )
                ->orWhere('name_en' , 'like' , '%'  . $data['search'] . '%' )
                ->paginate(5);
        }

        if( request()->has('searchById')){
            $records = BillType::orderBy('created_at')
                ->where('id' ,  $data['searchById'] )
                ->paginate(5);
        }


        $num = ($records->currentPage() - 1) * $records->perPage() + 1;
        return view('bill_type.index')->with(['records' => $records , 'num' => $num]);
    }

    public function create()
    {

        return view('bill_type.create');
    }

    public function store(BillTypeRequest $request)
    {
        $data = $request->all();
        $res = BillType::create($data);
        $this->sendFlashMessage($res , 'Bill-Type' , 'Added');
        return redirect()->route('bill_types.index', app()->getLocale());
    }

    public function show(Request $request)
    {
        $id =  $request->route()->parameter('bill_type');
        $record = BillType::find($id);
        return view('bill_type.show')->with(['record' => $record ]);
    }

    public function edit(Request $request)
    {
        $id =  $request->route()->parameter('bill_type');
        $record = BillType::find($id);
        return view('bill_type.edit')->with(['record' => $record ]);
    }

    public function update(BillTypeRequest $request)
    {
        $data = $request->all();
        $record = BillType::find($data['id']);
        $res = $record->update($data);
        $this->sendFlashMessage($res , 'Bill-Type' , 'Updated');

        return redirect()->route('bill_types.index', app()->getLocale());
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $record = BillType::find($data['id']);
        $res = $record->delete();
        $this->sendFlashMessage($res , 'Bill-Type' , 'Deleted');
        return redirect()->route('bill_types.index', app()->getLocale());
    }
}
