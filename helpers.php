<?php

define('MAX_QUESTION_NUMBER', 5);

function retrieve_questions() {
    // 1. Open the triviaquiz.json file (kept in the same folder as the php files)
    $json_string = file_get_contents(__DIR__ . "/triviaquiz.json");

    // 2. Convert it the array
    $json_data = json_decode($json_string, true);

    // 3. Return the trivia questions array data
    return $json_data;
}

function compute_score($answers = []) {
    $correct_answers = get_answers();

    $score = 0;
    for ($i = 0; $i < MAX_QUESTION_NUMBER; $i++) {
        if (isset($answers[$i]) && $correct_answers[$i] == $answers[$i]) {
            $score += 100;
        }
    }
    return $score;
}

function get_answers() {
    $questions = retrieve_questions();
    return $questions['answers'];
}
