@extends('layouts.app')

@section('page-title', 'Register Bounty')
@section('page-heading', 'Register Bounty')

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        Register Bounty
    </li>
@stop


@section('content')

@include('partials.messages')


        <div class="card mt-5">
            <div class="card-body">
                <h5 class="card-title text-center mt-4 text-uppercase">
                    Register Bounty
                </h5>

                <div class="p-4">

                    <form role="form" action="<?= url('bounty-submit') ?>" method="post" id="registration-form" autocomplete="off" class="mt-3">
                        <input type="hidden" value="<?= csrf_token() ?>" name="_token">
                        <div class="form-group">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Bounty Title">
                        </div>
                        <div class="form-group">
                            <input type="text" name="description" id="description" class="form-control" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <input type="text" name="latitude" id="latitude" class="form-control" placeholder="Latitude">
                        </div>
                         <div class="form-group">
                            <input type="text" name="longitude" id="longitude" class="form-control" placeholder="Longitude">
                        </div>

                         <div class="form-group">
                            <input type="text" name="project_intake" id="project_intake" class="form-control" placeholder="Project Intake">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="bounty" id="bounty" class="form-control" placeholder="Bounty">
                        </div>
                        
                                                <div class="form-group">
                            <input type="text" name="starts" id="starts" class="form-control" placeholder="Starts">
                        </div>
                        
                                                <div class="form-group">
                            <input type="text" name="ends" id="ends" class="form-control" placeholder="Ends">
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn-login">
                                Register Bounty
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


@stop