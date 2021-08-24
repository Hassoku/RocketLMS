@extends('admin.layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $pageTitle }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/">{{trans('admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item">{{ $pageTitle}}</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-striped text-center font-14">

                                    <tr>
                                        <th>Title</th>
                                        <th>Days</th>
                                        <th>Price</th>
                                        <th>Icon</th>

                                        <th></th>
                                    </tr>

                                    @foreach($subscribes as $ticket)
                                        <tr>
                                            <th scope="row">{{ $ticket->title }}</th>
                                            <td>{{ $ticket->days }}</td>
                                            <td>{{ $ticket->price }}</td>
                                            <td><img width="40px" src="{{ $ticket->icon }}"></td>
                                            <td>
                                                <a href="{{ url('/admin/financial/subscribes/'.$ticket->id.'/edit') }}" data-ticket-id="{{ $ticket->id }}" data-webinar-id="{{ !empty($webinar) ? $webinar->id : '' }}" class="edit-ticket btn-transparent text-primary mt-1" data-toggle="tooltip" data-placement="top" title="{{ trans('admin/main.edit') }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                @include('admin.includes.delete_button',['url' => '/admin/financial/subscribes/'. $ticket->id .'/delete', 'btnClass' => ' mt-1'])
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>






                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection

@push('scripts_bottom')

@endpush
