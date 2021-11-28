@extends('components.layout')

@section('title', 'Contratos')

@section('content')

    <!-- Conteúdo da página --> 
    <div id="conteudo" class="container mb-5">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <button class="nav-link active" id="v-pills-contrato-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contrato" type="button" role="tab" aria-controls="v-pills-contrato" aria-selected="true">
                   <div id="svg" class="d-flex justify-content-between m-2">
                    <svg width="30" height="34" viewBox="0 0 30 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9397 21.0088C15.4121 21.0088 15.795 20.6259 15.795 20.1536C15.795 19.6812 15.4121 19.2983 14.9397 19.2983C14.4674 19.2983 14.0845 19.6812 14.0845 20.1536C14.0845 20.6259 14.4674 21.0088 14.9397 21.0088Z" fill="#FADB8C"/>
                        <path d="M27.1662 2.63084C26.7981 2.53112 26.4238 2.48724 26.053 2.49759C25.6465 1.05829 24.3222 0 22.7547 0H3.42768C1.53766 0 0 1.53766 0 3.42768V29.6822C0 31.5722 1.53766 33.1099 3.42768 33.1099C3.42768 33.1099 19.3722 33.1095 19.3821 33.1095C19.9048 33.1095 20.4064 32.8694 20.736 32.4399L24.2351 27.882C24.3043 27.7969 24.3554 27.6877 24.3839 27.5823L29.8651 7.33336C30.1327 6.34477 29.9993 5.31128 29.4897 4.42311C28.9799 3.53493 28.1547 2.89845 27.1662 2.63084ZM1.71375 29.6822V3.42768C1.71375 2.48262 2.48254 1.71384 3.42759 1.71384H22.7546C23.5269 1.71384 24.1811 2.22767 24.3945 2.93129C24.348 2.95558 24.3016 2.98021 24.2559 3.00647C23.3676 3.5162 22.7311 4.34134 22.4636 5.32976L16.9824 25.5787C16.9526 25.6886 16.9451 25.8082 16.9608 25.921L17.6544 31.396H3.42759C2.48254 31.396 1.71375 30.6272 1.71375 29.6822ZM19.3811 31.3896L18.8205 26.964L22.098 27.8513L19.3811 31.3896ZM22.9535 26.3073L18.8607 25.1993L21.6012 15.0754L25.694 16.1833L22.9535 26.3073ZM28.2108 6.88546L26.1417 14.529L22.0489 13.4211L24.1179 5.77748C24.2659 5.23098 24.6178 4.77461 25.109 4.49272C25.6002 4.21083 26.1718 4.13702 26.7183 4.28498C27.2649 4.43303 27.7213 4.78496 28.0032 5.27613C28.2851 5.76739 28.3588 6.33887 28.2108 6.88546Z" fill="#060A6F"/>
                        <path d="M14.9395 6.52847H5.07864C4.60543 6.52847 4.22168 6.91214 4.22168 7.38543C4.22168 7.85864 4.60535 8.2424 5.07864 8.2424H14.9395C15.4127 8.2424 15.7965 7.85873 15.7965 7.38543C15.7965 6.91214 15.4127 6.52847 14.9395 6.52847Z" fill="#FADB8C"/>
                        <path d="M14.9395 10.7845H5.07864C4.60543 10.7845 4.22168 11.1681 4.22168 11.6414C4.22168 12.1146 4.60535 12.4984 5.07864 12.4984H14.9395C15.4127 12.4984 15.7965 12.1147 15.7965 11.6414C15.7965 11.1682 15.4127 10.7845 14.9395 10.7845Z" fill="#FADB8C"/>
                        <path d="M14.9395 15.0406H5.07864C4.60543 15.0406 4.22168 15.4243 4.22168 15.8976C4.22168 16.3709 4.60535 16.7546 5.07864 16.7546H14.9395C15.4127 16.7546 15.7965 16.3709 15.7965 15.8976C15.7965 15.4243 15.4127 15.0406 14.9395 15.0406Z" fill="#FADB8C"/>
                        <path d="M11.0911 19.2967H5.07864C4.60543 19.2967 4.22168 19.6804 4.22168 20.1537C4.22168 20.6269 4.60535 21.0106 5.07864 21.0106H11.0911C11.5644 21.0106 11.9481 20.6269 11.9481 20.1537C11.9481 19.6804 11.5644 19.2967 11.0911 19.2967Z" fill="#FADB8C"/>
                        </svg>
                        
                        <div id="box-1" class="d-flex m-1">
                            <h5 class="text-">Contrato</h5>
                       </div>
                    </div>
                </button>

                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-posto" type="button" role="tab" aria-controls="v-pills-posto" aria-selected="false">
                   <div id="svg-posto" class="d-flex justify-content-between m-2">
                    <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.2646 19.5495C32.652 19.5495 32.966 19.2355 32.966 18.8481C32.966 18.4607 32.652 18.1467 32.2646 18.1467C31.8773 18.1467 31.5632 18.4607 31.5632 18.8481C31.5632 19.2355 31.8773 19.5495 32.2646 19.5495Z" fill="#060A6F"/>
                        <path d="M10.6616 27.0743H22.3049C23.4651 27.0743 24.4091 26.1304 24.4091 24.9701V20.0603C24.4091 18.9 23.4651 17.9561 22.3049 17.9561H10.6616C9.50132 17.9561 8.55737 18.9 8.55737 20.0603V24.9701C8.55737 26.1304 9.50132 27.0743 10.6616 27.0743ZM9.96018 20.0603C9.96018 19.6735 10.2748 19.3589 10.6616 19.3589H22.3049C22.6916 19.3589 23.0063 19.6735 23.0063 20.0603V24.9701C23.0063 25.3568 22.6916 25.6715 22.3049 25.6715H10.6616C10.2748 25.6715 9.96018 25.3568 9.96018 24.9701V20.0603Z" fill="#FADB8C"/>
                        <path d="M18.6571 7.01417C18.6571 5.0804 17.0839 3.50715 15.1501 3.50715H7.01385C5.08008 3.50715 3.50684 5.0804 3.50684 7.01417V9.81978C3.50684 10.98 4.45078 11.924 5.61105 11.924H13.7473C16.4547 11.924 18.6571 9.72151 18.6571 7.01417ZM4.90964 9.81978V7.01417C4.90964 5.85391 5.85359 4.90996 7.01385 4.90996H15.1501C16.3104 4.90996 17.2543 5.85391 17.2543 7.01417C17.2543 8.94794 15.6811 10.5212 13.7473 10.5212H5.61105C5.22429 10.5212 4.90964 10.2065 4.90964 9.81978Z" fill="#060A6F"/>
                        <path d="M28.8491 13.7078C28.6334 13.3859 28.1977 13.3 27.876 13.5155L24.7358 15.6198C24.414 15.8354 24.328 16.2711 24.5436 16.5929C24.679 16.7948 24.9009 16.904 25.1269 16.904C25.2611 16.904 25.3968 16.8654 25.5167 16.7852L28.6569 14.681C28.9787 14.4652 29.0648 14.0295 28.8491 13.7078Z" fill="#060A6F"/>
                        <path d="M7.44902 28.2449L4.30883 30.3491C3.98703 30.5648 3.90097 31.0005 4.11658 31.3223C4.25195 31.5242 4.47387 31.6334 4.69987 31.6334C4.83411 31.6334 4.96984 31.5948 5.08971 31.5146L8.22989 29.4104C8.55169 29.1947 8.63775 28.7591 8.42214 28.4373C8.20632 28.1153 7.77068 28.0294 7.44902 28.2449Z" fill="#060A6F"/>
                        <path d="M28.6569 30.3492L25.5167 28.2449C25.195 28.0293 24.7593 28.1153 24.5436 28.4372C24.328 28.759 24.414 29.1946 24.7358 29.4103L27.876 31.5145C27.9959 31.5949 28.1316 31.6333 28.2659 31.6333C28.4919 31.6333 28.7138 31.5241 28.8491 31.3222C29.0648 31.0005 28.9787 30.5649 28.6569 30.3492Z" fill="#060A6F"/>
                        <path d="M8.22989 15.6197L5.08971 13.5155C4.76804 13.2999 4.33233 13.3859 4.11658 13.7077C3.90097 14.0295 3.98703 14.4652 4.30883 14.6809L7.44902 16.7851C7.56889 16.8655 7.70461 16.9038 7.83886 16.9038C8.06492 16.9038 8.28684 16.7947 8.42214 16.5927C8.63775 16.2711 8.55169 15.8354 8.22989 15.6197Z" fill="#060A6F"/>
                        <path d="M34.7946 6.67953C35.0685 6.40563 35.0685 5.96151 34.7946 5.68754L29.3125 0.205581C29.181 0.0740682 29.0026 0.000140281 28.8166 0.000140281C28.6306 0.000140281 28.4521 0.0740682 28.3206 0.205581L24.8241 3.70215L21.3275 0.205511C21.1971 0.0750501 21.0161 0 20.8317 0H6.31263C5.46042 0.000701403 4.63347 0.166934 3.85561 0.496593C3.10371 0.814329 2.42896 1.26961 1.8489 1.8489C1.26954 2.42896 0.814329 3.10371 0.495892 3.85554C0.166934 4.63417 0 5.46049 0 6.31263V32.4048C0 32.8783 0.0925151 33.3377 0.275651 33.7698C0.452475 34.1878 0.70491 34.5623 1.02685 34.885C1.3488 35.2069 1.72405 35.4594 2.14145 35.6362C2.57415 35.8193 3.03357 35.9118 3.50702 35.9118H29.4589C29.9324 35.9118 30.3918 35.8193 30.8239 35.6362C31.2419 35.4594 31.6164 35.2069 31.9384 34.885C32.2603 34.5623 32.5135 34.1878 32.6903 33.7698C32.8727 33.3377 32.966 32.8783 32.966 32.4048V22.0044C32.966 21.6172 32.6511 21.303 32.2646 21.303C31.8781 21.303 31.5632 21.6172 31.5632 22.0044V32.4048C31.5611 33.5628 30.617 34.5069 29.459 34.509H3.50709C2.34907 34.5069 1.40498 33.5628 1.40288 32.4048V6.31263C1.40288 5.00241 1.9142 3.76934 2.84075 2.84068C3.76934 1.91413 5.00164 1.40351 6.31263 1.40281H20.5412L31.5631 12.4247V15.6918C31.5631 16.0783 31.8781 16.3932 32.2645 16.3932C32.6517 16.3932 32.966 16.0783 32.966 15.6918C32.966 15.6911 32.966 15.6911 32.966 15.6904V12.1343C32.966 11.947 32.893 11.7709 32.7604 11.6384L31.2981 10.1761L34.7946 6.67953ZM28.8166 1.69354L33.3067 6.18364L32.3052 7.18517L27.8151 2.69507L28.8166 1.69354ZM26.8231 3.687L31.3132 8.17703L30.3117 9.17856L25.8216 4.68846L26.8231 3.687Z" fill="#060A6F"/>
                        </svg>

                        <div id="box-2" class="d-flex m-1">
                            <h5>Posto</h5>
                        </div>
                   </div>         
                </button>

                <button class="nav-link" id="v-pills-usuarios-tab" data-bs-toggle="pill" data-bs-target="#v-pills-usuarios" type="button" role="tab" aria-controls="v-pills-usuarios" aria-selected="false">
                  <div id="svg-user" class="d-flex justify-content-between">
                    <svg width="40" height="29" viewBox="0 0 40 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.6976 25.5746C17.3711 25.5746 17.0721 25.363 16.9621 25.0563C16.8535 24.7537 16.9468 24.4057 17.1922 24.198C17.4493 23.9804 17.8237 23.9536 18.1099 24.1305C18.3828 24.2992 18.5266 24.6313 18.4632 24.9458C18.3906 25.3061 18.0662 25.5746 17.6976 25.5746Z" fill="#060A6F"/>
                        <path d="M30.8669 24.5856C29.5361 24.5856 28.4533 23.5028 28.4533 22.172V21.5495H27.8308C26.5 21.5495 25.4172 20.4668 25.4172 19.136C25.4172 17.8051 26.4999 16.7224 27.8308 16.7224H28.4533V16.0999C28.4533 14.769 29.536 13.6863 30.8669 13.6863C32.1978 13.6863 33.2804 14.769 33.2804 16.0999V16.7224H33.9029C35.2338 16.7224 36.3165 17.8051 36.3165 19.136C36.3165 20.4668 35.2339 21.5495 33.9029 21.5495H33.2804V22.172C33.2804 23.5028 32.1978 24.5856 30.8669 24.5856ZM27.8308 18.2849C27.3615 18.2849 26.9797 18.6667 26.9797 19.136C26.9797 19.6053 27.3615 19.987 27.8308 19.987H29.2346C29.666 19.987 30.0158 20.3368 30.0158 20.7682V22.172C30.0158 22.6413 30.3976 23.0231 30.8669 23.0231C31.3362 23.0231 31.7179 22.6413 31.7179 22.172V20.7682C31.7179 20.3368 32.0678 19.987 32.4992 19.987H33.9029C34.3722 19.987 34.754 19.6052 34.754 19.136C34.754 18.6667 34.3722 18.2849 33.9029 18.2849H32.4992C32.0678 18.2849 31.7179 17.9351 31.7179 17.5036V16.0999C31.7179 15.6306 31.3361 15.2488 30.8669 15.2488C30.3976 15.2488 30.0158 15.6306 30.0158 16.0999V17.5036C30.0158 17.9351 29.666 18.2849 29.2346 18.2849H27.8308Z" fill="#060A6F"/>
                        <path d="M30.8669 9.98975C28.8549 9.98975 26.9928 10.6447 25.482 11.7528C25.4796 11.7528 25.4771 11.7527 25.4746 11.7527H23.879C25.3314 10.5304 26.2559 8.69998 26.2559 6.65764C26.2559 2.98664 23.2693 0 19.5982 0C16.7182 0 14.2593 1.83828 13.3336 4.40312C12.3953 2.28289 10.2714 0.799764 7.80756 0.799764C4.47749 0.799764 1.76828 3.50898 1.76828 6.83897C1.76828 8.61264 2.53687 10.2101 3.75843 11.316C1.68203 11.3393 0 13.0355 0 15.1173V22.4496C0 22.8811 0.349765 23.2309 0.781249 23.2309H10.9644V24.7934C10.9644 25.2249 11.3143 25.5746 11.7457 25.5746H14.1515C14.5829 25.5746 14.9327 25.2249 14.9327 24.7934C14.9327 24.3619 14.5829 24.0121 14.1515 24.0121H12.5269V15.9094C12.5269 14.479 13.6907 13.3152 15.1211 13.3152H23.8272C22.5202 14.8978 21.7339 16.9266 21.7339 19.136C21.7339 20.9272 22.2507 22.5998 23.1429 24.0121H21.215C20.7836 24.0121 20.4338 24.3619 20.4338 24.7934C20.4338 25.2249 20.7836 25.5746 21.215 25.5746H24.3864C26.0422 27.2458 28.336 28.2822 30.867 28.2822C35.903 28.2822 40 24.1793 40 19.136C39.9999 14.0927 35.9029 9.98975 30.8669 9.98975ZM19.5982 1.5625C22.4077 1.5625 24.6934 3.84812 24.6934 6.65764C24.6934 9.46709 22.4077 11.7527 19.5982 11.7527C16.7888 11.7527 14.5031 9.46709 14.5031 6.65764C14.5032 3.84812 16.7889 1.5625 19.5982 1.5625ZM3.33077 6.83905C3.33077 4.37054 5.33905 2.36234 7.80756 2.36234C10.2761 2.36234 12.2844 4.37062 12.2844 6.83905C12.2844 9.30748 10.2761 11.3158 7.80756 11.3158C5.33905 11.3158 3.33077 9.30748 3.33077 6.83905ZM1.5625 21.6684V15.1173C1.5625 13.8827 2.56687 12.8783 3.80148 12.8783H11.8136C11.9686 12.8783 12.1125 12.8883 12.2471 12.909C11.457 13.6661 10.9644 14.7313 10.9644 15.9093V21.6683H1.5625V21.6684ZM15.1211 11.7527C14.7039 11.7527 14.3008 11.8145 13.9205 11.9294C13.3362 11.5243 12.6574 11.3229 11.8567 11.316C12.5269 10.7092 13.0608 9.95443 13.4061 9.10381C13.8164 10.1387 14.479 11.0471 15.3175 11.7527H15.1211ZM30.8669 26.7196C26.6924 26.7196 23.2964 23.3176 23.2964 19.1359C23.2964 14.9542 26.6925 11.5522 30.8669 11.5522C35.0413 11.5522 38.4374 14.9543 38.4374 19.136C38.4374 23.3177 35.0413 26.7196 30.8669 26.7196Z" fill="#060A6F"/>
                        </svg>
      
                        <div id="box-3" class="d-flex position-relative">
                            <h5>Usuários</h5>
                        </div>
                  </div>

                </button>
              
            </div>
            <div class="tab-content m-2" id="v-pills-tabContent">
            <div class="tab-pane fade show active mx-4 my-2 fs-5" id="v-pills-contrato" role="tabpanel" aria-labelledby="v-pills-contrato-tab">
                <ul class="list-group">
                    <li class="list-group">ID:                   {{ $contrato->id }}        </li>
                    <li class="list-group">CNPJ:                 {{ $contrato->cnpj }}      </li>
                    <li class="list-group">Nome:                 {{ $contrato->name }}      </li>
                    <li class="list-group">Email:                {{ $contrato->email }}     </li>
                    <li class="list-group">Celular:              {{ $contrato->cell }}      </li>
                    <li class="list-group">Telefone:             {{ $contrato->tel }}       </li>
                    <li class="list-group">Endereço:             {{ $contrato->address }}   </li>
                    <li class="list-group">Criação:              {{ Carbon\Carbon::parse($contrato->create_at)->format('d/m/Y H:i') }}</li>
                    <li class="list-group">Última modificação:   {{ Carbon\Carbon::parse($contrato->update_at)->format('d/m/Y H:i') }} </li>
                </ul>
                <!-- Botões de edit e excluir --> 
                <div id="box" class="d-flex w-50 float-end justify-content-end">
                        <!-- boão de editar-->
                        <a class="text-decoration-none" href="{{ URL::to('contrato/' . $contrato->id . '/edit') }}">
                            <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.8423 0.921977C17.3961 -0.394177 15.1486 -0.288647 13.8318 1.15818L2.54694 13.5931L0 21.6201L7.76626 18.3597L19.0778 5.93202C20.3942 4.48589 20.2885 2.23841 18.8423 0.921977V0.921977ZM12.0145 4.70254L12.7003 5.32675L4.4085 14.4366L3.73719 13.8234L12.0145 4.70254ZM13.4665 6.02422L14.267 6.75278L5.97259 15.8656L5.17352 15.1355L13.4665 6.02422ZM1.66548 19.7971L2.34714 17.6487L3.71219 18.9379L1.66548 19.7971ZM4.75692 18.4993L2.69502 16.5521L3.25527 14.7865L6.51246 17.7623L4.75692 18.4993ZM7.42639 17.1937L6.73754 16.5644L15.0332 7.45026L15.7232 8.07826L7.42639 17.1937ZM18.3116 5.23454L16.4207 7.31199L12.7108 3.93524L14.5986 1.8551C15.5304 0.831365 17.1212 0.756569 18.1449 1.68831C19.1685 2.62006 19.2433 4.21095 18.3116 5.23454Z" fill="#060A6F"/>
                                </svg>
                                
                        </a>
                
                        <!-- botão de excluir -->
                        {{ Form::open(array('url' => 'contrato/' . $contrato->id, 'onsubmit' => 'return ConfirmDelete()'))}}     
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::button('<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.3015 2.83579H16.201V2.14326C16.2011 0.961426 15.2396 0 14.0578 0H10.9419C9.76011 0 8.79863 0.961426 8.79863 2.14326V2.83584H4.69824C3.26562 2.83584 2.1001 4.00137 2.1001 5.43398V6.92158C2.1001 7.19121 2.31875 7.40986 2.58838 7.40986H3.97495L5.21313 22.1123C5.27964 22.902 5.6375 23.6321 6.2209 24.1684C6.80425 24.7046 7.56187 25 8.3543 25H16.6455C17.4379 25 18.1955 24.7046 18.7789 24.1684C19.3622 23.6321 19.7201 22.9019 19.7866 22.1123L21.0248 7.40986H22.4113C22.681 7.40986 22.8996 7.19121 22.8996 6.92158V5.43398C22.8996 4.00132 21.7341 2.83579 20.3015 2.83579V2.83579ZM9.7752 2.14326C9.7752 1.49995 10.2986 0.976562 10.9419 0.976562H14.0578C14.7011 0.976562 15.2245 1.49995 15.2245 2.14326V2.83584H9.7752V2.14326ZM21.923 6.43325H14.663C14.3934 6.43325 14.1747 6.6519 14.1747 6.92153C14.1747 7.19116 14.3934 7.40981 14.663 7.40981H20.0447L18.8134 22.0304C18.7193 23.148 17.767 24.0234 16.6455 24.0234H8.3543C7.23271 24.0234 6.28042 23.1479 6.18633 22.0304L4.95503 7.40981H10.3663C10.6359 7.40981 10.8546 7.19116 10.8546 6.92153C10.8546 6.6519 10.6359 6.43325 10.3663 6.43325H3.07666V5.43394C3.07666 4.53975 3.80405 3.81235 4.69824 3.81235H20.3015C21.1957 3.81235 21.9231 4.53975 21.9231 5.43394V6.43325H21.923Z" fill="#060A6F"/>
                            <path d="M9.71444 11.2008C9.52372 11.0102 9.21464 11.0102 9.02386 11.2008C8.83319 11.3915 8.83319 11.7006 9.02386 11.8914L11.8091 14.6766L9.02386 17.4618C8.83319 17.6524 8.83319 17.9616 9.02386 18.1523C9.11923 18.2477 9.24418 18.2954 9.36913 18.2954C9.49408 18.2954 9.61903 18.2477 9.71439 18.1523L12.4996 15.3671L15.2848 18.1523C15.3802 18.2476 15.5052 18.2953 15.6301 18.2953C15.7551 18.2953 15.88 18.2476 15.9754 18.1523C16.1661 17.9616 16.1661 17.6524 15.9754 17.4617L13.1902 14.6765L15.9754 11.8913C16.1661 11.7006 16.1661 11.3915 15.9754 11.2007C15.7847 11.0101 15.4756 11.0101 15.2848 11.2007L12.4996 13.986L9.71444 11.2008Z" fill="#060A6F"/>
                            <path d="M12.098 7.10839C12.2004 7.35395 12.489 7.47421 12.7352 7.37255C12.9813 7.27094 13.1009 6.98046 12.9994 6.7348C12.8978 6.48886 12.6075 6.36894 12.3617 6.47064C12.1151 6.5727 11.9973 6.86249 12.098 7.10839Z" fill="#060A6F"/>
                            </svg>
                            ', ['type' => 'submit', 'class' => 'btn btn-warning btn-sm'] )  }}
                        {{ Form::close() }}
                </div>
            </div>

            <div class="tab-pane fade mx-4 my-2 fs-5" id="v-pills-posto" role="tabpanel" aria-labelledby="v-pills-posto-tab">
                <ul class="list-group">
                    <li class="list-group">ID:                   {{ $contrato->posto->id }}        </li>
                    <li class="list-group">CNPJ:                 {{ $contrato->posto->cnpj }}      </li>
                    <li class="list-group">Nome:                 {{ $contrato->posto->name }}      </li>
                    <li class="list-group">Email:                {{ $contrato->posto->email }}     </li>
                    <li class="list-group">Celular:              {{ $contrato->posto->cell }}      </li>
                    <li class="list-group">Telefone:             {{ $contrato->posto->tel }}       </li>
                    <li class="list-group">Endereço:             {{ $contrato->posto->address }}   </li>
                    <li class="list-group">Criação:              {{ Carbon\Carbon::parse($contrato->posto->create_at)->format('d/m/Y H:i') }} </li>
                    <li class="list-group">Última modificação:   {{ Carbon\Carbon::parse($contrato->posto->update_at)->format('d/m/Y H:i') }} </li>
                </ul>

                <div id="box" class="d-flex justify-content-between">

                    <div id="btn" class="">
                        <a href="{{ URL::to('bomba/') }}" class="btn bg-navy-blue text-magnolia my-2">Bombas</a>
                        <a href="{{ URL::to('turno/') }}" class="btn bg-navy-blue text-magnolia my-2">Turnos</a>
                    </div>

                <!-- Botões para editar e excluir -->
                <div id="box" class="d-flex ">
                    <!-- botão de editar-->
                    <a class="text-decoration-none align-self-center" href="{{ URL::to('contrato/' . $contrato->id . '/edit') }}">
                        <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.8423 0.921977C17.3961 -0.394177 15.1486 -0.288647 13.8318 1.15818L2.54694 13.5931L0 21.6201L7.76626 18.3597L19.0778 5.93202C20.3942 4.48589 20.2885 2.23841 18.8423 0.921977V0.921977ZM12.0145 4.70254L12.7003 5.32675L4.4085 14.4366L3.73719 13.8234L12.0145 4.70254ZM13.4665 6.02422L14.267 6.75278L5.97259 15.8656L5.17352 15.1355L13.4665 6.02422ZM1.66548 19.7971L2.34714 17.6487L3.71219 18.9379L1.66548 19.7971ZM4.75692 18.4993L2.69502 16.5521L3.25527 14.7865L6.51246 17.7623L4.75692 18.4993ZM7.42639 17.1937L6.73754 16.5644L15.0332 7.45026L15.7232 8.07826L7.42639 17.1937ZM18.3116 5.23454L16.4207 7.31199L12.7108 3.93524L14.5986 1.8551C15.5304 0.831365 17.1212 0.756569 18.1449 1.68831C19.1685 2.62006 19.2433 4.21095 18.3116 5.23454Z" fill="#060A6F"/>
                        </svg>
                    </a>
                    <!-- botão de excluir -->
                    {{ Form::open(array('url' => 'contrato/' . $contrato->id, 'onsubmit' => 'return ConfirmDelete()','class' => 'align-self-center' ))}}     
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::button('<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.3015 2.83579H16.201V2.14326C16.2011 0.961426 15.2396 0 14.0578 0H10.9419C9.76011 0 8.79863 0.961426 8.79863 2.14326V2.83584H4.69824C3.26562 2.83584 2.1001 4.00137 2.1001 5.43398V6.92158C2.1001 7.19121 2.31875 7.40986 2.58838 7.40986H3.97495L5.21313 22.1123C5.27964 22.902 5.6375 23.6321 6.2209 24.1684C6.80425 24.7046 7.56187 25 8.3543 25H16.6455C17.4379 25 18.1955 24.7046 18.7789 24.1684C19.3622 23.6321 19.7201 22.9019 19.7866 22.1123L21.0248 7.40986H22.4113C22.681 7.40986 22.8996 7.19121 22.8996 6.92158V5.43398C22.8996 4.00132 21.7341 2.83579 20.3015 2.83579V2.83579ZM9.7752 2.14326C9.7752 1.49995 10.2986 0.976562 10.9419 0.976562H14.0578C14.7011 0.976562 15.2245 1.49995 15.2245 2.14326V2.83584H9.7752V2.14326ZM21.923 6.43325H14.663C14.3934 6.43325 14.1747 6.6519 14.1747 6.92153C14.1747 7.19116 14.3934 7.40981 14.663 7.40981H20.0447L18.8134 22.0304C18.7193 23.148 17.767 24.0234 16.6455 24.0234H8.3543C7.23271 24.0234 6.28042 23.1479 6.18633 22.0304L4.95503 7.40981H10.3663C10.6359 7.40981 10.8546 7.19116 10.8546 6.92153C10.8546 6.6519 10.6359 6.43325 10.3663 6.43325H3.07666V5.43394C3.07666 4.53975 3.80405 3.81235 4.69824 3.81235H20.3015C21.1957 3.81235 21.9231 4.53975 21.9231 5.43394V6.43325H21.923Z" fill="#060A6F"/>
                        <path d="M9.71444 11.2008C9.52372 11.0102 9.21464 11.0102 9.02386 11.2008C8.83319 11.3915 8.83319 11.7006 9.02386 11.8914L11.8091 14.6766L9.02386 17.4618C8.83319 17.6524 8.83319 17.9616 9.02386 18.1523C9.11923 18.2477 9.24418 18.2954 9.36913 18.2954C9.49408 18.2954 9.61903 18.2477 9.71439 18.1523L12.4996 15.3671L15.2848 18.1523C15.3802 18.2476 15.5052 18.2953 15.6301 18.2953C15.7551 18.2953 15.88 18.2476 15.9754 18.1523C16.1661 17.9616 16.1661 17.6524 15.9754 17.4617L13.1902 14.6765L15.9754 11.8913C16.1661 11.7006 16.1661 11.3915 15.9754 11.2007C15.7847 11.0101 15.4756 11.0101 15.2848 11.2007L12.4996 13.986L9.71444 11.2008Z" fill="#060A6F"/>
                        <path d="M12.098 7.10839C12.2004 7.35395 12.489 7.47421 12.7352 7.37255C12.9813 7.27094 13.1009 6.98046 12.9994 6.7348C12.8978 6.48886 12.6075 6.36894 12.3617 6.47064C12.1151 6.5727 11.9973 6.86249 12.098 7.10839Z" fill="#060A6F"/>
                        </svg>
                        ', ['type' => 'submit', 'class' => 'btn btn-warning btn-sm'] )  }}
                    {{ Form::close() }}
                    </div>
                </div>
            </div>

            <div class="tab-pane fade mx-4 my-2 fs-5" id="v-pills-usuarios" role="tabpanel" aria-labelledby="v-pills-usuarios-tab">
                <div class="d-flex align-items-start">
                     <!-- Proprietário -->
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <button class="nav-link active fs-5 text-start" id="v-pills-proprietario-tab" data-bs-toggle="pill" data-bs-target="#v-pills-proprietario" type="button" role="tab" aria-controls="v-pills-proprietario" aria-selected="true">Proprietário</button>
                    <!-- Gerente -->
                      <button class="nav-link fs-5  text-start" id="v-pills-gerente-tab" data-bs-toggle="pill" data-bs-target="#v-pills-gerente" type="button" role="tab" aria-controls="v-pills-gerente" aria-selected="false">Gerente</button>
                    </div>

                    <!-- Proprietário -->
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-proprietario" role="tabpanel" aria-labelledby="v-pills-proprietario-tab">
                        <ul class="list-group">
                            <li class="list-group">ID:                   {{ $contrato->proprietario->id }}        </li>
                            <li class="list-group">Nome:                 {{ $contrato->proprietario->name }}      </li>
                            <li class="list-group">Email:                {{ $contrato->proprietario->email }}     </li>
                            <li class="list-group">Celular:              {{ $contrato->proprietario->cell }}      </li>
                            <li class="list-group">Telefone:             {{ $contrato->proprietario->tel }}       </li>
                            <li class="list-group">Criação:              {{ Carbon\Carbon::parse($contrato->proprietario->create_at)->format('d/m/Y H:i') }} </li>
                            <li class="list-group">Última modificação:   {{ Carbon\Carbon::parse($contrato->proprietario->update_at)->format('d/m/Y H:i') }} </li>
                        </ul>
                      </div>
                    <!-- Gerente -->
                      <div class="tab-pane fade" id="v-pills-gerente" role="tabpanel" aria-labelledby="v-pills-gerente-tab">
                        <ul class="list-group">
                            <li class="list-group">ID:                   {{ $contrato->posto->gerente->id }}        </li>
                            <li class="list-group">Nome:                 {{ $contrato->posto->gerente->name }}      </li>
                            <li class="list-group">Email:                {{ $contrato->posto->gerente->email }}     </li>
                            <li class="list-group">Celular:              {{ $contrato->posto->gerente->cell }}      </li>
                            <li class="list-group">Telefone:             {{ $contrato->posto->gerente->tel }}       </li>
                            <li class="list-group">Criação:              {{ Carbon\Carbon::parse($contrato->posto->gerente->create_at)->format('d/m/Y H:i') }} </li>
                            <li class="list-group">Última modificação:   {{ Carbon\Carbon::parse($contrato->posto->gerente->update_at)->format('d/m/Y H:i') }} </li>
                        </ul>
                      </div>
                    </div>
                  </div>
            </div>
            </div>
        </div>
     </div>
@endsection
