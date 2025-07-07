<x-layout>
    <x-slot:title>Inicio</x-slot:title>

    <div class="container py-4">
        @if(auth()->user()->role === 'admin')
            <div class="mb-5">
                <h2 class="mb-3">Gestión de Clientes</h2>
                
                <div class="table-responsive">
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr class="table-primary">
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->name }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->created_at->format('d/m/Y') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">No hay clientes registrados</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
        <div class="row">
            <h2>En proceso de construccion</h2>
        </div>
    </div>
</x-layout>