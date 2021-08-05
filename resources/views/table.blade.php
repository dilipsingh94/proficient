@extends('layouts.app') 
@section('content')
    <div class="container">
        <div class="row">
            @if (Session::has('success'))
                <div class="col-6 offset-3 text-center alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="col-12 text-right">
                <a href="{{ url('upload') }}" class="btn btn-sm btn-info rounded mb-2 text-white"> Upload Image</a> 
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bold"> <h5> Uploaded Images</h5> </div>
                    <div class="card-body">  
                        <div class="table-responsive">
                            <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <td>S.N</td>
                                        <td>Title</td>
                                        <td>Description</td>
                                        <td>Image Id</td>
                                        <td>Image Path</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->id }}</td>
                                            <td class="text-center">
                                                <img src="{{ $item->image }}" height="50px" width="50px" alt="uploaded_image">
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ url('/delete/'.$item->id) }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger" type="submit">delete</button>
                                                </form>                                                
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                    
                                </tbody>    
                            </table>    
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection