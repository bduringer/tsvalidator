<?php

namespace Ts\Tsvalidator;
use DateTime;

class Validator
{
    public function isEmail($input)
    {
        $check = filter_var($input, FILTER_VALIDATE_EMAIL);
        if ($check) {
            return true;
        } else {
            return false;
        }
    }

    public function isNumeric($input)
    {
        $check = filter_var($input, FILTER_VALIDATE_INT);
        if ($check) {
            return true;
        } else {
            return false;
        }
    }

    public function isAlphabetical($input)
    {
        $check = ctype_alpha($input);
        if ($check) {
            return true;
        } else {
            return false;
        }
    }

    public function hasMinLength($input, $minLength)
    {
        if (strlen($input) >= $minLength) {
            return true;
        } else {
            return false;
        }
    }

    public function hasMaxLength($input, $maxLength)
    {
        if (strlen($input) <= $maxLength) {
            return true;
        } else {
            return false;
        }
    }

    public function isDate($input, $format = 'Y-m-d')
    {
        $date = DateTime::createFromFormat($format, $input);
        if ($date && $date->format($format) === $input) {
            return true;
        } else {
            return false;
        }
    }

    public function isStrongPassword($password, $length = 8)
    {
        $requirementsMet = true;

        if (strlen($password) < $length) {
            $requirementsMet = false;
        }

        if (!preg_match('/[A-Z]/', $password)) {
            $requirementsMet = false;
        }

        if (!preg_match('/[a-z]/', $password)) {
            $requirementsMet = false;
        }

        if (!preg_match('/[0-9]/', $password)) {
            $requirementsMet = false;
        }

        if (!preg_match('/[!@#$%^&*()_-]/', $password)) {
            $requirementsMet = false;
        }

        return $requirementsMet;
    }

    public function isValidName($input)
    {
        if (!preg_match('/^([a-zA-Z\s-]+)( [a-zA-Z\s-]+)?$/', $input)) {
            return false;
        } else {
            return true;
        }
    }

    public function isValidAddress($input)
    {
        if (!preg_match('/^([a-zA-Z0-9\s-]+)\s([a-zA-Z\s]+)\s([a-zA-Z]{2})\s([0-9]{5})$/', $input)) {
            return false;
        } else {
            return true;
        }
    }

    public function __call($method, $args)
    {
        if (method_exists($this, $method)) {
            return $this->{$method}(...$args);
        } else {
            throw new \BadMethodCallException("Method $method does not exist");
        }
    }
}
