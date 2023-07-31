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



    </style>
@endpush

@section('sidebar')
   @include('includes.lib_sidebar')
@endsection

@section('content')
<div class="card form-buyer ">
    <form action="{{ route('admin.buyer.store') }}" method="POST">
        @csrf
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row col-md-12 g-3   align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label">Contact Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="full_name" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label">Short Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="short_name" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label">Email</label>
                            </div>
                            <div class="col-md-8">
                                <input type="email"  name="email" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 g-3  pt-2 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label">Party Type</label>
                            </div>
                            <div class="col-md-8">
                                <select name="party_type" id="party_type" class="form-control">
                                    <option value="" >Select Party</option>
                                    <option value="">Buyer</option>
                                    <option value="">Buyer-Subcontract</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label">Address</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="address"  class="form-control" aria-describedby="passwordHelpInline">
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
                                    <option value="">Radiance Jeans Ltd.</option>
                                    <option value="">Radiance Fashon Ltd.</option>
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
                                <input type="text" name="credit_limit"  class="form-control" aria-describedby="passwordHelpInline">
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
                                    <option value="">AGS</option>
                                    <option value="">Warptex</option>
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
                                    <option value="" disabled>Select Country</option>
                                    <option value="">Poland</option>
                                    <option value="">Russia</option>
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
                                    <option value="">Active</option>
                                    <option value="">Inactive</option>
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
                                    <option value="">YES</option>
                                    <option value="">NO</option>
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
                                    <option value="">South Bank</option>
                                    <option value="">AB Bank</option>
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
                                    <option value="">Woven RFL-1 </option>
                                    <option value="">Woven RFL-2</option>
                                </select>
                            </div>

                        </div>
                    </div>
            </div>
        </div>

        <div class="save-button d-flex justify-content-center align-items-center g-2">
            <input type="submit" value="save" class="btn btn-primary">
            <input type="submit" value="Info" class="btn btn-info">
            <input type="submit" value="Delete" class="btn btn-success">
        </div>

</form>
</div>
<div class="card form-buyer-list">
    <div class="container  ">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Party Type</th>
              <th>Email</th>
              <th>Address</th>
              <th>Team</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>1</td>
              <td>LIDL</td>
              <td>buyer</td>
              <td>lidl@gmail.com</td>
              <td>pollan, downhall</td>
              <td>Com. Invoice</td>
              <td>Active</td>
            </tr>

          </tbody>
        </table>
      </div>
</div>
@endsection
@stack('js')

