@extends('includes/template',['title'=>'Contact'])
@section('contenu')

<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2  col-sm-10 col-sm-offset-1">
           <h2>Contactez-nous pour tous vos préoccupations</h2>
			<form class="form-group">
				<label class="control-label" for="name">Name</label>
				<input type="text" id="name" name="name" class="form-control">
				<label  class="control-label" for="email">Email</label>
				<input id="email" type="email" name="email" class="form-control">
				<label  for="message"  class="control-label sr-only">Message</label><br>
				<textarea id="message" rows="10" cols="10" class="form-control" name="message">message...</textarea>
				<br>
				<button class="btn btn-info" name="send">Send your message</button>
			</form>
		</div>
		<div class="col-md-4 col-xm-4 col-sm-4">
			<h2>Mes coordonnées</h2>
		   <p><i class="fa fa-facebook"></i>  Da Sié Roger</p> 
		   <p><i class="fa fa-google"></i>  dsieroger@gmail.com</p> 
		   <p><i class="fa fa-github"></i>  Roomdada</p> 

		</div>
	</div>
</div>
@stop