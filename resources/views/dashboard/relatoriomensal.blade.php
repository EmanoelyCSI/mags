@extends('components.layout')

@section('title', 'Relatório')

@section('content')

@extends('adminlte::master')
<!-- Conteúdo -->
<div id="conteudo" class="container-lg">
        <table class="table table-bordered">  
                    <tr>
                        <th> {{$postos->updated_at->format('d/m/Y')}} </th>
                        <th class="colspan="3"> {{$postos->name}} </th>
                    </tr>

                    @foreach ($postos->bomba as $value)
                    <tr>
                        <th>{{$value->name}}</th> 
                        @foreach ($value->bico as $value2)
                            <th>{{ $value2->name }}</th>
                        @endforeach
                    </tr>

                    <tr>
                        <td> Turno: {{ $turnos->name }}</td>
                        <td> {{$leituras->leitura}} </td>
                        <td> {{$leituras->leitura}} </td>
                        <td> {{$leituras->leitura}} </td>
                        <td> {{$leituras->leitura}} </td>
                    </tr>
                    @endforeach 

                    
                    {{-- <tr>
                        <th> {{ $turnos->name }} </th>
                        <td>{{ $leituras->leitura }}</td>
                        <td>{{ $leituras->leitura }}</td>
                        <td>{{ $leituras->leitura }}</td>
                    </tr>
                    <tr>
                        <th> {{ $turnos->name }} </th>
                        <td>{{ $leituras->leitura }}</td>
                        <td>{{ $leituras->leitura }}</td>
                        <td>{{ $leituras->leitura }}</td>
                    </tr> --}}
        </table>

        <div id="btn" class="float-end">
            <a href="https://docs.google.com/spreadsheets/u/0/" class="btn btn-navy-blue">Exportar <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_174_35)">
                <path d="M22.0339 3.03851L19.1266 0.132962C19.0414 0.0478337 18.926 0 18.8055 0H5.35941C5.10857 0 4.90515 0.203373 4.90515 0.454261V15.0797H3.36066C2.10826 15.0797 1.08936 16.0986 1.08936 17.351V20.9851C1.08936 22.2375 2.10826 23.2564 3.36066 23.2564H15.3531H21.7128C21.9636 23.2564 22.1671 23.0531 22.1671 22.8022V13.6773C22.1671 13.4264 21.9636 13.223 21.7128 13.223C21.462 13.223 21.2585 13.4264 21.2585 13.6773V22.3479H17.169C17.4548 21.968 17.6245 21.496 17.6245 20.9851V17.351C17.6245 16.0986 16.6055 15.0797 15.3531 15.0797H5.81367V0.908522H18.3513V3.3598C18.3513 3.61069 18.5547 3.81407 18.8055 3.81407H21.2585V9.58895C21.2585 9.83984 21.462 10.0432 21.7128 10.0432C21.9636 10.0432 22.1671 9.83984 22.1671 9.58895V3.3598C22.1671 3.23929 22.1191 3.12368 22.0339 3.03851ZM16.7159 17.351V20.9851C16.7159 21.7366 16.1046 22.3479 15.3531 22.3479H3.36066C2.60922 22.3479 1.99788 21.7366 1.99788 20.9851V17.351C1.99788 16.5996 2.60922 15.9883 3.36066 15.9883H15.3531C16.1046 15.9883 16.7159 16.5996 16.7159 17.351ZM19.2598 1.55048L20.6157 2.90554H19.2598V1.55048Z" fill="#FCF7FF"/>
                <path d="M21.7131 11.1792C21.5936 11.1792 21.4764 11.2274 21.3919 11.3123C21.3074 11.3968 21.2588 11.5135 21.2588 11.6335C21.2588 11.7529 21.3074 11.8701 21.3919 11.9546C21.4764 12.0391 21.5936 12.0877 21.7131 12.0877C21.8325 12.0877 21.9497 12.0391 22.0342 11.9546C22.1187 11.8701 22.1673 11.7529 22.1673 11.6335C22.1673 11.514 22.1187 11.3968 22.0342 11.3123C21.9497 11.2274 21.8325 11.1792 21.7131 11.1792Z" fill="#FCF7FF"/>
                <path d="M10.6052 20.0492L10.7653 20.0627C10.9861 20.0814 11.1527 20.2498 11.1368 20.4382C11.1209 20.6265 10.9284 20.7646 10.7076 20.746L10.1271 20.697C9.90603 20.6783 9.71383 20.8161 9.6979 21.0048C9.68197 21.1935 9.84834 21.3616 10.0694 21.3803L10.6499 21.4293C11.3122 21.4852 11.8898 21.0709 11.9376 20.5058C11.9853 19.9406 11.4853 19.4353 10.823 19.3794L10.6629 19.3659C10.4421 19.3473 10.2754 19.1789 10.2913 18.9905C10.3072 18.8021 10.4998 18.664 10.7205 18.6826L11.181 18.7215C11.402 18.7402 11.5942 18.6024 11.6102 18.4137C11.6261 18.225 11.4597 18.0569 11.2387 18.0382L10.7782 17.9994C10.116 17.9434 9.53833 18.3577 9.49062 18.9229C9.44291 19.488 9.9429 19.9933 10.6052 20.0492Z" fill="#C4CAD0"/>
                <path d="M3.29822 18.1287C3.15732 17.9808 2.9005 17.9569 2.7245 18.0751C2.54846 18.1934 2.51993 18.4092 2.66075 18.5571L3.76288 19.7143L2.66075 20.8715C2.51993 21.0194 2.54846 21.2351 2.7245 21.3534C2.79977 21.404 2.88981 21.4286 2.97924 21.4286C3.09895 21.4286 3.21761 21.3845 3.29818 21.2999L4.28557 20.2631L5.27297 21.2999C5.35362 21.3845 5.4722 21.4286 5.59191 21.4286C5.68134 21.4286 5.77138 21.404 5.84665 21.3534C6.02269 21.2351 6.05122 21.0194 5.9104 20.8715L4.80827 19.7143L5.9104 18.5571C6.05122 18.4092 6.02269 18.1935 5.84665 18.0751C5.67069 17.9569 5.41379 17.9808 5.27293 18.1287L4.28553 19.1654L3.29822 18.1287Z" fill="#C4CAD0"/>
                <path d="M13.5839 18.1287C13.443 17.9808 13.1861 17.9569 13.0101 18.0751C12.8341 18.1934 12.8056 18.4092 12.9464 18.5571L14.0485 19.7143L12.9464 20.8715C12.8056 21.0194 12.8341 21.2351 13.0101 21.3534C13.0854 21.404 13.1755 21.4286 13.2649 21.4286C13.3846 21.4286 13.5033 21.3845 13.5838 21.2999L14.5712 20.2631L15.5586 21.2999C15.6393 21.3845 15.7578 21.4286 15.8776 21.4286C15.967 21.4286 16.057 21.404 16.1323 21.3534C16.3083 21.2351 16.3369 21.0194 16.1961 20.8715L15.0939 19.7143L16.1961 18.5571C16.3369 18.4092 16.3083 18.1935 16.1323 18.0751C15.9563 17.9569 15.6994 17.9808 15.5586 18.1287L14.5712 19.1654L13.5839 18.1287Z" fill="#C4CAD0"/>
                <path d="M7.25693 21.1431H8.85693C9.07781 21.1431 9.25693 20.964 9.25693 20.7431C9.25693 20.5221 9.07781 20.3431 8.85693 20.3431H7.65693V17.5431C7.65693 17.3221 7.47781 17.1431 7.25693 17.1431C7.03605 17.1431 6.85693 17.3221 6.85693 17.5431V20.7431C6.85693 20.964 7.03601 21.1431 7.25693 21.1431Z" fill="#C4CAD0"/>
                <path d="M8.08512 4.99512C7.83428 4.99512 7.63086 5.19849 7.63086 5.44938V13.4417C7.63086 13.6926 7.83428 13.8959 8.08512 13.8959H11.6706C11.6866 13.8977 11.7028 13.8986 11.7192 13.8986C11.7357 13.8986 11.7519 13.8976 11.7679 13.8959H18.9874C19.2382 13.8959 19.4416 13.6926 19.4416 13.4417V5.44938C19.4416 5.19849 19.2382 4.99512 18.9874 4.99512H8.08512ZM8.53938 8.56774H11.2649V10.3233H8.53938V8.56774ZM12.1735 8.56774H18.5331V10.3233H12.1735V8.56774ZM18.5331 7.65922H12.1735V5.90364H18.5331V7.65922ZM11.2649 5.90364V7.65922H8.53938V5.90364H11.2649ZM8.53938 11.2318H11.2649V12.9874H8.53938V11.2318ZM12.1735 12.9874V11.2318H18.5331V12.9874H12.1735Z" fill="#C4CAD0"/>
                </g>
                <defs>
                <clipPath id="clip0_174_35">
                <rect width="23.2564" height="23.2564" fill="white"/>
                </clipPath>
                </defs>
                </svg></a>
        </div>
</div>
@endsection