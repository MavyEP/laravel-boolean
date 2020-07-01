@extends('layouts.app')

@section('page-title' , 'Homepage')

@section('content')
   @include('partials.menu')

   <div class="container">
     <section class="homepage_object object_1">
       <div class="object_square left">
         <h2>DIVENTA</h2>
         <h2>SVILUPPATORE WEB</h2>
         <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
         <ul>
           <li>6 mesi di corso intensivo online in diretta</li>
           <li>Nessuna competenza di programmazione richiesta</li>
           <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
         </ul>
       </div>
       <div class="object_square right flex">
         <img id="pc_gif" src="{{ asset('images/pc-black-gif.gif') }}" alt="pc_gif">
       </div>
     </section>

   </div>

   @include('partials.footer')
@endsection
