@extends('dashboardAdmin.dashboard')


@section('content')

    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">

                @if (count($errors) > 0)

                    <div class="alert alert-danger">

                        <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                @if(Session::has('success'))

                    <div class="alert alert-info">

                        {{Session::get('success')}}

                    </div>

                @endif

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h3 class="panel-title">Nuevo Candidato</h3>

                    </div>

                    <div class="panel-body">

                        <div class="table-container">

                            <form method="POST" action="{{ route('candidate.store') }}"  role="form">

                                {{ csrf_field() }}

                                <div class="row">

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Nombre">
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="lastname" id="lastname" class="form-control input-sm" placeholder="Apellido">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input name="email" class="form-control input-sm" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <input name="phone_number" class="form-control input-sm" placeholder="Telefono">
                                </div>

                                <div class="form-group">

                                   <select name="promotion_id" class="form-control" id="promotion_id"  placeholder="Promocion">
                                       <option selected>Promociones...</option>
                                       @foreach($promotions as $promotion)
                                        <option value="{{$promotion->id}}">{{$promotion->name}}</option>
                                       @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input name="sololearn" class="form-control input-sm" placeholder="Link SoloLearn">
                                </div>

                                <div class="form-group">
                                    <input name="codeacademy" class="form-control input-sm" placeholder="Link CodeAcademy">
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <input type="submit"  value="Guardar" class="btn btn-success btn-block">

                                        <a href="{{ route('candidate.index') }}" class="btn btn-info btn-block" >Atr??s</a>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </section>
@endsection
