<?php
$proficiencies_content = file_get_contents(__DIR__ . '/proficiencies.json');
$proficiencies = json_decode($proficiencies_content);

return array_map(function ($proficiencies) {
    return [
        "index" => $proficiencies->index,
        "name" => $proficiencies->name,
        "type" => $proficiencies->type,
        "reference" => $proficiencies->reference,
    ];
}, $proficiencies);
