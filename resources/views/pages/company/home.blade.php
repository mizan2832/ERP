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

    <h4 class="text-center">Company</h4>

    <div class="general">
        <div class="header">
            <span>General Information</span>
        </div>
        <div class="container-xxl flex-grow-1 p-4 general-form">
            <div class="row col-md-12 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="contact" class="col-form-label">Group Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="short" class="col-form-label">Company</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-top: -7px">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="short" class="col-form-label">Short Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="short" id="short" class="form-control short" aria-describedby="">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 align-items-center row-gap">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="ceo" class="col-form-label">CEO</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="short" id="short" class="form-control short" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="cfo" class="col-form-label">CFO</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="cfo" id="cfo" class="form-control short" aria-describedby="">
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
                                    <option value="rjl">Private ltd</option>
                                    <option value="rfl">Public Ltd</option>
                                    <option value="rfl">Partnership</option>
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
                                <label for="website" class="col-form-label">website</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="website" id="website"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="address" class="col-form-label">Address</label>
                            </div>

                            <div class="col-md-8">
                                <input type="text" name="address" id="address"  class="form-control" aria-describedby="">
                            </div>

                        </div>
                    </div>
            </div>
            <div class="row col-md-12 align-items-center row-gap">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="contact_person"  class="col-form-label">Contact Person</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="contact_person" id="contact_person"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="general">
        <div class="header">
            <span>Address</span>
        </div>
        <div class="container-xxl flex-grow-1 p-4 general-form">
            <div class="row col-md-12 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="contact" class="col-form-label">Road No.</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="road">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="short" class="col-form-label">Plot</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="plot">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-top: -7px">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="short" class="col-form-label">Block N0</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="block" id="block" class="form-control block" aria-describedby="">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 align-items-center row-gap">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="level" class="col-form-label">Level No</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="level" id="level" class="form-control level" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="province" class="col-form-label">Province</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="province" id="province" class="form-control province" aria-describedby="">
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
                                    <option value="" >Select Country <i class="fa-solid fa-angle-down fa-lg"></i></option>
                                    <option value="bd">Bangladesh</option>
                                </select>

                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 align-items-center row-gap">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="city" class="col-form-label">City</label>
                            </div>
                            <div class="col-md-8">
                                <input type="city" name="city" id="city"  class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="zip_code" class="col-form-label">Zip Code</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="zip_code" id="zip_code"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>

            </div>

        </div>
    </div>
    <div class="general">
        <div class="header">
            <span>Documents Informatin</span>
        </div>
        <div class="container-xxl flex-grow-1 p-4 general-form">
            <div class="row col-md-12 align-items-center">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="licence" class="col-form-label">Licence NO.</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="licence">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="erc" class="col-form-label">ERC No.</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="erc">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-top: -7px">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="irc" class="col-form-label">IRC N0</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="irc" id="irc" class="form-control irc" aria-describedby="">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 align-items-center row-gap">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="tin" class="col-form-label">Tin No.</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="tin" id="tin" class="form-control tin" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="vat" class="col-form-label">Vat No.</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="vat" id="vat" class="form-control vat" aria-describedby="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="bb_reg" class="col-form-label">BB Reg. No.</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text"  name="bb_reg" id="bb_reg" class="form-control bb_reg" aria-describedby="">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row col-md-12 align-items-center row-gap">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="city" class="col-form-label">City</label>
                            </div>
                            <div class="col-md-8">
                                <input type="city" name="city" id="city"  class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="zip_code" class="col-form-label">Zip Code</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="zip_code" id="zip_code"  class="form-control" aria-describedby="">
                            </div>
                        </div>
                    </div>

            </div>

        </div>
    </div>
    <div class="general">
        <div class="header">
            <span>Status</span>
        </div>
        <div class="container-xxl flex-grow-1 p-4 general-form">
            <div class="row col-md-12">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="status" class="col-form-label">Status</label>
                        </div>

                        <div class="col-md-8">
                            <select name="status" id="status" class="form-control">
                                <option value="" >Active <i class="fa-solid fa-angle-down fa-lg"></i></option>
                                <option value="" >Inactive <i class="fa-solid fa-angle-down fa-lg"></i></option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <span>Select Logo</span>
                </div>
                <div class="col-md-4">
                    <button>Click to add company Image</button>
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
                    <th>Company Name</th>
                    <th>Group Name</th>
                    <th>Short Name</th>
                    <th>Contact Person</th>
                    <th>Email</th>
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
