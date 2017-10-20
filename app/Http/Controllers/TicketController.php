<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\ticketInformation;
use App\userInformation;
use App\ticketComment;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{

    public function index(Request $request)
    {
        $tickets = ticketInformation::all();
        return $tickets->toJson();
    }

    public function json_single($user_ticket_id)
    {
        $single_ticket = ticketInformation::find($user_ticket_id);
        return $single_ticket->toJson();
    }
    public function create()
    {
        $ticket = new ticketInformation;
        return view('issue/create', ['ticket' => $ticket]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'user_first_name' => 'required',
            'user_last_name' => 'required',
            'user_email' => 'required',
            'operating_system' => 'required',
            'software_issue' => 'required',
            'description' => 'required',
            // 'comments' => 'required',
        ]);

        $all_request = $request->all();

//        $user_info = new userInformation();
////        $user_info->user_id = $all_request['user_id'];
//        $user_info->user_first_name = $all_request['user_first_name'];
//        $user_info->user_last_name = $all_request['user_last_name'];
//        $user_info->user_email = $all_request['user_email'];
//        $user_info->save();

        $ticket_info = new ticketInformation();
        $ticket_info->user_ticket_id = strtoupper(str_random(10));
        $ticket_info->software_issue = $all_request['software_issue'];
        $ticket_info->operating_system = $all_request['operating_system'];
        $ticket_info->description = $all_request['description'];
        $ticket_info->status = "Pending";
//        $ticket_info->user_id = $user_info->user_id;
//        $ticket_info->user_id = $user_id->user_id;
        $ticket_info->save();

        return redirect()->back()->with("alert", "Ticket #$ticket_info->user_ticket_id was submitted successfully. We will be in touch very shortly.");

//            ticketInformation::create($request->all());
    }

    public function admin_tickets()
    {
        $ticket_info = DB::table('ticket_informations')->get();

        if(count($ticket_info) > 0)
        {
            return view('issue/admin_ticket', ['ticket_info'=> $ticket_info]);
        }
        else
        {
            return view('issue/admin_ticket');
        }
    }

    public function admin_closed_tickets()
    {
        $ticket_info = DB::table('ticket_informations')->get();

        if(count($ticket_info) > 0)
        {
            return view('issue/admin_closed_ticket', ['ticket_info'=>$ticket_info]);
        }
        else
        {
            return view('issue/admin_closed_ticket');
        }
    }

    public function cus_tickets()
    {
        $ticket_info = DB::table('ticket_informations')->get();


        if(count($ticket_info) > 0)
        {
            return view('issue/customer/customer_ticket', ['ticket_info'=>$ticket_info]);
        }
        else
        {
            return view('issue/customer/customer_ticket');
        }
    }

    public function cus_closed_tickets()
    {
        $ticket_info = DB::table('ticket_informations')->get();


        if(count($ticket_info) > 0)
        {
            return view('issue/customer/customer_closed_ticket', ['ticket_info'=>$ticket_info]);
        }
        else
        {
            return view('issue/customer/customer_closed_ticket');
        }
    }

    public function show($user_ticket_id)
    {
        $ticket_info = ticketInformation::find($user_ticket_id);

//        $user_info = $ticket_info->user_id;
       $comments = ticketComment::where('user_ticket_id', $user_ticket_id)->first();
//        Session::put('ticket_info', $user_ticket_id);

        return view('issue/single_ticket', ['ticket_info'=>$ticket_info, 'comments'=>$comments]);
    }

    public function showCust($user_ticket_id)
    {
        $ticket_info = ticketInformation::find($user_ticket_id);
//        $user_info = $ticket_info->user;
        $comments = ticketComment::where('user_ticket_id', $user_ticket_id)->first();


        return view('issue/customer/single_ticket_cust', ['ticket_info'=>$ticket_info, 'comments'=>$comments]);
    }

    public function changeLevels(Request $request, $user_ticket_id)
    {

        $all_request = $request->all();
        $ticket_info = ticketInformation::find($user_ticket_id);
        $ticket_info->user_ticket_id = $all_request['user_ticket_id'];
        $ticket_info->escalation_level = $all_request['escalation_level'];
        $ticket_info->priority_level = $all_request['priority_level'];
        $ticket_info->software_issue = $all_request['software_issue'];
        $ticket_info->operating_system = $all_request['operating_system'];
        $ticket_info->description = $all_request['description'];
        $ticket_info->status = $all_request['status'];

        $ticket_info->save();


        return response()->json($ticket_info);
    }


}

