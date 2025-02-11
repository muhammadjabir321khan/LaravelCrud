<?php

namespace App\Helpers;

function pagination($paginator)
{
    return [
        'current_page' => $paginator->currentPage(),
        'from' => $paginator->firstItem(),
        'last_page' => $paginator->lastPage(),
        'path' => $paginator->url(1),
        'per_page' => $paginator->perPage(),
        'to' => $paginator->lastItem(),
        'total' => $paginator->total(),
    ];
}