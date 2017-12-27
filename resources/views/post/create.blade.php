@extends('layouts.master')


@section('content')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <?php
            $name = old('name');
            if(!$name) {
                
            }
        ?>
        <form  method="post" action="{{route('post.create')}}" class="form-group">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="email"  class="form-control" id="name" name="name" placeholder="Enter name">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Detail</label>
                <textarea class="form-control" id="detail" name="detail" rows="3"></textarea>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="is_post" id="inlineRadio1" value="option1"> Private
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="is_post" id="inlineRadio2" value="option2"> Public
                </label>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


@endsection