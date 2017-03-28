@extends('layouts.app')

@section('content')

    <!-- Scripts -->
    <script src="/js/product.js"></script>

    <!-- product details Modal -->
    <div class="modal fade" id="product_detail" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content product">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Product</h4>
                </div>
                <div class="modal-body">
                    <!-- all the content here-->

                    <div class="">
                        <div class="card">
                            <div class="container-fliud">
                                <div class="wrapper row">
                                    <div class="preview col-md-6">

                                        <div class="preview-pic tab-content">
                                            <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
                                            <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                                            <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                                            <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                                            <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
                                        </div>


                                    </div>
                                    <div class="details col-md-6">
                                        <h3 class="product-title">Default Title</h3>
                                        <div class="rating">
                                            <span class="review-no">41 reviews</span>
                                        </div>
                                        <p class="product-description">This is description</p>
                                        <h4 class="price">current price: <span id="product_price">$180</span></h4>
                                        <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>

                                        <h5 class="sizes">Drugs For :
                                            <span class="size" data-toggle="tooltip" title="small"
                                                  id="product_drugs_for"></span>
                                        </h5>

                                        <h5 class="sizes">Drug Class :
                                            <span class="size" data-toggle="tooltip" title="small">this is demo this
                                                is demo</span>
                                        </h5>

                                        <h5 class="sizes">Brand Name :
                                            <span class="size" data-toggle="tooltip" title="small">this is demo this
                                                is demo</span>
                                        </h5>

                                        <h5 class="sizes">Contains :
                                            <span class="size" data-toggle="tooltip" title="small">this is demo this
                                                is demo</span>
                                        </h5>

                                        <h5 class="sizes">Dosage Form :
                                            <span class="size" data-toggle="tooltip" title="small">this is demo this
                                                is demo</span>
                                        </h5>

                                        <h5 class="sizes">Manufacturer :
                                            <span class="size" data-toggle="tooltip" title="small">this is demo this
                                                is demo</span>
                                        </h5>



                                        <div class="action">
                                            <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--
                    <button type="button" id="course_update" class="btn btn-default" data-dismiss="modal">Save</button>
                -->
                </div>
            </div>

        </div>
    </div>
    <!-- end Modal -->


    <div class="container">
        <h1>Product </h1>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Medicine</h3>
                        <div class="pull-right">

                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
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

                        @foreach($products as $product)

                            <tr>
                                <td><a href="#">{{$product->id}}</a></td>
                                <td>{{$product->Drugs_For}}</td>
                                <td>{{$product->Brand_Name}}</td>
                                <td>{{$product->Manufacturer}}</td>
                                <td><button type="button" class="btn btn-default" data-toggle="modal"
                                            data-target="#product_detail" onclick="alert('hi');">Details</button></td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        <div class="">
            <div class="col-lg-12 col-lg-offset-4">
                {{ $products->appends(Request::only('filter'))->links() }}
            </div>
        </div>


    </div>
@endsection
