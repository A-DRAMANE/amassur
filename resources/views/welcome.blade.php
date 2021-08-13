@extends('layouts.app')
@section('content')

<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

<div id="mairatra" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="{{ asset('images/a5.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/a6.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/a3.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>

    <div class="container block-cartes">
        <div class="row">
            <div class="col-lg-6 md-md-12 col-sm-12 offset-lg-6  offset-md-0  offset-sm-0">
 
             <h2 class="display-4  font-weight-bold">Bonjour,</h2>
             <p class="lead font-weight-bold">que pouvons-nous faire pour vous </p>
             <hr class="my-2">
             <p>Nos produits et services</p>
             
             <div class="row pt-5">
                @foreach ($particuliers as $particulier)
                <div  class="col-md-3">
                  <a href="{{route('particulier.show',['particulier'=>$particulier->slug])}}">
                     <div style="font-size: 13px;" class="shadow p-3 mb-5 rounded-lg text-center my-icons" >
                         <!-- <i class="fa fa- fa-3x"></i> -->
                         <span style="width: 40px;height: 56px;" class="iconify" data-icon="{{$particulier->icone}}"></span><br>
                         <span>{{$particulier->titre}}</span>
                        
                     </div>
                  </a>
                </div>
                @endforeach
             <!-- <div class="row ">
               @foreach ($particuliers as $particulier)
               <div class="col-md-3 ">
                <a href="{{route('particulier.show',['particulier'=>$particulier->slug])}}">
                       <div class="shadow p-3 mb-5 bg-white rounded-lg text-center" >
                           <i class="fa fa-{{$particulier->icone}} fa-3x"></i> <br>
                           Tarifs {{$particulier->titre}}
                       </div>
                    </a>
                </div>
               @endforeach
                
                 
                
             </div> -->
             
          
            </div>
        </div>
     </div>
  </div>
  


  <div style="margin-bottom: 77px;" class="header my-head">
    <div class="container">
        <div class="header__dtop">
          
            <div class="col-md-12 pb-5">
                <span class="text-info-gradiant display-5">En assurance, on peut toujours compter sur Amassur </span><span class="text-info-gradiant"> <br>   
                Il est toujours plus facile de faire son choix quand on peut comparer plusieurs offres d'assurances
              </span>
            </div>
            
           

            <div class="service-11">
              <div class="pb-5">
                  <!-- Row  -->
                  <div class="row my-items-container">
                      <!-- Column -->
                
                      <div class="my-items col-lg-4 col-md-4 col-sm-12">
                        <!-- <span class="iconify" data-icon="fontisto:wallet"></span> -->
                        <img src="https://img.icons8.com/bubbles/100/000000/wallet-app.png"/>
                        <h3>Faites des économies</h3>
                        <p>
                          Vous avez sans doute plein d'idées pour utiliser autrement votre argent.
                        </p>
                      </div>
                      <div class="my-items col-lg-4 col-md-4 col-sm-12">
                        <!-- <span class="iconify" data-icon="flat-color-icons:binoculars"></span> -->
                        <!-- <img src="https://img.icons8.com/bubbles/100/000000/telescope.png"/> -->
                        <img src="https://img.icons8.com/office/80/000000/money--v1.png"/>
                        <h3>Ne payez rien en plus</h3>
                        <p>0 commission, 0 frais caché, ne payez rien en plus.</p>
                      </div>
                      <div class="my-items col-lg-4 col-md-4 col-sm-12">
                        <!-- <span class="iconify" data-icon="flat-color-icons:questions"></span> -->
                        <img src="https://img.icons8.com/bubbles/100/000000/line-me.png"/>
                        <h3>Posez toutes vos questions</h3>
                        <p>Il n'y a pas de question bête, nous sommes là pour ça.</p>
                      </div>
                      
                      
                  </div>
              </div>
          </div>
           
        </div>
        <!-- <p class="header__blurb">Nous nous attachons à vous fournir des services d'assurance de la plus haute qualité, nous devrions toujours avoir une longueur d'avance sur le marché. Le seul qui peut offrir quelque chose de vraiment précieux, gagner le respect et l'appréciation des clients</p> -->


       
        <div class="header__tiles my-header-titles">

        <!-- <div class="container">
            <div class="row">
                <div class="col-md-12 pb-5">
                    <span class="text-info-gradiant display-5">Les bénéfices</span>
                </div>
            </div>
            
            
             <div class="row">
                <div class="col-md-12 pb-5">
                    <div class="card-columns ">

                          <div class="card ">
                            <div class="row"> 
                              <div class="col-4">                                            
                                <img src="https://img.icons8.com/bubbles/150/000000/lady-with-a-security-shield.png"/>
                              </div>
                              <div class="col-8">
                                <h6 class="card-title">ACCESSIBILITÉ</h6>
                                <p class="card-text">Partout où vous voulez, quand vous voulez,<br> comme vous voulez!  </p>
                              </div>    
                            </div>
                          </div>

                        <div class="card">
                          <div class="row"> 
                              <div class="col-4">                                            
                                <img src="https://img.icons8.com/bubbles/150/000000/car.png"/>
                              </div>
                              <div class="col-8">
                                  <h6 class="card-title">SIMPLICITÉ</h6>
                                  <p class="card-text">Assurez-vous en 4 min ! Le parcours est pensé pour vous faciliter la vie</p>
                              </div>    
                          </div>
                        </div>

                        <div class="card">
                          <div class="row"> 
                            <div class="col-4">                                            
                              <img src="https://img.icons8.com/bubbles/150/000000/online-support.png"/>
                            </div>
                            <div class="col-8">
                              <h6 class="card-title">JOIGNABILITÉ</h6>
                              <p class="card-text">Le service clients est a <br> votre écoute 24h/24 7j/7 <br> et présent sur les réseaux sociaux</p>
                            </div>    
                          </div>
                        </div>

                      </div>                       
                    </div>
                    <br>
                </div>
            </div> -->


            <!-- <a class="header__tile col-4" href="{{route('a-propos')}}#avt">
                  <span>
                  <div class="card ">
                            <div class="row"> 
                              <div class="col-4">                                            
                                <img src="https://img.icons8.com/bubbles/150/000000/lady-with-a-security-shield.png"/>
                              </div>
                              <div class="col-8">
                                <h6 class="card-title">ACCESSIBILITÉ</h6>
                                <p class="card-text">Partout où vous voulez,<br> quand vous voulez,<br> comme vous voulez!  </p>
                              </div>    
                            </div>
                          </div>
                  </span>
              </a>
              <a class="header__tile col-4" href="{{route('a-propos')}}#ccm">
                  <span>
                  <div class="card">
                          <div class="row"> 
                              <div class="col-4">                                            
                                <img src="https://img.icons8.com/bubbles/150/000000/car.png"/>
                              </div>
                              <div class="col-8">
                                  <h6 class="card-title">SIMPLICITÉ</h6>
                                  <p class="card-text">Assurez-vous en 4 min ! <br> Le parcours est pensé pour <br> vous faciliter la vie</p>
                              </div>    
                          </div>
                        </div>
                  </span>
              </a>
              <a class="header__tile col-4" href="#contact">
                <span>
                <div class="card">
                          <div class="row"> 
                            <div class="col-4">                                            
                              <img src="https://img.icons8.com/bubbles/150/000000/online-support.png"/>
                            </div>
                            <div class="col-8">
                              <h6 class="card-title">JOIGNABILITÉ</h6>
                              <p class="card-text">Le service clients est a <br> votre écoute 24h/24 7j/7 <br> et présent sur les réseaux <br> sociaux</p>
                            </div>    
                          </div>
                        </div>
                </span>
            </a> -->
            <!-- <a class="header__tile col-3" href="{{route('a-propos')}}#qsn">
              
                <span>
                    <div class="card ">
                            <div class="row"> 
                              <div class="col-4">                                            
                                <img src="https://img.icons8.com/bubbles/150/000000/lady-with-a-security-shield.png"/>
                              </div>
                              <div class="col-8">
                                <h6 class="card-title">ACCESSIBILITÉ</h6>
                                <p class="card-text">Partout où vous voulez, quand vous voulez,<br> comme vous voulez!  </p>
                              </div>    
                            </div>
                          </div>
                </span>
            </a> -->


              <!-- <a class="header__tile" href="{{route('a-propos')}}#avt">
                  <span>
                      <img src="https://img.icons8.com/bubbles/80/000000/man-with-like.png"/> Les avantages 
                  </span>
              </a>
              <a class="header__tile" href="{{route('a-propos')}}#ccm">
                  <span>
                      <img src="https://img.icons8.com/bubbles/80/000000/laptop-cash-money.png"/>  Comment ça marche
                  </span>
              </a>
              <a class="header__tile" href="#contact">
                <span>
                    <img src="https://img.icons8.com/bubbles/80/000000/call-female.png"/>  Contacter agent
                </span>
            </a>
              <a class="header__tile" href="{{route('a-propos')}}#qsn">
                
                  <span>
                      <img src="https://img.icons8.com/bubbles/80/000000/crowd.png"/> Qui Nous Sommes
                  </span>
              </a> -->
        </div>
    </div>
