{{--<div class="devotional-audio-preview w-100 d-flex flex-column justify-content-center py-4 px-5 bg-white">--}}
{{--    <div class="d-flex flex-column gap-4">--}}
{{--        <span class="fw-400">Introduction to faith for finances</span>--}}
{{--        <audio class="w-100" src="" controls></audio>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        --}}
{{--    </div>--}}
{{--</div>--}}

<div class="devotional-audio-preview bg-white p-4 d-flex flex-column gap-4 shadow-sm" style="width: {{ $width ?? '100%' }}">
    <span class="fw-400 fs-4">Introduction to faith for finances</span>

    <div class="h-75 w-100 d-flex flex-column align-items-center justify-content-center gap-2">
        {{-- Progress Bar --}}
        <div class="w-100 d-flex justify-content-between px-1 text-primary small fw-semibold">

            <span id="currentTime">0:00</span>

            <div class="w-75 progress bg-secondary" style="height: 6px; cursor: pointer;">
                <div id="progressBar" class="position-relative progress-bar bg-primary h-100 w-25" role="progressbar" >
{{--                    <div class="position-absolute bottom-0 bg-primary" style="height: 20px; width: 10px; top: 0; bottom: 0; right: 0; z-index: 100"></div>--}}
                </div>
            </div>

            <span id="duration">0:00</span>

        </div>

        {{-- Control Buttons --}}
        <div class="w-50 d-flex justify-content-around gap-5 pt-3">
            <button id="rewind15" class="btn btn-link text-primary fs-3 p-0">
                <img src="{{ asset('assets/frontend/images/devotional/skip_back_icon.svg') }}" alt="">
            </button>

            <button id="playPauseBtn" class="btn btn-link text-primary p-0">
                <i class="fas fa-play" style="font-size: 60px"></i>
            </button>

            <button id="forward15" class="btn btn-link text-primary fs-3 p-0">
{{--                <i class="fas fa-redo"></i><span class="small d-block">15</span>--}}
                <img src="{{ asset('assets/frontend/images/devotional/skip_forward_icon.svg') }}" alt="">
            </button>
        </div>

        {{-- Hidden Audio --}}
        <audio id="customAudio" src="{{ asset('assets/frontend/audio/sample.mp3') }}"></audio>
    </div>
</div>
