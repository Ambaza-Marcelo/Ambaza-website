<?php
namespace App\Services\User;

use App\User;
use Illuminate\Support\Facades\DB;
use Mavinoo\Batch\Batch as Batch;
use Illuminate\Support\Facades\Log;

class UserService {
    
    protected $user;
    protected $db;
    protected $batch;
    protected $st, $st2;

    public function __construct(User $user, DB $db, Batch $batch){
        $this->user = $user;
        $this->db = $db;
        $this->batch = $batch;
    }

    public function indexView($view, $users){
        return view($view, [
            'users' => $users,
            'current_page' => $users->currentPage(),
            'per_page' => $users->perPage(),
        ]);
    }
    


    public function indexOtherView($view, $users){
        return view($view, [
            'users' => $users,
            'current_page' => $users->currentPage(),
            'per_page' => $users->perPage(),
        ]);
    }

    public function storeAdmin($request){
        $tb = new $this->user;
        $tb->name = $request->name;
        $tb->email = $request->email;
        $tb->password = bcrypt($request->password);
        $tb->role = 'admin';
        $tb->active = 1;
        $tb->gender = $request->gender;
        $tb->blood_group = $request->blood_group;
        $tb->nationality = (!empty($request->nationality)) ? $request->nationality : '';
        //$tb->phone_number = $request->phone_number;
        $tb->pic_path = (!empty($request->pic_path)) ? $request->pic_path : '';
        $tb->verified = 1;
        $tb->save();
        return $tb;
    }

    public function storeTechnician($request){
        $tb = new $this->user;
        $tb->name = $request->name;
        $tb->email = (!empty($request->email)) ? $request->email : '';
        $tb->password = bcrypt($request->password);
        $tb->role = 'technician';
        $tb->active = 1;
        $tb->gender = $request->gender;
        $tb->blood_group = $request->blood_group;
        $tb->nationality = (!empty($request->nationality)) ? $request->nationality : '';
        //$tb->phone_number = $request->phone_number;
        $tb->address = (!empty($request->address)) ? $request->address : '';
        $tb->about = (!empty($request->about)) ? $request->about : '';
        $tb->pic_path = (!empty($request->pic_path)) ? $request->pic_path : '';
        $tb->verified = 1;
        $tb->save();
        return $tb;
    }
}