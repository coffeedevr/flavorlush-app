@php

@endphp


@extends('pages.main', [
    'pageTitle' => 'Dashboard'
])

@section('css-links')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@endsection

@section('css-code')
<style>

    @media (max-width: 768px) {
        .hide {
        display:none!important;
        }
    }

    
</style>
@endsection

@section('content')

<div class="content-container">
    <div class="page-title d-flex flex-row justify-content-between">
        <h2 class="fs-3">Discover Recipes</h2>
        <a class="btn btn-primary"
            type="button"
            href="/submit-recipe"
        >Submit a Recipe</a>
    </div>
</div>

@endsection

@section('js-links')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
@endsection

@section('js-code')
<script>
    const dataOwners = [
      {
        "firstname": "Dan",
        "middlename": "Rutherford",
        "lastname": "Flores",
        "address": "123 bry. jakh akjhsdkjasd, asjdha"
      },
      {
        "firstname": "Maria",
        "middlename": "Ozawa",
        "lastname": "Flores",
        "address": "123 bry. jakh akjhsdkjasd, asjdha"
      },
      {
        "firstname": "John",
        "middlename": "Papa",
        "lastname": "Rayno",
        "address": "123 bry. jakh akjhsdkjasd, asjdha"
      }
    ]


    $(document).ready(function () {
      var dtblMainList = $('#dtblOwners').DataTable({
        data: dataOwners,
        columns: [
          { data: 'firstname'},
          { data: 'middlename', className: 'hide'},
          { data: 'lastname'},
          { data: 'address', className: 'hide'}
                // Add other columns here
        ],
        lengthMenu: [5, 10], // Specify the available page lengths
        pageLength: 5, // Default page length
        pagingType: 'full_numbers',
      });


      //function to get names from datatable and throw to form
      dtblMainList.on('click', 'tbody tr', function(e) {
        let data = dtblMainList.row(this).data();

        console.log(data)

        document.getElementById('name').textContent = 'Full Name: '+  data.firstname + ' ' + data.middlename + ' ' + data.lastname;
        document.getElementById('add').textContent = data.address;

        const myModal = new bootstrap.Modal('#exampleModal');
        myModal.show();
      });
    });

</script>

@endsection