<?php

namespace App\Http\Controllers;

use App\Category;
use App\Models\Cake;
use App\Http\Requests\CakeRequest;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CakeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.basic');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('goods.list', [
            'goods' => Cake::query()->orderBy('id', 'DESC')->paginate(10),
        ]);
    }

    
    function create()
    {
        return view('goods.create');
    }

    function add(CakeRequest $request)
    {
        $cake = new Cake();
        $cake->name = $request->name;
        $cake->price = $request->price;
        $cake->article = $request->article;
        $cake->text = $request->text;
        $cake->save();
        return redirect()->route('cakes');
    }  

    public function edit(Cake $cake)
    {
        //     // Mail::to(\Auth::user())->send(new CakeEdit(['cake' => $cake]));
        return view('goods.edit', ['cake' => $cake]);
    }

    public function save(CakeRequest $request)
    {
        $cake = Cake::query()->find($request->id);

        $cake->name = $request->name;
        $cake->price = $request->price;
        $cake->article = $request->article;
        $cake->text = $request->text;
        $cake->save();
        return redirect()->route('cakes');
    }

    public function delete($id)
    { 
        Cake::destroy($id);
        return redirect()->route('cakes');
    }
}
