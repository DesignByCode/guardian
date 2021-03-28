<x-guardian-layout type="dashboard" title="Markdown">

    <x-slot name="scripts">

    </x-slot>

    <div class="grid">
        <aside class="bg--default-light p-5 pt-7">
            <h4>Markdown files</h4>
            <ul>
                @foreach($files as $file)
                    @if(substr($file, 0,1) !== '.')
                        <li>
                            <a href="{{route('guardian.markdown.show', $file)}}">{{ $file }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </aside>
        <div class="wrapper--fluid">
            <div class="row">
                <div class="md-col-12">
                    <h1 class="m-0">Markdown</h1>
                </div>
            </div>
            <div class="row">
                <div class="md-col-12">

                </div>
            </div>
        </div>
    </div>


</x-guardian-layout>


