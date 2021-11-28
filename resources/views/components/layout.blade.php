<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href=" {{ asset('site/style.css') }} ">

    <title>@yield('title')</title>
</head>
<body>
    <!-- Topo da página -->
    <header class="container-fluid bg-royal-blue">
        <div class="container-lg d-flex justify-content-between px-0 align-items-center">
            <div class="d-flex my-4">
                <a href="{{ URL::to('/dashboard') }}"><img class="col-3" src="{{ asset('/site/imgs/logo.png')}}" alt="Logo Mags"></a>
            </div>
            
            <div class="d-flex my-4">
                <a class="btn text-magnolia fs-5" href="{{ URL::to('/contato') }}">Contato</a>
            </div>
        </div>
    </header>
    <!-- Container Usuário --> 
    <div id="container-user" class="container-fluid p-2">
        <div id="box-user"  class="container-lg d-flex px-0 flex-row-reverse">
            <div class="my-2">
                <svg id="Capa_1" enable-background="new 0 0 512 512" height="60" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg"><g><path d="m50 256c0 113.588 92.411 205.999 206 205.999s205.999-92.411 205.999-205.999-92.411-205.999-205.999-205.999-206 92.411-206 205.999zm92.429 147.193c3.558-39.587 35.676-74.014 80.219-85.683 10.154 4.701 21.447 7.343 33.352 7.343s23.198-2.643 33.352-7.343c44.544 11.668 76.661 46.096 80.219 85.683-31.44 24.314-70.842 38.806-113.571 38.806s-82.131-14.492-113.571-38.806zm113.571-98.34c-32.905 0-59.675-26.769-59.675-59.675s26.77-59.676 59.675-59.676 59.675 26.771 59.675 59.676-26.77 59.675-59.675 59.675zm185.999-48.853c0 51.336-20.906 97.88-54.651 131.568-4.152-18.435-13.287-35.643-26.993-50.555-13.345-14.518-30.652-26.109-49.984-33.672 15.555-14.55 25.304-35.234 25.304-58.163 0-43.934-35.742-79.676-79.675-79.676s-79.675 35.742-79.675 79.676c0 22.929 9.749 43.613 25.304 58.163-19.332 7.563-36.639 19.154-49.984 33.672-13.707 14.912-22.842 32.12-26.993 50.555-33.745-33.688-54.652-80.232-54.652-131.568 0-102.561 83.439-185.999 186-185.999s185.999 83.438 185.999 185.999z"/><path d="m302.819 4.273c-5.431-1.006-10.647 2.585-11.651 8.016s2.585 10.646 8.016 11.65c111.725 20.655 192.816 118.25 192.816 232.061 0 130.131-105.869 236-236 236s-236-105.869-236-236c0-113.811 81.091-211.406 192.817-232.06 5.431-1.004 9.02-6.22 8.016-11.65-1.004-5.432-6.219-9.026-11.651-8.016-121.208 22.406-209.182 128.272-209.182 251.726 0 68.38 26.628 132.667 74.981 181.02 48.352 48.351 112.639 74.98 181.019 74.98s132.667-26.629 181.019-74.98c48.353-48.353 74.981-112.64 74.981-181.02 0-123.454-87.974-229.32-209.181-251.727z"/><circle cx="256" cy="10" r="10"/></g></svg>
            </div>

            <div id="txt-user" class="mx-1 text-end">
                <h5 class=" my-0">MAGS</h5>
                <div class="">{{ Auth::user()->profile }}</div>
                <div class="">{{ Auth::user()->name }}</div>
            </div>
        </div>
       
         <div id="menu-dorpdown" class="container-lg d-flex flex-row-reverse">
             <div id="ghost-1" class="px-4 my-0"></div>
            <div class="btn-group">
                <button type="button" class="btn p-0" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="26" height="26"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#646887"><path d="M143.27734,51.52161c-1.51229,0.03575 -2.94918,0.66766 -3.99765,1.75807l-53.27969,53.27969l-53.27969,-53.27969c-1.07942,-1.10959 -2.56163,-1.73559 -4.10963,-1.73568c-2.33303,0.00061 -4.43306,1.41473 -5.31096,3.57628c-0.8779,2.16155 -0.3586,4.6395 1.31331,6.26669l57.33333,57.33333c2.23904,2.23811 5.86825,2.23811 8.10729,0l57.33333,-57.33333c1.70419,-1.63875 2.22781,-4.1555 1.31865,-6.33798c-0.90916,-2.18248 -3.06468,-3.58317 -5.42829,-3.52739z"></path></g></g></svg>
                </button>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="block text-decoration-none px-4 py-2 text-sm leading-5 text-royal-blue hover:bg-magnolia focus:outline-none transition duration-150 ease-in-out" href="{{ URL::to('dashboard/show') }}">Perfil</a>
                    </li>
                    <li>
                      <!-- Authentication -->
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="block text-decoration-none px-4 py-2 text-sm leading-5 text-royal-blue hover:bg-magnolia focus:outline-none transition duration-150 ease-in-out" :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @php
        ($profile = Auth::user()->profile)
    @endphp

    @if ($profile == 'gerente')
   
    <!-- Menu de Navegação GERENTE--> 
    <div class="container-fluid p-2">
        <ul class="nav nav-tabs container-lg nav-tabs-royal-blue">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ URL::to('/leitura/create') }}">Leitura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/dashboard') }}">Planilhas</a>
            </li>
        </ul>
        </div>
    @else

        <!-- Menu de Navegação PADRÃO--> 
        <div class="container-fluid p-2">
            <ul class="nav nav-tabs container-lg nav-tabs-royal-blue">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ URL::to('/dashboard') }}">Planilhas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/contrato') }}">Cadastros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/estoque') }}">Estoque</a>
                </li>
            </ul>
            </div>
    @endif
     
   
    <!-- Barra de pesquisa -->

        {{-- <div id="search" class="container-fluid">
            <form class="d-flex justify-content-start w-25">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" type="submit">
                    <svg width="28" height="28" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.0863 1.9139C13.2182 1.04583 12.1286 0.441918 10.9351 0.167416C10.767 0.12876 10.5992 0.233729 10.5606 0.401918C10.5219 0.570107 10.6268 0.737827 10.7951 0.776515C11.8741 1.02467 12.8593 1.5708 13.6443 2.35584C15.9523 4.66376 15.9523 8.41904 13.6443 10.727C12.4902 11.8811 10.9747 12.458 9.45876 12.4579C7.94312 12.4578 6.42699 11.8808 5.27317 10.727C2.96521 8.41901 2.96521 4.6637 5.27317 2.35578C6.05814 1.57077 7.04343 1.02464 8.1225 0.776484C8.29072 0.737796 8.39569 0.570107 8.357 0.401887C8.31832 0.233698 8.15066 0.128791 7.98244 0.167385C6.78896 0.441887 5.69926 1.0458 4.83123 1.91384C3.59706 3.148 2.91737 4.79142 2.91737 6.54137C2.91737 7.86482 3.3064 9.12717 4.02975 10.1978L0.367159 13.8604C0.130407 14.0972 0 14.4119 0 14.7467C0 15.0814 0.130407 15.3962 0.367159 15.633C0.603942 15.8698 0.918695 16.0001 1.25348 16.0001C1.5882 16.0001 1.90295 15.8698 2.13977 15.633L5.80301 11.9697C6.90346 12.7114 8.181 13.0826 9.45876 13.0826C11.1346 13.0826 12.8105 12.4447 14.0863 11.1689C16.6379 8.61729 16.6379 4.46551 14.0863 1.9139ZM1.69783 15.191C1.57907 15.3097 1.42126 15.3751 1.25345 15.3751C1.08563 15.3751 0.92782 15.3098 0.8091 15.191C0.69038 15.0723 0.624974 14.9145 0.624974 14.7467C0.624974 14.5789 0.690349 14.4211 0.8091 14.3023L4.40803 10.7034C4.54088 10.8642 4.68191 11.0196 4.83123 11.1689C4.9811 11.3188 5.1367 11.4596 5.29701 11.5918L1.69783 15.191Z" fill="#03053E"/>
                        <path d="M9.45874 0.625005C9.63133 0.625005 9.77125 0.485093 9.77125 0.312502C9.77125 0.139912 9.63133 0 9.45874 0C9.28615 0 9.14624 0.139912 9.14624 0.312502C9.14624 0.485093 9.28615 0.625005 9.45874 0.625005Z" fill="#03053E"/>
                        <path d="M5.7729 2.85556C3.74058 4.88792 3.74058 8.19482 5.7729 10.2272C6.7891 11.2434 8.12389 11.7515 9.45871 11.7515C10.7936 11.7515 12.1284 11.2434 13.1446 10.2272C14.1291 9.2427 14.6713 7.93369 14.6713 6.5414C14.6713 5.14908 14.1291 3.8401 13.1446 2.85559C11.1122 0.823198 7.80526 0.823135 5.7729 2.85556ZM12.7026 3.29753C13.5691 4.16401 14.0463 5.31601 14.0463 6.5414C14.0463 7.76675 13.5691 8.91879 12.7026 9.78527C11.8082 10.6797 10.6337 11.1269 9.45871 11.1268C8.28411 11.1267 7.10907 10.6795 6.21484 9.78527C4.42621 7.9966 4.42621 5.08617 6.21484 3.2975V3.29753C8.00355 1.5088 10.914 1.50883 12.7026 3.29753Z" fill="#03053E"/>
                        </svg>
                </button>
            </form>
        </div> --}}

        @yield('content')

         <!-- Rodapé -->
    <footer class="container-fluid p-2"> <!-- mudar para relative -->
        <hr class="text-blue-gray">
        <h6 class="text-center text-royal-blue text-opacity-75">Todos os direitos reservados</h6>
    </footer>



    
    @if (Session::has('message'))
        <div> {{ Session::get('message') }} </div>      
    @endif

    <script>
        function ConfirmDelete() {
            return confirm('Tem certeza que deseja excluir este registro?');
        }
    </script>

    <script src="{{ asset('site/jquery.js')}}"></script>
    <script src="{{ asset('site/bootstrap.js')}}"></script>

</body>
</html>
