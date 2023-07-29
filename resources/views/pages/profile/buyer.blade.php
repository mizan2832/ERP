@extends('master')
@section('title','Buyer')
@push('css')
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .form-buyer{
            /* background-image: linear-gradient(to right, rgba(103, 168, 234, 0.767) , rgb(107, 101, 98)); */
            color: #ffffff;
            margin-left: 27px;
            margin-top: 20px;
            margin-right: 25px;
            background-color: #
        }
        .form-buyer-list{
            /* background-image: linear-gradient(to right, rgba(103, 168, 234, 0.767) , rgb(107, 101, 98)); */
            color: #ffffff;
            margin-left: 27px;
            margin-top: 20px;
            margin-right: 25px;
            margin-top:-100px;
        }
        .save-button a{
            margin-right: 10px;
        }

    </style>
@endpush

@section('sidebar')
   @include('includes.lib_sidebar')
@endsection

@section('content')
<div class="card form-buyer ">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row col-md-12 g-3 pt-2 align-items-center">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Contact Name</label>
                          </div>
                          <div class="col">
                            <input type="" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Short Name</label>
                          </div>
                          <div class="col">
                            <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Email</label>
                          </div>
                          <div class="col">
                            <input type="email" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                          </div>
                    </div>
                </div>
          </div>
        <div class="row col-md-12 g-3 pt-2 align-items-center">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Party Type</label>
                          </div>
                          <div class="col">
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
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Address</label>
                          </div>
                          <div class="col">
                            <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Company</label>
                        </div>

                        <div class="col">
                            <select name="party_type" id="party_type" class="form-control">
                                <option value="" disabled>Select Company</option>
                                <option value="">Radiance Jeans Ltd.</option>
                                <option value="">Radiance Fashon Ltd.</option>
                            </select>
                          </div>

                    </div>
                </div>
        </div>
        <div class="row col-md-12 g-3 pt-2 align-items-center">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Credit Limit Days</label>
                          </div>
                          <div class="col">
                            <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Link to Supplier</label>

                          </div>
                          <div class="col">
                            <select name="party_type" id="party_type" class="form-control">
                                <option value=""></option>
                                <option value="">Select Supplier <i class="fa-solid fa-angle-down fa-lg"></i></option>
                                <option value="">AGS</option>
                                <option value="">Warptex</option>
                            </select>
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Company</label>
                        </div>

                        <div class="col">
                            <select name="party_type" id="party_type" class="form-control">
                                <option value="" disabled>Select Company</option>
                                <option value="">Radiance Jeans Ltd.</option>
                                <option value="">Radiance Fashon Ltd.</option>
                            </select>
                          </div>

                    </div>
                </div>
        </div>
        <div class="row col-md-12 g-3 pt-2 align-items-center">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Eelivery Buffer Days</label>
                          </div>
                          <div class="col">
                            <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Commercial Invoice</label>

                          </div>
                          <div class="col">
                            <select name="party_type" id="party_type" class="form-control">
                                <option value=""></option>
                                <option value="">Select Supplier <i class="fa-solid fa-angle-down fa-lg"></i></option>
                                <option value="">AGS</option>
                                <option value="">Warptex</option>
                            </select>
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Status</label>
                        </div>

                        <div class="col">
                            <select name="party_type" id="party_type" class="form-control">
                                <option value="" disabled>Select Company</option>
                                <option value="">Active</option>
                                <option value="">Inactive</option>
                            </select>
                          </div>

                    </div>
                </div>
        </div>
        <div class="row col-md-12 g-3 pt-2 align-items-center">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Partial Delivery</label>
                          </div>
                          <div class="col">
                            <select name="party_type" id="party_type" class="form-control">
                                <option value=""></option>
                                <option value="">Select</option>
                                <option value="">YES</option>
                                <option value="">NO</option>
                            </select>
                         </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Bank</label>

                          </div>
                          <div class="col">
                            <select name="party_type" id="party_type" class="form-control">
                                <option value=""></option>
                                <option value="">Select Bank </option>
                                <option value="">South Bank</option>
                                <option value="">AB Bank</option>
                            </select>
                          </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col">
                            <label for="inputPassword6" class="col-form-label">Marketing Team </label>
                        </div>

                        <div class="col">
                            <select name="party_type" id="party_type" class="form-control">
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
        <a href="" class="btn btn-primary">Save</a>
        <a href="" class="btn btn-info">Update</a>
        <a href="" class="btn btn-danger">Delete</a>
    </div>
</div>
<div class="card form-buyer-list">
    <div class="container  ">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Short Name</th>
              <th>Party Type</th>
              <th>Email</th>
              <th>Address</th>
              <th>Team</th>
              <th>Invoice</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" placeholder="search"></td>
              <td><input type="text" placeholder="search"></td>
              <td><input type="text" placeholder="search"></td>
              <td><input type="text" placeholder="search"></td>
              <td><input type="text" placeholder="search"></td>
              <td><input type="text" placeholder="search"></td>
              <td><input type="text" placeholder="search"></td>
              <td><input type="text" placeholder="search"></td>
              <td><input type="text" placeholder="search"></td>
            </tr>
            <tr>
              <td>1</td>
              <td>LIDL</td>
              <td>LIDL</td>
              <td>buyer</td>
              <td>lidl@gmail.com</td>
              <td>pollan, downhall</td>
              <td>RFL-1</td>
              <td>Com. Invoice</td>
              <td>Active</td>
            </tr>

          </tbody>
        </table>
      </div>
</div>
@endsection
@stack('js')

