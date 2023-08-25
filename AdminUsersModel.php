<?php

namespace App\Models\Admin\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class AdminUsersModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    static public function getSingle($id)
    {
    $return = self::find($id);
    return $return;
    }
    
    static public function getRecordusers()
    {
    $return = AdminUsersModel::select('users.*', 'schools.school_name as school', 'schools_class.class_name as class') 
    ->join('schools', 'schools.id', 'users.school')
    ->join('schools_class', 'schools_class.id', 'users.class')
    ->where('user_status', 'like' , 'Approved');

    if(!empty(Request::get('name')))
    {
     $return = $return->where('users.name','like', '%' . Request::get('name'). '%');
    }
    if(!empty(Request::get('email')))
    {
     $return = $return->where('users.email','like', '%' . Request::get('email'). '%');
    }
    if(!empty(Request::get('phone')))
    {
     $return = $return->where('users.phone','like', '%' . Request::get('phone'). '%');
    }
    if(!empty(Request::get('school')))
    {
     $return = $return->where('users.school','like', '%' . Request::get('school'). '%');
    }
    if(!empty(Request::get('class')))
    {
     $return = $return->where('users.class','like', '%' . Request::get('class'). '%');
    }
    if(!empty(Request::get('user_type')))
    {
     $return = $return->where('users.user_type','like', '%' . Request::get('user_type'). '%');
    }

    $return = $return->where('users.is_delete', '=', 0)
    ->paginate(50);
    
    return $return;
    }    

    static public function getRecordNewusers()
    {
    $return = AdminUsersModel::select('users.*', 'schools.school_name as school', 'schools_class.class_name as class') 
    ->join('schools', 'schools.id', 'users.school')
    ->join('schools_class', 'schools_class.id', 'users.class')
    ->where('user_status', 'like' , 'Not Approved');
    
    if(!empty(Request::get('name')))
    {
     $return = $return->where('users.name','like', '%' . Request::get('name'). '%');
    }
    if(!empty(Request::get('email')))
    {
     $return = $return->where('users.email','like', '%' . Request::get('email'). '%');
    }
    if(!empty(Request::get('phone')))
    {
     $return = $return->where('users.phone','like', '%' . Request::get('phone'). '%');
    }
    if(!empty(Request::get('school')))
    {
     $return = $return->where('users.school','like', '%' . Request::get('school'). '%');
    }
    if(!empty(Request::get('class')))
    {
     $return = $return->where('users.class','like', '%' . Request::get('class'). '%');
    }
    if(!empty(Request::get('user_type')))
    {
     $return = $return->where('users.user_type','like', '%' . Request::get('user_type'). '%');
    }

    $return = $return->where('users.is_delete', '=', 0)
    ->paginate(50);
    
    return $return;
    }

    static public function getRecordNewusersAnonymous()
    {
    $return = AdminUsersModel::select('users.*')
    ->where('user_status', 'like' , 'Not Approved')
    ->where('user_type', 'like' , '0');
    
    if(!empty(Request::get('name')))
    {
     $return = $return->where('users.name','like', '%' . Request::get('name'). '%');
    }
    if(!empty(Request::get('email')))
    {
     $return = $return->where('users.email','like', '%' . Request::get('email'). '%');
    }
    if(!empty(Request::get('phone')))
    {
     $return = $return->where('users.phone','like', '%' . Request::get('phone'). '%');
    }
    if(!empty(Request::get('school')))
    {
     $return = $return->where('users.school','like', '%' . Request::get('school'). '%');
    }
    if(!empty(Request::get('class')))
    {
     $return = $return->where('users.class','like', '%' . Request::get('class'). '%');
    }
    if(!empty(Request::get('user_type')))
    {
     $return = $return->where('users.user_type','like', '%' . Request::get('user_type'). '%');
    }

    $return = $return->where('users.is_delete', '=', 0)
    ->paginate(50);
    
    return $return;
    }
}