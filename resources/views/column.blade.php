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



@section('content')
<div class="container col-8">
    <form style="display: none" method="post" enctype="multipart/form-data">
        <input onchange="uploaFileToBackEnd()" type="file" name="fileToUpload" id="fileToUpload">
    </form>

    <div class="card" style="width: 100%">
        <div class="card-body center">
            <p class="card-title"><h6>Original survey question: </h6>{{$column->var_name}}</p>
            <p class="card-title"><h6>Original survey question type: </h6>{{$column->var_type}}</p>
            <p class="card-title"><h6>New variable name: </h6>{{$column->new_var_name}}</p>
            <p class="card-title"><h6>New variable type: </h6>{{$column->new_var_type}}</p>
            <hr/>
            <div class="container">
                <h6>Imported by pipelines:</h6>
                <ul>
                    @foreach($column->pipelines as $pipline)
                        <li>
                            {{$pipeline->name}}
                        </li>
                    @endforeach
                </ul>
            </div>
            <hr/>
            <p>
                <button type="button" class="btn btn-outline-info">Edit Column</button>

            </p>


        </div>
    </div>
</div>

@endsection
