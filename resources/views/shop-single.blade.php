@extends('layouts.app')

@section('content')
             
<!---------------------------------------inicio contenido que cambia--------------------------------->
     <!------------------------inicio del contenido del lado izquierdo ------------------------------->    
       <!----------------------imagen que cambia--------------------->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{ asset($comp->image_path) }}" alt="Card image" id="product-detail">
                    </div>
                    
           <!----------------------imagen que cambia--------------------->

                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            
     <!------------------------final del contenido del lado izquierdo ------------------------------->    
     <!------------------------Inicio del contnido del lado derecho ------------------------------->    
        <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">{{ $comp->name }}</h1>
                        <p class="h3 py-2">${{ $comp->price }}</p>
                        <p class="py-2">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <span class="list-inline-item text-dark">Rating 4.8</span>
                        </p>

                        <h6>Description:{{ $comp->description }}</h6>
                        <p></p>
                        <form action="" method="GET">
                            <input type="hidden" name="product-title" value="Activewear">
                            <div class="row">
                                <div class="col-auto">
                                    
                                </div>
                         
                            </div>
                            <!------codigo para añadir al carrito----->
                            
                            <form action="{{ route('cart.add', $comp->id) }}" method="POST">
                                @csrf
                            </form>
                         
                             <!---------------------------------->
                                <!-------boton enviar datos--->
                                <div class="col d-grid">
                                    <form action="{{ route('cart.add', $comp->id) }}" method="POST">
                                        @csrf <!-- Token de seguridad obligatorio -->
                                        <button type="submit" class="btn btn-success btn-lg">Add to Cart</button>
                                    </form>
                                                                    
                                </div>
                                 <!-------boton enviar datos--->                                                                                       
                                 
                                 <div class="col d-grid">
                                    <a class="btn btn-success btn-small" href="/shop">Volver</a>                                
                                </div>                                
                                </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!------------------------final del contnido del lado derecho ------------------------------->    
    <!---------------------------------------final contenido que cambia---------------------------------> 
@endsection
    