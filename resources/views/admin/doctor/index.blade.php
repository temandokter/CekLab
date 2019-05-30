@extends('layouts.app');

@section('content')
<div class="container">
	<div class="card">
    	<div class="card-header">
    		<a href="{{ route('admin.post.create') }}" class="btn btn-primary">Add Post</a>
    	</div> <h1>Table Post</h1>
    	<div class="card-body">
    		<table class="table table-bordered table-striped">
    			<tr>
    				<th>ID</th>
    				<!-- <th>User_Id</th> -->
    				<!-- <th>Categories_Id</th> -->
    				<th>Title</th>
    				<th>Content</th>
    				<th>Image</th>
    				<th>Action</th>
    			</tr>
    		
			    @foreach ($posts as $post)
			        <tr>
			        	<td>{{ $post->id }}</td>
			        	<!-- <td><a href="{{ route('admin.user.post', $post->user) }}">{{ $post->user->name }}</a></td> -->
			        	<!-- <td><a href="{{ route('admin.categories.post', $post->categories) }}">{{ $post->categories->name }}</a></td> -->
			        	<td>{{ $post->title }}</td>
			        	<td>{{ $post->content }}</td>
			        	<td><img src="{{ asset($post->image) }}" height="100" width="100"></td>
			        	<td>
			        		<a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
			        		<form action="{{ route('admin.post.destroy', $post->id ) }}" method="POST">
			        			{{ csrf_field() }}
			        			{{ method_field ("DELETE") }}
			        			<input type="submit" value="Hapus" class="btn btn-danger">
			        		</form>
			        	</td>
			        </tr>
			    @endforeach
			</table>
			{{ $posts->links() }}
    	</div>
    </div>
</div>
    
@endsection