@extends('layouts.movietickets_v1.default')

@section('content')

<script>
	$(document).ready(function(){
		$('.dataTable').DataTable();
	})
</script>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Available Movies
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Duration</th>
                                        <th>Release Date</th>
                                        <th>Status</th>
                                        <th>Stars</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Duration</th>
                                        <th>Release Date</th>
                                        <th>Status</th>
                                        <th>Stars</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                	@foreach($movies as $movie)
										<tr>
											<th>{{ $movie->name }}</th>
											<th>{{ $movie->duration }}</th>
											<th>{{ $movie->release_date }}</th>
											<th>{{ $movie->status }}</th>
											<th>{{ $movie->stars }}</th>
										</tr>
                                	@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection