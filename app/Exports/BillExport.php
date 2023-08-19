<?php

namespace App\Exports;

use App\Http\Controllers\BillController;
use App\Models\Rent;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BillExport implements FromCollection, WithHeadings, WithMapping
{
    private Collection $records;
    private int $count;

    public function __construct($records)
    {
        $this->records = $records;
        $this->count = 1;
    }

    public function headings(): array
    {
        return [
            __('#'),
            __('Bill NO.'),
            __('Created Date'),
            __('Bill Type'),
            __('Company Name'),
            __('Company Phone'),
            __('Price'),
            __('Notes')
        ];
    }

    public function map($row): array
    {


        return [
            __($this->count++),
            __($row->id),
            date('Y-m-d h:i:s A', strtotime($row->created_at)),
            __($row->billType->name_ar),
            __($row->company_name),
            __($row->company_phone),
            number_format($row->price, 3),
            __($row->notes),
        ];
    }

//    public function columnFormats(): array
//    {
//        return [
//          'I' => NumberFormat::FORMAT_NUMBER_000,
//          'J' => NumberFormat::FORMAT_NUMBER_000,
//        ];
//    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->records;
    }

}
