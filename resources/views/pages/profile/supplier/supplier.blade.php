@extends('master')
@section('title','Supplier')
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
                                <label for="contact" class="col-form-label">Supplier Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="full_name" id="full_name" class="form-control " aria-describedby="passwordHelpInline"  data-parsley-maxlength="42"  required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="short" class="col-form-label">Short Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="short_name" id="short_name" class="form-control short_name" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="addess" class="col-form-label">Address</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="address" id="address" class="form-control address" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 g-3  pt-2 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="suppliyerType" class="col-form-label">Type</label>
                            </div>
                            <div class="col-md-8">
                                <select name="suppliyer_type" id="suppliyer_type" class="form-control">
                                    <option value="" >Select Type</option>
                                    <option value="sub">Sub-contract</option>
                                    <option value="tran">Transport</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="country" class="col-form-label">Country</label>
                            </div>
                            <div class="col-md-8">
                                <select name="country" id="country" class="form-control">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                         <option value="{{ $country->code }}">{{ $country->name }}</option>
                                     @endforeach
                                </select>
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
                                    <option value="" >Select Company</option>
                                    <option value="rjl">Radiance Jeans Ltd.</option>
                                    <option value="rfl">Radiance Fashon Ltd.</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 g-3  pt-2 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="person_name" class="col-form-label">Contact Person</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="person_name" id="person_name"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="contact_number" class="col-form-label">Contact Number </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="contact_number" id="contact_number" class="form-control contact_number" aria-describedby="">
                            </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="email" class="col-form-label">Email </label>
                            </div>
                                <div class="col-md-8">
                                    <input type="email"  name="email" id="email" class="form-control email" aria-describedby="">
                                </div>
                        </div>
                    </div>
                </div>

                <div class="row col-md-12 g-3  pt-2">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="designation" class="col-form-label">Designation</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="designation" id="designation"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="web" class="col-form-label">Website</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="web" id="web"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="image" class="col-form-label">Image</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" name="image" id="image"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row col-md-12 p-2 g-3 ">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="remarks" class="col-form-label">Remarks</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="remarks" id="remarks"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="vat" class="col-form-label">Vat</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="vat" id="vat"  class="form-control" aria-describedby=""  >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row col-md-12 p-2 g-3 ">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nature" class="col-form-label">Nature</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nature" id="nature"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="vat" class="col-form-label">Vat</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="vat" id="vat"  class="form-control" aria-describedby=""  >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="status" class="col-form-label">Status</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="status" id="status"  class="form-control" aria-describedby=""  >
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="save-button d-flex justify-content-center align-items-center g-2">
                <button  value="save" id="save" >Save</button>
                <button  value="info" id="update" onclick="updateSupplier()" disabled='disabled'>Update</button>
                <button  value="delete" id="delete" onclick="deleteSupplier()" disabled='disabled'>Delete</button>
                <button  value="reset" id="reset" onclick="resetFormSupplier()">Refresh</button>

                <input type="text" id="row_id" value="" hidden>
            </div>
        </div>

</div>
<div class=" form-buyer-list">
    <div class="container  ">
        <table class="table table-bordered buyer_table ">
            <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Supplier Type</th>
                <th>Tin</th>
                <th>Vat</th>
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
                {{-- @include('pages.profile.buyer_table') --}}
            </tbody>
        </table>

      </div>
</div>
@endsection
@push('js')
    {{-- <script src="{{ asset('assets/js/buyer.js') }}"></script> --}}
    <script
   src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js"></script>

@endpush

