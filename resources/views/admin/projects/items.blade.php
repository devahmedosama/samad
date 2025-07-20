<div class="table-responsive">
	<button type="button" class="btn btn-primary pull-right" 
	data-toggle="modal" 
    data-target="#exampleModalreviewadd">
	    new item   
	</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"> Title </th>
                <th scope="col"> options</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($data->items as $key=>$item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->name }}</td>
               <td>
                	<button type="button" class="btn btn-xs btn-primary" 
                	data-toggle="modal" data-target="#exampleModaleditreviewe{{ $item->id }}">
					   edit 
					</button>
					<!-- Modal -->
					<div class="modal fade" id="exampleModaleditreviewe{{ $item->id }}" 
						tabindex="-1" role="dialog" 
					    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">  {{ $item->name_en }}  </h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
								{{ Form::open(['url'=>'admin/project-items/edit/'.$item->id,'files'=>true,'enctype'=>'multipart']) }}
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="inputEmail4">Title </label>
											{{ Form::text('name',$item->name,['class'=>'form-control','required'
												]) }}
										</div>
										<div class="form-row">
												<label for="inputEmail4"> Sub title </label>
												{{ Form::text('sub_title',$item->sub_title,['class'=>
												'form-control'
													]) }}
										</div>
										<div class="form-group col-md-8">
								            <label for="inputEmail4">image</label>
								            {{ Form::file('image',['class'=>'form-control',"accept"=>"image/png, image/jpeg,image/webp"]) }}
								        </div>
										<div class="form-group col-md-4">
											<img src="{{ URL::to($item->image) }}" class="img-thumbnail"	>
										</div>
										<div class="form-group col-md-8">
								            <label for="inputEmail4">light image  </label>
								            {{ Form::file('light_image',['class'=>'form-control',"accept"=>"image/png, image/jpeg,image/webp"]) }}
								        </div>
										<div class="form-group col-md-4">
											<img src="{{ URL::to($item->light_image) }}" class="img-thumbnail"	>
										</div>
										<div class="form-row">
											<div class="form-group col-md-8">
												<label for="inputEmail4">video   </label>
												{{ Form::file('video',['class'=>'form-control'
													]) }}
											</div>
											<div class="form-group col-md-4">
												<video width="150" controls>
													<source src="{{ URL::to($data->video) }}" type="video/mp4">
													Your browser does not support the video tag.
												</video>
											</div>
										</div>
									</div>
									
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="inputEmail4">text</label>
											{{ Form::textarea('text',$item->text,['class'=>'form-control'
												,'rows'=>5]) }}
										</div>
									</div>
									<button type="submit" class="btn btn-primary">save</button>
								{{ Form::token() }}
								{{ Form::close() }}
								</div>
							</div>
						</div>
					</div>
                	<!-- Button trigger modal -->
					<button type="button" class="btn btn-xs btn-danger" 
					data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
					   delete
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal{{ $item->id }}" 
						tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel"> alert</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					          confirm delete ?
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal"> close</button>
					        <a href="{{ URL::to('admin/project-items/delete/'.$item->id) }}" class="btn btn-danger"> confirm</a>
					      </div>
					    </div>
					  </div>
					</div>
                </td>
            </tr>
           @endforeach
         
        </tbody>
    </table>
    <!-- Modal -->
	<div class="modal fade" id="exampleModalreviewadd" tabindex="-1" role="dialog" 
	    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">new item   </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				{{ Form::open(['url'=>'admin/project-items/add/'.$data->id,'files'=>true,'enctype'=>'multipart']) }}
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputEmail4">Title</label>
							{{ Form::text('name',null,['class'=>'form-control','required'
								]) }}
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputEmail4">Sub title</label>
							{{ Form::text('sub_title',null,['class'=>'form-control'

								]) }}
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputEmail4">image</label>
							{{ Form::file('image',['class'=>'form-control'
								]) }}
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputEmail4">light image   </label>
							{{ Form::file('light_image',['class'=>'form-control'
								]) }}
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputEmail4">video   </label>
							{{ Form::file('video',['class'=>'form-control'
								]) }}
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputEmail4">text </label>
							{{ Form::textarea('text',null,['class'=>'form-control'
								,'rows'=>5]) }}
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary">save</button>
				{{ Form::token() }}
				{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>