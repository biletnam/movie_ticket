@extends('layouts.movietickets_v1.default')
@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Register new movie</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form action="{{ url('/movies/add') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                        <li><a data-toggle="tab" href="#menu1">Details</a></li>
                        <li><a data-toggle="tab" href="#menu2">Agreement</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <h3>Movie Information</h3>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" required>
                                    <label class="form-label">Movie name*</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="duration" id="duration" required>
                                    <label class="form-label">Duration*</label>
                                </div>
                            </div>                        
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="id_label_multiple">Cover image:</label>
                                    <input type="file" name="movie_image" >
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3>Details</h3>
                            <div class="form-group form-float">
                                <div>
                                    <label for="id_label_multiple">Choose Stars:</label>
                                    <select name="stars[]" class="js-example-basic-multiple js-states form-control select2" multiple="multiple">
                                            @foreach($stars as $star)
                                                <option value="{{ $star->id }}">{{ $star->first_name . ' ' . $star->last_name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>      
                            <div class="form-group form-float">
                                <div>
                                    <label for="id_label_multiple">Choose Genres:</label>
                                        <select name="genres[]" class="js-example-basic-multiple js-states form-control select2" multiple="multiple">
                                                @foreach($genres as $genre)
                                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                                @endforeach
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>Timeline & Condition</h3>
                            <div class="form-group form-float">
                                <label class="form-label">Status*</label>
                                <div class="form-line">
                                    <select class="bootstrap-select form-control" name="status">
                                        <option value="1">Visible</option>
                                        <option value="0">Hidden</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <label class="form-label">Release Date*</label>
                                <div class="form-line">
                                    <input type="text" name="release_date" class="datepicker form-control">
                                </div>
                            </div>
                            <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                            <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>

                            <div class="row">
                                <div class="container">
                                    <div class="col-sm-6 col-sm-offset-8">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="tab-pane" id="tab2">
                    <a class="btn btn-primary btnNext" >Next</a>
                    <a class="btn btn-primary btnPrevious" >Previous</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ URL::asset('js/bootstrap-material-datetimepicker.js') }}"></script>
<link href="{{ URL::asset('css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">

<script>
    $(document).ready(function(){
        $('.datepicker').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
    });
</script>


@endsection

