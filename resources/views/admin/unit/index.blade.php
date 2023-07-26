@extends('admin.master')

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

                
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Unit Add</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Unit</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Unit Add</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW -->
            <div class="row">
              
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Unit Add</h3>
                        </div>
                        <div class="card-body">
                            <h6 class>{{Session('msg')}}</h6>
                            <form class="needs-validation" action="{{route('unit.store')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom011">Unit name</label>
                                        <input type="text" class="form-control" name="name" id="validationCustom011"required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <label for="validationCustom011">Description</label>
                                        <textarea name="description" class="form-control" placeholder="Unit Description" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                              
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection