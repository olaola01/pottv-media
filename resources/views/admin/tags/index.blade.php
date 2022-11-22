@extends('layouts.dashboard')
@section('title')
    All Tags
@endsection
@section('css')
    <link href="{{asset('admin/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive">
                                <a class="btn btn-primary mb-3" type="button" style="float: right;" href="{{route('tags.create')}}">
                                    <?php echo __('Create New Tag')?>
                                </a>
                                <h4 class="mt-0 header-title">Tags</h4>
                                <p class="text-muted font-14 mb-3">
                                    Shows all tags
                                </p>

                                <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date Created</th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($tags as $tag)
                                        <tr>
                                            <td>{{$tag->title}}</td>
                                            <td>{{\Carbon\Carbon::createFromDate($tag->created_at)->format('Y-m-d H:i:s')}}</td>
                                            <td class="text-center">
                                                <a data-bs-toggle="modal"  data-bs-target="#deleteModal_{{$tag->id}}" data-action="{{ route('tags.destroy', $tag->id) }}" class="btn btn-outline-danger"><i class="fe-trash-2"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

            </div>
                @foreach($tags as $tag)
                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal_{{$tag->id}}" data-backdrop="static" tabindex="-1" role="dialog"
                         aria-labelledby="deleteUserModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteUserModalLabel">Trash Post?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
                                    <div class="modal-body">
                                        @csrf
                                        @method('DELETE')
                                        <p class="text-center">Are you sure you want to delete this tag with title <strong>{{ $tag->title }}</strong>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-danger">Yes, sure</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
@endsection
@section('script')
<!-- third party js -->
<script src="{{asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{asset('admin/assets/js/pages/datatables.init.js')}}"></script>
@endsection
