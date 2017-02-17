	{{ csrf_field() }}	
	<p>
		<label for="name">Name: </label>
		<input type="text" name="name" id="name" value="{{ isset($pin->name) ? $pin->name : NULL }}">
	</p>
	<p>
		<label for="description">Description: </label>
		<input type="text" name="description" id="description" value="{{ isset($pin->description) ? $pin->description : NULL }}">
	</p>
	<p>
		<label for="image">Image: </label>
		<input type="file" name="image" id="image">
	</p>
	<p>
		<button type="submit">{{ $btn }} pin</button>
	</p>