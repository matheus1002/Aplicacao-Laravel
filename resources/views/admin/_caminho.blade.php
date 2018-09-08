	<div class="row">
		<nav class="navbar navbar-default">
				<div class="col-sm-12">
					@if(isset($caminhos))
						@foreach($caminhos as $caminho)
							@if($caminho['url'])
							<a href="{{$caminho['url']}}" class="navbar-text">{{$caminho['titulo']}}</a>
							@else
								<span class="navbar-text">{{$caminho['titulo']}}</span>
							@endif
						@endforeach
					@else
						<span class="navbar-text">Admin</span>
					@endif
				</div>
		</nav>
	</div>