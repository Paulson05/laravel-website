
@extends('layout')

@section('content')

<div class="container justify-content-center">
   
   <h2 class="card-title">Contact US</h2>
<form action="/action_page.php">
<div class="form-group">
 <label for="email">Email address:</label>
 <input type="email" class="form-control" placeholder="Enter email" id="email">
</div>
<div class="form-group">
 <label for="pwd">Password:</label>
 <input type="password" class="form-control" placeholder="Enter password" id="pwd">
</div>
<div class="form-group">
<label for="comment">Comment:</label>
<textarea class="form-control" rows="5" id="comment"></textarea>
</div>
<div class="form-group form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="checkbox"> Remember me
 </label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>  
</div>
@endsection