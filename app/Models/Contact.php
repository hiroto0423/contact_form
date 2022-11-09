<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Symfony\Component\String\s;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function doSearch($fullname,$gender,$start_date,$end_date,$email) {
        $query = self::query();
        if(isset($fullname)){
            $query->where('fullname', 'LIKE', '%'.$fullname.'%');
        }
        if(isset($gender)){
            $query->where('gender',$gender);
        }
        if(isset($start_date,$end_date)){
            $query ->whereDate('created_at','>',$start_date)
                   ->whereDate('created_at','<',$end_date);
        }
        if(isset($email)){
            $query->where('email','LIKE','%'.$email.'%');
        }
        $contacts = $query->paginate(10);
        return $contacts;
    }
}
