<div>

    <div class="">
        <div class="submit-field">
            <h5>Kategorija</h5>
            <select name="category_id" wire:model="selectedCategory" class="with-border">
                <option value="" selected>Choose country</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedCategory))
    <div class="">
        <div class="submit-field">
            <h5>Subkategorija</h5>
            <select name="subcategory_id" wire:model="selectedSubcategory" class="with-border">
                <option value="" selected>Choose state</option>
                @foreach($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    @endif

   @if (!is_null($selectedSubcategory))
   <div class="">
        <div class="submit-field">
            <h5>Subkategorija</h5>
            <select wire:model="selectedSubsubcategory" class="with-border" name="subsubcategory_id">
                <option value="" selected>Choose city</option>
                @foreach($subsubcategories as $subsubcategory)
                    <option value="{{ $subsubcategory->id }}">{{ $subsubcategory->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    @endif

</div>
