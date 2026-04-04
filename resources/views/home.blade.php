@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Dashboard</h1>
        <div class="dropdown">
            <button class="btn btn-primary" type="button" style="border-radius: 4px; padding: 8px 12px;"
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Notifications
                @if ($unreadNotificationsCount == 0)
                    <span></span>
                @else
                    <span class="badge badge-danger">{{ $unreadNotificationsCount }}</span>
                @endif
            </button>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"
                style="max-height: 600px; overflow-y: auto;">
                @foreach ($notifications as $notification)
                    @if ($notification->notifiable_id == auth()->id())
                        @php
                            $unread = $notification->read_at === null ? 'bg-light' : '';
                        @endphp
                        <div class="dropdown-item d-flex align-items-center {{ $unread }}" href="#">
                            <i class="fas fa-bell mr-3" style="color: #6c757d;"></i>
                            <div>
                                @if (auth()->user()->hasRole('admin'))
                                    {{ $notification->data['message'] ?? '' }}
                                @else
                                    <h6>{!! $notification->data['title'] !!}</h6>
                                    <div class="text-muted" style="color: #474d52;">{!! $notification->data['message'] ?? '' !!}</div>
                                @endif
                                <div class="small text-muted" style="color: #6c757d;">
                                    {{ $notification->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        @if (auth()->user()->hasRole('admin'))
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Recent Booking') }}</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Send At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!is_null($bookings) && count($bookings) < 1)
                                            <tr>
                                                <td colspan="5">No Booking</td>
                                            </tr>
                                        @elseif(!is_null($bookings))
                                            @foreach ($bookings as $k => $booking)
                                                <tr>
                                                    <td>{{ $k + 1 }}</td>
                                                    <td>{{ $booking->name }}</td>
                                                    <td>{{ $booking->email }}</td>
                                                    <td>{{ $booking->created_at->diffForHumans() }}</td>
                                                    <td>
                                                        <a href="{{ route('bookings.show', $booking->id) }}">
                                                            <i class="fa fa-eye"
                                                                style="padding: 5px; border-radius: 50%; color: black;"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif (auth()->user()->hasRole('staff'))
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('News and Articles') }}</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Title</th>
                                            {{-- <th>Description</th> --}}
                                            <th>Posted on</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!is_null($news) && count($news) < 1)
                                            <tr>
                                                <td colspan="5">No news and articels</td>
                                            </tr>
                                        @elseif(!is_null($news))
                                            @foreach ($news as $k => $news)
                                                <tr>
                                                    <td>{{ $k + 1 }}</td>
                                                    <td>{{ $news->title }}</td>
                                                    {{-- <td>{{ $news->description }}</td> --}}
                                                    <td>{{ $news->created_at->diffForHumans() }}</td>
                                                    <td>
                                                        <a href="{{ route('news.show', $news->slug) }}">
                                                            <i class="fa fa-eye"
                                                                style="padding: 5px; border-radius: 50%; color: black;"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
