@extends('adminlte::page')

@section('title', 'Alisales')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Update')}} : {{__('Customer card')}} n°{{$customer->id}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-6">
                    <div class="card card-primary card-outline">
                        <x-forms.form method="put" action="{{route('customer.update', $customer->id)}}">
                            @foreach($editables as $editable)
                                <x-forms.input name="{{$editable[0]}}" type="{{$editable[3]}}" placeholder="{{$editable[1]}}" value="{{$editable[2]}}"/>
                            @endforeach
                        </x-forms.form>
                    </div>
            <img class="img" src="img/image.jpg" alt="" width=500px />
        </div>
    </div>
@stop
