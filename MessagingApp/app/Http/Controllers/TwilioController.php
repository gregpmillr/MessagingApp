<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Services_Twilio;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TwilioController extends Controller
{
    private $client;
    private $sid;
    private $token;


    public function __construct()
    {
        $this->sid = "AC84452b0842ec4a4ccac82994298db5c9";
        $this->token = "1c7b15119a35a2a1a7e74d2ba743ce37";
        $client = new Services_Twilio($this->sid,$this->token);
    }

    public function message()
    {
        try{
            $message = $this->client->account->messages->sendMessage(
                '2044001758', // From a valid Twilio number
                '9022105887', // Text this number
                "Hello monkey!"
            );
        } catch(Services_Twilio_RestException $e){
            echo $e->getMessage();
        }

        print $message->sid;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
