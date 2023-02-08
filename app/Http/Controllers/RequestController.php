<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;

class RequestController extends Controller
{
    public function donateRequests(){
        $requests = Requests::where('type', '=', 1)->where('approve','=',0)->get();
        $accepted_requests = Requests::where('type', '=', 1)->where('approve','=',1)->get();
        return view('request.donate',compact('requests','accepted_requests'));
    }
    public function receiveRequests(){
        $requests = Requests::where('type', '=', 2)->where('approve','=',0)->get();
        $accepted_requests = Requests::where('type', '=', 2)->where('approve','=',1)->get();
        return view('request.receive',compact('requests','accepted_requests'));
    }
    public function donateRequestAccept(Request $request, $id){
        $user = Requests::where('userid', '=', $id)->first();

        $receiverNumber = "+977".$user->users[0]->phone;
        $message = 
        "Hello ".$user->users[0]->name.", your donation request has been accepted. Kindly visit our office located at:https://goo.gl/maps/jsEFbwW7FzaHig9f8 or follow our next event.\nAfter donation you'll get 100 reward points, that can be used to redeem various prizes.\nThank you,\nTeam: Fancy Freelancers ";
  
        try {
  
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message]);
  
            $user->update([
                'approve'=>1,
            ]);
            $user->users[0]->update([
                'RewardPointsUpdated'=>0,
            ]);
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }

        return back();
    }

    public function updateRewardPoints($id){
        $user = User::findOrFail($id);
        $updated = $user->RewardPointsUpdated;
        if(!$updated){
            $user->update([
                'RewardPoints'=>$user->RewardPoints+100,
                'RewardPointsUpdated'=>1,
            ]);
            return back()->with('success', 'Reward Points updated !');
        }else{
            return back()->with('error', 'Points already updated !');
        } 
    }
}