</div>

<div style="padding: 8px 0 0px;" class="section">
  <div class="py-2 service-27">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-cm-12 align-self-center">  
          <h1 class="pb-4">Amassur <small>néo-courtier</small> </h1>
          <!-- <h4 class="my-3">Une application mobile pour vous faciliter la vie</h4> -->
          <p class="mt-3">
            Assurez-vous en ligne depuis l’application mobile entière pensez pour vous, 
            Il n’est plus nécessaire de se déplacer dans une agence pour gérer votre contrat 
            de protection. Nous vous procurons du confort et un gain de temps non négligeable ! 
          </p>
          <div class="row">
            <div class="col-md-6 mt-4">
              <h6 class="font-weight-medium my-3"> <i class="fa fa-heartbeat fa-lg" aria-hidden="true"></i> Souscription facile et immédiate</h6>
              <p>
                Vous êtes assuré en temps réel. <br>
                <ul>
                  <li><strong>Photographiez</strong> votre carte grise, puis enregistrez-le sur votre application. <strong>Voilà, vous êtes assuré !</strong></li>
                  <li>Aucun document à envoyer</li>
                  <li>Paiement en direct</li>
                </ul>
              </p>
            </div>
            <div class="col-md-6 mt-4">
              <h6 class="font-weight-medium my-3"> <i class="fa fa-heart fa-lg" aria-hidden="true"></i> Accompagnement humain</h6>
              <p>
                Soyez serein, nous ne sommes jamais loin ! <br>
                En cas de besoin ou de pépin, accédez en permanence au chat communautaire ou échangez avec un conseiller Amassur.
              </p>
            </div>
          </div>
          <div class="pt-4 text-center ">
            <a class="my-btn-playStore btn btn-outline-light btn-lg shadow-lg" href="">
              <img class="playStore col-8 p-0" src="{{ asset('images/jeu-de-google.png') }}" alt="">
              <span class="col-6 p-0 text-center">
                Disponible sur <br><span class="s2">Splay Store</span> 
              </span>
            </a>
          </div>
        </div>       
        <div class="col-lg-6 col-md-6 col-cm-12">
          <div class="owl-carousel owl-theme app-carousel">
            <div class="item">
              <img src="{{ asset('images/phone_incline.png') }}" class="img-fluid" alt="amassur" />
            </div>
            <div class="item">
              <img src="{{ asset('images/phone_incline2.png') }}" class="img-fluid" alt="amassur" />
            </div>
            <div class="item">
              <img src="{{ asset('images/phone_incline3.png') }}" class="img-fluid" alt="amassur" />
            </div>
            <div class="item">
              <img src="{{ asset('images/phone_incline4.png') }}" class="img-fluid" alt="amassur" />
          </div>
        </div>
      </div>  
    </div>
  </div>

  <div class="header__tiles my-header-titles">
  <a class="header__tile col-lg-4 col-md-4 col-sm-12" href="{{route('a-propos')}}#avt">
                  <span>
                  <div class="card ">
                            <div class="row"> 
                              <div class="col-4">                                            
                                <img src="https://img.icons8.com/bubbles/150/000000/lady-with-a-security-shield.png"/>
                              </div>
                              <div class="col-8">
                                <h6 class="card-title">ACCESSIBILITÉ</h6>
                                <p class="card-text">Partout où vous voulez,<br> quand vous voulez,<br> comme vous voulez!  </p>
                              </div>    
                            </div>
                          </div>
                  </span>
              </a>
              <a class="header__tile col-lg-4 col-md-4 col-sm-12" href="{{route('a-propos')}}#ccm">
                  <span>
                  <div class="card">
                          <div class="row"> 
                              <div class="col-4">                                            
                                <img src="https://img.icons8.com/bubbles/150/000000/car.png"/>
                              </div>
                              <div class="col-8">
                                  <h6 class="card-title">SIMPLICITÉ</h6>
                                  <p class="card-text">Assurez-vous en 4 min ! <br> Le parcours est pensé pour <br> vous faciliter la vie</p>
                              </div>    
                          </div>
                        </div>
                  </span>
              </a>
              <a class="header__tile col-lg-4 col-md-4 col-sm-12" href="#contact">
                <span>
                <div class="card">
                          <div class="row"> 
                            <div class="col-4">                                            
                              <img src="https://img.icons8.com/bubbles/150/000000/online-support.png"/>
                            </div>
                            <div class="col-8">
                              <h6 class="card-title">JOIGNABILITÉ</h6>
                              <p class="card-text">Le service clients est a <br> votre écoute 24h/24 7j/7 <br> et présent sur les réseaux <br> sociaux</p>
                            </div>    
                          </div>
                        </div>
                </span>
            </a>
  </div>
