<?php

namespace App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
trait StoreFileTrait
{

    public function storeImage(Request $request, $object , $path)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $validExtensions = ['png', 'jpg', 'jpeg'];

            if (!in_array($ext, $validExtensions)) {
                Session::flash('message', 'Image Not Valid.');
                Session::flash('alert-class', 'alert-danger');
                return redirect()->back()->withInput();
            }

            if ($request->method() === 'PUT') {
                if ($object->image !== null) {
                    File::delete($this->path . $object->image);
                }
            }

            $image_name = $object->id . '_' .  time()  .  '.' . $ext;
            $image->move(public_path($path), $image_name);



        } else {
            $image_name = $object->image ?? 'default_img.png';
        }
        return $image_name;
    }

}
