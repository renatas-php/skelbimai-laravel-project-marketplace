<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\SubSubcategory;

class CategoriesDropdown extends Component
{   
    public $categories;
    public $subcategories;
    public $subsubcategories;

    public $selectedCategory = null;
    public $selectedSubcategory = null;
    public $selectedSubsubcategory = null;

    public function mount($selectedSubsubcategory = null)
    {
        $this->categories = Category::all();
        $this->subcategories = collect();
        $this->subsubcategories = collect();
        $this->selectedSubsubcategory = $selectedSubsubcategory;

        
    }

    public function render()
    {
        return view('livewire.categories-dropdown');
    }

    public function updatedSelectedCategory($category)
    {
        $this->subcategories = Subcategory::where('category_id', $category)->get();
        $this->selectedSubcategory = NULL;
    }

    public function updatedSelectedSubcategory($subcategories)
    {
        if (!is_null($subcategories)) {
            $this->subsubcategories = SubSubCategory::where('subcategory_id', $subcategories)->get();
        }
    }
}
