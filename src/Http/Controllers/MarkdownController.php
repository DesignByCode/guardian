<?php


namespace DesignByCode\Guardian\Http\Controllers;

class MarkdownController
{
    public function index()
    {
        $files = scandir(__DIR__ . '/../../../');

        return view('guardian::markdown.index', compact('files'));
    }

    public function show($file)
    {
        $content = file_get_contents(__DIR__ . '/../../../' . $file);

        return view('guardian::markdown.show', compact('content'));
    }
}
