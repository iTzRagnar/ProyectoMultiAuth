@if(Auth::guard('web')->check())
    <p class="text-success">
        You are Looged In as a <strong> Estudiante </strong>
    </p>
@else
    <p class="text-danger">
        You are Logged Out as a <strong> Estudiante </strong>
    </p>
@endif

@if(Auth::guard('admin')->check())
    <p class="text-success">
        You are Looged In as a <strong> Administrador</strong>
    </p>
@else
    <p class="text-danger">
        You are Logged Out as a <strong> Administrador</strong>
    </p>
@endif