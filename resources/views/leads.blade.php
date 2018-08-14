@extends('application')
@section('title', 'Leads')


@section('content')
    @include("header")
    <div class="slide-panel" id="panel-scroll">
        <ul role="tablist" class="nav nav-tabs panel-tab-btn">
            <li class="active"><a data-toggle="tab" role="tab" data-target="#panel-tab1"><i class="ti-email"></i><span>Your Emails</span></a></li>
            <li><a data-toggle="tab" role="tab" data-target="#panel-tab2"><i class="ti-settings"></i><span>Your Setting</span></a></li>
        </ul>
        <div class="tab-content panel-tab">
            <div id="panel-tab1" class="tab-pane fade in active">
                <div class="recent-mails-widget">
                    <form><div id="searchMail"></div></form>
                    <h3>Recent Emails</h3>
                    <ul id="mail-list" class="mail-list">
                        <li>
                            <div class="title">
                                <span><img src="http://placehold.it/40x40" alt="" /><i class="online"></i></span>
                                <h3><a href="javascript:void(0)" title="">Kim Hostwood</a><span>5 min ago</span></h3>
                                <a href="javascript:void(0)"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                            </div>
                            <h4>Themeforest Admin Template</h4>
                            <p>This product is so good that i manage to buy.</p>
                        </li>
                        <li>
                            <div class="title">
                                <span><img src="http://placehold.it/40x40" alt="" /><i class="online"></i></span>
                                <h3><a href="javascript:void(0)" title="">John Doe</a><span>2 hours ago</span></h3>
                                <a href="javascript:void(0)"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                            </div>
                            <h4>Themeforest Admin Template</h4>
                            <p>This product is so good that i manage to buy.</p>
                        </li>
                        <li>
                            <div class="title">
                                <span><img src="http://placehold.it/40x40" alt="" /><i class="offline"></i></span>
                                <h3><a href="javascript:void(0)" title="">Jonathan Doe</a><span>8 min ago</span></h3>
                                <a href="javascript:void(0)"  data-toggle="tooltip" data-placement="left" title="Attachment"><i class="ti-clip"></i></a>
                            </div>
                            <h4>Themeforest Admin Template</h4>
                            <p>This product is so good that i manage to buy.</p>
                        </li>
                    </ul>
                    <a href="#/pages/inbox" title="" class="red-bg">View All Messages</a>
                </div><!-- Recent Email Widget -->

                <div class="file-transfer-widget">
                    <h3>FILE TRANSFER</h3>
                    <div class="toggle">
                        <ul>
                            <li>
                                <i class="ti-file"></i><h4>my-excel.xls<i>20 min ago</i></h4>
                                <div class="progress">
                                    <div style="width: 90%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar red-bg">
                                        90%
                                    </div>
                                </div>
                                <div class="file-action-btn">
                                    <a href="javascript:void(0)" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a>
                                    <a href="javascript:void(0)" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a>
                                </div>
                            </li>
                            <li>
                                <i class="ti-zip"></i><h4>my-cv.pdf<i>8 min ago</i></h4>
                                <div class="progress">
                                    <div style="width: 40%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar blue-bg">
                                        40%
                                    </div>
                                </div>
                                <div class="file-action-btn">
                                    <a href="javascript:void(0)" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a>
                                    <a href="javascript:void(0)" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a>
                                </div>
                            </li>
                            <li>
                                <i class="ti-files"></i><h4>portfolio-shoot.mp4<i>12 min ago</i></h4>
                                <div class="progress">
                                    <div style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar green-bg">
                                        70%
                                    </div>
                                </div>
                                <div class="file-action-btn">
                                    <a href="javascript:void(0)" title="Approve" class="green-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-check"></i></a>
                                    <a href="javascript:void(0)" title="Cancel" class="red-bg" data-toggle="tooltip" data-placement="bottom"><i class="ti-close"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- File Transfer -->
            </div>
            <div id="panel-tab2" class="tab-pane fade">
                <div class="setting-widget">
                    <form>
                        <h3>Accounts</h3>
                        <div class="toggle-setting">
                            <span>Office Account</span>
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>Personal Account</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>Business Account</span>
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                    </form>

                    <form>
                        <h3>General Setting</h3>
                        <div class="toggle-setting">
                            <span>Notifications</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>Notification Sound</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>My Profile</span>
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>Show Online</span>
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                        <div class="toggle-setting">
                            <span>Public Profile</span>
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span data-unchecked="Off" data-checked="On"></span>
                            </label>
                        </div>
                    </form>
                </div><!-- Setting Widget -->
            </div>
        </div>
    </div><!-- Slide Panel -->
    <div class="main-content">
        <div class="panel-content">
            <div class="main-title-sec">
                <div class="row">
                    <div class="col-md-3 column">
                        <div class="heading-profile">
                            <h2>Customers page</h2>
                            <span>Welcome back, {{{ Auth::user()->name }}}</span>
                        </div>
                    </div>
                </div>
            </div><!-- Heading Sec -->
            <ul class="breadcrumbs">
                <li><a href="javascript:void(0)" title="">CRM</a></li>
                <li>Leads</li>
            </ul>
            <div class="main-content-area">
                @if (session()->has("message"))
                    <div class="alert alert-success" role="alert" style="margin-top: 20px; margin-bottom: 10px;">
                        <strong>{{session()->get("message")}}</strong>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <div class="widget blank">
                            <div class="card" style="width: 100%;">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-sm-8" style="padding-top: 8px;">
                                            <span class="panel-title"><span class="fa fa-users"></span> Leads: {{$count}}</span>
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#countryModal"><i class="fa fa-gear"></i> Filters</button>
                                        </div>
                                        <div class="col-md-3">
                                            <form role="search" method="get" action="{{ route('customers')}}">
                                                <div class="input-group">
                                                    @foreach(request()->query() as $key => $value)
                                                        @if($key == "page")
                                                            @continue
                                                        @endif
                                                        <input type="hidden" name="{{$key}}" value="{{$value}}">
                                                    @endforeach
                                                    <input type="text" name="search" class="form-control" placeholder="Search...">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Country</th>
                                            <th>Phone</th>
                                            <th>Registration</th>
                                            <th>Email</th>
                                            <th>Campaign</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{$customer->id}}</td>
                                                <td>{{$customer->full_name}}</td>
                                                <td>{{$customer->country_id}}</td>
                                                <td>{{$customer->phone_number}}</td>
                                                <td>{{$customer->created_at}}</td>
                                                <td>{{$customer->email}}</td>
                                                <td>{{$customer->campaign}}</td>
                                                <td>
                                                    {{ Form::open(array('route' => ['people.update.status', $customer->id])) }}
                                                    <select name="status" onchange="this.form.submit()">
                                                        @foreach($statuses as $status)
                                                            <option @if($customer->status == $status->id) selected="selected" @endif value="{{$status->id}}">{{$status->title}}</option>
                                                        @endforeach
                                                    </select>
                                                    {{ Form::close() }}
                                                </td>
                                                <td>
                                                    <ul class="people_actions">
                                                        <li><a href="{{route("people.edit", $customer->id)}}" class="fa fa-pencil"></a></li>
                                                        <li><a href="{{route("people.delete", $customer->id)}}" class="fa fa-trash"></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{$customers->links("vendor.pagination.simple-default")}}

            </div>
        </div><!-- Panel Content -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="countryModal" tabindex="-1" role="dialog" aria-labelledby="countryModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="countryModalTitle">Manage filters</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <span style="font-weight: bold; font-size: 18px;">Filter by Country</span>
                            <hr />
                            <select multiple="multiple" id="country-select" name="country-select[]">
                                @foreach($countries as $country)
                                    <option value='{{$country->country_id}}'>{{$country->country_id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <span style="font-weight: bold; font-size: 18px;">Filter by Status</span>
                            <hr />
                            <select multiple="multiple" id="status-select" name="status-select[]">
                                @foreach($statuses as $status)
                                    <option value='{{$status->id}}'>{{$status->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6" style="margin-top: 15px;">
                            <span style="font-weight: bold; font-size: 18px;">Filter by Campaign</span>
                            <hr />
                            <select multiple="multiple" id="campaign-select" name="campaign-select[]">
                                @foreach($campaigns as $campaign)
                                    <option value='{{$campaign->campaign}}'>{{$campaign->campaign}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveFilters()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#country-select').multiSelect();
        $('#status-select').multiSelect();
        $('#campaign-select').multiSelect();

        var saveFilters = function() {

            let countryValues = $('#country-select').val();
            let statusValues = $('#status-select').val();
            let campaignValues = $('#campaign-select').val();

            let url = "{{url('/customers')}}/";

            if (countryValues != null)
                url = url.concat(getFiltersParams("countries", countryValues, true));
            if (statusValues != null)
                url = url.concat(getFiltersParams("statuses", statusValues, countryValues == null));
            if (campaignValues != null)
                url = url.concat(getFiltersParams("campaigns", campaignValues, statusValues == null));

            document.location = url;
        };

        function getFiltersParams(name, values, first = false) {
            let string = "";

            if (first) {
                string = "?" + name + "=";
            }
            else {
                string = "&" + name + "=";
            }



            values.forEach(function(v) {
                string = string.concat(v).concat(",");
            });

            string = string.substring(0, string.length - 1);

            return string;
        }
    </script>
@endsection