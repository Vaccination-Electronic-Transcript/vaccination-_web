@extends('vaccine.layout')
@section('content')

<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-reader">
                    <h2>vaccine</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('vaccine.create') }}" class="btn btn-success btn-sm" title="Add new vaccine">Add new vaccine</a>
                    <br/>
                    <br/>
                    <div class="table-responsible">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>vaccineID</th>
                                    <th>name</th>
                                    <th>dose</th>
                                    <th>age (months)</th>
                                    <th>type</th>
                                    <th>quantity</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vaccines as $vaccine)
                                <tr>
                                    <td>{{ $vaccine->id }}</td>
                                    <td>{{ $vaccine->name }}</td>
                                    <td>{{ $vaccine->dose }}</td>
                                    <td>{{ $vaccine->age }}</td>
                                    <td>{{ $vaccine->type }}</td>
                                    <td>{{ $vaccine->quantity }}</td>

                                    <td>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="d-inline">
                                                        <a href="{{ route('vaccine.show', ['vaccine' => $vaccine->id]) }}" title="View vaccine" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                                        <a href="{{ route('vaccine.edit', ['id' => $vaccine->id]) }}" title="Edit vaccine" class="btn btn-primary btn-sm"> Edit</a>
                                                        <form action="{{ route('vaccine.destroy', $vaccine->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete vaccine" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
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