</div>



<section class="bg-light pt-3">
    <div class="py-5 service15">
        <div class="container">
            <!-- Row  -->
            <div class="row">
                <div style="padding-top: 37px;" class="col-md-12 pb-5">
                    <span class="text-info-gradiant display-5">Comment ça marche </span>
                </div>
            </div>
            
            
             <div class="row">
                <div class="col-md-12 pb-5">
                    <div class="card-columns my-cards">
                        <div class="card ">
                            <div class="row"> 
                                  <!-- <div class="txt col-12">1</div> -->
                                <div class="col-12 icon2">                                            
                                  <!-- <span class="iconify" data-icon="bi:cloud-download-fill"></span> -->
                                  <img src="https://img.icons8.com/bubbles/100/000000/download.png"/>
                                </div>
                                <div class="col-12">
                                    <h6 class="card-title">Télécharger l'application mobile</h6>
                                    <p class="card-text">
                                      L'attente interminable au téléphone ? Le jargon d'assureur ? C'est terminé. Télécharger,
                                      Découvrez et Assurez-vous ! Ou vous voulez zt quand vous voulez  </p>
                                </div>    
                            </div>
                        </div>
                        <div class="card">
                            <div class="row"> 
                                  <!-- <div class="txt col-12">2</div> -->
                                <div class="col-12 icon2">                                            
                                  <!-- <span class="iconify" data-icon="clarity:align-middle-line"></span> -->
                                  <img src="https://img.icons8.com/bubbles/100/000000/line-chart.png"/>
                                </div>
                                <div class="col-12">
                                    <h6 class="card-title">Obtenez une simulation d'assurance selon vos besoins</h6>
                                    <p class="card-text">
                                      Adieu paperasse, bonjour à l'assurance mobile sur-mesure! Du bout du doit 
                                      définissez l'assurance qui s'adapte vraiment à vous.
                                    </p>
                                </div>    
                            </div>
                        </div>
                        <div class="card">
                            <div class="row"> 
                                  <!-- <div class="txt col-12">3</div> -->
                                <div class="col-12 icon2">                                            
                                <!-- <span class="iconify" data-icon="emojione-monotone:ok-hand"></span> -->
                                <img src="https://img.icons8.com/clouds/100/000000/ok.png"/>
                                </div>
                                <div class="col-12">
                                    <h6 class="card-title">Validez, vous voilà déjà (r)assuré,e!</h6>
                                    <p class="card-text">
                                      Quelle que soir l'heure, quel que soit le jour (même le dimanche!),
                                      dès votre inscription vous bénéficiez immédiatement de toutes les garanties incluse
                                      dans votre contrat.
                                    </p>
                                </div>    
                            </div>
                        </div>
                      </div>
                       
                        
                    </div>
                    <br>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="pt-5 pb-5">
 <div class="container pt-3">
     <div class="row">
         <div class="col">
            <span class="text-info-gradiant display-5"><i class="fa fa-briefcase" aria-hidden="true"></i>  Nos Partenaires</span>
        
         </div>
     </div><br>
     <div class="row">
      <div class="owl-carousel owl-theme partners-carousel">

        @foreach ($partenaires as $partenaire)

        <div class="item">
          <img class="img-fluid" style="width: 135px;height:80px" src="{{ asset('storage').'/'.$partenaire->logo }}" alt="" srcset="{{ asset('storage').'/'.$partenaire->logo }}">
        </div>
            
        @endforeach
        
        
      </div>
      
     </div>
 </div>
