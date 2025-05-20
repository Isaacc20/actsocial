<a href="{{ route('devotional_categories', ['category' => $category['title']]) }}" class="dev-category-card d-flex align-items-center justify-content-center rounded-3 cursor-pointer" style="background-color: {{ $category['color'] }}">
    <span class="fw-500">{{ $category['title'] }}</span>
</a>