@extends('layouts.app',[$titrePage =>'Liste des articles'] )
@section('content')
<!-- <section class="pt-5 pb-5 bg-zoom">
    <div class="container pt-3">
      <div class="row">
      <div class="col-md-12"><span class="text-info-gradiant display-5"><i class="fa fa-umbrella" aria-hidden="true"></i> {{$particulier->titre}}</span>
          <br>
        </div>
          
        </div>
        <br>
        <div class="row">
          @include('partials.particuliers')
        </div>
        <div class="card-group">

          <div class="row">
            <div class="show-carte-corps">
              
              <div class="show-carte-resume">{{$particulier->resume}}</div>
            </div>
          
          </div>
          @if (isset($particulier))
          <div class="show-carte d-flex flex-column m-2" style="width: 100%;">
           <div class="show-carte-tete">
             <a href="{{ route('particulier.show',['particulier'=>$particulier->slug]) }}"> <img src="{{ asset('storage').'/'.$particulier->image }}" alt="" class="show-carte-image"></a>
            
           </div>
           <div class="show-carte-corps d-flex flex-column justify-content-between">
           
           <a href="{{ route('particulier.show',['particulier'=>$particulier->slug]) }}"><b><div class="show-carte-titre text-muted">{{$particulier->titre}}</div></b></a>
           <div class="show-carte-auteur text-muted"><small> </small><small style="color:#ff4d7e!important;">Dernière mise à jours le {{$particulier->updated_at->format('d/m/y')}}</small></div>
           
           <div class="show-carte-resume text-muted mb-4" ><br>{!!$particulier->description!!} </div>
           <div class="sharethis-inline-share-buttons"></div>
           </div>
           
         </div>
         
          @else
          <p>L'particulier recherché n'a pas été trouvé</p>
          @endif
        </div>
    </div>
</section> -->
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
<section>
  <div style="background-image: url('{{Voyager::image($particulier->image)}}')" class="row cat-page">
    <h1>Assurance {{$particulier->titre}}</h1>
  </div>

</section>

