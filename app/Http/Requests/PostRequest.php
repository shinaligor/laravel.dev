<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
{

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:1',
        ];
    }

    public function authorize(){
        return true;
    }

}
