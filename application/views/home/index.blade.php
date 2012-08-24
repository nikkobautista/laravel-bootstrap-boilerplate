@layout('layouts/main')

@section('content')
<div class="hero-unit">
	<h1>You should be working</h1>
	<br />
	<p><form><button type="submit" class="btn btn-primary btn-large">Get Started</button> (fu) (lol) (rebeccablack)</form></p>

</div>
@endsection

@section('js')
@parent
{{-- <script> --}}
$(document).ready(function() {
	$('form').html(parseEmoticons($('form').html()));
});
{{-- </script> --}}
@endsection

@section('css')
@parent
{{-- <style> --}}
{{-- </style> --}}
@endsection