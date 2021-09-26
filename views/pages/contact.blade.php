@extends('layouts.default')

@section('title', 'Contact Me')

@section('content')
<style>

  body {
  
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background-color: skyblue;
  background-image: -webkit-linear-gradient(90deg, skyblue 0%, steelblue 100%);
  background-attachment: fixed;
  background-size: 100% 100%;
  
  font-family: "Luckiest Guy", cursive;
  -webkit-font-smoothing: antialiased;
}


::selection {
  background: transparent;
}

  
 

  }
</style>
<body>
	<h1>Get in Touch</h1>

	<p>Reach out and tell me a bit about yourself. Explain in a few words what sort of work you are looking to get done.</p>

	@if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
	@endif

	@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif

	<form method="POST" action="/contact"autocomplete="off">
	  {{ csrf_field() }}
	  <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Your Name *">
	  <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Your Email *">
	  <input type="text" name="telephone" value="{{ old('telephone') }}" class="form-control" placeholder="Your Phone Number *">

	  <textarea name="details" class="form-control" placeholder="Details of your request *">{{ old('details') }}</textarea>
	  <input type="submit" value="Send" class="btn btn-primary">
	</form>
</body>
@endsection