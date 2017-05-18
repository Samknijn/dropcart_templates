<?php
/**
 * @author     DropCart <info@dropcart.nl>
 * @copyright  2017  DropCart
 * @license    https://creativecommons.org/licenses/by-nc-nd/3.0/legalcode.txt  CreativeCommons by-nc-nd-3.0
 */
?>

<nav>
    <ul class="nav nav-justified">
        <li class="no">
            <a href="<?= route('home', ['locale' => loc()]); ?>">
                <b class="glyphicon glyphicon-home"></b>
            </a>
        </li>
        
                @forelse ($DropCart->getCategories() as $category)
        <li>
            <a href="{{ route('products_by_category', [
                    'locale' => loc(),
                    'category_name' => str_slug($category['name']),
                    'category_id' => $category['id']
            ]) }}" class="category-link" title="{{ $category['description'] }}">
                {{ $category['name'] }}
            </a>
        </li>
        @empty
            <li style="text-align: center; font-weight: bold">&nbsp;&nbsp;{{ lang('no_categories') }}</li>
        @endforelse
        
        <li>
            <form class="form-horizontal" method="get" action="<?= route('products_by_query', ['locale' => loc()]); ?>">
                @if (isset($selected_brands))
                    @foreach($selected_brands as $key => $selected_brand)
                        <input type="hidden" name="brands[{{$key}}]" value="{{$selected_brand}}" />
                    @endforeach
                @endif
                <div class="form-group" style="margin: 0 -15px;">
                    <div class="col-sm-12">
                        
                        <div class="search input-group" data-initialize="search" role="search" style="height: 100%;">
                            <input id="query" name="query" class="form-control"
                                   placeholder="{{ lang('search_placeholder') }}" type="search"
                                   value="{{(isset($query) ? $query : '')}}" style="height: 50px;">
                            <span class="input-group-btn">
		        <button class="btn btn-default" type="submit" style="height: 50px;">
		          <span class="glyphicon glyphicon-search"></span>
		          <span class="sr-only">{{ lang('search') }}</span>
		        </button>
		      </span>
                        </div>

                    </div>
                </div>
            </form>
        </li>
        
    </ul>
</nav>
