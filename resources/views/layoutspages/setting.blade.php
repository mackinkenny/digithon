@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('update', Auth::user()->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label for="name">Имя</label>
                            <input type="text" name="name">

                            <br>
                            <label for="email">Email</label>
                            <input type="email" name="email">

                            <br>

                            <select name="groups" id="groups">
                                @foreach($groups as $group)

                                    <option id="groupid" value="{{ $group->id }}">{{ $group->name }}</option>

                                @endforeach
                            </select>
                            <select class="possel">

                            </select>


                            <button type="submit">Подтвердить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection