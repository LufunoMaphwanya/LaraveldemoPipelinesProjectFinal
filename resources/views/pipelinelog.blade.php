@extends('layout')
@section('content')
<div class="container col-8">
    <form style="display: none" method="post" enctype="multipart/form-data">
        <input onchange="uploaFileToBackEnd()" type="file" name="fileToUpload" id="fileToUpload">
    </form>

    <div class="card" style="width: 100%">
        <div class="card-body center">
            <h5 class="card-title">{{$pipeline->name}} log</h5>
            <p class="card-title">{{$pipeline->last_run}}</p>
            <hr/>
            <div class="container">
                <h6>Run log:</h6>
                <ul>
                    <li>Stage 1</li>
                    <li>Stage 2</li>
                </ul>
            </div>
            <hr/>



        </div>
    </div>
</div>

@endsection
