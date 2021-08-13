<footer class="page-footer font-small unique-color-dark">

    <div class="bg-ct">
    <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0">Restez en contact avec nous sur les réseaux sociaux!</h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-6 col-lg-7 text-center text-md-right">

        <!-- Facebook -->
        <a class="fb-ic">
          <i class="fa fa-facebook-f white-text mr-4"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fa fa-twitter white-text mr-4"> </i>
        </a>
       
        <!--Linkedin -->
        <a class="li-ic">
          <i class="fa fa-linkedin white-text mr-4"> </i>
        </a>
       
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

    </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
     <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">AMASSUR</h6>
      <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>Avec AMASSUR, comparez facilement les offres pour trouver le produit qui vous correspond et sans mauvaise surprise : les prix affichés incluent tous les frais..</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Particuliers</h6>
      <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      @foreach ($particuliers as $particulier)
      <p>
      <a href="{{route('particulier.show',['particulier'=>$particulier->slug])}}">{{$particulier->titre}}</a>
      </p>
      @endforeach
      
    
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">professionnels</h6>
      <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      @foreach ($professionnels as $professionnel)
      <p>
      <a href="{{route('professionnel.show',['professionnel'=>$professionnel->slug])}}">{{$professionnel->titre}}</a>
      </p>
      @endforeach
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div id="contact" class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Contact</h6>
      <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <i class="fa fa-home mr-3"></i>Immeuble SM - Ouagadougou</p>
      <p>
        <i class="fa fa-envelope mr-3"></i> contact@amassure.com</p>
      <p>
        <i class="fa fa-phone mr-3"></i> +226 25 00 00 00</p>
      <p>
        <i class="fa fa-phone mr-3"></i> +226 25 00 00 00</p>

    </div>
    <!-- Grid column -->

    </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="row justify-content-around bg-my">
      <div class="footer-copyright text-center py-3">© 2020 Copyright <a href="https://switch-maker.com/"> Switch Maker</a> | Tous droits réservés    </div>
      <div style="padding: 15px;" class="">
        <a href="#">mention légale</a> | <a href="#">condition d'utilisation</a>
      </div>
    </div>
    
    <!-- Copyright -->

</footer>
