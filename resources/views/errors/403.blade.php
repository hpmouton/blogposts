@extends('layout.app')
@section('content')
<div class="container-fluid">


<div
  class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
  style=
  "background-image: url('{{ asset('assets/images/pexels-miguel-á-padriñán-2882552.jpg') }}');
  margin-top:12.5%"

>
<div class="justify-content-center align-items-center h-100"

>

    <h1 class="mb-3 h2">403 ERROR</h1>
    <br>
  <h1 class="mb-3 h2">Access to this page is restricted</h1>
<br>

  <p>
    Sorry you are not allowed to perform this action.
  </p>

</div>

</div>
</div>

@endsection
