@extends('layouts.app')
@section('titulo', 'Listar Productos')
@section('cabecera', 'Listar Productos')

@section('contenido')
    <div class="flex justify-end m-4">
        <a href="{{ route('productos.create') }}" class="btn btn-outline btn-sm">Crear Producto</a>
    </div>
    <div class="flex justify-center mx-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10">
            @foreach ($productos as $producto)
                <div class="card w-64 bg-base-100 shadow-xl">
                    <figure>
                        @if(file_exists('images/productos/producto_' . $producto->id . '.jpg'))
                            <img src="{{ asset('images/productos/producto_' . $producto->id . '.jpg') }}" alt="{{$producto->nombre}}" class="rounded-t-lg h-40 w-full object-cover">
                        @else
                            <img src="{{ asset('images/productos/default.jpg') }}" alt="{{$producto->nombre}}" class="rounded-t-lg">
                        @endif
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">{{$producto->nombre}}</h2>
                        <div class="badge badge-success badge-outline">Categoría: {{$producto->categoria->nombre}}</div>
                        <p>{{Str::limit($producto->descripcion, 80)}}</p>

                        {{-- precio y stock--}}
                        <div class="flex space-x-4">
                            <div class="badge badge-neutral">${{number_format($producto->precio, 0, ',', '.')}}</div>
                            <div class="badge badge-ghost">{{$producto->stock}} en stock</div>
                        </div>
                    
                        <div class="card-actions justify-end mt-5">
                            {{-- Editar --}}
                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-xs">Editar</a>
                            {{-- Eliminar --}}
                            {{-- Si existen pedidos con este producto no se puede eliminar --}}
                            @if ($producto->pedidos->count() == 0)
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('¿Desea eliminar el producto {{ $producto->nombre }}?')" class="btn btn-error btn-xs">Eliminar</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection