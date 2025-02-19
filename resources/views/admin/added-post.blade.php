@extends('layouts.app')
@section('section')
		<!-- Title -->
		<div class="row mb-3">
			<div class="col-12 d-sm-flex justify-content-between align-items-center">
				<h1 class="h3 mb-2 mb-sm-0">Courses</h1>
				<a href="{{route('new-post')}}" class="btn btn-sm btn-primary mb-0">Create a Course</a>
			</div>
		</div>


		<!-- Card START -->
		<div class="card bg-transparent border">

			<!-- Card header START -->
			<div class="card-header bg-light border-bottom">
				<!-- Search and select START -->
				<div class="row g-3 align-items-center justify-content-between">
				    
					<div class="col-md-12">
					<!-- Search bar -->
					<input class="form-control bg-body search" type="search" placeholder="Search" aria-label="Search">
					</div>

				</div>
				<!-- Search and select END -->
			</div>
			<!-- Card header END -->

			<!-- Card body START -->
			<div class="card-body">
				<!-- Course table START -->
				<div class="table-responsive border-0 rounded-3">
					<!-- Table START -->
					<table class="table table-dark-gray align-middle p-4 mb-0 table-hover" id="courseTable">
						<!-- Table head -->
						<thead>
							<tr>
								<th scope="col" class="border-0 rounded-start">Course Name</th>
								<th scope="col" class="border-0">Instructor</th>
								<th scope="col" class="border-0">Type</th>
								<th scope="col" class="border-0">Price</th>
								<th scope="col" class="border-0">Status</th>
								<th scope="col" class="border-0">Last Modified</th>
								<th scope="col" class="border-0 rounded-end">Action</th>
							</tr>
						</thead>
						
						<!-- Table body START -->
						<tbody>
							@foreach ($projects as $item)
							
								<!-- Table row -->
								<tr>
									<!-- Table data -->
									<td>
										<div class="d-flex align-items-center position-relative">
										    <a href="{{ url(strval($item->slug_name)) }}" target="_new">
    											<!-- Image -->
    											<div class="w-60px">
    												<img src="{{$item->image ? asset('images/portfolio/'.$item->image) : asset('assets/images/pattern/gallery.svg')}}" class="rounded" alt="">
    											</div>
											</a>
										</div>
									</td>

									<!-- Table data -->
									<td>
										<div class="mb-3">
											{{$item->title}}
										</div>
									</td>
								
									<!-- Table data -->
									<td> <span class="badge text-bg-primary">{{$item->category}}</span> </td>

									<!-- Table data -->
									<td> <span class="badge text-bg-info">{{$item->language}}</span> 
									</td>

									<!-- Table data -->
									<td> 
										<div class="form-check form-switch">
											<input value="1" class="form-check-input text-success course_status" data-id="{{$item->id}}" type="checkbox" id="flexSwitchCheckChecked" {{$item->status == 1 ? 'checked' : '' }}>
										  </div>
									</td>

									<!-- Table data -->
									<td>{{$item->updated_at->diffForHumans()}}</td>

									<!-- Table data -->
									<td>
										<a href="{{route('added-post.show',$item->id)}}" target="_new" class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="fa fa-eye"></i></a>
										<a href="{{route('added-post.edit',$item->id)}}"  class="btn btn-sm btn-info-soft btn-round me-1 mb-1 mb-md-0"><i class="fa fa-pen"></i></a>
										<a href="{{route('added-post.delete',$item->id)}}" class="btn btn-sm btn-danger-soft btn-round me-1 mb-1 mb-md-0"><i class="fa fa-times"></i></a>

									</td>
								</tr>
	
							@endforeach
							<!-- Table row -->
						
							
						</tbody>
						<!-- Table body END -->
					</table>
					<!-- Table END -->
				</div>
				<!-- Course table END -->
			</div>
			<!-- Card body END -->

			<!-- Card footer START -->
	
		</div>
@endsection
@section('scripts')
<script>
  $(document).ready(function() {
    $('.search').on('input', function() {

      var searchKeyword = $(this).val().toLowerCase();

      $('#courseTable tbody tr').each(function() {
        var rowText = $(this).text().toLowerCase();
        if (rowText.includes(searchKeyword)) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });
    
   $('.course_status').on('change', function(e) {
        var id = $(this).data('id');
        var value = $(this).is(':checked') ? 1 : 0;
        var url = "{{ route('added-post.status', '') }}/" + id;
        $.ajax({
            url: url,
            data: { value: value },
            cache: false,
            success: function(html) {
                window.location = "";
            }
        });
    });
    
  });
</script>
@endsection
