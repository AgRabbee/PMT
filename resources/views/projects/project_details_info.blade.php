@extends('master')
@section('custom_css')
@endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Projects Details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Projects Details</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Projects Details</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
{{--            <button type="button" class="btn btn-success mb-3"> <i class="fas fa-plus"></i> Add</button>--}}
            <div class="row">
                    @if(isset($projectServersInfo) && !empty($projectServersInfo))
                        @foreach($projectServersInfo as $key=>$info)
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body bg-gradient-teal">
{{--                                    {{ dd($info) }}--}}
                                    <h5 class="card-title mb-2 text-bold text-dark">{{ $info['name'] }}</h5>
                                    <div class="card-text">
                                        <div class="row">
                                            <div class="col-md-4">Repository Name</div>
                                            <div class="col-md-8">: {{ $info['git_repo_name'] }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Repository URL</div>
                                            <div class="col-md-8">:
                                                @if(strlen($info['git_repo_url']) > 35)
                                                    {{ substr($info['git_repo_url'],0,33) .'...'}}
                                                    <button type="button" class="btn btn-default btn-sm float-right mt-3 see_more" data-toggle="modal" id="{{$info['id']}}" data-target="#modal_{{$info['id']}}">See More</button>
                                                @else
                                                    {{$info['git_repo_url']}}
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="modal_{{$info['id']}}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{$info['name']}}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        @endforeach
                    @else
                        <div class="m-auto">
                            <p>No details found!!</p>
                        </div>
                    @endif
            </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </div>

</section>
<!-- /.content -->

@endsection

@section('custom_scripts')
    <script>
        $(document).ready(function(){
            $('.see_more').click(function () {
                var id = $(this).attr('id');
                $.ajax({
                    type: "post",
                    url: "/project",
                    data: {"_token": "{{ csrf_token() }}",id:id},
                    success: function(data){
                        console.log(123);
                        $('#modal_'+id+' .modal-body').html(data.data);
                    }
                });
            });
        });
    </script>
@endsection
