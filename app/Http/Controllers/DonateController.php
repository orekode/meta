<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreDonateRequest;
use App\Http\Requests\UpdateDonateRequest;
use App\Models\Donate;
use App\Models\GroupCard;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes = GroupCard::where('name', 'programmes')->orderBy('id', 'desc')->get();

        $donors = Donate::select('id', 'image', 'first_name', 'last_name', 'amount', 'donation_type', 'email')
        ->whereIn('id', function ($query) {
            $query->select(DB::raw('MIN(id)'))
                  ->from('donates')
                  ->groupBy('email');
        })
        ->paginate();

        return view('donate', [
            "programmes" => $programmes,
            "donors"     => $donors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDonateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonateRequest $request)
    {
        $request->headers->set("Accept", "application/json");

        $image = "donors.jpg";
        if($request->file('image')) $image = $request->file('image')->store('donors');

        // return $request->all();

        $donation = [
            ...$request->all(),
            "image" => $image,
        ];

        $payment_verification = $this->verifyPayment($request->reference);

        if(!$payment_verification) return [
            "message" => "Unable to verify payment at this time, please try again later"
        ];

        if($request->payment_type == "monthly") {
            $donation["plan_code"] = $payment_verification->data->authorization->authorization_code;
        }

        return Donate::create($donation);
    }


    public function verifyPayment($reference) {

        $curl = curl_init();
  
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_ca5b36334980b96c17214e62047a482245f71813",
            "Cache-Control: no-cache",
            ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        
        if ($err) {
            return false;
        } else {
            $response = json_decode($response);
            if($response->status)
            return $response;

            return false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function show(Donate $donate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function edit(Donate $donate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonateRequest  $request
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonateRequest $request, Donate $donate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donate  $donate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donate $donate)
    {
        //
    }
}
