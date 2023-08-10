@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="social-dash-wrap">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">{{ $title }}</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mb-3">
            <a href="{{ route('users.index',app()->getLocale())  }}" class="btn bg-#334155 btn-block">Regresar a
                listado</a>
        </div>
        {{-- <form action="{{ route('users.update',['language'=>app()->getLocale(),'user'=>$user->id]) }}" method="POST">
            @csrf
            @method('PUT') --}}
            {!! Form::model($user, ['route' => ['users.update', app()->getLocale(), $user->id], 'method' => 'PUT']) !!}
            <div class="row">
                {{-- Datos fiscales --}}
                <div class="col-lg-12">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Datos </h6>
                        </div>
                        <div class="card-body py-md-25">
                            <div class="row">
                                {{-- Nombre --}}

                                <div class="col-md-3">
                                    <div class="form-group">
                                {!! Form::label('name', 'Nombre',['class'=>'il-gray fs-14 fw-500 align-center mb-10']) !!}
                                {!! Form::text('name', null, [
                                    'class' => 'form-control ih-medium ip-light radius-xs b-light px-15',
                                    'placeholder' => 'Ingrese su nombre',
                                    'required' => 'required'
                                ]) !!}

                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: Datos fiscales-->
                {{-- Roles --}}
                <div class="col-lg-12">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Listado de roles </h6>
                        </div>
                        <div class="card-body py-md-25 {{ $errors->has('roles') ? 'required' : '' }}">
                            <div class="row">
                                @forelse ($roles as $role)
                                <div>
                                    <label >
                                        {!! Form::checkbox('roles[]',$role->id, null, ['class' => 'mr-1']) !!}
                                        {{ $role->name }}
                                    </label>
                                </div>

                                @empty
                                    No existen roles registrados
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ends: Roles-->
            </div>
            <div class="col-lg-12 mb-3">
                {!! Form::submit('Actualizar Informacion', ['class'=>'btn btn-primary btn-block']) !!}
                {{-- <button class="btn btn-primary btn-block" type="submit">Actualizar Informacion</button> --}}
            </div>
            {!! Form::close() !!}
        {{-- </form> --}}

    </div>
</div>
@endsection
