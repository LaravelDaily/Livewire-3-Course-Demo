<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use App\Livewire\Forms\ProductsForm;

class ProductsCreate extends Component
{
    use WithFileUploads;

    public ProductsForm $form;
//    #[Rule('required|min:3')]
//    public string $name = '';
//    #[Rule('required|min:3')]
//    public string $description = '';
//    #[Rule('required|exists:categories,id', as: 'category')]
//    public int $category_id;
    public Collection $categories;

    public function mount(): void
    {
        $this->categories = Category::pluck('name', 'id');
    }

    public function save(): void
    {
        $this->form->save();
        $this->redirect('/products');
    }

    public function render(): View
    {
        return view('livewire.products-create');
    }
}
