
<div class="row">
    @foreach($Wines as $wine)
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card text-left">
            <img class="card-img-top" src="{{asset('img/wines/default.jpg')}}" alt="">
                <div class="card-body" >
                    <h4 class="card-title">{{$wine->name }}</h4>
                    <p class="card-text">Cost: ${{$wine->cost}}</p>
                    <hr>
                    <div class="row justify-content-end">
                        <form method="POST" action="{{route('admin.wine.destroy',$wine)}}" >
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-xs btn-danger" 
                            onclick="return confirm('Quieres eliminar este producto? \n :´C ')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                        <form  action="{{route('admin.wine.edit',$wine)}}" >
                            @csrf
                            <button  class="btn btn-xs btn-success ml-3 btn-edit" 
                                onclick="#" ><i class="fas fa-edit" ></i></button>                            
                        </form>
                    </div>                    
                </div>
            </div>    
        </div>        
    @endforeach
</div>