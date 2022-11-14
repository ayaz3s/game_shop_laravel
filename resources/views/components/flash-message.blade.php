@if(session()->has('success'))
    <div
        x-data="{show: true}"
        x-init="setTimeout(()=> show = false, 3000)"
        x-show="show"
        class="w-100"
        style="position: fixed; top: 70px; z-index: 9999">
        <div class="text-white" style="margin-left: auto; margin-right: auto; width: 40%; background-color: #0e832f;">
            <p class="text-center py-3">{{ session('success') }}</p>
        </div>
    </div>
@endif

@if(session()->has('error'))
    <div
        x-data="{show: true}"
        x-init="setTimeout(()=> show = false, 3000)"
        x-show="show"
        class="w-100"
        style="position: fixed; top: 70px; z-index: 9999">
        <div class="text-white bg-danger" style="margin-left: auto; margin-right: auto; width: 40%;">
            <p class="text-center py-3">{{ session('error') }}</p>
        </div>
    </div>
@endif

