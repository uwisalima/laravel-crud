@extends('layouts.app')

@section('content')
    <div class="container">
        <h6>Edit student imformation</h6>

        <div class="my-4">
            <form action="{{ route('student.update',$student->id) }}" method="post">
                @method("put")
                @csrf
                <div class="form-group my-2">
                    <label for="">Names</label>
                    <input type="text" name="names" value="{{ $student->name }}" class="form-control">
                    @error('names')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group my-2">
                    <label for="">Registration number</label>
                    <input type="text" name="regno" value="{{$student->regnumber }}" class="form-control">
                    @error('regno')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group my-2">
                    <label for="">Email</label>
                    <input type="text" name="email" value="{{$student->email}}" class="form-control">
                    @error('email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror

                </div>

                <div class="form-group my-2">
                    <label for="">Phone number</label>
                    <input type="text" name="phone" value="{{$student->phonenumber }}" class="form-control">

                    @error('phone')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">update student</button>
                </div>

            </form>
        </div>

    </div>
@endsection
