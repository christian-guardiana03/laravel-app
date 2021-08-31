<div class="row">
	<div class="table-responsive">
		<div class="text-right mb-5">
			<button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#createBook">
			  New Book
			</button>
		</div>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Book Name</th>
					<th scope="col">Book Category</th>
					<th scope="col">Author</th>
					<th scope="col">Description</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse($books as $book)
				<tr>
					<th scope="row">{{$book->id}}</th>
					<td>{{$book->book_name}}</td>
					<td>{{$book->category_id}}</td>
					<td>{{$book->author}}</td>
					<td>{{$book->description}}</td>
					<td></td>
				</tr>
				@empty
					<tr>
						<td colspan="7" class="text-center">No Book(s) Available</td>
					</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>


<!-- Modal -->
<div>
	<div class="modal fade" id="createBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add New Book</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="/create-book" method="post">
	      	  @csrf
		      <div class="modal-body">
		        <div class="form-group">
		        	<label for="book_name">Book Name</label>
		        	<input type="text" name="book_name" id="book_name" class="form-control">
		        </div>
		        <div class="form-group">
		        	<label for="category_id">Book Category</label>
		        	<select name="category_id" class="form-control">
		        		<option value="">-- Select Category --</option>
		        		@forelse($categories as $category)
		        			<option value="{{$category->id}}">{{$category->category}}</option>
		        		@empty
		        			<option value="">No Category Available</option>
		    			@endforelse
		        	</select>
		        </div>
		        <div class="form-group">
		        	<label for="author">Author</label>
		        	<input type="text" name="author" id="author" class="form-control">
		        </div>
		        <div class="form-group">
		        	<label for="description">Description</label>
		        	<textarea name="description" id="description" class="form-control"></textarea>
		        </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-outline-success">Save changes</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>
</div>