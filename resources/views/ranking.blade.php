@extends('layouts.master')
@section('content')
<table id="rankingTable" class="table">
    <thead class="thead-dark">
        <tr>

        </tr>
    </thead>
    <tbody>

    </tbody>
</table>
<a href="/" class="btn btn-primary">Volver</a>
<script>
    Array.prototype.groupBy = function(prop) {
  return this.reduce(function(groups, item) {
    const val = item[prop]
    groups[val] = groups[val] || []
    groups[val].push(item)
    return groups
  }, {})
}

var countries = {!!json_encode($countries)!!};
var ranking = JSON.parse(localStorage.getItem('ranking'));

countries.forEach(element => {
element.count = ranking.filter( x => x.CountryId == element.Alpha3Code).length;
});


$("#rankingTable").DataTable({
    data: countries,
    columns:[
        { title: "#", data: "count", orderable:true },
        { title: "Nombre", data: "Name", orderable:false},
        { title: "Descripción", data: "Description", orderable:false },

    ],
    order: [ 0, "desc" ],
});

</script>
@endsection