</section>


<section class="pt-5 pb-5 bg-zoom">
<div class="container pt-3">
    <div class="row">
      <div class="col-md-12"> <span class="text-info-gradiant display-5"><i class="fa fa-umbrella" aria-hidden="true"></i> Amassur</span>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p class="header__blurb text-muted" style="font-size:17px;"> <br><br> 
              Courtier en assurance, Amassur accompagne ses clients entreprises et particuliers 
              dans la gestion de leurs risques. Partenaire de courtiers de renommée internationale, 
              Amassur se positionne aujourd’hui en leader et acteur majeur du marché burkinabè et 
              met la compétence de ses équipes et de son organisation à votre service. <br><br>
              Analyser, étudier, anticiper, gérer vos risques, et vous conseiller, tels sont les 
              engagements professionnels des collaborateurs de Amassur
            </p>
            <p class="header__blurb text-fine text-muted" style="font-size:16px;">Oubliez tout ce que vous pensez savoir sur les assurances, nous vous guidons !</p>
        </div>
        <div class="col-md-6">

          <!-- <div id="carouselExampleIndicators" class="carousel slide  shadow-lg" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" >
              <div class="carousel-item active">
                <img class="d-block w-100" src="a1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Avantages 1</h5>
                  <p>Tous sur les avantages de Amassur Burkina Faso</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="a4.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Avantages 2</h5>
                  <p>Tous sur les avantages de Amassur Burkina Faso</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="a1.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Avantages 3</h5>
                  <p>Tous sur les avantages de Amassur Burkina Faso</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div> -->

            <img class="img-fluid" src="{{ asset('images/famille-amassur.png') }}" alt="Famille Amassur" srcset="{{ asset('images/famille-amassur.png') }}">
        </div>
    </div>
