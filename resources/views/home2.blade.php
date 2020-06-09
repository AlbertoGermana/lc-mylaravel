@extends('mainLayout')
@section('content')
  <main>
    <h1>Questo è per home2</h1>

      @for ($i = 0; $i < $max; $i++)
        <div class="square">{{ $i }}</div>
      @endfor

  </main>
@endsection
