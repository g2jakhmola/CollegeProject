<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Mailers\AppMailer;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Category;


class TicketsController extends Controller
{
		public function create()
		{
		    $categories = Category::all();

		    return view('tickets.create', compact('categories'));
		}

		public function store(Request $request, AppMailer $mailer)
		{
		    	$this->validate($request, [
		            'title'     => 'required',
		            'category'  => 'required',
		            'priority'  => 'required',
		            'message'   => 'required'
		        ]);
		    	
			
		        $ticket = new Ticket();
		        $ticket->title = $request->Input('title');
		        $ticket->user_id = Auth::user()->id;
		        $ticket->ticket_id = strtoupper(str_random(10));
		        $ticket->category_id = $request->Input('category');
		        $ticket->priority = $request->Input('priority');
		        $ticket->message = $request->Input('message');
		        $ticket->status = "Open";

		        $ticket->save();

		        $mailer->sendTicketInformation(Auth::user(), $ticket);

		        return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");
		}

		public function ticketList(Request $request){

			$tickets = Ticket::where('user_id', Auth::user()->id)->paginate(5);

			$categories = Category::all();
			return view('tickets.show', compact('tickets', 'categories'))
			->with('i', ($request->input('page', 1) -1) *5 );
		}
}
