@extends('admin::layouts.master')

@section('title', $title)

@section('content')

<div class="row">
<div class="panel panel-flat">
    <div class="panel-heading">
       <h6 class="panel-title">{{ $title }}</h6>
         </div>
		    <div class='wrapper-ajax'>
				<table class="table table-togglable">
				<thead>
					<tr>
						<th >id</th>
						
						<th >name</th>
					    <th >slug</th>
						
					 <th width="150">
				
							<a href="{{ route($route_path.'.create') }}"  
							class="btn btn-sm  bg-success"
							style=""
							>Добавить роль и права</a>
						
							
							 
						</th>
					</tr>
					</thead>
					<tbody>
					@foreach ($items as $i)
						<tr>
							<td>{{ $i->id }}</td>
							
							<td>{{$i->name }}</td>
							<td>{{$i->slug }}</td>
							
							<td>
							
								<div class="btn-group">
									<button type="button" class="btn  btn-primary btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<i class="icon-menu7"></i> 
									</button>
									<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="{{ route($route_path.'.edit', $i) }}">Changess</a></li>
                                   <li class="divider"></li>
										<li>
										  <form method="POST" action="{{route($route_path.'.destroy', $i) }}" onsubmit="return confirm('Удалить ?')"> 
										  @csrf
										  @method('DELETE')
										  
										  <button type="submit">
										   delete
										  </button>
										 
										  </form>
										  
										  </li>
									</ul>
									
								</div>
								
						
							</td>
							</tr>
							@endforeach
					</tbody>
					
			       </table>
             </div>
			 <div class="panel-footer text-right">

			</div>
 </div>
</div>
@endsection