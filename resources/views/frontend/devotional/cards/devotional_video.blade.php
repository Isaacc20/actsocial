<div class="position-relative devotional-video-preview bg-black overflow-hidden" style="width: {{ $width ?? '100%' }}">
    <video id="devotionalVideo" src="{{ asset($source ?? 'assets/frontend/videos/TLOOOD.MP4') }}" title="Devotional Preview video" class="w-100 h-100" autoplay muted playsinline preload="auto" >                </video>
    <button id="playButton" class="position-absolute top-0 bottom-0 left-0 right-0 text-white bg-transparent border-none p-0 m-0 fs-h1" style="z-index: 10; font-size: 100px"><i class="fa fa-play-circle"></i></button>
</div>