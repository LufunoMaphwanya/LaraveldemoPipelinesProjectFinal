@extends('layout')
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.6.1.min.js">
</script>



@section('content')
    <div class="container col-8">


        <div>
            <p>This is mini demo to showcase laravel's implementation of ETL pipeline project.</p>
            <p>Below is the model</p>
        </div>

        <img src="{{ URL::to('/') }}/uml.png"/>
            <span>
                <big>To get started:</big><br/>
                <p>1. Click on pipelines to view all pipelines</p>
                <p>2. Select a pipeline to view</p>
                <p>3. run the pipeline by clicking on run pipeline to simulate running an etl. </p>
                <p>3. This is the same for columns.</p><br/>
                <p>Get started: go to <a href="/pipelines">pipelines</a> </p>
            </span>
    </div>

@endsection


