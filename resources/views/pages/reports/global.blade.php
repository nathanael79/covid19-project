@extends('layouts.master')

@section('page-heading')
    @component('components.breadcrumb', ['name' => 'Reports'])
        <li class="breadcrumb-item active">
            <a href="/reports/">Reports</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="/reports/global">Global</a>
        </li>
    @endcomponent
@endsection

@section('content')
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h2 class="card-title text-success" id="recovered">Recovered</h2>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <h4 class="card-text">patient recovered</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h2 class="card-title text-warning" id="confirmed">Confirmed</h2>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <h4 class="card-text">patient confirmed</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h2 class="card-title text-danger" id="deaths">Deaths</h2>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <h4 class="card-text">patient deaths</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h4 class="text-center">Covid-19 Latest Data All Countries</h4>

                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-footer">

                    @isset($modals)
                        {{$modals}}
                    @endisset

                    <div class="table-responsive">
                        <table id="" class="table table-hover text-center dataTables-example">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Country Name</th>
                                <th>Country Code</th>
                                <th>New Confirmed</th>
                                <th>Total Confirmed</th>
                                <th>New Deaths</th>
                                <th>Total Deaths</th>
                                <th>New Recovered</th>
                                <th>Total Recovered</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 0; @endphp
                            @foreach($data as $datum)
                                @php $i++; @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$datum['Country']}}</td>
                                    <td>{{$datum['CountryCode']}}</td>
                                    <td>{{$datum['NewConfirmed']}}</td>
                                    <td>{{$datum['TotalConfirmed']}}</td>
                                    <td>{{$datum['NewDeaths']}}</td>
                                    <td>{{$datum['TotalDeaths']}}</td>
                                    <td>{{$datum['NewRecovered']}}</td>
                                    <td>{{$datum['TotalRecovered']}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @push('footer-scripts')
    <script>
        $(document).ready(function () {
            semuaData();

            setInterval(function () {
                semuaData();
            }, 2000);
    
            function semuaData() {
            $.ajax({
                url: 'https://coronavirus-19-api.herokuapp.com/all',
                success: function (data) {
                    try {
                        var json = data;
                        var kasus = json.cases;
                        var meninggal = json.deaths;
                        var sembuh = json.recovered;

                        $('#confirmed').html(kasus)
                        $('#deaths').html(meninggal)
                        $('#recovered').html(sembuh)
                    } catch {
                        alert('error!');
                    }
                }

            });
        }
    
        });
    
    </script>
    @endpush

@endsection