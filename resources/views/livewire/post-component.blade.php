<div>
    <div class="col-sm-12 col-md-12 mt-3">
        <div class="container p-4 bg-light rounded" style="max-width: 600px;">
            <h2 class="mb-4 text-center">Add Products</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form wire:submit.prevent="storeproducts" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="picture" class="form-label">Picture</label>
                    <input type="file" wire:model="picture" class="form-control" id="picture">
                </div>
                <div class="mb-3">
                    <label for="productType" class="form-label">Category</label>
                    <select class="form-select" wire:model="product_type" id="productType"
                        onchange="updateCategories()">
                        <option value="home">Home</option>
                        <option value="men">Men</option>
                        <option value="women">Women</option>
                        <option value="stationary">Stationary</option>
                        <option value="banners">Banners</option>
                        <option value="others">Others</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="category" class="form-label">Type</label>
                    <select class="form-select" wire:model="category" id="category">
                        <!-- Options for categories will be dynamically updated based on the product type selection -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" wire:model="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" wire:model="price" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="serialNo" class="form-label">Serial No.</label>
                    <input type="text" wire:model="serial_no" class="form-control" id="serialNo">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" wire:model="quantity" class="form-control" id="quantity" min="1"
                        value="1">
                </div>
                <button type="submit" class="btn btn-dark">Add to Inventory</button>
            </form>
        </div>
    </div>
    {{-- The best athlete wants his opponent at his best. --}}
</div>
