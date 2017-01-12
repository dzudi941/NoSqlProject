@extends('layouts.app')

@section('content')
<main>
<div class="container">
    <div class="col-md-12">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        {!! Form::open(['route' => 'home.store']) !!}
        <div class="row">
        <textarea class="col-md-12" name="name" placeholder="Ostavite svoj komentar" style="border-radius: 10px; resize: none; min-height: 200px;">
            
        </textarea>
        </div>
        <div class="row">
        <!--<input type="text" name="name">-->
        </div>
        <input type="submit" name="potvrda" value="Upisi" class="btn btn-warning col-md-12" style="margin-top: 20px; background-color: black;">
        {!! Form::close() !!}
        <div class="col-md-12" style="margin-top: 20px;">
        
        @php
        function PrikazKomentara()
        {
            echo "TEST";
        }
        //PrikazKomentara();
        @endphp
        @foreach($products as $product)
        <div class="col-md-12" style="background-color: #edf3f4; margin-bottom: 10px; border-radius: 10px; min-height: 100px;">
            <div class="col-md-10">
                <h4>{{ $product->name }}</h4>
            </div>
            <div class="col-md-2">
            {{ $product->created_at }}
            </div>
        </div>
        @endforeach
        

        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<main>
@endsection
