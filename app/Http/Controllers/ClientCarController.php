<?php

namespace App\Http\Controllers;

use App\Common\Common;
use App\Http\Requests\ClientCarRequest;
use App\Models\ClientCar;
use Illuminate\Http\Request;

class ClientCarController extends Controller
{
    use Common;
    public function index()
    {

        // add migration for car_cade column

        $records = ClientCar::orderBy('created_at')->paginate(5);
        $data = request()->only(['search' , 'searchByCode']);

        if(request()->has('search')){

            $records = ClientCar::orderBy('created_at')
                ->orWhere('client_name' , 'like' , '%'  . $data['search'] . '%' )
                ->orWhere('car_name' , 'like' , '%'  . $data['search'] . '%' )
                ->orWhere('car_model' , 'like' , '%'  . $data['search'] . '%' )
                ->orWhere('car_brand' , 'like' , '%'  . $data['search'] . '%' )
                ->paginate(5);
        }

        if( request()->has('searchByCode')){
            $records = ClientCar::orderBy('created_at')
                ->where('car_code' ,  $data['searchByCode'] )
                ->paginate(5);
        }


        $num = ($records->currentPage() - 1) * $records->perPage() + 1;
        return view('client_car.index')->with(['records' => $records , 'num' => $num]);
    }

    public function create()
    {

        return view('client_car.create');
    }

    public function store(ClientCarRequest $request)
    {
        $data = $request->all();
        $res = ClientCar::create($data);
        $this->sendFlashMessage($res , 'Client-Car' , 'Added');
        return redirect()->route('cars_clients.index', app()->getLocale());
    }

    public function show(Request $request)
    {
        $id =  $request->route()->parameter('cars_client');
        $record = ClientCar::find($id);
        return view('client_car.show')->with(['record' => $record ]);
    }

    public function edit(Request $request)
    {
        $id =  $request->route()->parameter('cars_client');
        $record = ClientCar::find($id);
        return view('client_car.edit')->with(['record' => $record]);
    }

    public function update(ClientCarRequest $request)
    {
        $data = $request->all();
        $record = ClientCar::find($data['id']);
        $res = $record->update($data);
        $this->sendFlashMessage($res , 'Client-Car' , 'Updated');

        return redirect()->route('cars_clients.index', app()->getLocale());
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $record = ClientCar::find($data['id']);
        $res = $record->delete();
        $this->sendFlashMessage($res , 'Client-Car' , 'Deleted');
        return redirect()->route('cars_clients.index', app()->getLocale());
    }
}
