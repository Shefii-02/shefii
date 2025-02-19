@extends('layouts.app')
@section('section')
<!-- =======================
Page Banner START -->
<section class="py-0 bg-blue h-100px align-items-center d-flex h-100px rounded-0" style="background:url(/assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
	<!-- Main banner background image -->
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<!-- Title -->
				<h1 class="text-white">Submit a new Post</h1>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Steps START -->
<section>
	<div class="container">

		<div class="card bg-transparent border rounded-3 mb-5">
			
				<!-- Card body START -->
				<div class="card-body">
					<form action="{{isset($single->image) ? route('added-post.edit',$single->id) : route('new-post.add')}} " method="POST">
						@csrf()
						<!-- Basic information START -->
						<div class="row g-4  bg-light">
							<div class="col-md-6">
								<!-- Upload image START -->
								
								<div class="col-12">
									<div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
										<!-- Image -->
										<img src="{{isset($single->image) ? asset('images/portfolio/'.$single->image) : asset('assets/images/pattern/gallery.svg')}}" class="h-50px picture_img" alt="picture_img">
										<div>
											<h6 class="my-2">Upload course image here, or<a href="#!" class="text-primary"> Browse</a></h6>
											<label style="cursor:pointer;">
												<span> 
													<input class="form-control stretched-lin image_shower" data-img="picture_img" data-path="picture" type="file" id="image" accept="image/jpg, image/jpeg, image/png" />
													<input type="hidden" name="picture" id="picture" >
												</span>
											</label>
												<p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 400px * 300px. </p>
										</div>	
									</div>
									
								</div>
								<!-- Upload image END -->
							</div>
							<div class="col-md-6">
								<div class="row g-4">
									<!-- Project title -->
									<div class="col-12">
										<label class="form-label">Project Title</label>
										<input class="form-control" type="text" name="title" value="{{isset($single) ? $single->title : '' }}" autocomplete="off"  placeholder="Enter Project Title">
									</div>
		
									<!-- Project Type  -->
									<div class="col-md-6">
										<label class="form-label">Project Type</label>
										<select name="category"  class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" data-search-enabled="false" data-remove-item-button="true">
											<option @if(isset($single)) {{($single->category == 'Website') ? 'selected' : '' }} @endif >Website</option>
											<option @if(isset($single)) {{($single->category == 'Mobile App') ? 'selected' : '' }}  @endif>Mobile App</option>
										</select>								
									</div>

									<!-- Language  -->
									<div class="col-md-6">
										<label class="form-label">Language</label>
										<select name="language"  class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" data-search-enabled="false" data-remove-item-button="true">
											<option @if(isset($single)) {{($single->language == 'Laravel') ? 'selected' : '' }} @endif >Laravel</option>
											<option @if(isset($single)) {{($single->language == 'Flutter') ? 'selected' : '' }}  @endif>Flutter</option>
											<option @if(isset($single)) {{($single->language == 'Android') ? 'selected' : '' }} @endif >Android</option>
											<option @if(isset($single)) {{($single->language == 'React') ? 'selected' : '' }}  @endif>React</option>
											<option @if(isset($single)) {{($single->language == 'Asp.Net') ? 'selected' : '' }} @endif >Asp.Net</option>
											<option @if(isset($single)) {{($single->language == 'Vue.js') ? 'selected' : '' }}  @endif>Vue.js</option>
										</select>
									</div>

									<!-- Demo Link -->
									<div class="col-md-6">
										<label class="form-label">Demo Link</label>
										<input class="form-control" type="text" name="demo_link" value="{{isset($single) ? $single->demo_link : '' }}" autocomplete="off"  placeholder="Demo Link">
									</div>

									<!-- Demo Link -->
									<div class="col-md-6">
										<label class="form-label">Display Position</label>
										<input class="form-control" type="number" name="position" value="{{isset($single) ? $single->position : '' }}" autocomplete="off"  placeholder="Position">
									</div>

									<!-- Course level -->
									<div class="col-md-12 d-flex align-items-center">
										<div class="form-check form-switch mt-1 ">
											<input class="form-check-input" type="checkbox" name="status" id="flexSwitchCheckChecked" checked>
											<label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
										</div>
									</div>
										
								
								</div>
							</div>
							<!-- Short description -->
							<div class="col-md-12">
								<label class="form-label">Description</label>
								<textarea name="editor1"  class="form-control">{{isset($single) ? $single->description : '' }}</textarea>
							</div>	
							<div class="col-md-12 text-center">
								<button class="btn bnt-sm btn-success" type="submit">{{ isset($single->picture) ? 'Update' : 'Submit' }}</button>
							</div>
						
						</div>
						<!-- Basic information START -->
					</form>
				</div>
				<!-- Card body END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================Steps END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
@endsection

@section('scripts')
<script> 

	$('body').on('change', '.image_shower', function() {
	
		var d_img  = $(this).attr('data-img');
		var d_path = $(this).attr('data-path');

		var reader = new FileReader();
			const file = this.files[0];
			if (file) {
				reader.onload = function (event) {
					$("."+d_img).attr("src", event.target.result);
					$("#"+d_path).val(event.target.result);
				};
				reader.readAsDataURL(file);
			}
	});
	
	
</script>
@endsection