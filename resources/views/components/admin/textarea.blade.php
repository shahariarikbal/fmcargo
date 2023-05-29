<textarea {{ $attributes->merge(['class' => 'form-control']) }}>{{ $value ?? $slot }}</textarea>
