@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">

<thead>

  <th>Name</th>

  <th>Orders</th>

  <th>Balance</th>

</thead>

<tbody>
@foreach($users as $user)



    <tr>

      <td>{{$user->username}} </td>

      <td>{{$user->purchases}} </td>

      <td>{{$user->balance}} </td>



    </tr>

</tbody>

</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
