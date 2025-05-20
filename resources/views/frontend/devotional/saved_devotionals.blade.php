

<div class="min-vh-75 d-flex flex-column justify-content-between gap-4">
    <div>
        <div class="d-flex justify-content-between align-items-center">
            <a href="#" onclick="history.back(); return false;">< Devotionals</a>
            <div class="d-flex gap-3">
                @foreach($status_btn as $btn)
                    <a href="{{ $btn['action'] }}" class="{{ $btn['status'] ? 'bg-primary text-white' : 'bg-white text-primary' }} rounded-3 py-1 px-3 border-1 border-primary" onclick="{{ $btn['action'] }}">{{ $btn['text']  }}</a>
                @endforeach
            </div>
        </div>
        <div class="py-30 ">
            <span class="fw-500 text-xl">Your Devotionals</span>
            <hr>
        </div>
        <div class="d-flex flex-wrap gap-3 w-100">
            @foreach($devotionals as $devotional)
                @include('frontend.devotional.cards.active_devotional_card', ['devotional', $devotional])
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-stretch gap-2">
        <button onclick="" class="border-none rounded-circle bg-primary px-3 py-1 text-white">1</button>
{{--        <button onclick="" class="border-none rounded-circle bg-white px-3 py-1 text-primary">2</button>--}}
{{--        <button onclick="" class="border-none rounded-circle bg-white px-3 py-1 text-primary">3</button>--}}
{{--        <button onclick="" class="border-none rounded-circle bg-white px-3 py-1 text-primary">4</button>--}}
{{--        <button onclick="" class="border-none rounded-circle bg-white px-3 py-1 text-primary">5</button>--}}
{{--        <button onclick="" class="border-none rounded-circle bg-white px-3 py-1 text-primary">6</button>--}}
    </div>
</div>