@extends('master')
@section('title','Company Profile')
@push('css')
<style>
    .header {
        background-color: grey;
        border: 2px solid black;
        border-radius: 5px;
    }
    .header span{
        color: #ffffff;
        padding-left: 10px;
    }
    label{
        font-size: 10px;
    }

    .form-control {
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
        color: #555;
        display: block;
        font-size: 14px;
        height: 25px;
        line-height: 1.42857;
        padding: 6px 12px;
        /*width: 100%;*/ remove this
    }
    #party_type {
        padding-top:-10px;
    }

    select{
        text-align-last: center;
        padding-bottom: 20px;
    }

    .general-form{
        border: 1px solid black;
        border-radius: 10px;
    }
    #status{
        width: 100px;
    }

    .save-button input{
            margin-right: 10px;
     }


</style>
@endpush
@section('sidebar')
   @include('includes.lib_sidebar')
@endsection

@section('content')

<div class="container">

    <h4 class="text-center">Marketing Team</h4>

    <div class="general">
        <div class="header">
            <span>Team Leader Information</span>
        </div>
        <div class="container-xxl flex-grow-1 p-4 general-form">
            <div class="row col-md-12 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="team_name" class="col-form-label">Team Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="team_name" id="team_name">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="leader_name" class="col-form-label">Team Leader</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="leader_name" id="leader_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-top: -7px">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="designation" class="col-form-label">Designation</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="designation" id="designation" class="form-control designation" aria-describedby="">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 align-items-center row-gap">

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="contact_no" class="col-form-label">Contact No.</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="contact_no" id="contact_no" class="form-control contact_no" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nature" class="col-form-label">Nature</label>
                            </div>

                            <div class="col-md-8">
                                <select name="nature" id="nature" class="form-control">
                                    <option value="" >Select Nature <i class="fa-solid fa-angle-down fa-lg"></i></option>
                                    <option value="rjl">Woven</option>
                                    <option value="rfl">Knit</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="contact_number" class="col-form-label">Contact No.</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="contact_number" id="contact_number"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 align-items-center row-gap">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="email" class="col-form-label">Email</label>
                            </div>
                            <div class="col-md-8">
                                <input type="email" name="email" id="email"  class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="status"  class="col-form-label">Status</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" name="status" id="status" >
                                    <option>Select</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

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
    <div class="general">
        <div class="header">
            <span>Team Member Information</span>
        </div>
        <div class="container-xxl flex-grow-1 p-4 general-form">
            <div class="row col-md-12 align-items-center">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="member_name" class="col-form-label">Member </label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="member_name" id="member_name">
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="member_designation" class="col-form-label">Designation</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="member_designation" id="member_designation">
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-top: -7px">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="contact_no" class="col-form-label">Contact No.</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text"  name="contact_no" id="contact_no" class="form-control contact_no" aria-describedby="">
                        </div>
                    </div>
                </div>
        </div>
        <div class="row col-md-12 align-items-center row-gap">

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="email" class="col-form-label">Email</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text"  name="email" id="email" class="form-control email" aria-describedby="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="status"  class="col-form-label">Status</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="status" id="status" >
                                <option>Select</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

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
    <div class="general">
        <div class="header">
            <span>List</span>
        </div>

        <div class="company-list">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Type</th>
                    <th>Team Name</th>
                    <th>Team Leader Name</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Doe</td>
                    <td>john@ex</td>
                    <td>Doe</td>
                    <td>john@ex</td>
                    <td>john@ex</td>
                    <td>john@ex</td>
                  </tr>
        

                </tbody>
              </table>
        </div>

    </div>
</div>

@endsection
