@extends('student.layout')

@section('content')

<div class="container mt-5">
<div class="row justify-content-center align-items-center">
<div class="card" style="width: 24rem;">
<div class="card-header">
Edit Student Data
</div>
<div class="card-body">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="post" action="{{ route('student.update', $Student->nim) }}" id="myForm">
@csrf
@method('PUT')
<div class="form-group">
<label form="Nim">Nim</label>
<input type="text" name="Nim" class="form-control" id="Nim" value="{{ $Student->nim }}" aria-describedby="Nim" >
</div>
<div class="form-group">
<label form="Name">Name</label>
<input type="text" name="Name" class="form-control" id="Name" value="{{ $Student->name }}" aria-describedby="Name" >
</div>
<div class="form-group">
<label form="Class">Class</label>
<input type="Class" name="Class" class="form-control" id="Class" value="{{ $Student->class }}" aria-describedby="Class" >
</div>
<div class="form-group">
<label form="Major">Major</label>
<input type="Major" name="Major" class="form-control" id="Major" value="{{ $Student->major }}" aria-describedby="Major" >
</div>
<div class="form-group">
<label form="Address">Address</label>
<input type="Address" name="Address" class="form-control" id="Address" value="{{ $Student->Address }}" aria-describedby="Address" >
</div>
<div class="form-group">
<label form="Date of Birth">Date of Birth</label>
<input type="Date of Birth" name="Date of Birth" class="form-control" id="Date of Birth" value="{{ $Student->Date of Birth }}" aria-describedby="Date of Birth" >
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection