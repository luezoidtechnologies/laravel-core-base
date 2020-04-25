<?php


namespace App\Http\Requests;


use Luezoid\Laravelcore\Requests\BaseRequest;

class MinionUpdateRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'totalEyes' => 'required|integer|min:0|max:2',
            'favouriteSound' => 'present|nullable|string|max:255',
            'hasHairs' => 'required|boolean'
        ];
    }
}
