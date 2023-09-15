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
    


</style>
@endpush
@section('sidebar')
   @include('includes.admin_sidebar')
@endsection
@section('content')
<div class="container  d-flex w-75">
    <!-- your form container -->
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
                    <input type="file" id="user-image">
                    <button class="btn btn-info form-control">Click To Add Image</button>

                </div>

            </div>
            <div class="col-md-4">
                <img src="{{ asset('file/images/image.png') }}"  id="user_image" alt="user image" width="200px" height="200px">
            </div>
        </div>
    </div>
 </div>
@endsection
