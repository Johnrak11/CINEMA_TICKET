<?php
function urlIs(string $value) :bool
{
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $value;
}
