@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <form action="{{route('admin.mix')}}" method="POST">
                        @csrf
                    <button type="submit">Назначить Сант</button>
                    </form>
                </div>
                <div class="card-header">Зарегистрированы ({{count($santas)}}):</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($santas as $santa)
                    {{$santa->name}}
                        @if($santa->gift_to!=0)
                            ->{{\App\Models\Santa::find($santa->gift_to)->name}}
                        @endif
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
