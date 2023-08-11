<?php
namespace App\Common;
use http\Url;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;


trait Common{

    public function SendFlashMessage($result , $model , $action): void
    {
        if($result){
            Session::flash('message' ,"$model $action Successfully");
            Session::flash('alert-class' , 'alert-success');
        }else{
            Session::flash('message' , "$model Not $action");
            Session::flash('alert-class' , 'alert-danger');
        }
    }

    public function paginate($items, $perPage = 5, $page = null, $options = []): LengthAwarePaginator
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Paginator ? $items : Collection::make($items);
        $options = ['path' => url()->current() , 'pageName' => 'page'];
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

}
