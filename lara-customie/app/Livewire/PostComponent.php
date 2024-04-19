<?php

namespace App\Livewire;

use Illuminate\Support\Facades\File;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;

class PostComponent extends Component
{
    use WithFileUploads;

    public $product_type;
    public $category;
    public $picture;
    public $name;
    public $price;
    public $serial_no;
    public $quantity;
    public function render()
    {
        return view('livewire.post-component');
    }
    public function storeproducts()
    {
        $Product = new Product();
        if ($this->category === null && $this->product_type === 'home') {
            $this->category = 'cups';
        }
        if ($this->category === null && $this->product_type === 'men') {
            $this->category = 'shirts';
        }
        if ($this->category === null && $this->product_type === 'women') {
            $this->category = 'wshirts';
        }
        if ($this->category === null && $this->product_type === 'stationary') {
            $this->category = 'pen';
        }
        if ($this->category === null && $this->product_type === 'banners') {
            $this->category = 'birthdays';
        }
        if ($this->category === null && $this->product_type === 'others') {
            $this->category = 'keychains';
        }
        $Product->product_catagory = $this->product_type;
        $Product->product_type = $this->category;

        // $imagePath = $this->picture->getClientOriginalName();
        // $this->picture->move(public_path('products'), $imagePath);

        $imagePath = $this->picture->hashName();
        // dd($this->picture);
        $Product->picture = $this->picture->storePubliclyAs('products', $imagePath, 'public');


        $Product->name = $this->name;
        $Product->price = $this->price;
        $Product->serial_no = $this->serial_no;
        $Product->quantity = $this->quantity;
        $Product->save();
        $sourcePath = 'C:/xampp/htdocs/CustomieLarav/lara-customie/public/storage/products/' . $imagePath;
        // dd($sourcePath);
        $destinationPath = 'C:/xampp/htdocs/CustomieLarav/lara-customie/public/products/';

        // Move the file
        File::move($sourcePath, $destinationPath . $imagePath);

        session()->flash('success', 'Product saved successfully.');
        $this->reset();
    }

}
