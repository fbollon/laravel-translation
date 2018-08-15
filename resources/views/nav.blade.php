<nav class="header">

    <h1 class="text-lg px-6">{{ config('app.name') }}</h1>

    <ul class="flex-grow justify-end pr-2">
        <li>
            <a href="{{ route('languages.index') }}" class="{{ set_active('') }}">
                @include('translation::icons.globe')
                {{ __('translation::translation.languages') }}
            </a>
        </li>
        <li>
            <a href="{{ route('languages.translations.index', config('app.locale')) }}" class="{{ set_active('*/translations') }}">
                @include('translation::icons.translate')
                {{ __('translation::translation.translations') }}
            </a>
        </li>
    </ul>
    

    {{--<li>
        <select>
            @foreach($languages as $language)
                <option>{{ $language }}</option>
            @endforeach
        </select>
    </li>
    <li>
        <select>
            @foreach($groups as $group)
                <option>{{ $group }}</option>
            @endforeach
        </select>
    </li>
    <li>{{ $language }}</li>
    <li>{{ $file }}</li>--}}

</nav>