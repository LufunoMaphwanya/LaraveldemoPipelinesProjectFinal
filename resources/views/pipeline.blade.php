@extends('layout')
{{--<script>--}}
{{--    // document.getElementById('buttonid').addEventListener('click', openDialog);--}}
{{--    //--}}
{{--    // function openDialog() {--}}
{{--    //     document.getElementById('fileid').click();--}}
{{--    // }--}}
{{--    $('#uploadBtn').click(function (e){--}}
{{--        alert('hey');--}}
{{--    });--}}
{{--</script>--}}
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.6.1.min.js">
</script>

<script type="text/javascript">
    $(document).ready(function() {
         id = {{$pipeline->id}};
    });

    function uploadFile(){
        $('#fileToUpload').click();
    }

    function uploaFileToBackEnd(e){
        var csv = document.getElementById("fileToUpload").files[0];
        console.log('file', csv);
        location.assign('/pipeline/run?id='+id);

    }
</script>

@section('content')
<div class="container col-8">
    <form style="display: none" method="post" enctype="multipart/form-data">
        <input onchange="uploaFileToBackEnd()" type="file" name="fileToUpload" id="fileToUpload">
    </form>

    <h6>Pipeline</h6>
    <div class="card" style="width: 100%">
        <div class="card-body center">
            <h5 class="card-title">{{$pipeline->name}}</h5>
            <p class="card-title">{{$pipeline->description}}</p>
            <hr/>
            <div class="container">
                <h6>Stages</h6>
                <ul>
                    @foreach($pipeline->stages as $stage)
                    <li>
                        {{$stage->name}} - <small> {{$stage->description}}</small>
                    </li>
                    @endforeach
                </ul>
            </div>
            <hr/>
            <p>
                <button type="button" class="btn btn-outline-info">Edit pipeline</button>
                <button onclick="uploadFile()" type="button" class="btn btn-outline-info">Run pipeline</button>
            @if ($pipeline->last_run)
                <p class="card-title"><small>last run: {{$pipeline->last_run}}</small></p>
            @else
                <p class="card-title"><small>last run: <em>never</em></small></p>
                @endif

            </p>


        </div>
    </div>
</div>

@endsection
