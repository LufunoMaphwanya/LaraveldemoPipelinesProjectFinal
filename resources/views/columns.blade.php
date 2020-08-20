@extends('layout')


<div>
    @section('content')
        <div class="container col-8">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">survey question</th>
                    <th scope="col">data type</th>
                    <th scope="col">new variable name</th>
                    <th scope="col">new variable type</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($columns as $column)
                    <tr>
                        <td scope="col">{{$column->var_name}}</td>
                        <td scope="col">{{$column->var_type}}</td>
                        <td scope="col">{{$column->new_var_name}}</td>
                        <td scope="col">{{$column->new_var_type}}</td>
                        <td><a href="/column?id={{$column->id}}" type="button" class="btn btn-outline-info">
                            select
                        </a></td>

                    </tr>


                @endforeach
            </tbody>
            </table>
        </div>
    @endsection
</div>
