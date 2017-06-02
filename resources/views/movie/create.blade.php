@extends('layouts.movietickets_v1.default')
@section('content')



<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Register new movie
                </h2>
            </div>
            <div class="body demo-masked-inputs">
                <form action="{{ url('/movies/add') }}" method="POST">
                    {{ csrf_field() }}
                    <label for="name">Movie name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Movie name">
                        </div>
                    </div>
                    <label for="password">Duration</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">access_time</i>
                        </span>
                        <div class="form-line">
                            <input type="text" name="duration" id="duration" class="form-control" placeholder="Movie duration (in seconds)">
                        </div>
                    </div>
                    <label for="password">Status</label>
                    <div class="form-group">
                        <select class="btn-group bootstrap-select form-control show-tick" name="status">
                            <option value="1">Visible</option>
                            <option value="0">Hidden</option>
                        </select>
                    </div>
                    <label for="name">Release Date</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">date_range</i>
                        </span>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="release_date" class="datepicker form-control" placeholder="Please choose a date...">
                            </div>
                        </div>
                    </div>

                    <br>
                    
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Register</button>
                    <hr>
                    @include('layouts.movietickets_v1.validation-errors')
                
                </form>
            </div>
        </div>
    </div>
</div>

@endsection