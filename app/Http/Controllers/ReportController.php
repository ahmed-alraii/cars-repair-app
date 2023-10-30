<?php

namespace App\Http\Controllers;

use App\Exports\BillExport;
use App\Models\Bill;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class ReportController extends Controller
{

    public array|Collection $records;
     public int $totalPrice = 0 ;
    public function billReport()
    {

        $this->records = Bill::with(['car'])
            ->orderBy('created_at', 'desc')
            ->get();

        $this->totalPrice = Bill::sum('price');


        if (session()->has('records_search')) {
            $this->records = session('records_search');
        }
        if (session()->has('total_price_search')) {
            $this->totalPrice = session('total_price_search');
        }


        $this->setRecordsSessions( $this->records );

        return view('admin.report.bill')
            ->with(['records' => $this->records , 'totalPrice' => $this->totalPrice]);
    }



    public function generateBillReport(Request $request): RedirectResponse
    {

        if($this->isValidSearch($request->all())){
            return redirect()->back()->with(['inValidSearch'=>'in Valid Search']);
        }
        $this->generateOrders($request);
        return redirect()->back()->withInput();

    }

    public function isValidSearch($data) : bool
    {
        return  Carbon::parse($data['month_from']) > Carbon::parse($data['month_to']);
    }

    public function generateOrders(Request $request) : void
    {
        $data = $request->all();
        $month_from = Carbon::parse($data['month_from'])->startOfDay()->toDateTimeString();
        $month_to = Carbon::parse($data['month_to'])->endOfDay()->toDateTimeString();

        $this->records = Bill::with(['car'])
            ->whereBetween('created_at', [$month_from , $month_to])
            ->orderBy('created_at', 'desc')
            ->get();
        $this->setRecordsSessions( $this->records );
    }
    public function setRecordsSessions($records): void
    {
        session()->flash('records_search', $records);
        session()->flash('total_price_search', $records->sum('price'));
        session()->put('records_export', $records);

    }

    public function billExport(): BinaryFileResponse
    {
        $this->records = session('records_export');
        return Excel::download(new BillExport($this->records), 'bills_report.xlsx');
    }
}
