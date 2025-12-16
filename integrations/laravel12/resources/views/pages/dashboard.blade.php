@extends('layouts.paper')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="{{ Vite::asset('resources/vendor/paper-dashboard/assets/img/damir-bosnjak.jpg') }}" alt="Background image">
            </div>
            <div class="card-body">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="{{ Vite::asset('resources/vendor/paper-dashboard/assets/img/mike.jpg') }}" alt="User avatar">
                        <h5 class="title">Mike Andrew</h5>
                    </a>
                    <p class="description">michael24</p>
                </div>
                <p class="description text-center">
                    "Lamborghini Mercy
                    <br> Your chick she so thirsty
                    <br> I'm in that two seat Lambo"
                </p>
            </div>
            <div class="card-footer">
                <hr>
                <div class="button-container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-3 ml-auto">
                            <h5>12<br><small>Files</small></h5>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4 ml-auto mr-auto">
                            <h5>2GB<br><small>Used</small></h5>
                        </div>
                        <div class="col-lg-3 col-md-3 col-3 mr-auto">
                            <h5>24,6$<br><small>Spent</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-chart">
            <div class="card-header">
                <h5 class="card-title">Email Statistics</h5>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-body">
                <canvas id="chartHours" width="400" height="200"></canvas>
            </div>
            <div class="card-footer">
                <div class="chart-legend">
                    <i class="fa fa-circle text-info"></i> Open
                    <i class="fa fa-circle text-danger"></i> Bounce
                    <i class="fa fa-circle text-warning"></i> Unsubscribe
                </div>
                <hr />
                <div class="card-stats">
                    <i class="fa fa-history"></i> Campaign sent 2 days ago
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Simple Table</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <tr><th>Name</th><th>Country</th><th>City</th><th class="text-right">Salary</th></tr>
                        </thead>
                        <tbody>
                        <tr><td>Dakota Rice</td><td>Niger</td><td>Oud-Turnhout</td><td class="text-right">$36,738</td></tr>
                        <tr><td>Minerva Hooper</td><td>Curaçao</td><td>Sinaai-Waas</td><td class="text-right">$23,789</td></tr>
                        <tr><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td class="text-right">$56,142</td></tr>
                        <tr><td>Philip Chaney</td><td>Korea, South</td><td>Overland Park</td><td class="text-right">$38,735</td></tr>
                        <tr><td>Doris Greene</td><td>Malawi</td><td>Feldkirchen in Kärnten</td><td class="text-right">$63,542</td></tr>
                        <tr><td>Mason Porter</td><td>Chile</td><td>Gloucester</td><td class="text-right">$78,615</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
