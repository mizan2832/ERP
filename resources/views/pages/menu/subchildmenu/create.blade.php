@extends('master')
@section('title','Menu of Sub-Menu')
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
        /*width: 100%;*/
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
    .menu-form{
        margin: auto;
        width: 45%;
        margin-top: -1px;
    }
    #status{
        width: 100px;
    }

    .save-button input{
            margin-right: 10px;
     }
     .company-list {
        overflow-x: scroll;
     }


</style>
@endpush
@section('sidebar')
   @include('includes.admin_sidebar')
@endsection

@section('content')

<div class="container menu-form">

    <h4 class="text-center">Menu create of Sub-Menu </h4>

    <div class="general">
        <div class="header">
            <span>Menu Form</span>
        </div>
        <div class="container-xxl flex-grow-1 p-4 general-form">
            <div class="row col-md-12 align-items-center">


                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="sub-child-menu" class="col-form-label"> Sub Child Menu </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="sub_child_menu" id="sub_child_menu">
                            </div>

                        </div>

                    </div>


            </div>
            <div class="row col-md-12 align-items-center">


                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="sub_menu" class="col-form-label"> Sub Menu Name </label>
                            </div>
                            <div class="col-md-8">
                                <select name="sub_menu" id="sub_menu" class="form-control">
                                    <option value="">Select</option>
                                    <option value="">Order Tracking</option>
                                    <option value="">Fabric Booking</option>
                                </select>
                            </div>

                        </div>

                    </div>


            </div>
            <div class="row col-md-12 align-items-center">


                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="top_menu" class="col-form-label">Top Menu</label>
                            </div>
                            <div class="col-md-8">
                                <select name="top_menu" id="top_menu" class="form-control">
                                    <option value="">Select</option>
                                    <option value="">Merchandising</option>
                                    <option value="">Merchandising</option>
                                </select>
                            </div>

                        </div>

                    </div>


            </div>



        </div>
    </div>

    <div class="general">
        <div class="container-xxl flex-grow-1 p-4 general-form">
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
                    <th>Top Menu</th>
                    <th>Sub Menu </th>
                    <th>Sub-Child</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Doe</td>
                    <td>Doe</td>
                    <td>Doe</td>
                    <td>john@ex</td>
                  </tr>



                </tbody>
              </table>
        </div>

    </div>
</div>

@endsection
'7'
