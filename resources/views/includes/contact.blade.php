@extends('includes/template',['title'=>'Contact'])
@section('contenu')

<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2  col-sm-10 col-sm-offset-1">
           <h2>Contactez-nous pour tous vos préoccupations</h2>
			<form action="{{route('post_path_contact')}}" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-label" for="name">Name</label>
					<input value="{{old('name')}}" required="required" type="text" id="name" name="name" class="form-control">
					{!! $errors->first('name','<span class="help-block">:message</span>') !!}
				</div>
			 <div class="form-group">
			 	<label  class="control-label" for="email">Email</label>
				<input value="{{old('email')}}" required="required" id="email" type="email" name="email" class="form-control">
				{!! $errors->first('email','<span class="help-block">:message</span>') !!}
			 </div>
			<div class="form-group">
					<label  for="message"  class="control-label sr-only">Message</label><br>
				<textarea  required="required" id="message" rows="10" cols="10" class="form-control" name="message" >{{old('message')}}</textarea>
				{!! $errors->first('message','<span class="help-block">:message</span>') !!}
			</div>
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