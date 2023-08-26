@extends('master')
@section('title','Item Account Creation')
@push('css')
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .form-buyer{
            color: #ffffff;
            margin-left: 27px;
            margin-top: 20px;
            margin-right: 25px;
        }
        .form-buyer-list{
            color: #ffffff;
            margin-left: 27px;
            margin-top: 20px;
            margin-right: 25px;
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
         #full_name_input,#short_name_input,#partyType_input,#team_input,#email_input,#status_input{
            width: 150px;
            text-align: left;
            height: 30px;
            margin: -10px;
        }

    </style>
@endpush
@push('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('sidebar')
   @include('includes.lib_sidebar')
@endsection

@section('content')
<div class="card form-buyer ">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row col-md-12 g-3   align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="contact" class="col-form-label">Item Category</label>
                            </div>
                            <div class="col-md-8">
                               <select name="company" id="company" class="form-control">
                                    <option value="">Select Company <i class="fa-solid fa-angle-down fa-lg"></i></option>
                                    <option value="rjl">Radiance Jeans Ltd.</option>
                               </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="short" class="col-form-label">Item Category</label>
                            </div>
                            <div class="col-md-8">
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">Select Category <i class="fa-solid fa-angle-down fa-lg"></i></option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label">Item Group</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="" name="group_id" class="group_id form-control">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 g-3  pt-2 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="partyType" class="col-form-label">Item Description</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="" name="description" class="description form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="order_uom" class="col-form-label">Order UOM</label>
                            </div>
                            <div class="col-md-8">
                                <select name="order_uom_id" id="order_uom_id" class="form-control">
                                    <option value="">Select UOIM <i class="fa-solid fa-angle-down fa-lg"></i></option>
                                    @foreach ($uoms as $u)
                                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="fancy" class="col-form-label">Conversion UOM</label>
                            </div>

                            <div class="col-md-8">
                                <select name="order_uom_id" id="order_uom_id" class="form-control">
                                    <option value="">Select UOIM <i class="fa-solid fa-angle-down fa-lg"></i></option>
                                    @foreach ($uoms as $u)
                                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 g-3  pt-2 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="conversion_factor" class="col-form-label">Conversion Factor</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" name="conversion_factor" id="conversion_factor"  class="form-control" aria-describedby="" min="0">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="item_brand" class="col-form-label">Item Brand</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="item_brand" id="item_brand"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="status" class="col-form-label">Status</label>
                            </div>
                            <div class="col-md-8">
                                <select name="status" id="status" class="form-control">
                                    <option value="ac">Active</option>
                                    <option value="in">Inactive</option>
                                </select>
                            </div>
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
<div class="card ">
    <div class="container  ">
        <table class="table table-bordered buyer_table">
            <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Party Type</th>
                <th>Email</th>
                <th>Team</th>
                <th>Status</th>
            </tr>
            <tr>
              <th><input type="text" class="form-control" id="serial"></th>
              <th><input type="text" class="form-control" id="full_name_input"></th>
              <th><input type="text" class="form-control" id="partyType_input"></th>
              <th><input type="text" class="form-control" id="email_input"></th>
              <th><input type="text" class="form-control" id="team_input"></th>
              <th><input type="text" class="form-control" id="status_input"></th>
            </tr>

            </thead>
            <tbody>

            </tbody>
        </table>

      </div>
</div>
@endsection
@push('js')
    <script
   src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js"></script>

@endpush

