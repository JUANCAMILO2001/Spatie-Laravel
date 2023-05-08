<x-app-layout>
    <div class="card">
        <div class="card-body">
            <div class="text-center">editar Role</div>

            <div class="card">
                <div class="card-body">
                    <form action="{{route('roles.update',$role)}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nombre-role" class="form-label">Nombre Actual de su Role</label>
                            <input type="text" class="form-control" name="name" id="nombre-role" value="{{$role->name}}">
                        </div>

                        <h3>Lista DE Permisos Actuales</h3>
                        @foreach($permissions as $permission)
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" name="permissions[]" type="checkbox" value="{{$permission->id}}" id="flexCheckDefault"
                                    @if($permission->id)

                                        @else
                                        @endif>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$permission->description}}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">editar Role</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
