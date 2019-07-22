@extends('layout.app')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <dl>
                            <dt>
                                Ease of Operation
                            </dt>
                            <dd>
                                    Enter WiTrucks and you find yourself in an open, collaborative and fast-paced environment.
                            </dd>
                            <dt>
                                Daily Loads
                            </dt>
                            <dd>
                               Facilities for drivers network in major locations with facilities for drivers
                            </dd>
                            <dd>
                                Donec id elit non mi porta gravida at eget metus.
                            </dd>
                            <dt>
                                Across German
                            </dt>
                            <dd>
                                To every corner of Germany, from Berlin to Munick to Frankfurt
                            </dd>
                            <dt>
                                Fast Payment Settlements
                            </dt>
                            <dd>
                                    Instant advance on trips and fast payment settlements for every single load
                            </dd>
                        </dl>
                    </div>
                    <div class="col-md-6">
                        <div class="media">
                           
                            <div class="media-body">
                                <h5 class="mt-0">
                                        Quick Issue Resolutio
                                </h5>Quick and effective resolution process for all in-transit issues so that your business never stops
                                <div class="media mt-3">
                                     <a class="pr-3" href="#"><img alt="Bootstrap Media Another Preview" src="https://www.layoutit.com/img/sports-q-c-64-64-2.jpg" /></a>
                                    <div class="media-body">
                                        <h5 class="mt-0">
                                            Efficiency with Speed
                                        </h5> Fast loading and unloading by the operations team to ensure that your truck is constantly on the move
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Product
                            </th>
                            <th>
                                Payment Taken
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                01/04/2012
                            </td>
                            <td>
                                Default
                            </td>
                        </tr>
                        <tr class="table-active">
                            <td>
                                1
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                01/04/2012
                            </td>
                            <td>
                                Approved
                            </td>
                        </tr>
                        <tr class="table-success">
                            <td>
                                2
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                02/04/2012
                            </td>
                            <td>
                                Declined
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>
                                3
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                03/04/2012
                            </td>
                            <td>
                                Pending
                            </td>
                        </tr>
                        <tr class="table-danger">
                            <td>
                                4
                            </td>
                            <td>
                                TB - Monthly
                            </td>
                            <td>
                                04/04/2012
                            </td>
                            <td>
                                Call in to confirm
                            </td>
                        </tr>
                    </tbody>
                </table>
                <form role="form">
                    <div class="form-group">

                        <label for="exampleInputEmail1">
                            Email address
                        </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" />
                    </div>
                    <div class="form-group">

                        <label for="exampleInputPassword1">
                            Password
                        </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="form-group">

                        <label for="exampleInputFile">
                            File input
                        </label>
                        <input type="file" class="form-control-file" id="exampleInputFile" />
                        <p class="help-block">
                            Example block-level help text here.
                        </p>
                    </div>
                    <div class="checkbox">

                        <label>
                            <input type="checkbox" /> Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </form>
            </div>
            <div class="col-md-4">
                    {!! $map['js'] !!}
                    {!! $map['html'] !!}
            </div>
        </div>
    </div>



@endsection
