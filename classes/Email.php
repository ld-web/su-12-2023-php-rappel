<?php

class Email
{
    /**
     * Creates a new email instance
     *
     * @param string $email
     * @throws InvalidArgumentException if email is not valid
     */
    public function __construct(
        private string $email
    ) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidArgumentException("Email incorrect");
        }
    }
}
