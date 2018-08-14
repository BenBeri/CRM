<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\people;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('logged');
    }

    public function index(Request $request) {
        return $this->leads($request);
    }

    public function leads(Request $request) {
        $leads = $this->getPeople($request, 'lead');

        if ($request->get("search")) {
            $text = $request->get("search");
            $leads = $leads->where("full_name", "ILIKE", "%" . $text . "%");
        }

        $leadsCount = count($leads->get());

        return view('leads')->with(
            [
                "customers" => $leads->paginate(3),
                "statuses"  => DB::table("statuses")->get(),
                "count" => $leadsCount,
                "countries" => DB::table("people")->selectRaw("initcap(country_id) as country_id")->distinct()->get(),
                "campaigns" => DB::Table("people")->select("campaign")->distinct()->get()
            ]);
    }

    public function customers(Request $request) {


        $customers = $this->getPeople($request, 'customer');

        if ($request->get("search")) {
            $text = $request->get("search");
            $customers = $customers->where("full_name", "ILIKE", "%" . $text . "%");
        }

        $customersCount = count($customers->get());


        return view('customers')->with(
            [
                "customers" => $customers->paginate(3),
                "statuses"  => DB::table("statuses")->get(),
                "count" => $customersCount,
                "countries" => DB::table("people")->selectRaw("initcap(country_id) as country_id")->distinct()->get(),
                "campaigns" => DB::Table("people")->select("campaign")->distinct()->get()
            ]);
    }

    public function updateStatus(Request $request, $id) {
        $status = $request->get("status");
        DB::table('people')->where("id", $id)->update(["status" => $status]);
        return redirect()->back()->with("message", "Successfully changed the status of the user with ID " . $id);
    }

    public function delete(Request $request, $id) {
        DB::table('people')->where("id", $id)->delete();
        return redirect()->back()->with("message", "Successfully removed the user with ID " . $id);
    }


    private function getPeople(Request $request, $type) {
        $orm = DB::table('people')->where('type', "=", $type)->orderBy("id");

        if ($request->get("countries")) {
            $countries =  array_map('strtolower', explode(",", $request->get("countries")));
            $orm = $orm->whereIn("country_id", $countries);
        }

        if ($request->get("statuses")) {
            $statuses = array_map('strtolower', explode(",", $request->get("statuses")));
            $orm = $orm->whereIn("status", $statuses);
        }

        if ($request->get("campaigns")) {
            $campaigns = array_map('strtolower', explode(",", $request->get("campaigns")));
            $orm = $orm->whereIn("campaign", $campaigns);
        }

        return $orm;
    }
}
