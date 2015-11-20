<?php

require './src/Entry.php';

$entries = portfolio\Entry::getAllEntries();

if ($entries == NULL) {
    // Go to 503
} else {
    // Display Page 
}

$entry = portfolio\Entry::getEntryById($entries, "iconify");

if ($entry == NULL) {
    /// Go to 404
} else {
    // Display page
}

var_dump($entries);
