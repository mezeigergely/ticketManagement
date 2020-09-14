<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{

    public function index()
    {
        $users = User::all();
        if(request()->has('sort')){
            $tickets = Ticket::orderBy('created_at', request('sort'))->paginate(5)->appends('sort', request('sort'));
        } else{
            $tickets = Ticket::paginate(5);
        }
        return view('tickets.index', compact('users', 'tickets'));
    }


    public function create()
    {
        return view('tickets.create');
    }


    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = DB::table('users')
            ->select('*')
            ->join('tickets', 'users.id', '=', 'tickets.user_id')
            ->where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('tickets.search', compact('data'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required'],
            'summary' => ['required'],
            'description' => ['required']
        ]);

        Ticket::create([
            'user_id' => request('user_id'),
            'summary' => request('summary'),
            'description' => request('description'),
            'status' => request('status')
        ]);



        $users = User::all()->find($request->route('id'));

        return redirect("/success/{$users->id}");
    }


    public function success(Ticket $ticket)
    {

        return view('tickets.success', compact('ticket'));
    }


    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }


    public function edit(Ticket $ticket)
    {
        //
    }


    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'summary' => ['required'],
            'description' => ['required'],
        ]);

        $ticket->summary = request('summary');
        $ticket->description = request('description');
        $ticket->status = request('status');
        $ticket->save();

        return redirect('tickets');
    }


    public function delete(Ticket $ticket)
    {
        return view('tickets.delete', compact('ticket'));
    }


    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect('tickets');
    }


    public function list()
    {
        $users = User::all();

        return view('tickets.create', compact('users'));
    }


    public function due_time()
    {
        $creation = DB::table('tickets')
            ->select('creation_time');

        return view('tickets.due_time', compact('creation'));
    }
}
