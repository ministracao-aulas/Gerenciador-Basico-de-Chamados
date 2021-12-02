@extends('layouts.app')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Striped Table</h4>
                <p class="card-description"> Add class <code>.table-striped</code> </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Título </th>
                                <th> Usuário </th>
                                <th> Aberto por </th>
                                <th> Atendente </th>
                                <th> Ações </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chamados as $chamado)
                                <tr>
                                    <td class="py-1">
                                        {{ $chamado->id }}
                                    </td>
                                    <td> Herman Beck </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td> $ 77.99 </td>
                                    <td> May 15, 2015 </td>
                                    <td> May 15, 2015 </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
