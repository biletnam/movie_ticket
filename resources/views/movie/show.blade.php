@extends('layouts.movietickets_v1.default')

@section('content')

<script>
	$(document).ready(function(){
		$('.dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/datatables/movies') }}',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'duration', name: 'name' },
                { data: 'release_date', name: 'name' },
                { data: 'status', name: 'name' },
                { data: 'stars', name: 'name' },
                { data: 'genres', name: 'name' },
                { data: 'edit', name: 'edit', orderable: false, searchable: false},
            ]
        });
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
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{ url('/movies/add') }}">Register new movie</a></li>
                                <li><a href="javascript:void(0);">Register new actor</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <table class="table table-hover dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Duration</th>
                                <th>Release Date</th>
                                <th>Status</th>
                                <th>Stars</th>
                                <th>Genres</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Duration</th>
                                <th>Release Date</th>
                                <th>Status</th>
                                <th>Stars</th>
                                <th>Genres</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection