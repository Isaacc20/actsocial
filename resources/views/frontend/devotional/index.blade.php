<div class="d-flex flex-column w-100" style="gap: 50px">

    @include('frontend.devotional.cards.verse-of-the-day')

    <div class="d-flex flex-column" style="gap: 32px">

        <div class="position-relative w-100 d-flex flex-column gap-2">
            <div class="d-flex justify-content-between align-content-center">
                <span class="fw-500 fs-4">Your Devotionals</span>
                <a class="fw-500 fs-6" href="{{ route('saved_devotionals') }}">View all</a>
            </div>
            <div class="scroll-x flex-shrink-0 w-100 d-flex gap-3" id="savedDevotionals">
                @foreach($active_devotionals as $devotional)
                    @include('frontend.devotional.cards.active_devotional_card', ['devotional', $devotional])
                @endforeach
            </div>
            <button class="scroll-btn left" onclick="scrollDevotionals('left', 'savedDevotionals')">
                <i class="fa fa-chevron-left"></i>
            </button>
            <button class="scroll-btn right" onclick="scrollDevotionals('right', 'savedDevotionals')">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>

        <div class="position-relative w-100 d-flex flex-column gap-2">
            <div class="d-flex justify-content-start">
                <span class="fw-500 fs-4">Recommendations</span>
            </div>
            <div class="scroll-x flex-shrink-0 w-100 d-flex gap-3" id="recommendedDevotionals">
                @foreach($devotionals as $devotional)
                    @include('frontend.devotional.cards.devotional_card', ['devotional', $devotional])
                @endforeach
            </div>

            <button class="scroll-btn left" onclick="scrollDevotionals('left', 'recommendedDevotionals')">
                <i class="fa fa-chevron-left"></i>
            </button>
            <button class="scroll-btn right" onclick="scrollDevotionals('right', 'recommendedDevotionals')">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>

        <div class="position-relative w-100 d-flex flex-column" style="gap: 20px">

            <div class="d-flex justify-content-start">
                <span class="fw-500 fs-4">Categories</span>
            </div>

            <div class="scroll-x flex-shrink-0 w-100 d-flex gap-3" id="devotionalCategories">
                @foreach($categories as $category)
                    @include('frontend.devotional.cards.category_card', ['category' => $category])
                @endforeach
            </div>

            <button class="scroll-btn left" onclick="scrollDevotionals('left', 'devotionalCategories')">
                <i class="fa fa-chevron-left"></i>
            </button>
            <button class="scroll-btn right" onclick="scrollDevotionals('right', 'devotionalCategories')">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>

    </div>

</div>


<script>
    function scrollDevotionals(direction, id) {
        const container = document.getElementById(id);
        const scrollAmount = container.offsetWidth * 0.8; // scroll 80% of visible area
        container.scrollBy({
            left: direction === 'right' ? scrollAmount : -scrollAmount,
            behavior: 'smooth'
        });
    }
</script>