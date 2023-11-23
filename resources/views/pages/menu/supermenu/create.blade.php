@extends('master')
@section('title','Master Menu Creation')
@push('head')
    <meta name="csrf-token" id="token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous"/>
@endpush
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


</style>
@endpush

@section('sidebar')
   @include('includes.admin_sidebar')
@endsection

@section('content')

<div class="container menu-form">

    <h4 class="text-center">Menu Create</h4>

    <div class="general">
        <div class="header">
            <span>Menu Form</span>
        </div>
        <div class="container-xxl flex-grow-1 p-4 general-form">
            <div class="row col-md-12 align-items-center">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="top_menu" class="col-form-label">Menu Name </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="top_menu" id="top_menu">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="general">
        <div class="container-xxl flex-grow-1 p-4 general-form">
            <div class="save-button d-flex justify-content-center align-items-center g-2">
                <button  value="save" id="save" onclick="saveMenu('TopMenu')" >Save</button>
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
            <table class="table table-bordered menu_table">
                <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Menu Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($topMenu as $m)
                        <tr onclick="getMenuData('TopNav',{{ $m->id }})" style="cursor: pointer;" id="id_{{$i}}">
                            <td>{{ $i++}}</td>
                            <td>{{ $m->top_menu_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>

    </div>
</div>

@endsection

@push('js')
    <script src="{{ asset('assets/js/menu.js') }}"></script>
@endpush
