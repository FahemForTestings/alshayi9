@extends('layout')
@section('title', 'Create new product')
@section('content')
  <div class="container">
    <form action="/products" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Product SKU</label><br/>
        <input type="text" name="product_sku" id="product_sku" class="form-control">
      </div><br/>

      <div class="form-group">
        <label for="title">Product Name</label><br/>
        <input type="text" name="product_name" id="product_name" class="form-control">
      </div><br/>


      <div class="form-group">
        <label for="body">Product Short Description</label><br/>
        <textarea type="text" name="product_short_description" id="product_short_description" class="form-control" cols="30" rows="10"></textarea>
      </div><br/>

      <div class="form-group">
        <label for="body">Product Full Description</label><br/>
        <textarea type="text" name="product_full_description" id="product_full_description" class="form-control" cols="30" rows="10"></textarea>
      </div><br/>

      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="title">Product Category</label><br/>
            <input type="text" name="product_category_id" id="product_category_id" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product Tags</label><br/>
            <input type="text" name="product_tags" id="product_tags" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product Attributes</label><br/>
            <input type="text" name="product_attributes" id="product_attributes" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product Price</label><br/>
            <input type="number" name="product_price" id="product_price" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product Promo Price</label><br/>
            <input type="number" name="product_promo_price" id="product_promo_price" class="form-control">
          </div><br/>
        </div>
      </div>
      
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="title">Product Stock Value</label><br/>
            <input type="number" name="product_stock" id="product_stock" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product Brand</label><br/>
            <input type="text" name="product_brand" id="product_brand" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product Weight</label><br/>
            <input type="number" name="product_weight" id="product_weight" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product Height</label><br/>
            <input type="number" name="product_height" id="product_height" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product Width</label><br/>
            <input type="number" name="product_width" id="product_width" class="form-control">
          </div><br/>
        </div>
      </div>
      
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="title">Product Length</label><br/>
            <input type="number" name="product_length" id="product_length" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product Status</label><br/>
            <input type="text" name="product_status" id="product_status" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product Featured</label><br/>
            <input type="text" name="product_featured" id="product_featured" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product Has Variation</label><br/>
            <input type="text" name="product_has_variation" id="product_has_variation" class="form-control">
          </div><br/>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="title">Product product Image Src</label><br/>
            <input type="text" name="product_image_src" id="product_image_src" class="form-control">
          </div><br/>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    @endsection