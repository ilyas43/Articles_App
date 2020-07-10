<form action="/products" method="POST">
    <div class="row">
        <div class="offset-1 col-11">
            <input type="text" class="form-control" name="name" placeholder="product name">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="offset-1 col-11">
            <input type="text" class="form-control" name="price" placeholder="product price">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="offset-1 col-11">
            <input type="text" class="form-control" name="model" placeholder="device model">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="offset-1 col-11">
            <input type="text" class="form-control" name="color" placeholder=" device color">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="offset-1 col-11">
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">categories</label>
                        <select id="category" name="category" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="pc">pc</option>
                            <option value="tablet">tablet</option>
                            <option value="smartphone">smartphone</option>
                        </select>
                </div>
            </div>
        </div>
    </div>
     

    <br>
    <div class="row">
        <div class="offset-5 col">
            <button type="submit" class="btn btn-warning">ADD</button>
        </div>
    </div>
    @csrf
</form>


