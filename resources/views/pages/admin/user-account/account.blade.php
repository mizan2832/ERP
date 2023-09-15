@extends('master')
@section('title','User Account')
@push('css')
<style>
    input,select,label{
        height: 25px;
        margin-bottom: -3px;
    }

    .styled-select select{
        font-size: 8px;
        -webkit-appearance: none;
    }

    input[type="file"]{
        display: block;
        visibility: hidden;
        width: 0;
        height: 0;
    }

    .save-button input{
        margin-right: 10px;
    }
    #serial{
        width: 50px;
        text-align: left;
        height: 30px;
        margin: -10px;
    }
   .search_user{
        margin-top: -16px;
        width:
    }
    #user_serial{
        width:30px;
    }



</style>
@endpush
@section('sidebar')
   @include('includes.admin_sidebar')
@endsection
@section('content')
<div class="container  d-flex w-75 border p-3 mt-1">
    <!-- your form container -->
    <div class="user-create-form ">
        <div class="container pt-2">
            <h4 class="text-center">User Management</h4>

        <div class="row col-md-12">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">User ID</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text"  name="user_id" id="user_id" class="form-control"  required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">Email</label>
                    </div>
                    <div class="col-md-8">
                        <input type="email"  name="email" id="email" class="form-control"  required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">Password</label>
                    </div>
                    <div class="col-md-8">
                        <input type="password"  name="password" id="password" class="form-control"  required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">Confirm Pass.</label>
                    </div>
                    <div class="col-md-8">
                        <input type="password"  name="password_confirmation" id="password_confirmation" class="form-control"  required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">Full Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text"  name="full_name" id="full_name" class="form-control"  required>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">Designation</label>
                    </div>
                    <div class="col-md-8">
                        <div class="styled-select">
                            <select name="designation" id="designation" class="form-control">
                                <option value="">Select Designation</option>
                                <option value="m">Manager</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">Department</label>
                    </div>
                    <div class="col-md-8">
                        <div class="styled-select">
                            <select name="department"  id="department" class="form-control">
                                <option value="" style="font-size:5px">Select Department</option>
                                <option value="m">Manager</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">Role Level</label>
                    </div>
                    <div class="col-md-8">
                        <div class="styled-select">
                            <select name="department" id="department" class="form-control">
                                <option value="">Select Role</option>
                                <option value="m">Admin</option>
                                <option value="m">General User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">Unit Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="unit_name" class="form-control" id="unit_name" placeholder="Double Click">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">Buyer Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text"  name="buyer_name" id="buyer_name" class="form-control" placeholder="Double Click"  required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">Data Label</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text"  name="data_label" id="data_label" class="form-control"  required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact" class="col-form-label">Status</label>
                    </div>
                    <div class="col-md-8">
                        <select name="status" id="status" class="form-control">
                            <option value="ac">Active</option>
                            <option value="ina">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <input type="file" id="user_image">
                    <button class="btn btn-info user-image w-100">Click To Add Image</button>

                </div>

            </div>
            <div class="col-md-4">
                <img src="{{ asset('file/images/image.png') }}"  id="user_image" alt="user image" width="200px" height="200px">
            </div>
            <div class="save-button d-flex justify-content-center align-items-center g-2">
                <button  value="save" id="save" >Save</button>
                <button  value="info" id="update" onclick="updateBuyer()" disabled='disabled'>Update</button>
                <button  value="delete" id="delete" onclick="deleteBuyer()" disabled='disabled'>Delete</button>
                <button  value="reset" id="reset" onclick="resetFormBuyer()">Refresh</button>
                <input type="text" id="row_id" value="" hidden>
            </div>
        </div>
    </div>
        <div class="row pt-2">
            <table class="table table-bordered " >
                <thead>
                <tr>
                    <th>SL</th>
                    <th>User ID</th>
                    <th>Full Name</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Status</th>
                </tr>
                </thead>
            </table>
            <div class="d-flex search_user">
                <input type="text" class="form-control" id="user_serial">
                <input type="text" class="form-control" id="full_name_input">
                <input type="text" class="form-control" id="partyType_input">
                <input type="text" class="form-control" id="email_input">
                <input type="text" class="form-control" id="team_input">
                <input type="text" class="form-control" id="status_input">
            </div>
            <table class="table table-bordered " >
                <tbody>
                <tr>
                    <td>SL</td>
                    <td>User ID</td>
                    <td>Full Name</td>
                    <td>Designation</td>
                    <td>Department</td>
                    <td>Status</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
 </div>
@endsection

@push('js')
<script>
    $('.user-image').click(function(){
        $("#user_image").click();
    });
</script>
@endpush