</div>
</section>


<section>
<div class="testimonial7 py-5 bg-light">
    <div class="container">
      <div class="owl-carousel owl-theme testi-carousel testi7">
        <!-- item -->
        <div class="item">
          <div class="row">
            <div class="col-lg-7 col-md-6">
              <img src="{{ asset('images/be-af-1.png') }}" alt="amassur" class="img-fluid" />
            </div>
            <div class="col-lg-5 col-md-6">
              <h3 class="title">AMASSUR Assure !</h3>
              <p class="mt-5 text-muted" style="font-size:16px;">Bonjour, Je tiens à vous faire part de mon entière satisfaction concernant votre site de comparateur d'assurance. Les questions sont claires.Les réponses sont précsies et très rapides. Votre site m'a été une très grande aide jusqu'à maintenant.Les offres que vous conseillez sont adaptés aux souhaits du clienst. Je recommades vivement votre site aux futures achecteurs de voitures! Always keep it up!! Bonne continuation à toute l'équipe Amassur</p>
              <h6 class="mt-5 mb-0 font-weight-normal">Aline Ouattara</h6>
              <span>NEO DIGIT, Bobo-Djoulaso</span>
            </div>
          </div>
        </div>
        <!-- item -->
        <!-- item -->
        <div class="item">
          <div class="row">
            <div class="col-lg-7 col-md-6">
              <img src="{{ asset('images/be-af-2.png') }}" alt="amassur" class="img-fluid" />
            </div>
            <div class="col-lg-5 col-md-6">
              <h3 class="title">AMASSUR me rassure !</h3>
              <p class="mt-5 text-muted" style="font-size:16px;">Bonjour. Grace a Amassur, j'ai pu faire de tres belles economies sur les assurances de mon habitation mon vehicule et mon camping car.En effet j'ai groupe les 3 contrats chez le meme assureur realisant une grosse economies tout en gardant les memes garanties .Merci a Amassur.
            </p>
              <h6 class="mt-5 mb-0 font-weight-normal">François OUEDRAOGO</h6>
              <span>SOBELNA, Ouagadougou</span>
            </div>
          </div>
        </div>
        <!-- item -->
        
      </div>
    </div>
  </div>
