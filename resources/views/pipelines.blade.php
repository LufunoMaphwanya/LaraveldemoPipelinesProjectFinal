@extends('layout')


<div>
    @section('content')
        <div class="container col-8">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">Description</th>
                    <th scope="col">last ran</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($pipelines as $pipeline)
                    <tr>
                        <td scope="col">{{$pipeline->name}}</td>
                        <td scope="col">{{$pipeline->description}}</td>
                        @if ($pipeline->last_run)
                            <td scope="col"><em>{{$pipeline->last_run}}</em></td>
                        @else
                            <td scope="col"><em>never</em></td>
                        @endif
                        <td scope="col">
                            <a href="/pipeline?id={{$pipeline->id}}" type="button" class="btn btn-outline-info">
                                select
                            </a>
                        </td>
                    </tr>


                @endforeach
            </tbody>
            </table>
        </div>
    @endsection
</div>
