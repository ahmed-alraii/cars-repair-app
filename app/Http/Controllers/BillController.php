<?php

namespace App\Http\Controllers;

use App\Common\Common;
use App\Http\Requests\BillRequest;
use App\Models\Bill;
use App\Models\BillType;
use Illuminate\Http\Request;

class BillController extends Controller
{
    use Common;

    public function index()
    {


        $data = request()->only(['search', 'searchById', 'car_id']);

        $records = Bill::where('car_id', $data['car_id'])
            ->orderBy('created_at')->paginate(5);


        if (request()->has('search')) {

            $records = Bill::orderBy('created_at')
                ->where('car_id', $data['car_id'])
                ->orWhere('company_name', 'like', '%' . $data['search'] . '%')
                ->orWhere('company_phone', 'like', '%' . $data['search'] . '%')
                ->paginate(5);
        }

        if (request()->has('searchById')) {
            $records = Bill::where('car_id', $data['car_id'])
                ->where('id', $data['searchById'])
                ->orderBy('created_at')
                ->paginate(5);
        }

        if (request()->has('car_id')) {
            $records = Bill::where('car_id', $data['car_id'])
                ->orderBy('created_at')
                ->paginate(5);
        }


        $num = ($records->currentPage() - 1) * $records->perPage() + 1;
        return view('bill.index')->with(['records' => $records, 'num' => $num]);
    }

    public function create()
    {

        return view('bill.create')->with(['billTypes' => BillType::all()]);
    }

    public function store(BillRequest $request)
    {
        $data = $request->all();
        $res = Bill::create($data);
        $this->sendFlashMessage($res, 'Bill', 'Added');
        return redirect()->route('bills.index', [app()->getLocale(), 'car_id' => $data['car_id']]);
    }

    public function show(Request $request)
    {
        $id = $request->route()->parameter('bill');
        $record = Bill::with('car')->find($id);
        return view('bill.show')->with(['record' => $record]);
    }

    public function edit(Request $request)
    {
        $id = $request->route()->parameter('bill');
        $record = Bill::find($id);
        return view('bill.edit')->with(['record' => $record, 'billTypes' => BillType::all()]);
    }

    public function update(BillRequest $request)
    {
        $data = $request->all();
        $record = Bill::find($data['id']);
        $res = $record->update($data);
        $this->sendFlashMessage($res, 'Bill', 'Updated');

        return redirect()->route('bills.index', [app()->getLocale(), 'car_id' => $data['car_id']]);
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $record = Bill::find($data['id']);
        $res = $record->delete();
        $this->sendFlashMessage($res, 'Bill', 'Deleted');
        return redirect()->route('_cars.index', app()->getLocale());
    }
}
