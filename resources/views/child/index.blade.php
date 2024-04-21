@extends('child.layout')
@section('content')

<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-reader">
                    <h2>child</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('Child.create') }}" class="btn btn-success btn-sm" title="Add new child">Add new child</a>
                    <br/>
                    <br/>
                    <div class="table-responsible">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ChildSSN</th>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>gender</th>
                                    <th>DOB</th>
                                    <th>weight</th>
                                    <th>height</th>
                                    <th>Actions</th> <!-- Added Actions column -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($childs as $child)
                                <tr>
                                    <td>{{ $child->id }}</td>
                                    <td>{{ $child->childSSN }}</td>
                                    <td>{{ $child->first_name }}</td>
                                    <td>{{ $child->last_name }}</td>
                                    <td>{{ $child->gender }}</td>
                                    <td>{{ $child->DOB }}</td>
                                    <td>{{ $child->weight }}</td>
                                    <td>{{ $child->height }}</td>
                                    <td>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="d-inline">
                                                        <a href="{{ route('child.show', ['child' => $child->id]) }}" title="View Child" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                                        <a href="{{ route('child.edit', ['id' => $child->id]) }}" title="Edit Child" class="btn btn-primary btn-sm"> Edit</a>
                                                        <form action="{{ route('child.destroy', $child->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Child" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
</div>
@stop
