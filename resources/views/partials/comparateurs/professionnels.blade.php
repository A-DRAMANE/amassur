
    
  


        @if ($professionnels->count()>0)
       
            @foreach ($professionnels as $professionnel)
                <div class="col-md-3">
                    <a href="{{route('comparateurs.show',['comparateur'=>$professionnel->slug])}}">
                       <div class="shadow p-4 mb-5 bg-white {{$professionnel->slug==$actif ? 'actif' : '' }} rounded-lg text-center" >
                           <i class="fa fa-{{$professionnel->icone}} fa-2x"></i>
                           {{$professionnel->titre}}
                       </div>
                    </a>
                </div>
           @endforeach
        @else
            <p>Assurances pour professionnels indisponibles.  Veuillez-vous révisiter cette page plutard</p>
        @endif

    
     
        



