<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/api/tesztek">tesztek</a>
      </li>
    </ul>
</div>
<div>
<form >
<select class="form-select form-select-lg">
    @foreach($tes as $te)
        <option>{{$te->kategorianev}}</option>
    @endforeach
    </select>
   @foreach($tes as $tes)
    <p>{{$tes->kerdes}}</p>
    <div class="btn-group btn-group-lg row">
        <div class="col-lg-6 row">
        <button type="button" id="{{$tes->id}}v1" class="btn btn-primary col-5" value=1>{{$tes->v1}}</button>
        <button type="button" id="{{$tes->id}}v2" class="btn btn-primary col-5" value=2>{{$tes->v2}}</button>
        </div>
        <div class="col-lg-6 row">
        <button type="button" id="{{$tes->id}}v3" class="btn btn-primary col-5" value=3>{{$tes->v3}}</button>
        <button type="button" id="{{$tes->id}}v4" class="btn btn-primary col-5" value=4>{{$tes->v4}}</button>
        </div>
    </div>
     @endforeach
   </select>
</form>
</div> 