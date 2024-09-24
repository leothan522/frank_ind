<table>
    <thead>
    <tr>
        <th style="border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            Nro.
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            CEDULA
        </th>
        <th style="border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            NOMBRES
        </th>
        <th style="border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center; ">
            APELLIDOS
        </th>
        <th style="border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center; ">
            FECHA DE NACIMIENTO
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            EDAD
        </th>
        <th style="border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center; ">
            SEXO
        </th>
        <th style="border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center; ">
            CORREO ELECTRÓNICO
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            TELÉFONO MÓVIL
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            TELÉFONO HABITACIÓN
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            ESTADO CIVIL
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            NIVEL ACADÉMICO
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            FACEBOOK
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            INSTAGRAM
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            ESTADO
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            MUNICIPIO
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            PARROQUIA
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            DIRECCIÓN
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            ACCESO A INTERNET
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            DISPOSITIVO ELECTRONICO
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            FECHA REGISTRO
        </th>
        <th style=" border: 1px solid #000000;background-color: #00B0F0; font-weight: bold; text-align: center;">
            OBSERVACIÓN
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($promotores as $promotor)
        <tr>
            <td style="border: 1px solid #000000; text-align: center">{{ ++$items }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->cedula) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->nombres) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->apellidos) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ getFecha($promotor->nacimiento) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ getEdad($promotor->nacimiento) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->sexo) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtolower($promotor->user->email) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->telefono_1) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->telefono_2) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->estado_civil) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper(listarNivelesAcademicos($promotor->nivel_academico)) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->facebook) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->instagram) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->verEstado) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->municipio) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->parroquia) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->direccion) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->acceso_internet) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ mb_strtoupper($promotor->dispositivo_electronico) }}</td>
            <td style="border: 1px solid #000000; text-align: center">{{ getFecha($promotor->created_at) }}</td>
            <td style="border: 1px solid #000000; text-align: center; @if(!empty($promotor->observacion)) background-color: red @endif ">{{ mb_strtoupper($promotor->observacion) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
