<?php
function render($template, array $variables = [])
{

    $template = str_replace('/', '\\', $template);
    $template = str_replace('\\', DIRECTORY_SEPARATOR, $template);
    $template = ltrim($template, DIRECTORY_SEPARATOR);
    $template = rtrim($template, DIRECTORY_SEPARATOR);
    $template = getcwd() . DIRECTORY_SEPARATOR . $template;

    if (!file_exists($template) || !is_file($template))
        die("Template {$template} not found");

    if ($variables)
        foreach ($variables as $variable => $value)
            $$variable = $value;

    include $template;
}


function tag($name, array $attributes = [], $body = null, $selfClosing = false)
{
    $selfClosed = [
        'area', 'base', 'br', 'embed', 'hr', 'iframe',
        'img', 'input', 'link', 'meta', 'param', 'source', 'track'
    ];
    $selfClosing = in_array($name, $selfClosed) || $selfClosing;

    $tag = "<{$name}";
    $fAttr = function ($attr, $value = null) {
        // <a disabled
        $result = "";
        if (is_string($attr))
            $result = $attr;
        if (is_string($attr) && $value)
            $result .= '=';
        if ($value)
            $result .= "\"{$value}\"";

        return $result;
    };
    foreach ($attributes as $attribute => $value) {
        $tag .= " " . $fAttr($attribute, $value);
    }

    return $tag . ($selfClosing ? " />" : ">{$body}</{$name}>");
}