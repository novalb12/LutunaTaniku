@extends('layout.layout')
@section('konten')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">	
				<div class="col-md-3 tampilproduk">
					<center>
						<img id="item-display" src="{{asset('image/'.$barang->imgfile)}}" alt=""></img>
					</center>
				</div>
					
				<div class="col-md-7">
					<div class="product-title">{{$barang->productname}}</div>
                    <div class="product-desc">{{$barang->description}}</div>
                    <div class="product-desc">{{$barang->username}}</div>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<hr>
					<div class="product-price">{{$barang->harga}}</div>
					<div class="product-stock">In Stock</div>
					<hr>
					<div class="btn-group cart">
						<button type="button" class="btn btn-success">
							Add to cart 
						</button>
					</div>
					<div class="btn-group wishlist">
						<button type="button" class="btn btn-danger">
							Add to wishlist 
						</button>
					</div>
				</div>
			</div> 
		</div>
        <div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>
						
					</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade in active" id="service-one">
				<section class="container product-info">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.            
                    <h3>{{$barang->productname}} Features:</h3>
					<li>Uwaw</li>
					<li>wawu</li>
					</section>
										  
			</div>
		</div>
	</div>
</div>
@endsection


