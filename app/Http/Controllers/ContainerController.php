<?php

namespace App\Http\Controllers;

use App\Common\Common;
use App\Http\Requests\ContainerCarRequest;
use App\Http\Requests\ContainerRequest;
use App\Models\Car;
use App\Models\Container;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    use Common;
    public function index()
    {

        $records = Container::orderBy('created_at')->paginate(5);

        $data = request()->only(['search' , 'searchById']);

        if(request()->has('search')){
            $records = Container::orderBy('created_at')
                ->where('container_name' , 'like' , '%'  . $data['search'] . '%' )
                ->orWhere('container_number' , 'like' , '%'  . $data['search'] . '%' )
                ->paginate(5);
        }

        if( request()->has('searchById')){
            $records = Container::orderBy('created_at')
                ->where('id' ,  $data['searchById'] )
                ->paginate(5);
        }

        $num = ($records->currentPage() - 1) * $records->perPage() + 1;
        return view('container.index')->with(['records' => $records , 'num' => $num]);
    }

    public function create()
    {

        return view('container.create');
    }

    public function store(ContainerCarRequest $request)
    {
        $data = $request->all();
        $data['notes'] = $data['container_notes'];
        $container =  Container::create($data);

        $data['notes'] = $data['car_notes'];
        $data['container_id'] = $container->id;
        $res = Car::create($data);

        $this->sendFlashMessage($res , 'Container' , 'Added');
        return redirect()->route('containers.index', app()->getLocale());
    }

    public function show(Request $request)
    {
        $id =  $request->route()->parameter('container');
        $record = Container::with('cars')->find($id);
        return view('container.show')->with(['record' => $record ]);
    }

    public function edit(Request $request)
    {
        $id =  $request->route()->parameter('container');
        $record = Container::find($id);
        return view('container.edit')->with(['record' => $record ]);
    }

    public function update(ContainerRequest $request)
    {
        $data = $request->all();
        $record = Container::find($data['id']);
        $res = $record->update($data);
        $this->sendFlashMessage($res , 'Container' , 'Updated');

        return redirect()->route('containers.index', app()->getLocale());
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $record = Container::find($data['id']);
        $res = $record->delete();
        $this->sendFlashMessage($res , 'Container' , 'Deleted');
        return redirect()->route('containers.index', app()->getLocale());
    }
}
