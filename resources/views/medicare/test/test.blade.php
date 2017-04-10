@extends('layouts.main-layout')

@section('content-header', 'Test Page')

@section('content')

    <script src="/js/product.js"></script>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Medicine</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <div class="panel-body">
                <input type="text" class="form-control" id="product_serach_input" data-action="filter" data-filters="#dev-table" placeholder="Search .." onkeypress="return runScript(event)" />
            </div>

            <table class="table table-hover " id="product-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Drugs For</th>
                    <th>Brand Name</th>
                    <th>Manufacturer</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>

                @php
                    $count = 1;
                @endphp

                @foreach($products as $product)

                    <tr>
                        <td><a href="#">{{$count++}}</a></td>
                        <td>{{$product->Drugs_For}}</td>
                        <td>{{$product->Brand_Name}}</td>
                        <td>{{$product->Manufacturer}}</td>
                        <td><button type="button" class="btn btn-default" data-toggle="modal"
                                    data-target="#product_detail" onclick="details_box('{{$product->id}}', '{{$product->Drugs_For}}', '{{$product->Drug_Class}}', '{{$product->Brand_Name}}', '{{$product->Contains}}', '{{$product->Dosage_Form}}', '{{$product->Manufacturer}}', '{{$product->Price}}')">Details</button></td>
                    </tr>
                @endforeach

                </tbody>

                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Drugs For</th>
                    <th>Brand Name</th>
                    <th>Manufacturer</th>
                    <th></th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

    <div class="">
        <div class="col-lg-12 col-lg-offset-4">
            {{ $products->appends(Request::only('filter'))->links() }}
        </div>
    </div>


@endsection
