<x-app-layout>
    <div class="card">
        <div class="card-body">
            <div class="text-center">Crear Role</div>

            <div class="card">
                <div class="card-body">
                    <form action="{{route('roles.store')}}" method="post">
                        @csrf
                        @method('Post')
                        <div class="mb-3">
                            <label for="nombre-role" class="form-label">Nombre Role</label>
                            <input type="text" name="name" class="form-control" id="nombre-role" >
                        </div>
                        <h3>Lista DE Permisos</h3>
                        @foreach($permissions as $permission)
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" name="permissions[]" type="checkbox" value="{{$permission->id}}" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$permission->description}}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Crear Role</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
