<?php

namespace App\Models;

use App\Models\Buyer;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buyer extends Model
{
    use HasFactory;
    public static function getBuyerList($full_name_input, $partyType_input, $email_input,$team_input,$status_input) {

        if($full_name_input) {
            $buyers = Buyer::where('full_name','like','%'.$full_name_input.'%')->get();
            return $buyers;
        }
        else if($partyType_input) {
            $buyers = Buyer::where('party_type','like','%'.$partyType_input.'%')->get();
            return $buyers;
        }
        else if($email_input) {
            $buyers = Buyer::where('email','like','%'.$email_input.'%')->get();
        }
        else if($team_input) {
            $buyers = Buyer::where('team','like','%'.$team_input.'%')->get();
            return $buyers;
        }
        else if($status_input) {
            $buyers = Buyer::where('status','like','%'.$status_input.'%')->get();
            return $buyers;
        }

    }
}
