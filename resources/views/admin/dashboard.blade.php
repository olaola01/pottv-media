@extends('layouts.dashboard')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-4">Total active posts</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-start" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#10c469 "
                                   data-bgColor="#ced4da" value="{{ \App\Models\Post::all()->count() }}"
                                   data-skin="tron" data-angleOffset="2" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>

                        <div class="widget-detail-1 text-end">
                            <h2 class="fw-normal pt-2 mb-1"> {{ \App\Models\Post::all()->count() }} </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-4">Total trashed posts posts</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-start" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#f05050 "
                                   data-bgColor="#F9B9B9" value="{{ \App\Models\Post::onlyTrashed()->count() }}"
                                   data-skin="tron" data-angleOffset="2" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>

                        <div class="widget-detail-1 text-end">
                            <h2 class="fw-normal pt-2 mb-1"> {{ \App\Models\Post::onlyTrashed()->count() }} </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-4">Total views</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-start" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a"
                                   data-bgColor="#FFE6BA" value="{{ \App\Models\PostViews::all()->count() }}"
                                   data-skin="tron" data-angleOffset="2" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>
                        <div class="widget-detail-1 text-end">
                            <h2 class="fw-normal pt-2 mb-1"> {{ \App\Models\PostViews::all()->count() }} </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-4">Total views (Past 7 days)</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-start" dir="ltr">
                            <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a"
                                   data-bgColor="#FFE6BA" value="{{ \App\Models\PostViews::where('created_at', '>=', \Illuminate\Support\Carbon::now()->subDays(7))->count() }}"
                                   data-skin="tron" data-angleOffset="2" data-readOnly=true
                                   data-thickness=".15"/>
                        </div>
                        <div class="widget-detail-1 text-end">
                            <h2 class="fw-normal pt-2 mb-1"> {{ \App\Models\PostViews::where('created_at', '>=',\Illuminate\Support\Carbon::now()->subDays(7))->count() }} </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div>
    <!-- end row -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> &copy; Pottv Media Backend Portal
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

    </div>
@endsection
