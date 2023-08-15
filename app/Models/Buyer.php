<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Buyer extends Model
{
    use HasFactory;
    public static function getBuyerList($full_name_input, $partyType_input, $email_input,$team_input,$status_input) {
        $buyers = DB::table('buyers');
        if($full_name_input) {
            $buyers = $buyers->where('buyers.full_name',  'like', "%{$full_name_input}%");
        }
        if($partyType_input) {
            $buyers = $buyers->where('buyers.party_type',  'like', "%{$partyType_input}%");
        }
        if($email_input) {
            $buyers = $buyers->where('buyers.email',  'like', "%{$email_input}%");
        }
        if($team_input) {
            $buyers = $buyers->where('buyers.team',  'like', "%{$team_input}%");
        }
        if($status_input) {
            $buyers = $buyers->where('buyers.status',  'like', "%{$status_input}%");
        }

        return $buyers;
    }
}
