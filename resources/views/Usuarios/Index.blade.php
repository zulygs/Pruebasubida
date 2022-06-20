@extends('Inicio')
@section('content')
<br><br><br>
<div class="container w-25 border p-4 mt-4">
<form>
  <div class="mb-3">
    <label for="user" class="form-label">Usuario</label>
    <input type="user" class="form-control" id="User" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <div class="col-md-12">
      <div class="card" >
        <div class="card-header row" >
          &nbsp;&nbsp; <h4 class="card-title" > Usuarios</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive" >
            <div id="areaImprimir">
              <table class="table">
                <thead class=" text-primary" align="center">
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Roll</th>
                  <th> Acción</th>
                </thead>
                <tbody>
                  
                    <tr class="" align="center">
                      <td>w</td>
                      <td nowrap>e</td>
                      <td nowrap>r</td>
                      <td nowrap>dd</td>
                      <td>gg</td>
                    </tr>
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection