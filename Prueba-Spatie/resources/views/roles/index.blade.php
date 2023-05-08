<x-app-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">Listar Role</h3>
            <a href="{{route('roles.create')}}" class="btn btn-success">Crear Role</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Role</th>
                    <th colspan="2"></th>

                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td><a href="{{route('roles.edit',$role)}}" class="btn btn-sm btn-primary">editar</a></td>
                    <td>
                        <form action="{{route('roles.destroy', $role)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm  btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
