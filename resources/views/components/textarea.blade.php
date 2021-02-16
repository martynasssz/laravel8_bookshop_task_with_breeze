@props(['value' => '']) {{-- value --}}

<textarea {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>{{ $value }}</textarea> {{-- transter value from create.blade.php textarea :value="old('description')" --}}