<div class="modal fade" id="nuevo-usuario" tabindex="-1" role="dialog" aria-labelledby="NewUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div id="modal-header-new-user" class="modal-header">
                <h5 class="modal-title" id="NewUserModalLabel">Registrar Nuevo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="card">
                        <form method="POST" action="" enctype="multipart/form-data" id="formulario"  onsubmit="ShowLoading()">
                            @csrf
                            <div class="card-body bg-white">
                                <div class="row">
                                    <div class="col-3" align="center">
                                        <img src="{{asset('images/avatar/mavatar')}}">
                                        <input id="image" type="file" class="filestyle" name="picture" accept="image/jpeg,image/png">
                                        <label style="font-weight: bold">Cambiar Imagen</label>
                                        <ul>
                                            @foreach ($errors->all() as $mensaje)
                                                <li>
                                                    {{$mensaje}}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-8" align="left">
                                        <div class="row">
                                            <div class="col-4" align="left">
                                                <label style="font-weight: bold">Grado: <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm" align="left">
                                                <select id="grade" name="grade_id" class="form-control{{ $errors->has('grade') ? ' is-invalid' : '' }}" required autofocus>
                                                    @foreach($grades->get() as $index => $grade)
                                                        <option value="{{ $index }}">
                                                            {{ $grade }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('grade'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('grade') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4" align="left">
                                                <label style="font-weight: bold">Especialidad: <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm" align="left">
                                                <select id="specialty" name="specialty_id" class="form-control{{ $errors->has('specialty') ? ' is-invalid' : '' }}" required autofocus>
                                                    @foreach($specialties->get() as $index => $specialty)
                                                        <option value="{{ $index }}">
                                                            {{ $specialty }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('specialty'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('specialty') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4" align="left">
                                                <label style="font-weight: bold">Nombres: <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm" align="left">
                                                <input id="names" name="names" class="form-control{{ $errors->has('names') ? ' is-invalid' : '' }}" required autofocus placeholder="- Introduzca los Nombres -">
                                                @if ($errors->has('names'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('names') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4" align="left">
                                                <label style="font-weight: bold">Primer Apellido: <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm" align="left">
                                                <input id="last_name" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" required autofocus placeholder="- Introduzca el Primer Apellido -">
                                                @if ($errors->has('last_name'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4" align="left">
                                                <label style="font-weight: bold">Segundo Apellido: <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm" align="left">
                                                <input id="second_surname" name="second_surname" class="form-control{{ $errors->has('second_surname') ? ' is-invalid' : '' }}" required autofocus placeholder="- Introduzca el Segundo Apellido -">
                                                @if ($errors->has('second_surname'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('second_surname') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4" align="left">
                                                <label style="font-weight: bold">Carnet de Identidad: <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm" align="left">
                                                <input id="identity_card" name="identity_card" class="form-control{{ $errors->has('identity_card') ? ' is-invalid' : '' }}" required autofocus placeholder="- Introduzca el Carnet de Identidad -">
                                                @if ($errors->has('identity_card'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('identity_card') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4" align="left">
                                                <label style="font-weight: bold">Expedido en: <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm" align="left">
                                                <select id="issued" name="issued" class="form-control{{ $errors->has('issued') ? ' is-invalid' : '' }}" required autofocus>
                                                    @foreach($issueds->get() as $index => $issued)
                                                        <option value="{{ $index }}">
                                                            {{ $issued }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('issued'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('issued') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4" align="left">
                                                <label style="font-weight: bold">Teléfono: <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm" align="left">
                                                <input id="phone" name="phone" class="form-control" required autofocus placeholder="- Introduzca el Número de Teléfono -" onkeypress='return validaNumericos(event)'>
                                                @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4" align="left">
                                                <label style="font-weight: bold">Correo Electrónico: <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm" align="left">
                                                <input id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="- Introduzca el e-mail -">
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4" align="left">
                                                <label style="font-weight: bold">Género: <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm" align="left">
                                                <input id="gender" name="gender" type="checkbox" checked data-toggle="toggle" data-width="120" data-onstyle="primary" data-offstyle="danger" data-on="<i class='fa fa-male'></i> Masculino" data-off="<i class='fa fa-female'></i> Femenino">
{{--                                                <input id="phone" name="phone" class="form-control" required autofocus placeholder="- Introduzca el Número de Teléfono -" onkeypress='return validaNumericos(event)'  maxlength="7">--}}
                                                @if ($errors->has('gender'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4" align="left">
                                                <label style="font-weight: bold">Tipo de Usuario: <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm" align="left">
                                                <select id="type_user" name="type_user" class="form-control{{ $errors->has('type_user') ? ' is-invalid' : '' }}" required autofocus>
                                                    @foreach($typeusers->get() as $index => $typeuser)
                                                        <option value="{{ $index }}">
                                                            {{ $typeuser }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('type_user'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('type_user') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group classification" style="display:none;">
                                            <label style="font-weight: bold">Acceso a Documentos: </label>
                                            <div>
                                                @foreach($classification as $class)
                                                    @if($class === 'Secreta')
                                                        <label>
                                                            {{ Form::checkbox('classification[]', $class,false,array('id'=>'check', 'onchange'=>'javascript:showContent()')) }} {{ $class }}
                                                        </label>
                                                    @elseif ($class !== 'Secreta')
                                                        <label>
                                                            {{ Form::checkbox('classification[]', $class,false) }} {{ $class }}
                                                        </label>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div id="content" style="display:none;">
                                            <div id="conteiner_span_code" class="container" >
                                                <span id="alerta_code" style="color: #ed1b24;font-weight: bold;font-size: smaller;line-height: 2px;"></span>
                                                <span id="success_code" style="color: #048f30;font-weight: bold;font-size: smaller;line-height: 2px;" hidden></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-4" align="left">
                                                    <label style="font-weight: bold">Código del documento: <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm" align="left">
{{--                                                    <input id="search" class="form-control typeahead">--}}
                                                    <input id='search_code' type="text" name="search_code" class="form-control" autofocus placeholder="- Introduzca el código del documento -" onclick="borrar_code()">
{{--                                                    <input id="id_search" type="text" readonly>--}}
                                                    <input id='id_search_code' type="text" name="id_search_code" hidden>
                                                </div>
                                            </div>
                                            <div id="conteiner_span" class="container" >
                                                <span id="alerta" style="color: #ed1b24;font-weight: bold;font-size: smaller;line-height: 2px;"></span>
                                                <span id="success" style="color: #048f30;font-weight: bold;font-size: smaller;line-height: 2px;" hidden></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-4" align="left">
                                                    <label style="font-weight: bold">Autorizado por: <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm" align="left">
{{--                                                    <input id="search" class="form-control typeahead">--}}
                                                    <input id='search' type="text" name="search" class="form-control" autofocus placeholder="- Introduzca los Nombres y Apellidos -" onclick="borrar()">
{{--                                                    <input id="id_search" type="text" readonly>--}}
                                                    <input id='id_search' type="text" name="id_search" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4" align="left">
                                                    <label style="font-weight: bold">Motivo: <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm" align="left">
                                                    <input id="comment_authorized" name="comment_authorized" class="form-control{{ $errors->has('comment_authorized') ? ' is-invalid' : '' }}" autofocus placeholder="- Introduzca el Motivo -">
                                                    @if ($errors->has('comment_authorized'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('comment_authorized') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                <br>
                                <label style="font-weight: bold">(<span class="text-danger">*</span>) Campos Obligatorios</label>
                                <br>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancelar</button>
                            <button id="buttonsave" type="submit" class="btn btn-info btn-lg" disabled>Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<script>
    var input = document.getElementById('new_password');

    function carg(elemento) {
        d = elemento.value;

        if(d == ""){
            input.disabled = true;
        }else{
            input.disabled = false;
        }
    }
</script>
<script>
    document.getElementById("formulario").onclick = function() {myFunction()};

    function myFunction() {
        document.getElementById("buttonsave").removeAttribute("disabled");
    }
    function validaNumericos(event) {
        var max_length = 8;
        var length = document.getElementById("phone").value.length;
        var string = document.getElementById("phone").value;
        var string2;

        if(length >= max_length)
        {
            // string2 = string.slice(0,-1);
            Swal.fire(
                'Solo se aceptan 8 dígitos en este campo'
            );
            document.getElementById("phone").value = string;
        }
        if(event.charCode >= 48 && event.charCode <= 57){
            return true;
        }
        Swal.fire(
            'Solo debes ingresar números en este campo'
        );
        return false;
    }
</script>