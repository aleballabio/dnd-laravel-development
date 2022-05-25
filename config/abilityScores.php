<?php
$abilityScores_content = file_get_contents(__DIR__ . '/abilityScores.json');
$abilityScores = json_decode($abilityScores_content);

return array_map(function ($abilityScores) {
    return [
        "index" => $abilityScores->index,
        "name" => $abilityScores->name,
        "full_name" => $abilityScores->full_name,
        "desc" => $abilityScores->desc,
    ];
}, $abilityScores);