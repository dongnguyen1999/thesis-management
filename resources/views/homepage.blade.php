@extends('layouts.web')

@section('title', 'Homepage')

@section('style')
  <link rel="stylesheet" href="/css/homepage.css" />
  
@endsection

@section('content')
  <div class="container">
    <!-- Button trigger modal -->
    {{-- <button
        type="button"
        class="btn btn-primary"
        data-mdb-toggle="modal"
        data-mdb-target="#noti1"
    >
      Launch demo modal 1
    </button> --}}
    @if (isset($error) && isset($message))
      @component('components.notification')
        @slot('id', 'noti1')
        @slot('color', 'danger')
        @slot('textColor', 'white')
        @slot('title')
          {{$error}}
        @endslot
        @slot('content')
          {{$message}}
        @endslot
      @endcomponent
    @endif

   

  </div>
@endsection

@section('script')
  <script src="/js/homepage.js"></script>
  <script>
    $('#noti1').modal('show'); 
  </script>
@endsection
    

    
    

        

    
      

    
    
    