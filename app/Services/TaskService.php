<?php

namespace App\Services;

class TaskService {

    public function getWordCounts(string $text, int $wordsCount): array {
        $codeWatch = array_merge(
            ['-', '"', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_'],
            [';', "'", '+', '{', '}', '|', ':', '"', '<', '>', '?', '[', ']'],
            [',', '.', '/', '', '~', '`', '=']
        );

        $newText = str_replace($codeWatch, '', $text);
        $newText = preg_replace("/[0-9]/", "", $newText);

        $wordArray = preg_split(
            '/\s+/u',
            $newText,
            null,
            PREG_SPLIT_NO_EMPTY
        );

        $wordArray = array_count_values($wordArray);
        arsort($wordArray);

        return array_slice($wordArray, 0, $wordsCount);
    }
}
