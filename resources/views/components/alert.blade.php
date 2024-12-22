@props(['type'])
<div class="alert alert-{{$type}}" role="alert">
   <strong>{{$slot}}</strong> 
</div>