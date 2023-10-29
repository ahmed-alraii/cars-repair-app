<?php

namespace App\Http\Controllers;

use App\Common\Common;
use App\Enums\BuyerType;
use App\Http\Requests\BuyCarRequest;
use App\Models\BuyCar;
use Illuminate\Http\Request;

class BuyCarController extends Controller
{
    use Common;
    public function index()
    {

        // add migration for car_cade column

        $records = BuyCar::orderBy('created_at')->paginate(5);
        $data = request()->only(['search' , 'searchByCode']);

        if(request()->has('search')){

            $records = BuyCar::orderBy('created_at')
                ->orWhere('client_name' , 'like' , '%'  . $data['search'] . '%' )
                ->orWhere('car_name' , 'like' , '%'  . $data['search'] . '%' )
                ->orWhere('car_model' , 'like' , '%'  . $data['search'] . '%' )
                ->orWhere('car_brand' , 'like' , '%'  . $data['search'] . '%' )
                ->paginate(5);
        }

        if( request()->has('searchByCode')){
            $records = BuyCar::orderBy('created_at')
                ->where('car_code' ,  $data['searchByCode'] )
                ->paginate(5);
        }


        $num = ($records->currentPage() - 1) * $records->perPage() + 1;
        return view('buy_car.index')->with(['records' => $records , 'num' => $num]);
    }

    public function create()
    {
        return view('buy_car.create');
    }

    public function store(BuyCarRequest $request)
    {
        $data = $request->all();

        $res = BuyCar::create($data);
        $this->sendFlashMessage($res , 'Buy-Car' , 'Added');
        return redirect()->route('buy_cars.index', app()->getLocale());
    }

    public function show(Request $request)
    {
        $id =  $request->route()->parameter('buy_car');
        $record = BuyCar::find($id);
        return view('buy_car.show')->with(['record' => $record ]);
    }

    public function edit(Request $request)
    {
        $id =  $request->route()->parameter('buy_car');
        $record = BuyCar::find($id);
        return view('buy_car.edit')->with(['record' => $record]);
    }

    public function update(BuyCarRequest $request)
    {
        $data = $request->all();
        $record = BuyCar::find($data['id']);
        $res = $record->update($data);
        $this->sendFlashMessage($res , 'Buy-Car' , 'Updated');

        return redirect()->route('buy_cars.index', app()->getLocale());
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $record = BuyCar::find($data['id']);
        $res = $record->delete();
        $this->sendFlashMessage($res , 'Buy-Car' , 'Deleted');
        return redirect()->route('buy_cars.index', app()->getLocale());
    }
}
