<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Users\AdminUsersModel;

class AdminUsersController extends Controller
{
    // List Page

    public function UsersList()
    {
    $data['getRecordusers'] = AdminUsersModel::getRecordusers();
    $data['header_title'] = "List users ";
    return view('admin.dashboard.users.users-list', $data);
    }

    public function NewUsersList()
    {
    $data['getRecordNewusers'] = AdminUsersModel::getRecordNewusers();
    $data['header_title'] = "List New Users";
    return view('admin.dashboard.users.new-users-list', $data);
    }

    public function NewUsersAnonymousList()
    {
    $data['getRecordNewusersAnonymous'] = AdminUsersModel::getRecordNewusersAnonymous();
    $data['header_title'] = "List New Users";
    return view('admin.dashboard.users.new-users-anonymous-list', $data);
    }

    // To Get Add Page

    public function UsersAdd()
    {
    $data['header_title'] = "Add New users";
    return view('admin.dashboard.users.users-add', $data);
    }

    // New Addition - Form Value

    public function UsersAddFormValue(Request $request)
    {
    $save = new AdminUsersModel;
    $save->fos_name = $request->fos_name;
    $save->save();
    return redirect('admin/dashboard/users/users-list')->with('success', "New users Created Successfully" );
    }

    // To get Edit Page

    public function UsersEdit($id)
    {
    $data['getRecordusers'] = AdminUsersModel::getSingle($id);
    if(!empty($data['getRecordusers']))
    {
    $data['header_title'] = "Edit users";
    return view('admin.dashboard.users.users-edit', $data);
    }
    else{
    abort(404);
    }
    }


    // Edit Page - Form Value

    public function UsersEditFormValue($id, Request $request)
    {
    $save = AdminUsersModel::getSingle($id);
    $save->user_status = $request->user_status;
    $save->save();
    return redirect('/admin/dashboard/users/new-users-list')->with('success', " users Updated Successfully" );
    }


    // Delete Page

    public function UsersDelete($id)
    {
    $save = AdminUsersModel::getSingle($id);
    $save->is_delete = 1;
    $save->save();
    return redirect()->back()->with('success', " users Deleted Successfully" );
    }


    // Detail Page

    public function UsersDetail($id)
    {
    $data['getRecordusers'] = AdminUsersModel::getSingle($id);
    if(!empty($data['getRecordusers']))
    {
    $data['header_title'] = "users Detail";
    return view('admin.dashboard.users.users-detail', $data);
    }
    else{
    abort(404);
    }
    }

}