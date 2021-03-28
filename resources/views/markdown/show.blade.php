<x-guardian-layout type="dashboard" title="Markdown">


    <x-slot name="scripts">

    </x-slot>

    <div class="grid">
        <aside class="bg--default-light p-5 pt-7">

        </aside>
        <div class="wrapper--fluid">
            <div class="row">
                <div class="md-col-12 markdown-body octicon">
                    @php
                        $environment = new \League\CommonMark\Environment();
                        $environment->addExtension(new \League\CommonMark\Extension\CommonMarkCoreExtension());
                        $parse = new \League\CommonMark\DocParser($environment);
                        $html = new \League\CommonMark\HtmlRenderer($environment);
                        $document = $parse->parse($content);
                    @endphp
                        {!! $html->renderBlock($document) !!}

{{--                    {!! (new League\CommonMark\CommonMarkConverter([--}}
{{--                        'html_input' => 'strip',--}}
{{--                        'allow_unsafe_links' => false,--}}
{{--                    ]))->convertToHtml($content) !!}--}}
                </div>
            </div>
        </div>
    </div>

</x-guardian-layout>

