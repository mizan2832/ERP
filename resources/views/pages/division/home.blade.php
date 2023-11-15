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

    <h4 class="text-center">Division</h4>

    <div class="general">
        <div class="header">
            <span>Division Information</span>
        </div>
        <div class="container-xxl flex-grow-1 p-4 general-form">
            <div class="row col-md-12 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="division" class="col-form-label">Division </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="division" id="division">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="short" class="col-form-label">Short N.</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="short">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="company" class="col-form-label">Company</label>
                            </div>
                            <div class="col-md-8">
                               <select name="company" id="company" class="form-control">
                                    <option value="">Select </option>
                                    <option value="rjl">Radiance Jeans </option>
                               </select>
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
                                <label for="website" class="col-form-label">Status</label>
                            </div>
                            <div class="col-md-8">
                                <select name="status" id="status" class="form-control">
                                    <option value="">Active</option>
                                    <option value="">Inactive</option>
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
                    <th>Department Name</th>
                    <th>Short Name</th>
                    <th>Division</th>
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
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Doe</td>
                    <td>john@ex</td>
                    <td>Doe</td>
                    <td>john@ex</td>
                    <td>john@ex</td>
                  </tr>

                </tbody>
              </table>
        </div>

    </div>
</div>

@endsection
