<?php

class UserSettings
{
    private $user;
    private $userAuth;

    public function __construct(User $user, UserAuth $userAuth)
    {
        $this->user = $user;
        $this->userAuth = $userAuth;
    }

    public function change(array $settings)
    {
        if ($this->userAuth->verify()) {
            //
        }
    }
}

class UserAuth
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function verify(): bool
    {
        //
    }
}
