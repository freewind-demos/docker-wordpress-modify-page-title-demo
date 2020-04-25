<?php

add_filter('document_title_parts', function ($title_parts) {
    print('### $title_parts:' . JSON_ENCODE($title_parts));
    $title = $title_parts['title'];
    $title_parts['title'] = $title . '(Modified)';
    return $title_parts;
});

