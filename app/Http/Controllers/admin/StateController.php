<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:state-list|state-create|state-edit|state-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:state-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:state-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:state-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        try {
            $state = State::where('is_delete', '=', 'Active')->orderBy('id', 'DESC')->get();

            return view('admin.state.index', compact('state'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function create()
    {
        try {
            return view('admin.state.create');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function store(REQUEST $request)
    {
        $this->validate($request, [
            'statename' => 'required',
        ]);

        try {
            $state = new State();
            $state->sname = $request->statename;
            $state->is_delete = 'Active';
            $state->save();
            return redirect('state/index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function edit($id)
    {
        try {
            $state = State::find($id);
            // return $state;
            return view('admin.state.edit', compact('state'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request)
    {
        try {
            $id = $request->stateid;
            // return $id;
            $state = State::find($id);
            $state->sname = $request->statename;
            $state->save();
            return redirect('state/index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function delete($id)
    {
        try {
            $state = State::find($id);
            $state->is_delete = 'Deactive';
            $state->save();
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
