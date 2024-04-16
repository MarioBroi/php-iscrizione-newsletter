<?php

/**
 * Check if the email is typed correctly
 */
function checkEmail($mail)
{
    if (str_contains($mail, "@") && str_contains($mail, ".")) {
        return true;
    }
    return  false;
};

/**
 * Generates alert message
 */
function generateAlert($response)
{
    if ($response) {
        return [
            'status' => 'success',
            'text' => 'Congratulazioni! Ti sei iscritto'
        ];
    }
    return  [
        'status' => 'danger',
        'text' => 'Attenzione! Email errata'
    ];
}