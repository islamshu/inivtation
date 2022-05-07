@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  
    <!-- Basic Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2 style="display: inline">الدعوات</h2>
                    <a class="btn btn-info" href="{{ route('export') }}">تصدير excel</a>
                 
                <div class="body">
                    <div class="table-responsive">
                  
                        <table
                            class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th># </th>
                                    <th>Name </th>
                                    <th>Email</th>
                                    <th>Number Of guest</th>

                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invitiations as $key=> $item)
                                    
                               
                                <tr>
                                    <td>{{ $key+1 }}</td>

                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->people_number }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th># </th>
                                    <th>Name </th>
                                    <th>Email</th>
                                    <th>Number Of guest</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Table -->
    <!-- Striped Rows -->
  
@endsection

