<div class="col-md-6">
    <div class="header-search">
    <form action="{{route('include.search')}}">
            <select class="input-select">
                <option value="0" a href="{{route('include.store')}}">All Categories</option>
                <option value="1"></option>
            </select>
        <input type="text" name="q" class="input" placeholder="Rechercher ici" value="{{ request()->q ?? '' }}">
            <button type="submit" class="search-btn">Rechercher</button>
        </form>
    </div>
</div>
