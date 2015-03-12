<?php namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;

class AddController extends Controller
{
    use  ValidatesRequests;


    public function getAdd(Request $request)
    {

        $data = $request->all();

        $rules = [
            'title' => 'required|min:10',
            'body' => 'required|min:20'
        ];

        $val = Validator::make($data, $rules);

        if ($val->fails())
        {
            $errors = $val->messages()->toArray();
            return view('errors')->with('errors', $errors);
        }

        $post = Post::add($data);


        if ($post instanceof Exeption)
        {
            return 'error';
        }
        else
        {
            return redirect('main');
        }
    }
}
//опачки

