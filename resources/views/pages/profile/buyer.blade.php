@extends('master')
@section('title','Buyer')
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
                                <label for="contact" class="col-form-label">Contact Name</label>
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
                                <label for="inputPassword6" class="col-form-label">Email</label>
                            </div>
                            <div class="col-md-8">
                                <input type="email"  name="email" id="email" class="form-control email" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 g-3  pt-2 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="partyType" class="col-form-label">Party Type</label>
                            </div>
                            <div class="col-md-8">
                                <select name="party_type" id="party_type" class="form-control">
                                    <option value="" >Select Party</option>
                                    @foreach ($parties as $party)
                                        <option value="{{ $party->id }}">{{ $party->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="address" class="col-form-label">Address</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="address" id="address" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="company" class="col-form-label">Company</label>
                            </div>

                            <div class="col-md-8">
                                <select name="tag_company" id="tag_company" class="form-control">
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
                                <label for="credit_limit" class="col-form-label">Credit Limit Days</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="credit_limit" id="credit_limit"  class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="supplier" class="col-form-label">Link to Supplier</label>
                            </div>
                            <div class="col-md-8">
                                <select name="supplier" id="supplier" class="form-control">
                                    <option value="">Select Supplier <i class="fa-solid fa-angle-down fa-lg"></i></option>
                                    <option value="ags">AGS</option>
                                    <option value="wa">Warptex</option>
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
            </div>
            <div class="row col-md-12 g-3  pt-2 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="buffer_days"  class="col-form-label">Delivery Buffer Days</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="buffer_days" id="buffer_days" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label">Http:://</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="website" id="website" class="form-control" aria-describedby="passwordHelpInline">
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
                                    <option value="" disabled>Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                            </div>

                        </div>
                    </div>
            </div>
            <div class="row col-md-12 g-3  pt-2 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="delivery" class="col-form-label">Partial Delivery</label>
                            </div>
                            <div class="col-md-8">
                                <select name="partial" id="partial" class="form-control">
                                    <option value="">Select</option>
                                    <option value="1">YES</option>
                                    <option value="2">NO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="bank" class="col-form-label">Bank</label>
                            </div>
                            <div class="col-md-8">
                                <select name="bank" id="bank" class="form-control">
                                    <option value="">Select Bank </option>
                                    <option value="sb">South Bank</option>
                                    <option value="ab">AB Bank</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="team" class="col-form-label">Marketing Team </label>
                            </div>

                            <div class="col-md-8">
                                <select name="team" id="team" class="form-control">
                                    <option value="">Select Team</option>
                                    @foreach ($groups as $g)
                                        <option value="{{ $g->id }}">{{ $g->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
            </div>
        </div>

        <div class="save-button d-flex justify-content-center align-items-center g-2">
            <button  value="save" id="save" >Save</button>
            <button  value="info" id="update" disabled='disabled'>Update</button>
            <button  value="delete" id="delete">Delete</button>
            <button  value="reset" id="reset">Reset</button>
        </div>
</div>
<div class="card form-buyer-list">
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
                @include('pages.profile.buyer_table')
            </tbody>
        </table>
        @include('pages.profile.buyer_table')
      </div>
</div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/buyer.js') }}"></script>
    <script
   src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js"></script>

@endpush