<section>
  <div class="container space cont1">
    <div class="row justify-content-center align-items-center">
      <h4>Pourquoi choisir notre {{$particulier->titre}} AMASSUR ?</h2>
    </div>

    <div class="row justify-content-center align-items-center">
      <hr class="col-12">
    </div>

    <div class="row justify-content-center align-items-center space">
      <p class="text-center col-6">
      {{$particulier->resume}}
        <!-- Dernier modèle ou vieille guimbarde, votre voiture est souvent comme votre 
        seconde maison. Elle vous accompagne sur tous les trajets du quotidien : 
        vos enfants à l'école, votre travail, vos sorties, vos évasions du weekend... 
        Pensez à la protéger ainsi que ses occupants avec une bonne assurance auto -->
      </p>
    </div>

    <div class="row">
      <div class="col-lg-4 text-center">
        <span style="width: 50px;height: 50px;color: #3737a7;" class="iconify" data-icon="{{$particulier->icon1}}"></span>
        <h6>{{$particulier->titre_icon1}}</h6>
        <p>{{$particulier->text_icon1}}</p>
      </div>
      <div class="col-lg-4 text-center">
        <span style="width: 50px;height: 50px;color: #3737a7;" class="iconify" data-icon="{{$particulier->icon2}}"></span>
        <h6>{{$particulier->titre_icon2}}</h6>
        <p>{{$particulier->text_icon2}}</p>
      </div>
      <div class="col-lg-4 text-center">
        <span style="width: 50px;height: 50px;color: #3737a7;" class="iconify" data-icon="{{$particulier->icon3}}"></span>
        <h6>{{$particulier->titre_icon3}}</h6>
        <p>{{$particulier->text_icon3}}</p>
      </div>
    </div>

    <div class="space">
      <div class="row justify-content-center align-items-center text-center">
        <h4>{{$particulier->titre_sect2}}</h2>
      </div>
      <div class="row justify-content-center align-items-center">
        <hr class="col-12">
      </div>      
    </div>

    <div class="row justify-content-center align-items-center font2">
      <div class="col-lg-4 m-1">
        <h6 class='pb-3'>{{$particulier->sect2_t1}}</h6>
        <p>
        {{$particulier->sect2_cont1}}
        </p>
      </div>
      <div class="col-lg-4">
        <h6 class='pb-3'>{{$particulier->sect2_t2}}</h6>
        <p>
        {{$particulier->sect2_cont2}}
        </p>
      </div>
      <div class="col-lg-4">
        <h6 class='pb-3'>{{$particulier->sect2_t3}}</h6>
        <p>
        {{$particulier->sect2_cont3}}
        </p>
      </div>
      <div class="col-lg-4">
        <h6 class='pb-3'>{{$particulier->sect2_t4}}</h6>
        <p>
        {{$particulier->sect2_cont4}}
        </p>
      </div>
    </div>

    <div class="space">
      <div class="row justify-content-center align-items-center text-center">
        <h4>{{$particulier->titre_sect3}}</h2>
      </div>
      <div class="row justify-content-center align-items-center">
        <hr class="col-12">
      </div>      
    </div>

    <div class="row justify-content-center align-items-center">
      <p class="text-center col-6">
      {{$particulier->sect3_cont}}
        <!-- Dernier modèle ou vieille guimbarde, votre voiture est souvent comme votre 
        seconde maison. Elle vous accompagne sur tous les trajets du quotidien : 
        vos enfants à l'école, votre travail, vos sorties, vos évasions du weekend... 
        Pensez à la protéger ainsi que ses occupants avec une bonne assurance auto -->
      </p>
    </div>

    <div class="row justify-content-center align-items-center text-center cont2">

      <div class="col-lg-3 p-4">
        <div class="row justify-content-center">
          <h5>Formule <br> Tiers </h5>
          <div class="containt1">
            <div class="cont2-1">
              <p>
              Avec notre formule Tiers, bénéficiez des garanties essentielles pour couvrir votre voiture et vous protéger au volant. 
              </p>
              <div class="my-div">
                  En un coup d'œil
                  <span style="width: 20px;height: 20px;" class="iconify" data-icon="akar-icons:plus"></span>
              </div>
            </div>            
          </div>
        </div>
      </div>

      <div class="col-lg-3 p-4">
        <div class="row justify-content-center">
          <h5>Formule <br> Tiers Étendu </h5>
          <div class="containt1">
            <div class="cont2-1">
              <p>
              Retrouvez dans notre formule Tiers Etendu, toutes les 
              garanties de base et des garanties supplémentaires pour renforcer votre couverture.
              </p>
              <div class="my-div">
                  En un coup d'œil
                  <span style="width: 20px;height: 20px;" class="iconify" data-icon="akar-icons:plus"></span>
              </div>
            </div>            
          </div>
        </div>
      </div>

      <div class="col-lg-3 p-4">
        <div class="row justify-content-center">
          <h5>Formule <br> Tous Risques</h5>
          <div class="containt1">
            <div class="cont2-1">
              <p>
              Grâce à notre formule Tous Risques, roulez en toute sérénité en 
              bénéficiant de la meilleure couverture possible contre les risques de la route.
              </p>
              <div class="my-div">
                  En un coup d'œil
                  <span style="width: 20px;height: 20px;" class="iconify" data-icon="akar-icons:plus"></span>
              </div>
            </div>            
          </div>
        </div>
      </div>
      
    </div>

    <div class="space">
      <div class="row justify-content-center align-items-center text-center">
      <button type="button" class="btn btn-primary btn-lg my-tag-btn d-flex justify-content-between align-items-center">
        Obtenir un tarif 
        <span style="width: 20px;height: 20px;" class="iconify" data-icon="akar-icons:arrow-right"></span>
      </button>
      </div>      
    </div>


  </div>
</section>

@endsection