</section>


<section class="banner8 py-5 pt-4"> <br>
    <div class="container">
      <div class="row">
         <!-- column  -->
         <div class="col-lg-6 ml-auto">
          <div class="d-block d-md-flex border-bottom pb-3 text-uppercase">
            <span class="text-info-gradiant display-5"><small> LE Blog</small></span>
            <a class="ml-auto text-danger align-self-center text-decoration-none" href="{{ route('articles.index') }}"> <small>Tout afficher</small> </a>
          </div>

         @foreach ($articles as $article)
        <a href="{{route('articles.show',['article'=>$article->slug,'categorie'=>$article->categorie->slug])}}">
          <div class="carte-home row blog-row mt-4 mb-3">
            <div class="col-md-3">
              <a style="padding: unset!important" href="{{ route('articles.show',['article'=>$article->slug,'categorie'=>$article->categorie->slug]) }}"><img style="width: 140px;height:95px" src="{{ asset('storage').'/'.$article->image }}" alt="amassur" class="img-fluid" /></a>
            </div>
            <div class="col-md-9">
              <a style="font-size: 1.5em" href="{{ route('articles.show',['article'=>$article->slug,'categorie'=>$article->categorie->slug]) }}" class="text-decoration-none text-muted">{{ $article->titre }}</a>
              <p class="d-block text-truncate text-muted"><br>par <a href="{{ route('articles.show',['article'=>$article->slug,'categorie'=>$article->categorie->slug]) }}" class="text-decoration-none">{{ $article->auteur}} </a> <span class="float-right" style="color: #ff4d7e">Publlié le: {{ $article->updated_at->format('d/m/y') }}</span> </p>
            </div>
          </div>
        </a>
         @endforeach
        </div>
        <!-- column  -->
        <div class="col-lg-1">

        </div>
        <div class="col-lg-5">
            <span class="text-info-gradiant display-5"><small>la newsletter</small></span>
          <h4 class="my-3">Restez informé des nouvelles et à venir</h4>
          <h6 class="subtitle mt-5 font-weight-normal">En plus de l'actualité du blog, nous vous notifierons sur les nouvelles offres d'assurances et nos partenariats.</h6>
          <form class="mt-4">
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Votre Nom" />
            </div>
            <div class="form-group">
              <input class="form-control" type="email" placeholder="Adresse Email" />
            </div>
            <div class="form-group">
              <button class="btn btn-danger-gradiant btn-block btn-md text-uppercase text-white border-0">Inscription </button>
            </div>
            <div class="form-group">
              <div class="my-1">
                <div class="custom-control custom-checkbox mr-sm-2">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                  <label class="custom-control-label" for="customControlAutosizing1">j'ai lu et j'accepte les  <a href="#" class="text-decoration-none">termes et conditions</a></label>
                </div>
              </div>
            </div>
          </form>
        </div>
       
        <!-- column  -->
      </div>
    </div>
  </div>
  
</section>
    
@endsection


