@props(['color'=>"yellow"])
<div class="bg-{{$color}}-100 border border-{{$color}}-400 text-{{$color}}-700 px-4 py-3 rounded relative my-5" role="alert">
  {{$slot}}
</div>