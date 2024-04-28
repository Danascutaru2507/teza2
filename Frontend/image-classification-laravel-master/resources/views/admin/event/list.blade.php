@extends('admin.layouts.master')
@section('body')
    <div class="page-heading">
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title">Event List</h4>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    @php
                                        $eventCount = \App\Models\Event::count();
                                    @endphp
                                    <a href="{{ $eventCount >= 2 ? '#' : route('admin.event.create') }}"
                                       class="btn icon btn-primary{{ $eventCount >= 2 ? ' disabled' : '' }}">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>IMAGE</th>
                                        <th>NAME</th>
                                        <th>DATE</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($events as $key=>$event)
                                        <tr>
                                            <td>{{$key +1}}</td>
                                            <td>
                                                <img src="{{asset('storage/images/events/'.$event->image)}}"
                                                     alt="logo"
                                                     width="45px">
                                            </td>
                                            <td>{{$event->name}}</td>
                                            <td>{{$event->date}}</td>
                                            <td class="d-flex">
                                                <a href="{{route('admin.event.edit',$event->id)}}"
                                                   class="btn icon btn-primary m-1">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <form action="{{route('admin.event.delete',$event->id)}}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn icon btn-primary m-1"
                                                            onclick="return confirm('Are you sure you want to delete it')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No Record Yet</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                <div class="mt-2" style="justify-content: center; display: flex">
                                    {{$events->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
