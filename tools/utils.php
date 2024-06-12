<?php

function dump(mixed $data): void
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function dd(mixed $data): void
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    exit();
}
