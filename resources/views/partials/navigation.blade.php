<div class="navbar bg-orange-200">
  <div class="flex-1 ml-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 9V4.5M9 9H4.5M9 9L3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5l5.25 5.25" />
    </svg>
    
    <a href="{{route('inicio')}}" class="btn btn-ghost btn-sm normal-case text-sm">MiniMercado</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1 mr-6 space-x-2">
      <li><a href="{{ route('productos.index') }}">Productos</a></li>
      <li><a href="{{ route('categorias.index') }}">Categorías</a></li>
    </ul>
  </div>
</div>