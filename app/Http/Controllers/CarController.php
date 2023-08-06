<?php

namespace App\Http\Controllers;

use App\Common\Common;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Models\Container;
use Illuminate\Http\Request;

class CarController extends Controller
{
    use Common;
    public function index()
    {

        $records = Car::orderBy('created_at')->paginate(5);
        $data = request()->only(['search' , 'searchById']);

        if(request()->has('search')){

            $records = Car::orderBy('created_at')
                ->where('id' ,  $data['search'] )
                ->orWhere('name' , 'like' , '%'  . $data['search'] . '%' )
                ->orWhere('model' , 'like' , '%'  . $data['search'] . '%' )
                ->paginate(5);
        }

        if( request()->has('searchById')){
            $records = Car::orderBy('created_at')
                ->where('id' ,  $data['searchById'] )
                ->paginate(5);
        }


        $num = ($records->currentPage() - 1) * $records->perPage() + 1;
        return view('car.index')->with(['records' => $records , 'num' => $num]);
    }

    public function create()
    {

        return view('car.create')->with(['containers' => Container::all()]);
    }

    public function store(CarRequest $request)
    {
        $data = $request->all();
        $res = Car::create($data);
        $this->sendFlashMessage($res , 'Car' , 'Added');
        return redirect()->route('_cars.index', app()->getLocale());
    }

    public function show(Request $request)
    {
        $id =  $request->route()->parameter('_car');
        $record = Car::with('container')->find($id);
        return view('car.show')->with(['record' => $record ]);
    }

    public function edit(Request $request)
    {
        $id =  $request->route()->parameter('_car');
        $record = Car::find($id);
        return view('car.edit')->with(['record' => $record , 'containers' => Container::all() ]);
    }

    public function update(CarRequest $request)
    {
        $data = $request->all();
        $record = Car::find($data['id']);
        $res = $record->update($data);
        $this->sendFlashMessage($res , 'Car' , 'Updated');

        return redirect()->route('_cars.index', app()->getLocale());
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $record = Car::find($data['id']);
        $res = $record->delete();
        $this->sendFlashMessage($res , 'Car' , 'Deleted');
        return redirect()->route('_cars.index', app()->getLocale());
    }
}
