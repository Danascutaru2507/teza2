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
                                    <h4 class="card-title">Blog List</h4>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <a href="{{route('admin.blog.create')}}" class="btn icon btn-primary">
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
                                        <th>HEADING</th>
                                        <th>BODY</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($blogs as $key=>$blog)
                                        <tr>
                                            <td>{{$key +1}}</td>
                                            <td>{{$blog->heading}}</td>
                                            <td title="{{ $blog->body }}">{{ Str::limit(strip_tags($blog->body), 80) }}</td>
                                            <td class="d-flex">
                                                <a href="{{route('admin.blog.edit',$blog->id)}}"
                                                   class="btn icon btn-primary m-1">
                                                    <i class="bi bi-pencil"></i>
                                                </a>

                                                <form action="{{route('admin.blog.delete',$blog->id)}}"
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
                                    {{$blogs->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
