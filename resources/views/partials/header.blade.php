<nav class="navbar navbar-expand-lg shadow p-3 navbar-light bg-light shadow-lg">
    <div class="container">
     <a class="navbar-brand" href="/">
         <img class="img-fluid" src="{{ asset('images/logo_amassur.png') }}" >
       </a>
     <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
         aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="collapsibleNavId">
         <ul class="navbar-nav mr-auto mt-2 mt-lg-0 mx-auto">
             <!-- <li class="nav-item active">
                 <a class="nav-link text-uppercase" href="#"> <i class="fa fa-home fa-lg" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
             </li> -->
             
             <li class="nav-item">
             <a class="nav-link text-uppercase" href="{{route('particulier.show',['particulier'=>$particuliers[0]->slug])}}"> <i class="fa fa-users" aria-hidden="true"></i> Partiuliers</a>
             </li>
             <li class="nav-item">
             <a class="nav-link text-uppercase" href="{{route('professionnel.show',['professionnel'=>$professionnels[0]->slug])}}"> <i class="fa fa-briefcase" aria-hidden="true"></i> Professionnels</a>
             </li>
             <li class="nav-item">
             <a class="nav-link text-uppercase" href="{{route('a-propos')}}"> <i class="fa fa-info-circle" aria-hidden="true"></i> A-propos</a>
             </li>

             <!-- <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                 <div class="dropdown-menu" aria-labelledby="dropdownId">
                     <a class="dropdown-item" href="#">Action 1</a>
                     <a class="dropdown-item" href="#">Action 2</a>
                 </div>
             </li> -->
         </ul>
        <a href="#" class="btn btn-outline-danger my-2 my-sm-0"> <i class="fa fa-edit" aria-hidden="true"></i> Comparateur </a>&nbsp;
         <a href="#" class="btn btn-outline-primary text-info-gradiant my-2 my-sm-0"> <i class="fa fa-lock" aria-hidden="true"></i> Connexion </a>
     </div>
    </div>
 </nav>
