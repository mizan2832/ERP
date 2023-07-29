@extends('master')
@section('title','Buyer')
@push('css')
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endpush

@section('sidebar')
   @include('includes.lib_sidebar')
@endsection

@section('content')
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
                        <label for="inputPassword6" class="col-form-label">Country</label>
                      </div>
                      <div class="col">
                        <select name="party_type" id="party_type" class="form-control">
                            <option value="" disabled>Select Country</option>
                            <option value="">Bangladesh</option>
                            <option value="">india</option>
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
                        <label for="inputPassword6" class="col-form-label">Marketing Team</label>
                    </div>

                    <div class="col">
                        <select name="party_type" id="party_type" class="form-control">
                            <option value="">Select Team</option>
                            <option value="">Select Team</option>
                            <option value="">Woven RFL-1</option>
                            <option value="">Woven RFL-2</option>
                        </select>
                      </div>

                </div>
            </div>
    </div>
</div>
@endsection
@stack('js')

